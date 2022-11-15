<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ballotpaper extends CI_Controller {

 
	public function index()
	{

		session_start();
if(empty($_SESSION["voterid"])|| !isset($_SESSION["voterid"])){
redirect("login");

}

else{

  $voterid=$_SESSION["voterid"];
}

$data["voterid"]=$voterid;
		$this->load->view("voter/header",$data);
		$this->load->view('voter/ballotpaper');
		$this->load->view("voter/footer");
	}

    public function process($positionid,$voterid){

		session_start();

if(empty($_SESSION["voterid"])|| !isset($_SESSION["voterid"]))
{
redirect("login");

}

else{

  $voterid=$_SESSION["voterid"];
}

/**
 * 
 * Name: Create A Solution For to process Ballot Paper At Once
 * 
 */



$king=$this->db->escape_str($positionid);//sanitize the string
$queen=$this->db->escape_str($voterid);

$selectwhat=$this->db->escape_str($this->input->post($king));

echo "<h1>".$selectwhat."</h1>";

//now bring out the previous vote of the candidate

$sali=$this->db->query("SELECT * FROM candidate WHERE candidate_id='$selectwhat'");
$doer=$sali->result();
foreach($doer as $me){
$mainvote=$me->votes;
}

$newvote=$mainvote+1; // this is a new vote

//update database with this new votes

$this->db->query("UPDATE `candidate` SET votes='$newvote' WHERE candidate_id='$selectwhat'");

//save it in voter record if successful done
if($this->db->affected_rows())
{

	$this->db->query("INSERT INTO `vote_record`(`voter_id`, `position_id`) VALUES ('$voterid','$king')"); //save which position the voter as voted for
if($this->db->affected_rows()){
redirect("ballotpaper?view=success");
}


}

 





}
}
