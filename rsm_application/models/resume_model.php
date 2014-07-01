<?php

class resume_model extends CI_Model{

	function get_resumes_by_user_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('resumes');
		$this->db->where("resumes.user_id = $user_id");
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_resume_sections($resume_id)
	{
		// This needs more work. Res_resume_sections needs to join custom sections and default sections some how. (look at budgeter app)
		//$this->db->select('rsec.section, usec.section, res_sec.order as def_order, usec.order as cus_order');
		$this->db->select('rsec.section');
		$this->db->from('res_sections rsec, res_resume_sections res_sec');
		//$this->db->join('res_resume_sections res_sec', 'res_sec.section_id = rsec.id');
		//$this->db->join('res_user_custom_sections usec', 'usec.resume_id = rsec.resume_id');
		$this->db->where("res_sec.section_id = rsec.id");
		$this->db->where("res_sec.resume_id = $resume_id");
		$this->db->order_by('res_sec.order', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_resume_data_by_id($resume_id)
	{

		//return array('result' => 'Success!');
	}

	function add_resume_custom_section($section_name, $resume_id)
	{
		$data = array(
			'resume_id' => $resume_id,
			'section' => $section_name
		);
		$insert = $this->db->insert('res_user_custom_sections', $data);
		return $insert;
	}

	function delete_resume_section()//for custom and app resume sections?
	{

	}

	function get_all_resume_templates()
	{
		$this->db->select('*');
		$this->db->from('res_templates');

		$query = $this->db->get();
		return $query->result();
	}

	function get_resume_template_by_id($template_id)
	{
		$this->db->select('*');
		$this->db->from('res_templates');
		$this->db->where("id = $template_id");

		$query = $this->db->get();
		return $query->result();
	}

	function create_new_template($template_data)
	{
		date_default_timezone_set('America/New_York');
		$created = date('Y-m-d H:i:s');

		$data = array(
			'template_name' => $template_data['template_name'],
			'file_path' => $template_data['file_path'],
			'thumb_path' => $template_data['thumb_path'],
			'created_at' => $created
		);

		$insert = $this->db->insert('res_user_custom_sections', $data);
		return $insert;
	}

	function delete_resume_template($template_id)
	{
		$this->db->delete('res_templates', array('id' => $template_id));
	}

}