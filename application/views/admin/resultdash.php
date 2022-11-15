<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php      echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title>Candidate Information</title>
  <link href="<?php      echo base_url(); ?>templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php      echo base_url(); ?>templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php      echo base_url(); ?>templates/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Realtime Voter Dashboard</h1>
            
                  </div> 
                  <hr>
                  <div class="text-center"> </div>
<section>

 
 <div class="table-responsive">
     <table class="table table-hover">
         <thead>
             <tr>
                 <th>Name</th>
                 <th>Position</th>
                 <th>Votes</th>
             </tr>
         </thead>
         <tbody id='skill'>
              
         </tbody>
     </table>
 </div>
 
 

  


</div>

</div>












</section>


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

  <input type="hidden" name="base" id="base" value="<?php  echo base_url();    ?>index.php/fetch"  />
  <!-- Register Content -->
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery/jquery.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/js/ruang-admin.min.js"></script>

  <script src="<?php   echo base_url(); ?>templates/vendor/jquery/jquery.min.js"></script>
<script>



$(document).ready(function(){


var base = $("#base").val();



  window.setInterval(function() {
   $("#skill").load(base);
}, 1000);


});




    </script>
</body>

</html>