


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>විශ්මිත ලී කැටයම්</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>template3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>template3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url()?>template3/vendor/font-awesome/css/new.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url()?>template3/vendor/font-awesome/css/neww.css' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>template3/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>template3/css/creative.min.css" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet"> --> 
<!--    <link href="--><?php //echo base_url('assets/css/bootstrap.min.css');?><!--" rel="stylesheet">-->

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"> 

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet"> 



  
  
           <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top row" id="mainNav" style="background: #1a0d00;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('Welcome') ?>">Live with carvings</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome') ?>/#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome') ?>/#services">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome') ?>/#portfolio">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome') ?>/#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/RegisterUser') ?>" style="font-size: 15px;">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="<?php echo site_url('Users/Login') ?>" style="font-size: 15px;">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/questions') ?>" style="font-size: 15px;">Questions</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </head>



<body>
<div class="containerwx" align="center">

<div class="col-md-12 row" style="padding: 100px;"></div>
<div style=" color: red;">
    <?php echo validation_errors(); ?>
</div>
<?php echo form_open('Login/LoginUser'); ?>




 

  <div class="containerLog col-md-4 col-md-offset-4" align="center">

    <?php if($this->session->flashdata('errmsg')){
        echo "<h3>".$this->session->flashdata('errmsg')."<h3>";
    }
    ?>
  
  <form id="contactForm" method="post" class="form-horizontal"> 
  
     <div class="form-group form-row">
        <div class="col-md-3 form-inline">
            <label>Email</label>
        </div>
        <div class="col-md-3 form-inline">
            <input type="text" class="form-control" name="email" />
        </div>
    </div>
   
    
    <div class="form-group form-row">
        <div class="col-md-3 form-inline">
            <label>Password</label>
        </div>
        <div class="col-md-3 form-inline">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
  </form> 
    
   

    
    <!-- <input type="checkbox" name="termsNCondition" value="Checked" style="float: left;" required=""> I accept Terms and Conditions -->

    
<!-- <div style="text-align:center">  
    
   <button  type="submit" name="submit" style="padding:auto 50% auto 50%; background-color:#0b7df5;">Login</button>
  
</div> -->


    
<?php echo form_close(); ?>

<div style="font-size: 12px; color: blue;">
        <label>If you are a new user <a href="<?php echo site_url('Register/RegisterUser') ?>">Create an account</a></label>
    </div>
    
  </div>

</body>
</html>
