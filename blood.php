<?php
				
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "gram";
				$str="";
				$str1="";
				
				if(isset($_POST['submit'])){
				$bgname= $_POST['bgname'];
				$cityname= $_POST['cityname'];
				
				// Create connection
				$conn = mysql_connect($servername, $username, $password);
				mysql_select_db($dbname);
				
				$sql= "SELECT * FROM registerationdata WHERE bloodgroup_name= '".$bgname."'";
				$sql2= "SELECT * FROM registerationdata WHERE bloodgroup_name= '".$bgname."' && city= '".$cityname."'";
				
				if($bgname==null && $cityname==null)
				{
				 $str1.= "please enter blood group name at-least";
				 
				}
				elseif($bgname==null)
				{
					$str1.= "please enter blood group name also";
					
				}
				else
				{
				
				if($cityname==null)
				{
					$result=mysql_query($sql);
				}
				else
				{
					$result=mysql_query($sql2);
				}
				//$sql3= "SELECT * FROM registerationdata WHERE bloodgroup_name= '".$bgname."'";
				
				//print_r($result);
				if(mysql_num_rows($result)>0)
				{
					$str.="<table style=\"margin:0 auto 0 auto;\"><tr><th>Name</th><th>Phone No</th><th>City</th></tr>";
					while($row=mysql_fetch_array($result))
					{
						$str.="<tr>";
						$name = $row['name'];
						$str.="<td>" . $name ."</td>";
						
						$phone = $row['phone_no'];
						$str.="<td>" . $phone ."</td>";
						
						$city = $row['city'];
						$str.="<td>" . $city ."</td>";
						$str.="</tr>";
					}
					$str.="</table>";
					
				}else
				{
					$str.= "sorry, data not found.";
				
				}
				
				}
				}
				
			?>




<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Blood Donation</title>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
		<style>
		
			td{
			
				padding:5px;
				border:solid 2px green;
				width:250px;
				text-align:center;
				color:green;
			
			}
			th{
			
				padding:5px;
				border:solid 2px green;
				width:250px;
				text-align:center;
				color:green;
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
			  <li class="activemenucolor"><a href="blood.php"><font class="mytextcolor">Blood Donation</font></a></li>
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
		</br>
		<div class="container">
			<div class="row">
				<div class="col-md-12 navbar-header navbar navbar-default" style="background-color:#eee;width:1140px;margin-left:15px;opacity:1.0;" >
				</br>
				
				<form action="blood.php" method="post"style="color:green;font-size:14px;">
				<p>Blood Group Name: <input type="text" name="bgname" style="margin-left:9px;" />*</p>
				<p>City Name:<input type="text" name="cityname"style="margin-left:68px;" /></p>
				<p><input type="submit" name="submit" style="margin-left:138px;"/></p>
				<p>* = mandatory field</p>	
				<p><?php echo $str; ?></p>
				<p style="color:red;"><?php echo $str1; ?></p>
				</form>
				
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