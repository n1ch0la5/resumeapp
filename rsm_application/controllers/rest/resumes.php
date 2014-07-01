<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Resumes extends REST_Controller {

	public function __construct()
   {
        parent::__construct();
        $this->load->model('resume_model');
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
		if( !$this->get('user_id') && !$this->get('id') )
        {
        	$this->response(NULL, 400);
        }

        if($this->get('user_id'))
        {
        	$resume = $this->resume_model->get_resumes_by_user_id( $this->get('user_id') );
        }
        else
        {
        	$resume = $this->resume_model->get_resume_data_by_id( $this->get('id') );
        }

        if($resume)
        {
            $this->response($resume); // 200 being the HTTP response code
        }

        else
        {
            $this->response( array('error' => 'Couldn\'t find resume!'), 404 );
        }
	}

	public function index_post()
	{
		//Jquery AJAX Example
		// http://ellislab.com/forums/viewthread/182944/
		
		// Create a new resume
		$this->resume_model->create_resume( $this->post('resume_data') );
	}

	public function index_put()
	{
		//Update resume data
		$this->resume_model->update_resume( $this->post('resume_data') );
	}

	public function index_delete()
	{
		// Delete resume
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */