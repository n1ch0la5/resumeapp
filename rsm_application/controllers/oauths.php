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
   }

	public function index()
	{
        redirect('/');
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

        if ( ! $this->input->get_post('oauth_token'))
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
            print_r( $this->session->all_userdata() );
            
            echo "<pre>Tokens: ";
            print_r($token).PHP_EOL.PHP_EOL;

            echo "User Info: ";
            print_r($user);
        }
    }
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */