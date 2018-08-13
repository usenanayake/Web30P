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
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top row" id="mainNav" style="background: #1a0d00;">
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
              <a class="nav-link js-scroll-trigger " href="<?php echo site_url('Register/RegisterUser') ?>" style="font-size: 15px;">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Users/Login') ?>" style="font-size: 15px;">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="<?php echo site_url('Register/questions') ?>" style="font-size: 15px;">Questions</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>-->
  </head>





<div class="containerwx" align="center">
	<div class="col-md-12 row" style="padding: 100px;"></div>
	<body>
		<div class="containerQu col-md-6 col-md-offset-3">
		<form method="post" role="form" action="<?php echo site_url('Register/askquestions') ?>">
			<div class="form-group form-row">
				<div class="col-md-4 form-inline">
	        		<label>Title</label>
	        	</div>
		        <div class="col-md-8 form-inline">
		            <input type="text" class="form-control" name="title" required />
		        </div>
	    	</div>
	    <div class="form-group form-row">
	    	<div class="col-md-4 form-inline">
	        	<label>Content</label>
	        </div>
	        <div class="col-md-8 form-inline">
	            <textarea class="form-control" name="content" rows="5" required></textarea>
	        </div>
	    </div>
	    <div class="form-group form-row">
	    	<div class="col-md-4 form-inline">
	        	<label>Email</label>
	        </div>
	        <div class="col-md-8 form-inline">
	            <input type="email" class="form-control" name="email" required />
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="col-md-9 col-md-offset-3">
	            <button type="submit" class="btn btn-default">Request</button>
	        </div>
	    </div>

		</form>
		<div>
            <a href="<?php echo base_url() ?>index.php/Shopping_cart">Back to cart</a>      
        </div>
	</body>
</div>
<script>
$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        container: '#messages',
        
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    },
                    stringLength: {
                        max: 100,
                        message: 'The title must be less than 100 characters long'
                    }
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'The content is required and cannot be empty'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The content must be less than 500 characters long'
                    }
                }
            }
        }
    });
});
</script>
</html>