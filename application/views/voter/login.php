<?php 



if(!isset($_SESSION["validated"]))

{
redirect("validatefirst");
}










?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php      echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title> - Login</title>
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
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form method="post" action="<?php   echo base_url();     ?>index.php/executor/vlogin" class="user">
                  <?php  
                  
                  
 if(isset($_GET["code"])){ 
 
  if($_GET["code"]=="error"){
   echo '
   
   <div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Error Message:</strong> Login Failed check your Phonenumber and Jamb number and try again!!!
 </div>
   ';
  }


 
  if($_GET["code"]=="keno" AND isset($_SESSION["validated"])){
    echo '
    
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success Message:</strong> You have been successfully validated
    </br>
    you can login in now
  </div>
    ';
   }




}
                  
                  ?>
                  <div class="form-group">
                      <input type="text" class="form-control" id="" 
                        placeholder="Enter Jamb No. / Mat No." name="jambno">
                    </div>
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control"  placeholder="Phone number">
                    </div>
                    
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Login</button>
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