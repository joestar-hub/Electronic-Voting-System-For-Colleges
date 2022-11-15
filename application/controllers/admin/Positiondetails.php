<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Positiondetails extends CI_Controller {

	 
	public function index($page)
	{





		session_start();
if(empty($_SESSION["adminid"])|| !isset($_SESSION["adminid"])){
redirect("adminlogin");

}

else{

  $adminid=$_SESSION["adminid"];
}


$data["adminid"]=$adminid;



        $twilo=$this->db->escape_str($page);

//now work from the database
$mirror=$this->db->query("SELECT * FROM `candidate` WHERE `position_id`='$twilo'");

$reader=$mirror->result();
$data["amen"]=$reader;




		$this->load->view('admin/positiondetails',$data);


	}
}
