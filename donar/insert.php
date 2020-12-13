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

$d_id = $_GET['d_id'];
$d_name = $_GET['d_name'];
$d_age  = $_GET['d_age'];
$d_phone  = $_GET['d_phone'];
$d_b_type  = $_GET['d_b_type'];
$d_addr  = $_GET['d_addr'];
$d_gender = $_GET['d_gender'];


$query = "INSERT into donar values ('$d_id','$d_name','$d_b_type','$d_age','$d_gender','$d_phone','$d_addr');";


$result = mysqli_query($connection,$query);

if ($result) {
	/*echo "Donar DataBase : <br>";*/
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM donar ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Donar's DataBase</h1>
	</head>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5">
<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script>
<br><br><br><br><hr>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Donar Name : " . $row['d_name']."<br>";
	echo "Donar Gender : "  . $row['d_gender'] . "<br>";
	echo "Donar Id : "  . $row['d_id']  ."<br>";
	echo "Donar Age : "  . $row['d_age'] . "<br>";
	echo "Donar Phone  : "  . $row['d_phone'] . "<br>";
	echo "Donar Address : "  . $row['d_addr'] . "<br>";
	echo "Donar Blood Type : "  . $row['d_b_type'] . "<br><hr><br><br>";

} 


?> 
</body>
</html>
