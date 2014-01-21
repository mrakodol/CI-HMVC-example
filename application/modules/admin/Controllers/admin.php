<?php
/*
Author: Stojan Kukrika
Date: 01/21/14
Version: 1.0
*/

class Admin extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->load->module("users");
		
		if(!$this->users->_is_admin()){
			show_404();
		}
		
	}
	
	function index(){
		$data['main_content'] = 'dashboard';
		$this->load->view('page', $data);
	}
		
}

?>