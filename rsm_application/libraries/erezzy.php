<?php 
class Erezzy {

	public function __construct()
	{
		$this->load->model('account_model');
		//$this->load->model('resume_model');
		//$this->load->model('user_model');
	}

	public function __get($key)
	{
		$CI =& get_instance();
    	return $CI->$key;
	}

	public function get_account_type( $user_id )
	{
		$data = $this->account_model->get_account_type_by_user_id($user_id);
		return $data[0]->account_type;
	}

	public function get_account_price( $account_type )
	{
		$account_type_id = $this->account_model->get_account_type_id($account_type);
		$account_type_id = $account_type_id[0]->id;
		$data = $this->account_model->get_price_by_account_type_id($account_type_id);
		return $data[0]->option_value;
	}
}