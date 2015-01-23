<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauths extends CI_Controller {

	public function __construct()
   {
        parent::__construct();
       	$this->load->library('ion_auth');
       	$uri = end($this->uri->segments);
       	if($uri == ''){$page_class = 'home';}else{$page_class = $uri;}

       	$this->load->vars(
            array(
            // This session data is set on login in the /auth/login controller/method	
			'firstname' => $this->session->userdata('user_firstname'),
			'page_class' => $page_class
			)
        );
        
        //print_r( $this->session->all_userdata() );
   }

	public function index()
	{
        redirect('/');
	}
    
    public function import_linkedin()
    {
        $this->load->model('user_model');
        $user = $this->session->flashdata('linkedin_data');
        $user_id = $this->session->userdata('user_id');
        if( ! empty($user) )
        {
            // Insert Profile data
            $user_profile_data = array('firstname' => $user['first-name'], 'lastname' => $user['last-name']);
            $this->user_model->insert_user_profile_data($user_profile_data, $user_id);
            
            // Insert Email Address
            $this->user_model->insert_user_email($user['email-address']);
            
            // Insert Phone Numbers
            if($user['phone-numbers']['attributes']['total'] >= 1)
            {
                foreach($user['phone-numbers']['phone-number'] as $phone)
                {
                    $data = array('phone_type' => $phone['phone-type'], 'number' => $phone['phone-number'] );
                    $this->user_model->insert_phone_number($data, $user_id);
                }
            }
            
            // Insert Skills
            if( $user['skills']['attributes']['total'] >= 1 )
            {
                foreach($user['skills']['skill'] as $skill)
                {
                    $this->user_model->insert_user_skills($skill['skill'], $user_id);
                }
            }
            
            // Insert Educations / Schools
            if($user['educations']['attributes']['total'] >= 1)
            {
                foreach($user['educations']['education'] as $school)
                {
                    $data = array( 'school' => $school['school-name'], 'degree' => $school['degree'], 'degree_type' => $school['field-of-study'], 'year_graduated' => $school['end-date'] );
                    $this->user_model->insert_user_school($data, $user_id);
                }
                
            }
            
            // Insert Positions / Companies
            if($user['positions']['attributes']['total'] >= 3)
            {
                foreach($user['positions']['position'] as $company)
                {
                    $data = array('company' => $company['company']['name'],'title' => $company['title'], 'start_date' => $company['start-date']['year'] );
                    if($company['is-current'] == false ){
                        $data['end_date'] = $company['end-date']['year'];
                    }
                    $this->user_model->insert_user_company($data, $user_id);
                }
            }
        }
    }
    
    public function linkedin()
    {
        $this->load->spark('oauth/0.3.1');
        
        $config['key'] = '77p3vty81s3ys8';
        $config['secret'] = 'mGruszx4CwNlhmbA';
        $provider = 'linkedin';

        // Create an consumer from the config
        $consumer = $this->oauth->consumer(array(
            'key' => $config['key'],
            'secret' => $config['secret'],
        ));

        // Load the provider
        $provider = $this->oauth->provider($provider);

        // Create the URL to return the user to
        //$callback = site_url('account/services/callback/'.$provider->name);
        $callback = site_url('oauth/linkedin');
        
        //if ( ! $this->input->get_post('oauth_token'))
        if( ! $this->session->userdata('oauth_token'))
        {
            // Add the callback URL to the consumer
            $consumer->callback($callback); 

            // Get a request token for the consumer
            $token = $provider->request_token($consumer);

            // Store the token
            $this->session->set_userdata('oauth_token', base64_encode(serialize($token)));

            // Get the URL to the twitter login page
            $url = $provider->authorize($token, array(
                'oauth_callback' => $callback,
            ));

            // Send the user off to login
            redirect($url);
        }
        else
        {
            if ($this->session->userdata('oauth_token'))
            {
                // Get the token from storage
                $token = unserialize(base64_decode($this->session->userdata('oauth_token')));
            }

            if ( ! empty($token) AND $token->access_token !== $this->input->get_post('oauth_token'))
            {   
                // Delete the token, it is not valid
                $this->session->unset_userdata('oauth_token');

                // Send the user back to the beginning
                exit('invalid token after coming back to site');
            }

            // Get the verifier
            $verifier = $this->input->get_post('oauth_verifier');

            // Store the verifier in the token
            $token->verifier($verifier);

            // Exchange the request token for an access token
            $token = $provider->access_token($consumer, $token);

            // We got the token, let's get some user data
            $user = $provider->get_user_info($consumer, $token);


            // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
            // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
            /*print_r( $this->session->all_userdata() );
            
            echo "<pre>Tokens: ";
            print_r($token).PHP_EOL.PHP_EOL;

            echo "User Info: ";*/
            print_r($user);
            exit();
            //Send data to auth/social_register()
            $user_data = array(
                'first_name' =>  $user['first-name'],
                'last_name'  =>  $user['last-name'],
                'email'      =>  $user['email-address']
            );
            $this->load->library('curl');
            $this->load->library('ion_auth');
            
            //NEED TO SAVE LINKEDIN USER DATA TO DB
            
            if($this->ion_auth->email_check($user['email-address']))
            {
                //Login the user
                $this->session->set_flashdata( 'email', $user['email-address'] );
                redirect('auth/login/1');
            }
            else
            {
                //register user account and login
                if($response = $this->curl->simple_post('auth/social_register', $user_data))
                {

                    if($response == 'Account creation successful.')
                    {
                        //Login the user
                        $this->session->set_flashdata( 'email', $user['email-address'] );
                        redirect('auth/login/1');

                    }
                    else
                    {
                        $this->session->set_flashdata('message', $response);
                        redirect( $this->session->userdata('current_uri') );
                    }
                }
            }
        }
    }
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */