<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
   {
        parent::__construct();
       	$this->load->library('ion_auth');
       	$uri = end($this->uri->segments);
       	if($uri == ''){$page_class = 'home';}else{$page_class = $uri;}
        $firstname = null;
        $this->session->set_userdata('current_uri', $this->uri->uri_string());
        
        if( $this->ion_auth->logged_in() )
        {
            if($this->session->userdata('user_first_name') == false)
            {
                $user = $this->ion_auth->user()->row();
                $firstname = $user->first_name;
                $this->session->set_userdata('user_firstname', $user->first_name);
            }
            else
            {
                $firstname = $this->session->userdata('user_firstname');
            }
        }

       	$this->load->vars(
            array(
            // This session data is set on login in the /auth/login controller/method	
			'firstname' => $firstname,
			'page_class' => $page_class
			)
        );
        //print_r($this->session->all_userdata());
   }

	public function index()
	{
		$data['main_content'] = 'home';
		$this->load->view('includes/template',$data);
	}

	public function about()
	{
		$data['main_content'] = 'about';
		$this->load->view('includes/template',$data);
	}

	public function examples()
	{
		$data['main_content'] = 'examples';
		$this->load->view('includes/template',$data);
	}

	public function tips()
	{
		$data['main_content'] = 'tips';
		$this->load->view('includes/template',$data);
	}
	public function builder()
	{
		$data['main_content'] = 'builder';
		$this->load->view('includes/template',$data);
	}
	public function how()
	{
		$data['main_content'] = 'how';
		$this->load->view('includes/template',$data);
	}
	public function pdf()
	{ 
	    $this->load->helper('dompdf');
		$data['main_content'] = 'pdf';
		$html = $this->load->view('includes/pdf_template',$data, true);
		pdf_create($html, 'Classic Resume');
		//$data['main_content'] = 'pdf';
		//$this->load->view('includes/pdf_template',$data);
	}

	public function executive()
	{ 
	    $this->load->helper('dompdf');
		$data['main_content'] = 'executive';
		$html = $this->load->view('includes/pdf_template',$data, true);
		pdf_create($html, 'Executive Resume');
		//$data['main_content'] = 'executive';
		//$this->load->view('includes/pdf_template',$data);
	}

	public function modern()
	{ 
	    $this->load->helper('dompdf');
		$data['main_content'] = 'modern';
		$html = $this->load->view('includes/pdf_template',$data, true);
		pdf_create($html, 'modern Resume');
		//$data['main_content'] = 'modern';
		//$this->load->view('includes/pdf_template',$data);
	}

	public function creative()
	{ 
	    $this->load->helper('dompdf');
		$data['main_content'] = 'creative';
		$html = $this->load->view('includes/pdf_template',$data, true);
		pdf_create($html, 'Creative Resume');
		//$data['main_content'] = 'modern';
		//$this->load->view('includes/pdf_template',$data);
	}

	public function tech()
	{ 
	    $this->load->helper('dompdf');
		$data['main_content'] = 'tech';
		$html = $this->load->view('includes/pdf_template',$data, true);
		pdf_create($html, 'Technology Resume');
		//$data['main_content'] = 'tech';
		//$this->load->view('includes/pdf_template',$data);
	}

	public function test()
	{
		//Testing the erezzy app library functions
		//$this->load->library('erezzy');
		print_r( $this->session->all_userdata() );
		//$account_type = $this->erezzy->get_account_type(1);
		//$account_price = $this->erezzy->get_account_price($account_type);
		//echo $account_type . ' = ' . $account_price;*/
		//$this->load->model('resume_model');
		//print_r($this->resume_model->get_resume_data_by_resume_id(1));
        //test test
        //$this->load->spark('example-spark/1.0.0');      # We always specify the full path from the spark folder
        //$this->example_spark->printHello();             # echo's "Hello from the example spark!"
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */