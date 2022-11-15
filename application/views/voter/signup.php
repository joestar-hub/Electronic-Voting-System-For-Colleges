<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php      echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title>Voting-System-2020 | User Registration</title>
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
                    <h1 class="h4 text-gray-900 mb-4">Voter Registration Form</h1>
                  </div>
                  <form method="post" action="<?php  echo base_url();   ?>index.php/executor/vsignup">
                    <div class="form-group">

                    
                  
<?php


//here starts error control for signup form


/**
 * code=error------------->one of the column is empty
 * error=phone------------>this phone number has been used
 * error=jambno----------->your jamb no has been used
 * 
 * 
 * 
 */


 if(isset($_GET["code"])){ 
 
 if($_GET["code"]=="error"){
  echo '
  
  <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error Message:</strong> One or more  columns are empty
</div>
  ';
 }}

if(isset($_GET["error"])){ 
 if($_GET["error"]=="phone"){

  echo '
  <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error Message:</strong> This phone number has been used by another voter
</div>
  ';
 }


 if($_GET["error"]=="jambno"){

  echo '
  
  <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error Message:</strong> This Jamb number has been used by another voter
</div>
  ';

 }
}





?>






                      <label> Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputFirstName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label>Alias</label>
                      <input type="text" name="alias" class="form-control" id="exampleInputLastName" placeholder="Enter Alias">
                    </div>
                    <div class="form-group">
                      <label>Jamb Reg/Mat no </label>
                      <input name="jambno" type="text" class="form-control" id="" aria-describedby=""
                        placeholder="Enter Jamb registration number/matriculation number" >
                    </div>
                    <div class="form-group">
                      <label>Phone number</label>
                      <input name="phone" type="text" class="form-control" placeholder="Your Preferred Phonenumber">
                    </div>
                     
                    <div class="form-group">
                      <label>Department/Course</label>
                      <input type="text" class="form-control" id="" name="department" placeholder="Department (Optional)">
                    </div>
                    <div class="form-group">
                      <label>DOB</label>
                      <input type="date" class="form-control" id="" name="dob" placeholder="DOB">
                    </div>

                    <div class="form-group">
                      <label>Gender</label>
<select class="form-control" name="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      
</select>
                    </div>



                    <div class="form-group">
                      <label>Level</label>
<select class="form-control" name="level">
                      <option value="100l">100L</option>
                      <option value="200l">200L</option>
                      <option value="300l">300L</option>
                      <option value="400l">400L</option>
                      <option value="500l">500L</option>
                       
</select>
                    </div>



                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                   </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?php      echo base_url(); ?>index.php/login">Already have an account?</a>
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