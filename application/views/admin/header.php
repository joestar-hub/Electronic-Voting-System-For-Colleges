<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php   echo base_url(); ?>templates/img/logo/logo.png" rel="icon">
  <title></title>
  <link href="<?php   echo base_url(); ?>templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php   echo base_url(); ?>templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php   echo base_url(); ?>templates/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php   echo base_url(); ?>templates/index.html">
        <div class="sidebar-brand-icon">
          <img src="<?php   echo base_url(); ?>templates/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        
      </div>
     
     
      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/addcandidate">
          <i class="fas fa-fw fa-palette"></i>
          <span>Add Candidate</span>
        </a>
      </li>

     
      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/managecandidate">
          <i class="fas fa-fw fa-palette"></i>
          <span>Manage candidate</span>
        </a>
      </li>









     
      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/newposition">
          <i class="fas fa-fw fa-palette"></i>
          <span>Add Position</span>
        </a>
      </li>

     
      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/manageposition">
          <i class="fas fa-fw fa-palette"></i>
          <span>Manage Position</span>
        </a>
      </li>

     



      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/votersignup">
          <i class="fas fa-fw fa-palette"></i>
          <span>Add Voter</span>
        </a>
      </li>
 



      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/managevoters">
          <i class="fas fa-fw fa-palette"></i>
          <span>Manage Voters</span>
        </a>
      </li>
       


      <li class="nav-item active">
        <a class="nav-link" href="<?php   echo base_url(); ?>index.php/resultdash">
          <i class="fas fa-fw fa-palette"></i>
          <span>Result Dashboard</span>
        </a>
      </li>
       








      <hr class="sidebar-divider">
       
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
             
            </li>
                         </ul>
        </nav>
        <!-- Topbar -->