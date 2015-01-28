<?php

class user_model extends CI_Model{

	function get_all_users()
	{
		$this->db->select('*');
		$this->db->from('auth_users');
		$query = $this->db->get();
		return $query->result();
	}

	function get_user_by_email($email) // Login email
	{
		$this->db->select('*');
		$this->db->from('auth_users user');
		$this->db->where("user.email = $email");
		$query = $this->db->get();
		return $query->result();
	}

	function get_users_by_group($group_name)
	{
		$this->db->select('user.*, agrp.name as group_name');
		$this->db->from('auth_users user, auth_groups agrp, auth_users_groups ug');
		$this->db->where("agrp.name = $group_name");
		$this->db->where('agrp.id = ug.group_id');
		$this->db->where('user.id = ug.user_id');
		$query = $this->db->get();
		return $query->result();
	}

	function get_all_users_profile_info()
	{
		$this->db->select('*');
		$this->db->from('auth_users user, user_profiles upro');
		$this->db->where('user.id = upro.user_id');
		$query = $this->db->get();
		return $query->result();
	}
    
    function get_user_profile_info_by_user_id($user_id)
    {
        $this->db->select('user_profiles.*, user_contact.*, user_emails.email, user_phone_numbers.number');
        $this->db->from('user_profiles, user_contact, user_emails, user_phone_numbers');
        $this->db->where("user_profiles.user_id = $user_id");
        $this->db->where("user_contact.user_id = $user_id");
        $this->db->where("user_emails.user_id = $user_id");
        $this->db->where("user_phone_numbers.user_id = $user_id");
        $query = $this->db->get();
        return $query->result_array();
    }

	function get_all_user_profile_info_by_user_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('auth_users user, user_profiles upro');
		$this->db->where("user.id = $user_id");
		$this->db->where('user.id = upro.user_id');
		$query = $this->db->get();
		return $query->result();
	}

	function get_all_user_info_by_id()
	{
		$this->db->select('*');
		$this->db->from('auth_users user');
		$this->db->join('user_profiles upro', 'upro.user_id = user.id');
		$this->db->join('user_contact ucon', 'ucon.user_id = user.id');
		$this->db->join('user_emails uema', 'uema.user_id = user.id');
		$this->db->join('user_phone_numbers upho', 'upho.user_id = user.id');
		$this->db->join('user_social usoc', 'usoc.user_id = user.id');
		$this->db->join('user_companies ucom', 'ucom.user_id = user.id');
		$this->db->join('user_company_duties udut', 'udut.user_id = user.id');
		$this->db->join('user_profiles upro', 'upro.user_id = user.id');
		$this->db->join('user_schools usch', 'usch.user_id = user.id');
		$this->db->join('user_skills uski', 'uski.user_id = user.id');
		$query = $this->db->get();
		return $query->result();
	}

	function get_user_contact_info_by_user_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_contact ucon');
		$this->db->join('user_emails uema', 'uema.user_id = ucon.user_id');
		$this->db->join('user_phone_numbers upho', 'upho.user_id = ucon.user_id');
		$this->db->join('user_social usoc', 'usoc.user_id = ucon.user_id');
		$this->db->where("ucon.user_id = $user_id");
		$query = $this->db->get();
		return $query->result();
	}
    
    function get_user_email_and_phone_by_user_id()
    {
        $this->db->select('user_emails.email, user_phone_numbers.number');
        $this->db->from('user_emails, user_phone_numbers');
        $this->db->where("user_emails.user_id = $user_id");
        $this->db->where("user_phone_numbers.user_id = $user_id");
        $query = $this->db->get();
        return $query->result();
    }

	function get_user_resume_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_companies ucom, user_company_duties udut, user_schools usch, user_skills uski');
		$this->db->where("ucom.user_id = $user_id");
		$this->db->where('udut.user_id = ucom.user_id');
		$this->db->where('usch.user_id = ucom.user_id');
		$this->db->where('uski.user_id = ucom.user_id');
		$query = $this->db->get();
		return $query->result();
	}
    
    function set_user_account_type($account_type_id, $user_id)
    {

        $insert_data = array(
            'user_id'           => $user_id,
            'account_type_id'   => $account_type_id
        );

        $insert = $this->db->insert('user_users_account_type', $insert_data);

        return $insert;
    }
    
    function update_user_account_type($account_type_id, $user_id)
    {
        $data = array(
            'account_type_id' => $account_type_id
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_users_account_type', $data); 
    }
    
    function insert_user_profile_data($data, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');
        
        $insert_data = array(
            'user_id'        => $user_id,
            'firstname'      => $data['firstname'],
            'lastname'       => $data['lastname'],
            'middle_initial' => (isset($data['middle_initial']) ? $data['middle_initial'] : ''),
            'nickname'       => (isset($data['nickname']) ? $data['nickname'] : ''),
            'salutation'     => (isset($data['salutation']) ? $data['salutation'] : ''),
            'suffix'         => (isset($data['suffix']) ? $data['suffix'] : ''),
            'birth_date'     => (isset($data['birth_date']) ? $data['birth_date'] : ''),
            'created_at'     => $created
        );

        $insert = $this->db->insert('user_profiles', $insert_data);
        
        return $insert;
    }
    
    function insert_user_contact_data($data, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $insert_data = array(
            'user_id'      => $user_id,
            'address'      => (isset($data['address']) ? $data['address'] : ''),
            'address_2'    => (isset($data['address_2']) ? $data['address_2'] : ''),
            'city'         => (isset($data['city']) ? $data['city'] : ''),
            'state'        => (isset($data['state']) ? $data['state'] : ''),
            'postal_code'  => (isset($data['postal_code']) ? $data['postal_code'] : ''),
            'country'      => (isset($data['country']) ? $data['country'] : ''),
            'created_at'   => $created
        );

        $insert = $this->db->insert('user_contact', $insert_data);

        return $insert;
    }
    
    function insert_user_email($email, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $insert_data = array(
            'user_id'     => $user_id,
            'email_type'  => 'home',
            'email'       => $email,
            'created_at'  => $created
        );

        $insert = $this->db->insert('user_emails', $insert_data);

        return $insert;
    }
    
    function insert_user_phone($data, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $insert_data = array(
            'user_id'     => $user_id,
            'phone_type'  => $data['phone_type'],
            'number'       => $data['number'],
            'created_at'  => $created
        );

        $insert = $this->db->insert('user_phone_numbers', $insert_data);

        return $insert;
    }
    
    function insert_user_skill($skill, $user_id)
    {
        $insert_data = array(
            'user_id'     => $user_id,
            'skill'  => $skill
        );

        $this->db->insert('user_skills', $insert_data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function insert_user_school($data, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $insert_data = array(
            'user_id'        => $user_id,
            'school'         => $data['school'],
            'degree'         => $data['degree'],
            'degree_type'    => (isset($data['degree_type'])? $data['degree_type'] : ''),
            'year_graduated' => (isset($data['year_graduated']) ? $data['year_graduated'] : ''),
            'gpa'            => (isset($data['gpa']) ? $data['gpa'] : ''),
            'created_at'     => $created
        );

        $this->db->insert('user_schools', $insert_data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function insert_user_company($data, $user_id)
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $insert_data = array(
            'user_id'            => $user_id,
            'company'            => $data['company'],
            'address'            => (isset($data['address']) ? $data['address'] : ''),
            'address_2'          => (isset($data['address_2']) ? $data['address_2'] : ''),
            'city'               => (isset($data['city']) ? $data['city'] : ''),
            'state'              => (isset($data['state']) ? $data['state'] : ''),
            'postal_code'        => (isset($data['postal_code']) ? $data['postal_code'] : ''),
            'title'              => (isset($data['title']) ? $data['title'] : ''),
            'start_date'         => (isset($data['start_date']) ? $data['start_date'] : ''),
            'end_date'           => (isset($data['end_date']) ? $data['end_date'] : ''),
            'parent_company'     => (isset($data['parent_company']) ? $data['parent_company'] : ''),
            'department'         => (isset($data['department']) ? $data['department'] : ''),
            'division'           => (isset($data['division']) ? $data['division'] : ''),
            'work_type'          => (isset($data['work_type']) ? $data['work_type'] : ''),
            'currently_employed' => (isset($data['currently_employed']) ? $data['currently_employed'] : ''),
            'created_at'    => $created
        );

        $this->db->insert('user_companies', $insert_data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function linkedin_data_imported($user_id)
    {
        $data = array(
            'linkedin_data_import' => 1
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profiles', $data); 
    }

////////////////////////////
// EXAMPLE MODELS (delete)
///////////////////////////

/*
	
	function get_approved_agents_profile_info_by_ids($user_str, $limit = null, $start = null, $order = null, $search = '')
	{
	
		if($order == 'Alphabetical'){
			$sql = "SELECT uacc.uacc_id, uacc.uacc_email, upro.*, uprox.*, (SELECT COUNT(recommendation) FROM agent_recommendations arec WHERE arec.user_id = uacc.uacc_id AND arec.active = 1) as rec_count FROM user_accounts uacc, user_profiles upro, user_profiles_agent_extra uprox WHERE uacc.uacc_group_fk = 2 AND uacc.uacc_id = upro.upro_uacc_user_id AND uacc.uacc_id = uprox.uprox_uacc_user_id AND uprox.uprox_approved = '1' AND uacc.uacc_id IN ($user_str) ORDER BY upro.upro_first_name ASC";
		}elseif($order == 'Recommendations'){
			$sql = "SELECT uacc.uacc_id, uacc.uacc_email, upro.*, uprox.*, (SELECT COUNT(recommendation) FROM agent_recommendations arec WHERE arec.user_id = uacc.uacc_id AND arec.active = 1) as rec_count FROM user_accounts uacc, user_profiles upro, user_profiles_agent_extra uprox WHERE uacc.uacc_group_fk = 2 AND uacc.uacc_id = upro.upro_uacc_user_id AND uacc.uacc_id = uprox.uprox_uacc_user_id AND uprox.uprox_approved = '1' AND uacc.uacc_id IN ($user_str) ORDER BY rec_count DESC";
		}else{
			$sql = "SELECT uacc.uacc_id, uacc.uacc_email, upro.*, uprox.*, (SELECT COUNT(recommendation) FROM agent_recommendations arec WHERE arec.user_id = uacc.uacc_id AND arec.active = 1) as rec_count FROM user_accounts uacc, user_profiles upro, user_profiles_agent_extra uprox WHERE uacc.uacc_group_fk = 2 AND uacc.uacc_id = upro.upro_uacc_user_id AND uacc.uacc_id = uprox.uprox_uacc_user_id AND uprox.uprox_approved = '1' AND uacc.uacc_id IN ($user_str) ORDER BY FIELD (uacc.uacc_id, $user_str)";
		}

		if($limit){
			if($start){
				$start = ($start - 1) * $limit;  
				$sql = $sql . " LIMIT $start" . ', ' . " $limit";
			}else{
				$sql = $sql . " LIMIT 0, $limit";
			}
		}

		$query = $this->db3->query($sql);
		return $query->result();
	}


	function insert_user_zipcode($zip, $user_id)
	{
		
		$data = array(
			'uzips_zipcode' => $zip,
			'uzips_uacc_user_id' => $user_id
		);

		$insert = $this->db3->insert('user_zipcodes', $data);
		return $insert;
	}

	function delete_user_zipcode($zip, $user_id)
	{
		$this->db3->where('uzips_uacc_user_id', $user_id);
		$this->db3->where('uzips_zipcode', $zip);

		$delete = $this->db3->delete('user_zipcodes'); 
		return $delete;
	}

	function get_user_ids_by_zipcodes($zips)
	{
		$query = $this->db3->query("SELECT uzips_uacc_user_id as user_id, uzips_zipcode as zipcode FROM user_zipcodes WHERE uzips_zipcode IN ($zips)");
		return $query->result_array();
	}

	function insert_agent_recommendation($rec, $user_id)
	{
		
		$data = array(
			'recommendation' => $rec['recommendation'],
			'address' => $rec['address'],
			'user_id' => $rec['user_id'],
			'active' => $rec['active'],
			'date_in' => $rec['date'],
			'client_last_name' => $rec['client_last_name'],
			'client_first_name' => $rec['client_first_name'],
			'service' => $rec['service']
		);

		$insert = $this->db3->insert('agent_recommendations', $data);
		return $insert;
	}
	
	function insert_agent_contact($data, $user_id)
	{
		
		$insert_data = array(
			'first_name' => $data['first_name'],
			'message' => $data['message'],
			'user_id' => $user_id,
			'last_name' => $data['last_name'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'date_in' => $data['date']
		);

		$insert = $this->db3->insert('agent_contact', $insert_data);
		return $insert;
	}
    
   */

}