<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votein extends CI_Controller {
 
	public function index($silo)
	{
		session_start();
		if(empty($_SESSION["voterid"])|| !isset($_SESSION["voterid"])){
		redirect("login");
		
		}
		
		else{
		
		  $voterid=$_SESSION["voterid"];
		}
		
		$data["voterid"]=$voterid;
		

$voterid=$this->db->escape_str($_SESSION["voterid"]);
$positid=$this->db->escape_str($_SESSION["positionid"]);



	$deserve=$this->db->escape_str($silo);


	$bibi=$this->db->query("INSERT INTO `vote_record`(`voter_id`, `position_id`) VALUES ('$voterid','$positid')");
	if($this->db->affected_rows()){
//bring out the vote

$assort=$this->db->query("SELECT * FROM candidate WHERE candidate_id='$deserve'");

$highly=$assort->result();

foreach($highly as $row):

$cu=$highly->votes;
$added=$cu+1;

$mega=$this->db->query("UPDATE `candidate` SET `votes`='$added'  WHERE `candidate_id`='$deserve'"); 

endforeach;

	}
		if($this->db->affected_rows()){

redirect("selectposition?info=great");


		}
	}
}
