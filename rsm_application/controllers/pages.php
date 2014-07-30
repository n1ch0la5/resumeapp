<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

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

	public function test()
	{
		//Testing the erezzy app library functions
		/*$this->load->library('erezzy');
		//print_r( $this->session->all_userdata() );
		$account_type = $this->erezzy->get_account_type(1);
		$account_price = $this->erezzy->get_account_price($account_type);
		echo $account_type . ' = ' . $account_price;*/
		$this->load->model('resume_model');

		print_r($this->resume_model->get_resume_data_by_resume_id(1));
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */