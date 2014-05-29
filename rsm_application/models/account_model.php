<?php

class account_model extends CI_Model{

	function get_account_type_id($account_type)
	{
		$this->db->select('id');
		$this->db->from('user_account_types');
		$this->db->where("account_type = '$account_type'");
		$query = $this->db->get();
		return $query->result();
	}

	function get_account_type_by_user_id($user_id)
	{
		$this->db->select('uat.*');
		$this->db->from('user_account_types uat, user_users_account_type uuat');
		$this->db->where("uat.id = uuat.account_type_id");
		$this->db->where("uuat.user_id = $user_id");
		$query = $this->db->get();
		return $query->result();
	}

	function get_price_by_account_type_id( $account_type_id )
	{
		$this->db->select('option_value');
		$this->db->from('user_account_type_options as options');
		$this->db->where("options.option_name = 'price'");
		$this->db->where("options.account_type_id = $account_type_id");
		$query = $this->db->get();
		return $query->result();
	}
}