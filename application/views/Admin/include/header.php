<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>විශ්මිත ලී කැටයම්</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



  




 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/skins/_all-skins.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/morris.js/morris.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--custom styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/dist/css/style.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>

<!-- <script type="text/javascript">
function confirmUser(){
    var ask=confirm("Do you want to open an existing collection?");
    if(ask){
      window.location.href="<?php echo base_url()?>index.php/CustomerController";
     }
}
</script> -->


<style>
  
  #collectionTable tr:hover {
    background-color:#C5CBC7;
}
</style>


</head>

<body class="hold-transition skin-blue sidebar-mini">

<header class="main-header">
    <!-- Logo -->
    <a class="navbar-brand" href="<?php echo base_url()?>index.php/Admin">Welcome <?php echo $this->session->userdata('fname')." ".$this->session->userdata('lname'); ?></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="nav-item">
          
            <a href="<?php echo base_url('index.php/Login/LogoutUser'); ?>"> Logout </a>
        </li> 
            </ul>
      </div>

  </nav>
</header>



<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" id="exampleAccordion">
        <li class="header">MAIN NAVIGATION</li>
        





        <!-- <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>About</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">

                        

                        <li><a href="<?php echo base_url()?>index.php/aboutController">About Us</a></li>

                       <li><a href="<?php echo base_url()?>index.php/aboutController/achivements">Achivements</a></li>

                       
                    </ul>
                </li> -->

        <li class="treeview" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">About</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="sidenav-second-level collapse treeview-menu" id="collapseExamplePages">
            <li>
              <a href="<?php echo base_url()?>index.php/aboutController">About Us</a>
            </li>
            <li>
              <a href="<?php echo base_url()?>index.php/aboutController/achivements">Achivements</a>
            </li>
          </ul>
        </li>






        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Shop">
          <a class="nav-link" href="<?php echo base_url()?>index.php/shopController">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Shop</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
          <a class="nav-link" href="<?php echo base_url()?>index.php/galleryController">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
          <a class="nav-link" href="<?php echo base_url()?>index.php/contactController">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>
      </ul>
      

       


        
    </section>
    <!-- /.sidebar -->
  </aside>

