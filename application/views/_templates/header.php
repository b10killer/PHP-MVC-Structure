<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <title>Website title</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!-- Bootstrap -->
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet"/>
	<!-- Custom css -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet"/>
	
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/application.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- header -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><img width="82" alt="" src="<?php echo URL; ?>public/img/logo.png"><span id="mydetails"><span id="myname">Hassam Judoo</span><span id="mytitle">Web Developer</span></span></a>
			</div>
			<div class="collapse navbar-collapse">

					<ul class="nav navbar-nav" id="navigation">
						<li class="active"><a href="<?php echo URL; ?>home/index">Home</a></li>
						<li><a href="<?php echo URL; ?>about/index">About</a></li>
						<li><a href="<?php echo URL; ?>portfolio/index">Portfolio</a></li>
						<li><a href="<?php echo URL; ?>contact/index">Contact</a></li>
					</ul>

			</div><!--/.nav-collapse -->
		</div>
    </div>


