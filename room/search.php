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

$room = $_GET['attr'];


$query = "SELECT * FROM patient p where p.pat_id in(select a.pat_id from admit_patient a where room_no = '$room'); ";
/*
$query = " SELECT  * from admit_patient where room_no = '$room';";
*/
$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
if($result == NULL) {
echo "Room is Available";}

?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Room </title>
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>room's DataBase</h1>
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
$flag=0;
while($row= mysqli_fetch_assoc($result)) {
	$flag=1;
	echo " Room No :". $room ."<br>";
	echo "Patient Name :" . $row['pat_name']. "<br>";
	echo "Patient Id :" . $row['pat_id'] . "<br><br><hr>";
} 


if($flag == 0) {
echo "Room ". $room . "  is Available";}

?> 
</body>
</html>
 