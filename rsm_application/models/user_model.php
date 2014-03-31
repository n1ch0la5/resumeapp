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

	function get_user_profile_info_by_id($user_id)
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

	function get_user_contact_info($user_id)
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