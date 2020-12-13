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
	<title> Search Result </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Search Result of Treatment</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
			</script>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<br><br><br><br><hr>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5">
	<?php




if($_GET['sel'] == "t_id"){

	$t_id = $_GET['attr'];
	$query = "SELECT * FROM treatment WHERE t_id = $t_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nTreatment search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Treatment Id : " . $row['t_id']."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id']  ."<br>";
	echo " Symptoms  : "  . $row['t_sympt'] . "<br>";
	echo " Prescription  : "  . $row['t_prescrp'] . "<br>";
	echo " Tests : "  . $row['t_test'] . "<br><br><br>";
	} }		


}
else if($_GET['sel'] == "doc_id"){

	$doc_id = $_GET['attr'];
	$query = "SELECT * FROM treatment WHERE doc_id = $doc_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nTreatment search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Treatment Id : " . $row['t_id']."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id']  ."<br>";
	echo " Symptoms  : "  . $row['t_sympt'] . "<br>";
	echo " Prescription  : "  . $row['t_prescrp'] . "<br>";
	echo " Tests : "  . $row['t_test'] . "<br><hr><br><br>";
	} }		


}


else if($_GET['sel'] == "pat_id"){

	$pat_id = $_GET['attr'];
	$query = "SELECT * FROM treatment WHERE pat_id = $pat_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nTreatment search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Treatment Id : " . $row['t_id']."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id']  ."<br>";
	echo " Symptoms  : "  . $row['t_sympt'] . "<br>";
	echo " Prescription  : "  . $row['t_prescrp'] . "<br>";
	echo " Tests : "  . $row['t_test'] . "<br><hr><br><br>";
	} }		


}

else if($_GET['sel'] == "t_sympt"){

	$t_sympt = $_GET['attr'];
	$query = "SELECT * FROM treatment WHERE t_sympt like '%$t_sympt%' ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nTreatment search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Treatment Id : " . $row['t_id']."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id']  ."<br>";
	echo " Symptoms  : "  . $row['t_sympt'] . "<br>";
	echo " Prescription  : "  . $row['t_prescrp'] . "<br>";
	echo " Tests : "  . $row['t_test'] . "<br><hr><br><br>";
	} }		


}
else if($_GET['sel'] == "t_test"){

	$t_test = $_GET['attr'];
	$query = "SELECT * FROM treatment WHERE t_test LIKE '%$t_test%' ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nTreatment search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Treatment Id : " . $row['t_id']."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id']  ."<br>";
	echo " Symptoms  : "  . $row['t_sympt'] . "<br>";
	echo " Prescription  : "  . $row['t_prescrp'] . "<br>";
	echo " Tests : "  . $row['t_test'] . "<br><hr><br><br>";
	} }		


}


?>

</body></html>