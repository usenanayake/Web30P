<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>tmp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>tmp/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>tmp/css/sb-admin.css" rel="stylesheet">



  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url()?>template2/dist/css/skins/_all-skins.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/bower_components/morris.js/morris.css">
  <link href="<?php echo base_url()?>template2/plugins/bootstrap-slider/slider.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!--custom styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template2/dist/css/style.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>template2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>


<style>
  
  #collectionTable tr:hover {
    background-color:#C5CBC7;
}
</style>


</head>

<body class="hold-transition skin-blue sidebar-mini" id="page-top">


  <!-- Navigation-->
  <aside class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top fixed-bottom" id="mainNav" style="height:100px;">
    <a class="navbar-brand" href="index.html">Welcome <?php echo $this->session->userdata('fname')." ".$this->session->userdata('lname'); ?></a>
   <!--  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="padding-top: 50px">
        <li class="header">MAIN NAVIGATION</li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">About</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="<?php echo base_url()?>index.php/aboutController">About Us</a>
            </li>
            <li>
              <a href="<?php echo base_url()?>index.php/aboutController/achivements">Achivements</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Shop">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Shop</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
          <a class="nav-link" href="<?php echo base_url()?>index.php/galleryController">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar navbar-static-top">
        
        <!--  -->
        
        
      </ul>
    </div>
    <li class="nav-item">
          
            <i class="fa fa-fw fa-sign-out"></i><a href="<?php echo base_url('index.php/Login/LogoutUser'); ?>"> Logout </a>
        </li>
  </aside>