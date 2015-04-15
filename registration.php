<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "gram";
				$tablename="registerationdata";
				$str= "";
				$str1= "";
				$str2= "";
				$str3= "";
				$str4= "";
				$str5= "";
				$str6= "";
				$str7= "";
				$str8= "";
				$str9= "";
				
				if(isset($_POST['submit']))
				{
				$name= $_POST['name'];
				$fathername=$_POST['fname'];
				$bloodgroupename=$_POST['bgname'];
				$phone= $_POST['phone'];
				$email= $_POST['email'];
				$address= $_POST['addname'];
				$village= $_POST['villname'];
				$city= $_POST['cityname'];
				$state= $_POST['statename'];
				$country= $_POST['countryname'];
				$pin= $_POST['pin'];
				
				
				
				
				// Create connection
				$conn = mysql_connect($servername, $username, $password, $dbname);
				$sql = "INSERT INTO `gram`.`registerationdata` (`registrationdata_id`, `name`, `father's_name`, `bloodgroup_name`, `phone_no`, `e_mail`, `address`, `village`, `city`, `state`, `country`, `pin`) VALUES (NULL, '$name', '$fathername', '$bloodgroupename', '$phone', '$email', '$address', '$village', '$city', '$state', '$country', '$pin')";
				
					if($name=="" || $fathername==""|| $bloodgroupename==""|| $phone==""|| $village==""|| $city==""|| $state==""||$country==""|| !isset($_POST['check']))
					{
							if($name=="")
							{
								$str1.= "Please enter your name.";
							}
							if($fathername=="")
							{
								$str2.="Please enter your father's name.";
							}
							if($bloodgroupename=="")
							{
								$str3.="Please enter your Blood Group.";
							}
							if($phone=="")
							{
								$str4.="Please Enter your Phone Number.";
							}
							if($village=="")
							{
								$str5.="Please Enter your Village Name.";
							}
							if($city=="")
							{
								$str6.="Please Enter your City Name.";
							}
							if($state=="")
							{
								$str7.="Please Enter your State Name. ";
							}
							if($country=="")
							{
								$str8.="Please Enter your Country Name.";
							}
							if(!isset($_POST['check']))
							{
								$str9.="Please Accept Terms & Conditions";
							}
					}	
					else
					{
					
						$result= mysql_query($sql);
						if ($result) 
						{
							$str.= "thanks for registering with us...";
						} 
						else
						{
							echo "Error: " . $sql . "<br>" . mysql_error($conn);
						}
						
				
				
					}
				}
				
				?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Registration</title>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
		<style>
		.errcolor{
		
		color:red;
		margin-left:230px;
		}
		
		
		</style>
	
	
	</head>
	

	<body>	
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
			  <li><a href="photogallery.php"><font class="mytextcolor menutext">फोटो गेलरी</font></a></li>
			  <li><a href="blood.php"><font class="mytextcolor menutext">Blood Donation</font></a></li>
			  <li><a href="services.php"><font class="mytextcolor menutext">Services</font></a></li>
			  <li><a href="news.php"><font class="mytextcolor menutext">सूचना</font></a></li>
			  <li class="activemenucolor"><a href="registration.php"><font class="mytextcolor">Registration</font></a></li>
			  <li><a href="contactus.php"><font class="mytextcolor menutext">हमसे संपर्क करें</font></a></li>
			  
			  
			  
            </ul>
		</div>
		</div>
		</div>
		</div>
			</div>
		</div>
		</br>
		<div class="container">
		<div class=" navbar-header navbar navbar-default" style="background-color:#eee;width:1140px;">
			<div class="row">
				<div class="col-md-6">
				</br>
				<font style="color:green;font-size:14px;">
				<p style="margin-left:20px;">Please Enter your details to register with Gram Swaraj Sangathan.</p></br></br></br></br>
				<form action="registration.php" method="post">
				<p style="margin-left:20px;">Name: <input type="text" name="name"style="margin-left:148px;">* <p class="errcolor"><?php echo $str1;?></p></p>
				<p style="margin-left:20px;">Father's Name: <input type="text" name="fname"style="margin-left:92px;">*<p class="errcolor"> <?php echo $str2;?></p></p>
				<p style="margin-left:20px;">BloodGroup Name: <input type="text" name="bgname"style="margin-left:68px;">*<p class="errcolor"> <?php echo $str3;?></p></p>
				<p style="margin-left:20px;">Phone No.:<input type="text" name="phone" style="margin-left:123px;">* <p class="errcolor"><?php echo $str4;?></p></p>
				<p style="margin-left:20px;">E-mail:<input type="text" name="email"style="margin-left:150px;"></p>
				<p style="margin-left:20px;">Address: <input type="text" name="addname"style="margin-left:134px;"></p>
				<p style="margin-left:20px;">Village: <input type="text" name="villname"style="margin-left:144px;">* <p class="errcolor"><?php echo $str5;?></p></p>
				<p style="margin-left:20px;">City: <input type="text" name="cityname"style="margin-left:162px;">* <p class="errcolor"><?php echo $str6;?></p></p>
				<p style="margin-left:20px;">State: <input type="text" name="statename"style="margin-left:153px;">* <p class="errcolor"><?php echo $str7;?></p></p>
				<p style="margin-left:20px;">Country:<input type="text" name="countryname"style="margin-left:140px;">* <p class="errcolor"><?php echo $str8;?></p></p>
				<p style="margin-left:20px;">PIN:<input type="text" name="pin"style="margin-left:166px;"></p>
				<p style="margin-left:20px;"><input type="checkbox" name="check"style="margin-left:192px;">&nbspI accept all terms & conditions *<p class="errcolor"><?php echo $str9;?></p></p>
				<p style="margin-left:20px;"><input type="submit" name="submit" value="submit" style="margin-left:200px;">
				<input type="reset" name="reset" style="margin-left:10px;"></p>
				<p>* = mandatory field</p>
				
				</form>
				
				
				
				
				
				
				
				
				
				
				</font>
				</div>
				<div class="col-md-6" >
				</br>
				<font style="color:green;font-size:14px;">
					<p>Terms & Conditions</p>
				</font>	
				</div>	
			</div>
		</div>
		</div>
		
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