 
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vote Candidate
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </div>

          <div class="row">
            <!-- General Colors-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Vote for your choice for the postion of <?php
                  
                  $ghana=$this->db->query("SELECT * FROM position WHERE position_id='$number'");

                  $honest=$ghana->result();


                  foreach($honest as $till){

                    echo $till->position_name;
                  }
                  
                  
                  ?>
                  
                
                
                </h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
                   if(!isset($yougo)){
echo "<h2> No Position Added Yet</h2>";


                   }


                   else{
                   
                   


                   foreach($yougo as $camry):
                   
                   ?>
                  <!-- <a href="<?php  echo base_url();   ?>index.php/votecandidate/<?php echo $camry->candidate_id; ?>"> -->
                  <div class="col-lg-6 mb-4">
                      <div class="card bg-primary text-white">
                        <div class="card-header>
                      
                      </div>
                        <div class="card-body">
<div class="card-image card-thumbmail">
                      <img class="col-12"  style="height:300px;margin-top:18px;" alt="Nice work" src="<?php  echo base_url();     ?>/uploads/<?php   echo $camry->photo;     ?>"/>
                     <div>

                      <div style="margin-left:3pc;">
                      <?php  echo $camry->manifesto;     ?>
                      </div>
                          <div class="text-white-50 small">

                        <center> <h3 style="margin-top:20px;margin-left:12pxpadding:15px;"> <?php  echo $camry->name;    ?></h3>
                   </center>
                   <div class="text-center" style="padding-bottom:15px">
                   <a  href="<?php echo base_url();  ?>index.php/votein/<?php  echo $camry->candidate_id;      ?>" class="btn btn-success">Vote</a>  
                   </div>
                      </div>
                        </div>
                      </div>
                    </div>
                   </a>
<?php
endforeach;

                   }

?>
                     </div>
                </div>
              </div>
            </div>

          </div>

       