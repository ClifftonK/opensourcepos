<?php
require_once ("Secure_area.php");

class Home extends Secure_area 
{
	function __construct()
	{
		parent::__construct();	
	}
	
	public function index()
	{
		$this->load->view("home");
	}
	
	public function logout()
	{
		$this->Employee->logout();
	}
}
?>