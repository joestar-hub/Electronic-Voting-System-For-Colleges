<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 
	public function index()
	{


		session_start();
if(empty($_SESSION["adminid"])|| !isset($_SESSION["adminid"])){
redirect("adminlogin");

}

else{

  $adminid=$_SESSION["adminid"];
}


$data["adminid"]=$adminid;
        $this->load->view("admin/header",$data);
		$this->load->view('admin/home');
        $this->load->view("admin/footer");
	}
}
