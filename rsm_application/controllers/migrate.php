<?php defined("BASEPATH") or exit("No direct script access allowed");

class Migrate extends CI_Controller{

    public function index($version = null)
    {
        $this->load->library("migration");
        $this->load->helper('url');

      if( ! $this->migration->latest() )
      {
          show_error($this->migration->error_string());
      }
      else
      {
      	redirect( '/' );
      }
    }
}