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
?>
<!doctype html>
<html lang = "en">
	<head>
	<title> Search Result of Doctor's query </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Search Result of Doctor's query</h1>
	</head>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5"><br><br><br><br><br><br><br><br>
	<hr>
<?php
if($_GET['sel'] == "sf_no"){

	$sf_no = $_GET['attr'];
	$query = "SELECT * FROM staff WHERE sf_no LIKE '%$sf_no%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nstaff's search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo "Staff Name " . "    ". $row['sf_name']."<br>";
	echo "Staff Gender "."    "  . $row['sf_gender'] . "<br>";
	echo "Staff No "  ."    " .$row['sf_no']  ."<br>";
	echo "Staff Age "  ."    ". $row['sf_age'] . "<br>";
	echo "Staff Phone 1 "  ."    ". $row['sf_phno'] . "<br>";
	echo "Staff Phone 2 "  ."    ". $row['sf_phno2'] . "<br>";
	echo "Staff Address "  ."    ". $row['sf_addr'] . "<br>";
	echo "Staff Department "  ."    ". $row['sf_dept'] . "<br><hr><br><br>";

	} 
	}		


}


elseif($_GET['sel'] == "sf_name"){

	$sf_name = $_GET['attr'];

	$query = "SELECT * FROM staff WHERE sf_name LIKE '%$sf_name%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nstaff's search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo "Staff Name " . $row['sf_name']."<br>";
	echo "Staff Gender "  . $row['sf_gender'] . "<br>";
	echo "Staff No "  . $row['sf_no']  ."<br>";
	echo "Staff Age "  . $row['sf_age'] . "<br>";
	echo "Staff Phone 1 "  . $row['sf_phno'] . "<br>";
	echo "Staff Phone 2 "  . $row['sf_phno2'] . "<br>";
	echo "Staff Address "  . $row['sf_addr'] . "<br>";
	echo "Staff Department "  . $row['sf_dept'] . "<br><hr><br><br>";

	} 
}

}


else if($_GET['sel'] == "sf_gender"){

	$sf_gender = $_GET['attr'];
	$query = "SELECT * FROM staff WHERE sf_gender = '$sf_gender'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nstaff's search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo "Staff Name " . $row['sf_name']."<br>";
	echo "Staff Gender "  . $row['sf_gender'] . "<br>";
	echo "Staff No "  . $row['sf_no']  ."<br>";
	echo "Staff Age "  . $row['sf_age'] . "<br>";
	echo "Staff Phone 1 "  . $row['sf_phno'] . "<br>";
	echo "Staff Phone 2 "  . $row['sf_phno2'] . "<br>";
	echo "Staff Address "  . $row['sf_addr'] . "<br>";
	echo "Staff Department "  . $row['sf_dept'] . "<br><hr><br><br>";

	} }

}

else {

	$sf_dept = $_GET['attr'];
	$query = "SELECT * FROM staff WHERE sf_dept = '$sf_dept'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nstaff's search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo "Staff Name " . $row['sf_name']."<br>";
	echo "Staff Gender "  . $row['sf_gender'] . "<br>";
	echo "Staff No "  . $row['sf_no']  ."<br>";
	echo "Staff Age "  . $row['sf_age'] . "<br>";
	echo "Staff Phone 1 "  . $row['sf_phno'] . "<br>";
	echo "Staff Phone 2 "  . $row['sf_phno2'] . "<br>";
	echo "Staff Address "  . $row['sf_addr'] . "<br>";
	echo "Staff Department "  . $row['sf_dept'] . "<br><hr><br><br>";

	} 

}}
?>

</body></html>