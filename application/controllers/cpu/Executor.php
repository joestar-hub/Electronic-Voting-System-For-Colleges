<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Executor extends CI_Controller {
 


    //voter login start here
	public function vlogin()
	{ 
session_start();


//now check it has been validated


if(!isset($_SESSION["validated"])){

redirect("validatefirst");

}
        
//connect to input and sanitize data
$phone=$this->db->escape_str($this->input->post("phone"));
$jambno=$this->db->escape_str($this->input->post("jambno"));

//default php validation

if(empty($phone)||empty($jambno))
{
redirect("login?code=error");
}
else{

$qw=$this->db->query("SELECT * FROM voter WHERE jambno='$jambno'");

$er=$qw->num_rows();

if($er<=0){
redirect("login?code=error");

}

else{

$kin=$qw->result();

foreach($kin as $row){
$phone1=$row->phone;
$voterid=$row->voter_id;

}

if($phone1==$phone){


session_start();

$_SESSION["voterid"]=$voterid;

redirect("ballotpaper");


}

else{


redirect("login?code=error");

}





}





}


	}


    //voter login end

public function vsignup()
{
    $jambno=$this->db->escape_str($this->input->post("jambno"));
    $phone=$this->db->escape_str($this->input->post("phone"));
    $name=$this->db->escape_str($this->input->post("name"));
    $alias=$this->db->escape_str($this->input->post("alias"));

    $department=$this->db->escape_str($this->input->post("department"));
    $dob=$this->db->escape_str($this->input->post("dob"));
    $gender=$this->db->escape_str($this->input->post("gender"));
    $level=$this->db->escape_str($this->input->post("level"));

$this->load->helper("string");
$this->load->helper("text");


$voter_id=random_string("alnum",18);




//php based form validation to prevent submission of empty form

if(empty($jambno)||empty($phone)||empty($name)||empty($alias)|empty($dob)||empty($gender)||empty($level)||empty($department))
{

redirect("votersignup?code=error");
exit();
}
//check if the phone number and ma


$checker=$this->db->query("SELECT * FROM voter WHERE phone='$phone'");
$find_tur=$checker->num_rows();

if($find_tur>0){
    redirect("votersignup?error=phone");
    exit();
}




//check if the matric number has been used


$checker=$this->db->query("SELECT * FROM voter WHERE jambno='$jambno'");
$find_tur=$checker->num_rows();

if($find_tur>0){
    redirect("votersignup?error=jambno");
    exit();
}






























//run database queries
$validate="No";
$ot=$this->db->query("INSERT INTO `voter`(`jambno`, `phone`,`name`, `alias`, `department`, `dob`, `gender`, `level`, `voter_id`,`validation`) VALUES ('$jambno','$phone','$name','$alias','$department','$dob','$gender','$level','$voter_id','$validate')");

if($this->db->affected_rows()){

    redirect("managevoters?info=success");


}

}




public function  newposition()
{

    $position_name=$this->db->escape_str($this->input->post("position_name"));
    $position_desc=$this->db->escape_str($this->input->post("position_desc"));
    
    $this->load->helper("string");
    $this->load->helper("text");

    $position_id=random_string("alnum",9);

    $election_status="inactive";



    $this->db->query("INSERT INTO `position`(`position_name`, `position_id`, `position_desc`, `election_status`) VALUES ('$position_name','$position_id','$position_desc','$election_status')");
if($this->db->affected_rows()){
redirect("manageposition?code=success");

}


else{

    redirect("newposition?code=error");
}








}






public function  addcandidate()
{

    $fullname=$this->db->escape_str($this->input->post("fullname"));
    $dob=$this->db->escape_str($this->input->post("dob"));
    $email=$this->db->escape_str($this->input->post("email"));
    $position=$this->db->escape_str($this->input->post("position"));
    $manifesto=$this->db->escape_str($this->input->post("manifesto"));


    //common php validation system to prevent submission of empty forms
    if(empty($fullname)||empty($dob)||empty($email)||empty($position)||empty($manifesto))
    {
redirect("addcandidate?code=error");
    }

$this->load->helper("text");
$this->load->helper("string");

$newname=random_string("alnum",10);
$goodname=$newname.".jpg";




    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;
    $config["file_name"]=$goodname;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('photograph'))
    {
          

            echo   $this->upload->display_errors();
    }
    else
    {
             
//if uploaded run database queries

$this->load->helper("text");
$this->load->helper("string");

$candidate_id=random_string("alnum",9);



$this->db->query("INSERT INTO `candidate`(`name`, `email`, `photo`, `position_id`,`manifesto`,`candidate_id`) VALUES ('$fullname','$email','$goodname','$position','$manifesto','$candidate_id')");


//if row affected go to 

if($this->db->affected_rows()){


$statusid="active";
    $aja=$this->db->query("UPDATE `position` SET `election_status`='$statusid' WHERE position_id='$position'");
    if($this->db->affected_rows())
    { 

redirect("managecandidate");
    }
}

else{

    redirect("addcandidate?code=error");
}


    }
}




public function delvoter($call){

$pure=$this->db->escape_str($call);

$this->db->query("DELETE FROM `voter` WHERE id='$pure'");

if($this->db->affected_rows())
{

redirect("managevoters?code=delsuccess");
}

else{

    redirect("managevoters?code=errdel");
}

}








public function delposit($call){

    $pure=$this->db->escape_str($call);
    
    $this->db->query("DELETE FROM `position` WHERE id='$pure'");
    
    if($this->db->affected_rows())
    {
    
    redirect("manageposition?code=delsuccess");
    }
    
    else{
    
        redirect("manageposition?code=errdel");
    }
    
    }









public function delcandi($call){

    $pure=$this->db->escape_str($call);
    
    $this->db->query("DELETE FROM `candidate` WHERE id='$pure'");
    
    if($this->db->affected_rows())
    {
    
    redirect("managecandidate?code=delsuccess");
    }
    
    else{
    
        redirect("managecandidate?code=errdel");
    }
    
    }
















 
    //admin login start here
	public function adminlogin()
	{ 
//connect to input and sanitize data
$password=$this->db->escape_str($this->input->post("password"));
$email=$this->db->escape_str($this->input->post("email"));

//default php validation

if(empty($password)||empty($email))
{
redirect("admin/login?code=error");
}
else{


$qw=$this->db->query("SELECT * FROM admin WHERE email='$email'");

$er=$qw->num_rows();

if($er<=0){
redirect("admin/login?code=error");

}

else{

$kin=$qw->result();

foreach($kin as $row){
$password1=$row->password;


}

if($password1=!$password){
redirect("login?admin/code=error");

}

else{
session_start();

$_SESSION["adminid"]="adminid";

redirect("admin");




}





}





}


	}


    //Adminlogin ends








}
