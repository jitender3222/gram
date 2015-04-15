<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>फोटो गेलरी</title>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
		<link rel="stylesheet" type="text/css" href="UberGallery/resources/UberGallery.css" />
		<link rel="stylesheet" type="text/css" href="UberGallery/resources/colorbox/1/colorbox.css" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="UberGallery/resources/colorbox/jquery.colorbox.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
		});
</script>
	</head>

	<body>
<!--fb-->
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--fb-end-->


		<div class="container">
			<div class="row">
				<div class="col-md-8">
				<a href="index.php">
					<img class="logo" src="images/logo.jpg"></img>
				</a>
				</div>
				<div class="col-md-4">
					<p class="font1"></br>E-mail: info@gramswarajsangathan.com</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
		 <div class="navbar navbar-default menucolor" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                        <!--<a class="navbar-brand" href="index.php"><font class="mytextcolor menutext">ग्राम स्वराज संगठन</font></a>-->
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="index.php"><font class="mytextcolor menutext">मुखपृष्ठ</font></a></li>
              <li><a href="aboutus.php"><font class="mytextcolor menutext">परिचय</font></a></li>
			  <li class="activemenucolor"><a href="photogallery.php"><font class="mytextcolor">फोटो गेलरी</font></a></li>
			  <li><a href="blood.php"><font class="mytextcolor  menutext">Blood Donation</font></a></li>
			  <li><a href="services.php"><font class="mytextcolor menutext">Services</font></a></li>
			  <li><a href="news.php"><font class="mytextcolor menutext">सूचना</font></a></li>
			  <li><a href="registration.php"><font class="mytextcolor menutext">Registration</font></a></li>
			  <li><a href="contactus.php"><font class="mytextcolor menutext">हमसे संपर्क करें</font></a></li>
            </ul>
		</div>
		</div>
		</div>
		</div>
			</div>
		</div>
		<div class="container">
		<div class=" navbar-header navbar navbar-default" style="background-color:#eee;width:1140px;">
			<div class="row">
				<div class="col-md-12" style="margin-left:17px;">
					<?php include_once('UberGallery/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('UberGallery\gallery-images\quiz_contest_images'); ?>
		
		
					
		</div>
		</div>
		</div>
		</div>
		</br>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 navbar-header navbar navbar-default" style="background-color:green;width:1146px;margin-left:13px;" >
				</br>
				</br>
				</div>
			</div>
		</div>
		</br>
		<div class="container">
		<div class=" navbar-header navbar navbar-default" style="background-color:#eee;width:1140px;">
			<div class="row">
				<div class="col-md-12">
				<div class="fb-facepile" data-href="https://www.facebook.com/GramSwarajSangathan" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="true"></div></br></br>
		<div class="fb-comments" data-href="https://www.facebook.com/GramSwarajSangathan" data-numposts="5" data-colorscheme="light"></div>
		</div>
		</div>
		</div>
		</div>
		</br>
		<div class="container">
			<div class="row">
				<div class="col-md-12 navbar-header navbar navbar-default" style="background-color:green;width:1146px;margin-left:13px;" >
				</br>
				</br>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div  style="font-size:12px;color:green;margin:0 auto 0 auto; width:200px;text-align:center;">
				
				Website Created And Maintained By </br>
				Sun Dynasty InfoSolutions</br>
				Copyright Reserved 2015
				
				</div>
			</div>
		</div>	
				
	</body>
</html>	