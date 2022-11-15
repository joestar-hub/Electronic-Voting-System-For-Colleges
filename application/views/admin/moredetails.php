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
                    <h1 class="h4 text-gray-900 mb-4">Candidate Information</h1>
                  </div> 
                  <hr>
                  <div class="text-center"> </div>
<section>


<?php

foreach($amen as $row):

?>

<div class=" text-center">

    <div class="form-group">
    <label>Votes</label>
<button class="btn btn-primary"><?php   echo $row->votes;   ?></button>
</div>


<ul class="list-group">
    <li class="list-group-item">Name: <?php  echo $row->name;    ?> </li>
    <li class="list-group-item">Email:<?php  echo $row->email;      ?></li>
    <li class="list-group-item">Position:


<?php
$joe=$this->db->query("SELECT * FROM position WHERE position_id='$row->position_id'");
$do=$joe->result();

foreach($do as $king){

    echo $king->position_name;
}

?>

    </li>
</ul>
<div class="list-group-item">
<strong>Manifesto</strong>
<div class="form-control">

<?php

echo $row->manifesto;


?>




</div>




</div>

</div>












</section>
               
<?php
endforeach;

?>

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
  <!-- Register Content -->
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery/jquery.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/js/ruang-admin.min.js"></script>
</body>

</html>