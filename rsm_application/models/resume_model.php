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

	function get_resume_data_by_resume_id($resume_id)
	{
		// return array('result' => 'Success!');
		// resume_template, sections (in the proper order), resume contact info, 
		// resume companies and company duties, res schools, 
		// that's it for now. need a db spot for objective, references, objective, career summary, cover letter.
		//$this->db->select('tpl.file_path, sec.section, rescon.*, usrcmp.company, usrcmp');
		$sections = $this->get_resume_sections($resume_id);

		foreach($sections as $sect){
			if($sect == 'experience' || $sect == 'education' || $sect == 'skills')
			{
				if($sect == 'experience'){$section = 'companies';}elseif($sect == 'education'){$section = 'schools';}else{$section = $sect;}
				$array[$section] = $this->get_resume_section_data($section, $resume_id);
			}
			if($sect == 'contact')
			{
				$sn = $this->get_resume_section_data($sect, $resume_id);
				foreach($sn as $s)
				{
					$array[$sect] = $s;
				}
			}
		}
		//$companies = $this->get_resume_section_data('companies', $resume_id);
		//$schools = $this->get_resume_section_data('schools', $resume_id);
		//print_r($array);
		
		return $array;
	}
	// For companies, schools, and skills?
	function get_resume_section_data($section, $resume_id)
	{
		if($section == 'companies'){
			$singular = 'company';
		}elseif($section == 'schools'){
			$singular = 'school';
		}elseif($section == 'skills'){
			$singular = 'skill';
		}
		if($section == 'contact')
		{
			$this->db->select('*');
			$this->db->from('res_user_contact');
			$this->db->where("res_user_contact.resume_id = $resume_id");
		}
		else
		{
			$this->db->select('user_'.$section.'.*');
			$this->db->from('user_'.$section.', res_resume_user_'.$section);
			// Need to add res_resume_user_companies table
			$this->db->where("res_resume_user_".$section.".resume_id = $resume_id");
			$this->db->where("user_".$section.".id = res_resume_user_".$section.".".$singular."_id");
		}
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_resume_sections($resume_id)
	{
		$this->db->select('section');
		$this->db->from('res_sections, res_resume_sections');
		$this->db->where("res_resume_sections.resume_id = $resume_id");
		$this->db->where("res_sections.id = res_resume_sections.section_id");
		$this->db->order_by("res_resume_sections.order", "asc");

		$query = $this->db->get();
		$sections = $query->result_array();
		foreach($sections as $section)
		{
			$array[] = $section['section'];	
		}
		return $array;
	}

	function get_resume_company_duties($company_id)
	{
		$this->db->select('duty');
		$this->db->from('user_company_duties');
		$this->db->where("company_id = $company_id");

		$query = $this->db->get();
		return $query->result_array();
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