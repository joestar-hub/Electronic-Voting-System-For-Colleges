<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultdash extends CI_Controller {
 
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
		
		$this->load->view('admin/resultdash',$data);

		
	}


public function fetch(){

$happa=$this->db->query("SELECT * FROM candidate");

$process=$happa->result();


foreach($process as $row):

 ?>
 <tr>

<td> <?php  echo $row->name;    ?> </td>
<td><?php   


$kola=$this->db->query(" SELECT * FROM position WHERE position_id='$row->position_id'");

$sire=$kola->result();
foreach($sire as $fire){
echo $fire->position_name;

 };






?></td>
<td><?php    echo $row->votes; ?>  </td>

</tr>

<?php
endforeach;

}}
?>