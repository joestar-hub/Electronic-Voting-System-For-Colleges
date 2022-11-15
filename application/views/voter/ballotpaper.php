
       
       
       
       
       
       <!-- Container Fluid-->
       <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">General Ballot Paper</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">General Ballot Paper</li>
            </ol>
          </div>

          <div class="row">
            <!-- General Colors-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                  <div class="row">
<div class="col-12">
 
<?php   


$salsa=$this->db->query("SELECT * FROM position WHERE election_status='active'");

$ole=$salsa->result();

foreach($ole as $row){

//Here Prevent Repeated Voting of the same candidates
$voterid=$_SESSION["voterid"];
$RT=$this->db->query("SELECT * FROM vote_record WHERE position_id='$row->position_id' AND voter_id='$voterid'");

$allcount=$RT->num_rows();

if($allcount>0){

  
//Then check if at all there is nothing left to vote again

$beta=$this->db->query("SELECT * FROM vote_record WHERE voter_id='$voterid'");
$heal=$beta->num_rows(); //Total Numbers of rows for vote_record


$ber=$this->db->query("SELECT * FROM position WHERE election_status='active'");
$healer=$ber->num_rows(); //Total number of rows for active position


if($heal>=$healer){

echo '<h2>There are no position left for you to vote</h2>';
break;
exit();


}








}

else{ 

?>




<form method="post" action="<?php  echo base_url();  ?>index.php/ballotpaper/process/<?php  echo $row->position_id."/".$_SESSION["voterid"];      ?>"/>


 <ul class="list-group" style="margin-top:30px;">
     <li style="background:black;" class="list-group-item   text-white"><?php   echo $row->position_name;    ?></li>
 </ul>
<?php    


$karma=$this->db->query("SELECT * FROM candidate WHERE position_id='$row->position_id'");

$prayer=$karma->result();


foreach( $prayer as $abba):


?>



 <div class="list-group-item">

<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object col-6" style="width:300px; height:100px;" src="<?php  echo base_url();   ?>/uploads/<?php echo $abba->photo;   ?>" alt="Image">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?php       echo $abba->name;     ?></h4>
    
    </div>
    <input type="radio" class="form-control" name="<?php  echo $row->position_id;   ?>" value="<?php echo $abba->candidate_id;   ?>"/>
    
</div>


</div>
 </div>            
</div>   
<?php

endforeach;
 
?>
<div class="text-center">

<button class="btn btn-success" type="submit"> Submit your choosen  <?php     echo $row->position_name;     ?> </button>
</div>
</form>
</br>
<?php

}


}

?>

</div>
<div class="text-center">
</br>

</div>
                </div>
              </div>
            </div>

          </div>

       