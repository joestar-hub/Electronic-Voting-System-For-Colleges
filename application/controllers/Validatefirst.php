<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validatefirst extends CI_Controller {

	 
	public function index()
	{
		
		$this->load->view('voter/validatefirst');
	}

public function process(){
 $jambno=$this->db->escape_str($this->input->post("jambno"));

 $spirit=$this->db->query("SELECT * FROM voter WHERE jambno='$jambno'");

$counter=$spirit->num_rows();

if($counter<=0){

    redirect("validatefirst?code=error");
    die();
}

else{

$data["result"]=$spirit->result();
$data["type"]="set";

$this->load->view("voter/validatefirst",$data);
}




}






public function validate(){

    $tel=$this->db->escape_str($this->input->post("tel"));
    $jambno=$this->db->escape_str($this->input->post("jambno"));

    $amanda=$this->db->query("SELECT * FROM voter WHERE jambno='$jambno' AND phone='$tel'");


    $counter=$amanda->num_rows();

    if($counter<=0){


        redirect("validatefirst?code=error2");
        die();
    }



    else{
session_start();
 
    $_SESSION["validated"]="yes";
redirect("login?code=keno");



    }


}




}
