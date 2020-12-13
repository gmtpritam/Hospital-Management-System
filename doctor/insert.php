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

$doc_id = $_GET['doc_id'];
$doc_fname = $_GET['doc_fname']; 
$doc_lname  = $_GET['doc_lname'];
$doc_age  = $_GET['doc_age'];
$doc_phone1  = $_GET['doc_phone1'];
$doc_phone2  = $_GET['doc_phone2'];
$doc_email = $_GET['doc_email'];
$doc_address  = $_GET['doc_address'];
$dept_name  = $_GET['dept_name'];
$doc_degree1  = $_GET['doc_degree1'];
$doc_degree2  = $_GET['doc_degree2'];
$doc_degree3  = $_GET['doc_degree3'];
$doc_type = $_GET['doc_type'];


$query = "INSERT INTO doctor VALUES ('$doc_id','$doc_fname','$doc_lname','$doc_age','$doc_phone1','$doc_phone2','$doc_email','$doc_address','$dept_name', '$doc_degree1','$doc_degree2','$doc_degree3');";

$result = mysqli_query($connection,$query);

if ($result) {
	/*
	echo "success:"; */
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM doctor ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Display Doctor's query </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Doctor's DataBase</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script><br><br><br><br><hr>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5">
	
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "<b>Doctor's ID :" ."   " .$row['doc_id'] ."<br>";
	 echo "First Name :" ."   " .$row['doc_fname'] ."<br>";
	echo "Last Name :" ."   "  .$row['doc_lname'] ."</b><br>";
	echo "Age :"  ."   " . $row['doc_age'] ."<br>";
	echo "phone1 :" ."   "  .$row['doc_phone1']."<br>";
	echo "phone2 :"  ."   " .$row['doc_phone2']."<br>";
	echo "Email :"  ."   " .$row['email']."<br>";
	echo "Address :"  ."   " .$row['doc_address']."<br>";
	echo "<b>Department :" ."   " . $row['dept_name']."</b><br>";
	echo "degree 1 :" ."   "  . $row['doc_degree1']."<br>";
	echo "degree2 :" ."   " . $row['doc_degree2'] ."<br>";
	echo "degree3 :" ."   " .$row['doc_degree2'] . "<hr><br><hr>";
} 

?> 


</body>
</html>