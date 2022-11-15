<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php      echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title>Validation System</title>
  <link href="<?php      echo base_url(); ?>templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php      echo base_url(); ?>templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php      echo base_url(); ?>templates/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Central Validator</h1>
                  </div>

<?php if(!isset($result)){  ?>
                  <form method="post" action="<?php   echo base_url();     ?>index.php/validatefirst/process" class="user">
                
              <?php
}

else{
              ?>
   <form method="post" action="<?php   echo base_url();     ?>index.php/validatefirst/validate" class="user">
                
 
                <?php

}

?>
                
                
                
                <?php  
                  
                  
 if(isset($_GET["code"])){ 
 
  if($_GET["code"]=="error"){
   echo '
   
   <div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Error Message:</strong> You are not elegible to vote here!!!
 </div>
   ';
  }}

                  
                  ?>




<?php  
                  
                  
                  if(isset($_GET["code"])){ 
                  
                   if($_GET["code"]=="error2"){
                    echo '
                    
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error Message:</strong> Incorrect Phone Number try again 
                  </div>
                    ';
                   }}
                 
                                   
                                   ?>
                 




















                  <div class="form-group">
                      <?php if(!isset($result)){   ?>
                      <input type="text" class="form-control" id="" 
                        placeholder="Enter Jamb Registration Number" name="jambno">

                        <?php }   ?>
                    </div>





















<?php

if(isset($result)){ 

    foreach($result as $row):

?>


<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center"><h3> <?php echo $row->jambno;   ?></h3></div>
         

    <!--Here Begins the invisible input form-->

<input type="hidden" class="form-control" name="jambno" value="<?php  echo $row->jambno;      ?>"/>


    <!---Here Ends the Invisible Input Form---->


<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary active">Department: <?php  echo $row->department;   ?></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Gender: <?php  echo $row->gender;    ?></a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Name: <?php  echo $row->name;    ?></a>
   
   
   
   
    <span class="list-group-item list-group-item-action list-group-item">
        
    <input type="tel" class="form-control" name="tel" placeholder="Phone Number"/>
    
    
</span>
</div>


</div>





<?php

    endforeach;
}

?>
                    
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Validate</button>
                    </div>
                     <div class="text-center">

<?php

if(isset($_GET["code"])){


?>

<!-- 
<span> You can try again for only 7 times else you will be blocked<span>
 -->

<?php



}
?>


                     </div>
                  </form>
                  <hr>
                  <div class="text-center">
                                      </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery/jquery.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/js/ruang-admin.min.js"></script>
</body>

</html>