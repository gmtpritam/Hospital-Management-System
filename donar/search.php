<?php

$db_host = "localhost:3306";
$db_user = "root" ;
$db_pass = "";
$db_name = "hms" ;

$connection = mysqli_connect($db_host , $db_user ,  $db_pass ,$db_name);
if( mysqli_connect_errno()) {
 die("<b>Database failed to open<b> <br> "  
 	          .    mysqli_connect_errno() );
}

?>



<!doctype html>
<html lang = "en">
<head>
<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Donor's Search Result</h1>
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

<?php


if($_GET['sel'] == "d_id"){

	$d_id = $_GET['attr'];
	$query = "SELECT * FROM donar WHERE d_id LIKE '%$d_id%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		/*echo "\nDonar search result <br>";*/
	while($row= mysqli_fetch_assoc($result)) {
	echo " Name : " . $row['d_name']."<br>";
	echo " Gender : "  . $row['d_gender'] . "<br>";
	echo " Id : "  . $row['d_id']  ."<br>";
	echo " Age : "  . $row['d_age'] . "<br>";
	echo " Phone  : "  . $row['d_phone'] . "<br>";
	echo " Address : "  . $row['d_addr'] . "<br>";
	echo " Blood Type : "  . $row['d_b_type'] . "<br><br>";
	} }		


}
else if($_GET['sel'] == "d_name"){

	$d_name = $_GET['attr'];
	$query = "SELECT * FROM donar WHERE d_name LIKE '%$d_name%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nDonar search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Name : " . $row['d_name']."<br>";
	echo " Gender : "  . $row['d_gender'] . "<br>";
	echo " Id : "  . $row['d_id']  ."<br>";
	echo " Age : "  . $row['d_age'] . "<br>";
	echo " Phone  : "  . $row['d_phone'] . "<br>";
	echo " Address : "  . $row['d_addr'] . "<br>";
	echo " Blood Type : "  . $row['d_b_type'] . "<br><br>";
	} }		


}

else if($_GET['sel'] == "d_b_type"){

	$d_b_type = $_GET['attr'];
	$query = "SELECT * FROM donar WHERE d_b_type LIKE '%$d_b_type%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nDonar search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Name : " . $row['d_name']."<br>";
	echo " Gender : "  . $row['d_gender'] . "<br>";
	echo " Id : "  . $row['d_id']  ."<br>";
	echo " Age : "  . $row['d_age'] . "<br>";
	echo " Phone  : "  . $row['d_phone'] . "<br>";
	echo " Address : "  . $row['d_addr'] . "<br>";
	echo " Blood Type : "  . $row['d_b_type'] . "<br><br>";
	} }		


}
else if($_GET['sel'] == "d_addr"){

	$d_addr = $_GET['attr'];
	$query = "SELECT * FROM donar WHERE d_addr LIKE '%$d_addr%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nDonar search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Name : " . $row['d_name']."<br>";
	echo " Gender : "  . $row['d_gender'] . "<br>";
	echo " Id : "  . $row['d_id']  ."<br>";
	echo " Age : "  . $row['d_age'] . "<br>";
	echo " Phone  : "  . $row['d_phone'] . "<br>";
	echo " Address : "  . $row['d_addr'] . "<br>";
	echo " Blood Type : "  . $row['d_b_type'] . "<br><br>";
	} }		


}

?>

</body></html>