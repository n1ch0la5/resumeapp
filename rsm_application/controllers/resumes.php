<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Resumes extends REST_Controller {

	public function __construct()
   {
        parent::__construct();
       	/*$this->load->library('ion_auth');

       	$this->load->vars(
            array(
			'firstname' => $this->session->userdata('user_firstname') // Set on login in the /auth/login controller/method
			)
        );*/
   }

	public function index_get()
	{
		// Get resume
	}

	public function index_post()
	{
		// Create a new resume
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */