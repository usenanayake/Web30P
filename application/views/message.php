<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carvings</title>

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
              <a class="nav-link js-scroll-trigger active" href="<?php echo site_url('Register/RegisterUser') ?>/#signup">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Users/Login') ?>" style="font-size: 15px;">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Register/questions') ?>" style="font-size: 15px;">Questions</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </head>



<div class="containerwx" align="center">

<div class="col-md-12 row" style="padding: 40px;"></div>
<div class="containerReg col-md-6 col-md-offset-3" align="center">
s
  
    <h1 align="center" >Want to Know something</h1>

    <div style=" color: red;">
        <?php echo validation_errors(); ?>
    </div>

    <?php if($this->session->flashdata('msg')){
        echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }
    ?>
  
   
  
  <?php echo form_open('Message/insert_Messages'); ?>
  
                    <div class="form-group">
                        <label for="inputName" class="bmd-label-floating">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" ?>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email"; ?>
                    </div>
  
                    <div class="form-group">
                        <label for="inputMessage" class="bmd-label-floating">Message</label>
                        <textarea class="form-control" id="inputMessage" name="message" ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-raised">Submit</button>
    

<?php echo form_close(); ?>

    

 
</div>
</div>
</body>
</html>
