<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 
	public function index()
	{
		session_start();
		$this->load->view('voter/login');
	}
}
