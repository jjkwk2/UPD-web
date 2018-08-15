<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>United PhilBrokers, Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
<link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">'
<!-- Plugin CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>/device-mockups/device-mockups.min.css" media="all" type="text/css">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/new-age.min.css" rel="stylesheet">

<!-- My CSS TEMPLATE-->
<link href="<?php echo base_url();?>assets/css/navbar-style.css" rel="stylesheet" media ="all" type="text/css">

<link href="<?php echo base_url();?>assets/css/buyerseller.css" rel="stylesheet"  media ="all" type="text/css">

  </head>

  <body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('welcome'); ?>"><img src="<?php echo base_url();?>assets/img/logo-1.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#whoweare">Who We Are</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#missionvision">Mission/Vision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#contact">Contact Us</a>
			</li>
         	 <li class="nav-item dropdown">
         	 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Interested?<span class="caret"></span></a>
         	 <ul id="login-dp" class="dropdown-menu dropdown-menu-right">
         	 	<li>
					 <div class="row">
							<div class="col-md-12">
								 
										<!--<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										-->
									 	<b>APPLYING AS:</b>	
										<a href= "<?php echo base_url('clientbuyer'); ?>" ><div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">BUYER</button>
										</div></a>
										<a href="<?php echo base_url('clientseller'); ?>">
									 	<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">SELLER</button>
										</div>
										</a>
										
							</div>
						 <!--
							<div class="bottom text-center w-100">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
						-->
					 	</div>
					</li>
         		</ul>
			  </li>
          </ul>
        </div>
      </div>
    </nav>
<div id ="container" style ="margin-top:90px; margin-bottom:30px;">
<form class="form-horizontal needs-validation" role="form" method="post" action="<?php echo base_url('clientseller/insertcl');?>">
		<center><h1>Seller's Application Form</h1></center>
                <div class="form-group">
                    <label for="fName" style ="margin" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-12">
                        <input type="text" id="firstName" name="fName" placeholder="Full Name" class="form-control" autofocus>
                       	<i><span class="help-block">&nbsp;Last Name, First Name, eg.: Justin, Carl</span></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-4 control-label">Contact Number</label>
                    <div class="col-sm-12">
                        <input type="contact" id="contact" name="cont" placeholder="ex: 09141403123" class="form-control">
                    </div>
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="setDate" class="col-sm-4 control-label">Preferred Date</label>
                    <div class="col-sm-12">
                        <input type="date" id="setDate" name="sdate" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                    </div>
                </div>
              	<div class="form-group">
                    <label for="setTime" class="col-sm-4 control-label">Preferred Time</label>
                    <div class="col-sm-12">
                        <input type="time" id="setTime" name ="stime" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form> <!-- /form -->
</div>
   
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; United Philbrokers 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-google-plus fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/new-age.min.js"></script>

  </body>

</html>
