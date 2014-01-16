<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
   {
        parent::__construct();
       
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

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */