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
			'firstname' => $this->session->userdata('user_firstname'), // Set on login in the /auth/login controller/method
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

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */