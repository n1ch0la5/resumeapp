<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_erezzy extends CI_Migration {

	public function up()
	{

		// Erezzy DB Tables

		// Drop table 'user_profile' if it exists		
		$this->dbforge->drop_table('user_profiles');

		// Table structure for table 'user_profiles'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'firstname' => array(
				'type' => 'VARCHAR',
				'constraint' => '50'
			),
			'lastname' => array(
				'type' => 'VARCHAR',
				'constraint' => '50'
			),
			'middle_initial' => array(
				'type' => 'VARCHAR',
				'constraint' => '1'
			),
			'nickname' => array(
				'type' => 'VARCHAR',
				'constraint' => '30'
			),
			'salutation' => array(
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'suffix' => array(
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'birth_date' => array(
				'type' => 'VARCHAR',
				'constraint' => '20'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_profiles');

		// Dumping data for table 'user_profiles'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'firstname'	=> 'Jack',
				'lastname' => 'Juniper',
				'middle_initial' => 'J',
				'nickname' => 'Jumpin Jack Juniper',
				'salutation' => 'Mr.',
				'suffix' => 'Jr.',
				'birth_date' => '12/25/1985',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_profiles', $data);

		// Drop table 'user_contact' if it exists
		$this->dbforge->drop_table('user_contact');

		// Table structure for table 'user_contact'
		// Dropped Spent row: should create another table to keep track of spends
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'address' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'address_2' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'city' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'state' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'postal_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'country' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			/*'amount' => array(
				'type' => 'DECIMAL',
				'constraint' => '10,2'
			),*/
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_contact');

		// Dumping data for table 'user_contact'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'address' => '123 Main St.',
				'address_2' => 'Unit 1',
				'city' => 'Midtown',
				'state' => 'Virginia',
				'postal_code' => '12345',
				'country' => 'USA',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		
		$this->db->insert_batch('user_contact', $data);

		// Drop table 'expense_categories' if it exists		
		$this->dbforge->drop_table('user_social');

		// Table structure for table 'expense_categories'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'social_type' => array(
				'type' => 'VARCHAR',
				'constraint' => '50'
			),
			'url' => array(
				'type' => 'VARCHAR',
				'constraint' => '250'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_social');

		// Dumping data for table 'user_social'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'social_type' => 'LinkedIn',
				'url' => 'https://linkedin.com/jackjuniper/',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_social', $data);

		// Drop table 'user_phone_numbers' if it exists		
		$this->dbforge->drop_table('user_phone_numbers');

		// Table structure for table 'user_phone_numbers'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'phone_type' => array(
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'number' => array(
				'type' => 'VARCHAR',
				'constraint' => '25'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_phone_numbers');

		// Dumping data for table 'user_phone_numbers'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'phone_type' => 'cell',
				'number' => '555-555-5555',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_phone_numbers', $data);

		// Drop table 'user_emails' if it exists		
		$this->dbforge->drop_table('user_emails');

		// Table structure for table 'user_emails'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'email_type' => array(
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_emails');

		// Dumping data for table 'user_emails'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'email_type' => 'home',
				'email' => 'jumpinjack@aol.com',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_emails', $data);

		// Drop table 'user_companies' if it exists		
		$this->dbforge->drop_table('user_companies');

		// Table structure for table 'user_companies'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'company' => array( 
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'address' => array( 
				'type' => 'VARCHAR',
				'constraint' => '75'
			),
			'address_2' => array( 
				'type' => 'VARCHAR',
				'constraint' => '50'
			),
			'city' => array( 
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'state' => array( 
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'postal_code' => array( 
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'title' => array( 
				'type' => 'VARCHAR',
				'constraint' => '75'
			),
			'start_date' => array( 
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'end_date' => array( 
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'parent_company' => array( 
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'department' => array( 
				'type' => 'VARCHAR',
				'constraint' => '50'
			),
			'division' => array( 
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'work_type' => array( //Contract Assignment, Permanent Assignment
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'currently_employed' => array(
				'type' => 'INT',
				'constraint' => '1'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_companies');

		// Dumping data for table 'user_companies'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'company' => 'Acme Widgets',
				'address' => '125 Main St.',
				'address_2' => 'Suite 23',
				'city' => 'Midtown',
				'state' => 'Virginia',
				'postal_code' => '12345',
				'title' => 'Mr. Manager',
				'start_date' => '3/12/2009',
				'parent_company' => 'Disney',
				'department' => 'Operations',
				'division' => '',
				'work_type' => 'Permanent Assignment',
				'currently_employed' => '1',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_companies', $data);

		// Drop table 'user_company_duties' if it exists		
		$this->dbforge->drop_table('user_company_duties');

		// Table structure for table 'user_company_duties'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'company_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'duty' => array(
				'type' => 'TEXT'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_company_duties');

		// Dumping data for table 'user_company_duties'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'company_id' => '1',
				'duty' => 'Developed a management style that consists of awesomeness that is revered across the entire office.'
			),
			array(
				'id' => '2',
				'user_id' => '2',
				'company_id' => '1',
				'duty' => 'Brought bagels for the office once a week for 5 years.'
			)
		);
		$this->db->insert_batch('user_company_duties', $data);

		// Drop table 'user_schools' if it exists		
		$this->dbforge->drop_table('user_schools');

		// Table structure for table 'user_schools'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'school' => array(
				'type' => 'VARCHAR',
				'constraint' => '250'
			),
			'degree' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'degree_type' => array(
				'type' => 'DECIMAL',
				'constraint' => '10,2'
			),
			'year_graduated' => array( // debit or credit
				'type' => 'VARCHAR',
				'constraint' => '4'
			),
			'gpa' => array( // debit or credit
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_schools');

		// Dumping data for table 'user_schools'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'school' => 'Brown University',
				'degree' => 'Bachelors',
				'degree_type' => 'Business Administration',
				'year_graduated' => '2009',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('user_schools', $data);

		// Drop table 'user_skills' if it exists		
		$this->dbforge->drop_table('user_skills');

		// Table structure for table 'user_skills'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'skill' => array(
				'type' => 'VARCHAR',
				'constraint' => '250'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user_skills');

		// Dumping data for table 'user_skills'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'skill' => 'Managing'
			),
			array(
				'id' => '2',
				'user_id' => '1',
				'skill' => 'Bringing Food'
			)
		);
		$this->db->insert_batch('user_skills', $data);

		// Drop table 'resumes' if it exists		
		$this->dbforge->drop_table('resumes');

		// Table structure for table 'resumes'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'template_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('resumes');

		// Dumping data for table 'resumes'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '2',
				'template_id' => '1',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('resumes', $data);

		// Drop table 'res_sections' if it exists		
		$this->dbforge->drop_table('res_sections');

		// Table structure for table 'res_sections'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'section' => array( // debit or credit
				'type' => 'VARCHAR',
				'constraint' => '10'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('res_sections');

		// Dumping data for table 'res_sections'
		$data = array(
			array(
				'id' => '1',
				'section' => 'contact',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '2',
				'section' => 'experience',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '3',
				'section' => 'education',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '4',
				'section' => 'skills',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '5',
				'section' => 'references',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '6',
				'section' => 'objective',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '7',
				'section' => 'career_summary',
				'created_at' => date('Y-m-d H:i:s')
			),
			array(
				'id' => '8',
				'section' => 'cover_letter',
				'created_at' => date('Y-m-d H:i:s')
			)
		);
		$this->db->insert_batch('res_sections', $data);

		// Drop table 'res_user_custom_sections' if it exists		
		$this->dbforge->drop_table('res_user_custom_sections');

		// Table structure for table 'res_user_custom_sections'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE
			),
			'section' => array(
				'type' => 'VARCHAR',
				'constraint' => '250'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('res_user_custom_sections');

		// Drop table 'res_templates' if it exists		
		$this->dbforge->drop_table('res_templates');

		// Table structure for table 'res_templates'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'template_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'file_path' => array(
				'type' => 'VARCHAR',
				'constraint' => '250'
			),
			'created_at' => array(
				'type' => 'DATETIME'
			),
			'updated_at' => array(
				'type' => 'TIMESTAMP'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('res_templates');

		//ION AUTH SPECIFIC TABLES

		// Drop table 'groups' if it exists		
		$this->dbforge->drop_table('auth_groups');

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('auth_groups');

		// Dumping data for table 'groups'
		$data = array(
			array(
				'id' => '1',
				'name' => 'admin',
				'description' => 'Administrator'
			),
			array(
				'id' => '2',
				'name' => 'members',
				'description' => 'General User'
			)
		);
		$this->db->insert_batch('auth_groups', $data);


		// Drop table 'users' if it exists
		$this->dbforge->drop_table('auth_users');

		// Table structure for table 'users'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'ip_address' => array(
				'type' => 'VARBINARY',
				'constraint' => '16'
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '80',
			),
			'salt' => array(
				'type' => 'VARCHAR',
				'constraint' => '40'
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'activation_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'forgotten_password_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'forgotten_password_time' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'remember_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'created_on' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
			),
			'last_login' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'active' => array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE
			),
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE
			),
			'company' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE
			),
			'phone' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE
			)

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('auth_users');

		// Dumping data for table 'users'
		$data = array(
			array(
				'id' => '1',
				'ip_address' => 0x7f000001,
				'username' => 'administrator',
				'password' => '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4',
				'salt' => '9462e8eee0',
				'email' => 'admin@admin.com',
				'activation_code' => '',
				'forgotten_password_code' => NULL,
				'created_on' => '1268889823',
				'last_login' => '1268889823',
				'active' => '1',
				'first_name' => 'Admin',
				'last_name' => 'istrator',
				'company' => 'ADMIN',
				'phone' => '0'
			),
			array(
				'id' => '2',
				'ip_address' => 0x7f000002,
				'username' => 'jjuniper',
				'password' => '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4',
				'salt' => '9462e8eee0',
				'email' => 'jumpinjack@aol.com',
				'activation_code' => '',
				'forgotten_password_code' => NULL,
				'created_on' => '1268889823',
				'last_login' => '1268889823',
				'active' => '1',
				'first_name' => 'Jack',
				'last_name' => 'Juniper',
				'company' => 'Acme Widgets',
				'phone' => '555-555-5555'
			)
		);
		$this->db->insert_batch('auth_users', $data);


		// Drop table 'users_groups' if it exists		
		$this->dbforge->drop_table('auth_users_groups');

		// Table structure for table 'users_groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE
			),
			'group_id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('auth_users_groups');

		// Dumping data for table 'users_groups'
		$data = array(
			array(
				'id' => '1',
				'user_id' => '1',
				'group_id' => '1',
			),
			array(
				'id' => '2',
				'user_id' => '1',
				'group_id' => '2',
			)
		);
		$this->db->insert_batch('auth_users_groups', $data);
		

		// Drop table 'login_attempts' if it exists
		$this->dbforge->drop_table('auth_login_attempts');

		// Table structure for table 'login_attempts'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'ip_address' => array(
				'type' => 'VARBINARY',
				'constraint' => '16'
			),
			'login' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null', TRUE
			),
			'time' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('auth_login_attempts');
	}

	public function down()
	{
		$this->dbforge->drop_table('user_profiles');
		$this->dbforge->drop_table('user_contact');
		$this->dbforge->drop_table('user_social');
		$this->dbforge->drop_table('user_phone_numbers');
		$this->dbforge->drop_table('user_emails');
		$this->dbforge->drop_table('user_companies');
		$this->dbforge->drop_table('user_company_duties');
		$this->dbforge->drop_table('user_schools');
		$this->dbforge->drop_table('user_skills');
		$this->dbforge->drop_table('resumes');
		$this->dbforge->drop_table('res_sections');
		$this->dbforge->drop_table('res_user_custom_sections');
		$this->dbforge->drop_table('res_templates');
		$this->dbforge->drop_table('auth_users');
		$this->dbforge->drop_table('auth_groups');
		$this->dbforge->drop_table('auth_users_groups');
		$this->dbforge->drop_table('auth_login_attempts');
		$this->dbforge->drop_table('users');
		$this->dbforge->drop_table('groups');
		$this->dbforge->drop_table('users_groups');
		$this->dbforge->drop_table('login_attempts');
	}
}
