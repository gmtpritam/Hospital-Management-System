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


$b_id = $_GET['b_id'];
$b_type = $_GET['b_type'];
$d_id = $_GET['d_id'];
$bi_id = $_GET['bi_id'];


$query = "INSERT into blood values ('$b_id','$b_type','$bi_id','$d_id');";


$result = mysqli_query($connection,$query);

if ($result) {
	echo "Available Blood Info DataBase : <br>";
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM blood ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Blood Availability </title>
	</head>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" >
	</a>Accepted Blood Record Entry</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
			</script><br><br><br><br><br><br><hr>
	<body style="margin: auto;width: 60%; border:6px solid #73AD21;padding: 20px;background-color: #e6edf5;">
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Blood Id : " . $row['b_id']."<br>";
	echo "Blood Type : "  . $row['b_type'] . "<br>";
	echo "Inventory Id : "  . $row['bi_id'] . "<br>";
	echo "Donar Id : "  . $row['d_id']  ."<br><br>";
	

} 


?> 
</body>
</html>
