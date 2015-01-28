<?php 
// Linked in library for import
class LinkedIn {

	public function __construct()
	{
		$this->load->model('user_model');
        $this->load->model('resume_model');
        $user_id = $this->session->userdata('user_id');
		//$this->load->model('resume_model');
		//$this->load->model('user_model');
	}

	public function __get($key)
	{
		$CI =& get_instance();
    	return $CI->$key;
	}

	public function insert_data( $user_info, $user_id, $resume_id )
	{
        if( ! empty($user_info) )
        {
            // Insert Profile data
            $user_info_profile_data = array('firstname' => $user_info['first-name'], 'lastname' => $user_info['last-name']);
            $this->user_model->insert_user_profile_data($user_info_profile_data, $user_id);

            // Insert Email Address
            $this->user_model->insert_user_email($user_info['email-address'], $user_id);

            // Insert Phone Numbers
            if($user_info['phone-numbers']['@attributes']['total'] >= 1)
            {
                $phone = $user_info['phone-numbers']['phone-number'];
                $data = array('phone_type' => $phone['phone-type'], 'number' => $phone['phone-number'] );
                $this->user_model->insert_user_phone($data, $user_id);
            }

            // Insert Skills
            if( $user_info['skills']['@attributes']['total'] > 1 )
            {
                foreach($user_info['skills']['skill'] as $skill)
                {
                    $skill_id = $this->user_model->insert_user_skill($skill['skill']['name'], $user_id);
                    $this->resume_model->connect_resume_skill($resume_id, $skill_id);
                }
            }

            // Insert Educations / Schools
            if($user_info['educations']['@attributes']['total'] >= 1)
            {
                
                if($user_info['educations']['@attributes']['total'] == 1)
                {
                    $school = $user_info['educations']['education'];
                    $data = array( 'school' => $school['school-name'], 'degree' => $school['degree'], 'degree_type' => $school['field-of-study'], 'year_graduated' => $school['end-date']['year'] );
                    $school_id = $this->user_model->insert_user_school($data, $user_id);
                    // Connect a resume to the school
                    $this->resume_model->connect_resume_school($resume_id, $school_id);
                }
                else
                {
                    foreach($user_info['educations']['education'] as $school)
                    {
                        $data = array( 'school' => $school['school-name'], 'degree' => $school['degree'], 'degree_type' => $school['field-of-study'], 'year_graduated' => $school['end-date']['year'] );
                        $school_id = $this->user_model->insert_user_school($data, $user_id);
                        // Connect a resume to the school
                        $this->resume_model->connect_resume_school($resume_id, $school_id);
                    }
                }
            }

            // Insert Positions / Companies
            if($user_info['positions']['@attributes']['total'] >= 1)
            {
                if($user_info['positions']['@attributes']['total'] == 1)
                {
                    $company = $user_info['positions']['position'];
                    $data = array('company' => $company['company']['name'],'title' => $company['title'], 'start_date' => $company['start-date']['year'] );
                    if($company['is-current'] == false ){
                        $data['end_date'] = $company['end-date']['year'];
                    }
                    $company_id = $this->user_model->insert_user_company($data, $user_id);
                    // Connect a resume to the school
                    $this->resume_model->connect_resume_company($resume_id, $company_id);
                }
                else
                {
                    foreach($user_info['positions']['position'] as $company)
                    {
                        $data = array('company' => $company['company']['name'],'title' => $company['title'], 'start_date' => $company['start-date']['year'] );
                        if($company['is-current'] == false ){
                            $data['end_date'] = $company['end-date']['year'];
                        }
                        $company_id = $this->user_model->insert_user_company($data, $user_id);
                        // Connect a resume to the school
                        $this->resume_model->connect_resume_company($resume_id, $company_id);
                    } 
                }
                
            }
            
            return $this->user_model->linkedin_data_imported($user_id);
            
        }
	}
}