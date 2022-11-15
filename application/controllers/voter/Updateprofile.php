<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateprofile extends CI_Controller {

 
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
		
		$this->load->view('voter/updateprofile');
	}
}
