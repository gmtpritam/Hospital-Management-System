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

$query = "SELECT * FROM department ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Display Existing Departments </title>
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Department's DataBase</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
			</script>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<br><br><br><br><hr>
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Department Name : " . $row['dept_name']."<br><br><hr>";
	
} 


?> 
</body>
</html>
