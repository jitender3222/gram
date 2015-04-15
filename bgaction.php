
<?php
 
//Sample Database Connection Script 
 
//Setup connection variables, such as database username
//and password
$hostname="localhost";
$username="root";
$password="root";
$dbname="gram";
$usertable="registrationdata";
$yourfield = "village";
 
//Connect to the database
$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_connect_error());
}
$result=mysql_query("SELECT * FROM registerationdata WHERE name='jitender'");
while($row = mysql_fetch_array($result))
  {
    $name = $row['village'];
    echo "Name: " . $name; 

  }
 
?>