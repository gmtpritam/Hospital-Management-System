<?php

$db_host = "localhost";
$db_user = "root" ;
$db_pass = "";
$db_name = "hms" ;

$connection = mysqli_connect($db_host , $db_user ,  $db_pass ,$db_name);
if( mysqli_connect_errno()) {
 die("<b>Database failed to open<b> <br> "  
 	          .    mysqli_connect_errno() );
}

$sf_no = $_GET['sf_no'];
$sf_name = $_GET['sf_name'];
$sf_age  = $_GET['sf_age'];
$sf_phno  = $_GET['sf_phno'];
$sf_phno2  = $_GET['sf_phno2'];
$sf_addr  = $_GET['sf_addr'];
$sf_dept  = $_GET['sf_dept'];
$sf_gender = $_GET['sf_gender'];


$query = "INSERT into staff values ('$sf_no','$sf_name','$sf_addr','$sf_phno','$sf_phno2','$sf_age','$sf_gender','$sf_dept');";


$result = mysqli_query($connection,$query);

if ($result) {
	echo "Staff DataBase";
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM staff ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Display Staff's query </title>
	</head>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Staff's DataBase</h1>
	</head><br><br><br><br><br><br><br><br>
	<body style="margin: auto;width: 60%; border:6px solid #73AD21;padding: 20px;background-color: #e6edf5;">
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Staff No :"  . $row['sf_no']  ."<br>";
	echo "Staff Name :" . $row['sf_name']."<br>";
	echo "Staff Gender :"  . $row['sf_gender'] . "<br>";
	echo "Staff Age :"  . $row['sf_age'] . "<br>";
	echo "Staff Phone 1 :"  . $row['sf_phno'] . "<br>";
	echo "Staff Phone 2 :"  . $row['sf_phno2'] . "<br>";
	echo "Staff Address :"  . $row['sf_addr'] . "<br>";
	echo "Staff Department :"  . $row['sf_dept'] . "<br><hr><br><br>";

} 


?> 
</body>
</html>
