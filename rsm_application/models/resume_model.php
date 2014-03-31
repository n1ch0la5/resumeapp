<?php

class user_model extends CI_Model{

	function get_resume_by_user_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('resumes');
		$this->db->where("resumes.user_id = $user_id");
		$query = $this->db->get();
		return $query->result();
	}

	function get_resume_sections($resume_id)
	{
		// This needs more work. Res_resume_sections needs to join custom sections and default sections some how. (look at budgeter app)
		$this->db->select('rsec.section, usec.section, rsec.order as def_order, usec.order as cus_order');
		$this->db->from('res_sections rsec');
		$this->db->join('res_resume_sections res_sec' 'res_sec.resume_id = rsec.resume_id');
		$this->db->join('res_user_custom_sections usec' 'usec.resume_id = rsec.resume_id');
		$this->db->where("res_sec.resume_id = $resume_id");
		$query = $this->db->get();
		return $query->result();
	}
}