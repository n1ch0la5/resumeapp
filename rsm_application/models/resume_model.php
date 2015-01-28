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
		$sections = $this->get_resume_sections_by_resume_id($resume_id);

		foreach($sections as $sect){
			if($sect == 'experience' || $sect == 'education' || $sect == 'skills')
			{
				if($sect == 'experience'){$section = 'companies';}elseif($sect == 'education'){$section = 'schools';}else{$section = $sect;}
				if($sect == 'skills')
				{
					$sk = $this->get_resume_section_data($section, $resume_id);
					$array[$sect] = array();
					foreach($sk as $s){
						array_push($array[$sect], $s['skill']);
					}
				}
				elseif($section == 'companies')
				{

					$cp = $this->get_resume_section_data($section, $resume_id);
					$i = 0;
					foreach($cp as $c){

						$array['companies'][] = $c;

						$duties = $this->get_resume_company_duties( $c['id'] );

						if(!empty($duties))
						{
							$array['companies'][$i]['duties'] = array();
							foreach($duties as $duty){
								array_push($array['companies'][$i]['duties'], $duty['duty']);
							}
						}
						$i++;
					}
				}
				else
				{
					$array[$section] = $this->get_resume_section_data($section, $resume_id);
				}
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
	function get_resume_section_data( $section, $resume_id )
	{

		switch($section){
			case 'companies':
				$singular = 'company';
				break;
			case 'schools':
				$singular = 'school';
				break;
			case 'skills':
				$singular = 'skill';
				break;
			default:
				$singular = '';
		}
		if($section == 'contact')
		{
			$this->db->select('*');
			$this->db->from('res_user_contact');
			$this->db->where("res_user_contact.resume_id = $resume_id");
		}
		elseif($section == 'skills')
		{
			$this->db->select('skill');
			$this->db->from('user_skills, res_resume_user_skills');
			$this->db->where("res_resume_user_skills.resume_id = $resume_id");
			$this->db->where("user_skills.id = res_resume_user_skills.skill_id");
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

	function get_resume_sections_by_resume_id($resume_id)
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
    
    function get_all_resume_sections()
    {
        $this->db->select('section');
        $this->db->from('res_sections');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function insert_resume_sections($section_id, $resume_id)
    {
        $data = array(
            'resume_id' => $resume_id,
            'section_id' => $section_id,
            'order' => $section_id //default order
        );

        $insert = $this->db->insert('res_resume_sections', $data);
        return $insert;
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
    
    function create_new_resume( $user_id )
    {
        date_default_timezone_set('America/New_York');
        $created = date('Y-m-d H:i:s');

        $data = array(
            'user_id' => $user_id,
            'template_id' => 1, //default
            'created_at' => $created
        );

        $insert = $this->db->insert('resumes', $data);
        
        $resume_id = $this->db->insert_id();
        
        $num_sections = count( $this->get_all_resume_sections() );
        
        for( $i=1; $i<=$num_sections; $i++)
        {
            $this->insert_resume_sections( $i, $resume_id );
        }
        
        return $insert;
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
    
    function connect_resume_skill($resume_id, $skill_id)
    {
        $data = array(
            'resume_id' => $resume_id,
            'skill_id' => $skill_id
        );

        $insert = $this->db->insert('res_resume_user_skills', $data);
        return $insert;
    }
    
    function connect_resume_school($resume_id, $school_id)
    {
        $data = array(
            'resume_id' => $resume_id,
            'school_id' => $school_id
        );

        $insert = $this->db->insert('res_resume_user_schools', $data);
        return $insert;
    }
    
    function connect_resume_company($resume_id, $company_id)
    {
        $data = array(
            'resume_id' => $resume_id,
            'company_id' => $company_id
        );

        $insert = $this->db->insert('res_resume_user_companies', $data);
        return $insert;
    }

	function delete_resume_template($template_id)
	{
		$this->db->delete('res_templates', array('id' => $template_id));
	} 
}
