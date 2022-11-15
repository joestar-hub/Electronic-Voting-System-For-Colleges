<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php      echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title>Add Candidate</title>
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
                    <h1 class="h4 text-gray-900 mb-4">Enroll Candidate</h1>
                  </div>
                  <form method="post" action="<?php echo base_url();   ?>index.php/executor/addcandidate" enctype="multipart/form-data">


                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" name="fullname" id="exampleInputFirstName" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                      <label>DOB</label>
                      <input type="date" class="form-control" name="dob" id="exampleInputDOB" placeholder="Enter DOB">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <label>Position</label>
                      <select name="position" class="form-control">
<option>--Select Position --</option>

<?php 

$joel=$this->db->query("SELECT * FROM position");

$process=$joel->result();

foreach($process as $fill){
echo "<option value='".$fill->position_id."'>".$fill->position_name."</option>";

}



?>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Photograph</label>
                      <input type="file" name="photograph" class="form-control" id="">
                    </div>


<div class="form-group">
  <label>Manifesto</label>
<textarea class="form-control" name="manifesto">







</textarea>






</div>





                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                     
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
  <!-- Register Content -->
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery/jquery.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php      echo base_url(); ?>templates/js/ruang-admin.min.js"></script>
</body>

</html>