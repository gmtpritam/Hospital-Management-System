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
	<title> Search operation </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Search operation's query</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script><br><br><br><br><hr>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5"><br><br>
	<?php

if($_GET['sel'] == "o_id"){

	$o_id = $_GET['attr'];
	$query = "SELECT * FROM operation WHERE o_id = $o_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nOperation search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Operation Id : " . $row['o_id']."<br>";
	echo " Opearation Date : "  . $row['o_date'] . "<br>";
	echo " Operation Time : "  . $row['o_time']  ."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br><hr><br><br>";
	} }		


}
else if($_GET['sel'] == "o_date"){

	$o_date = $_GET['attr'];
	$query = "SELECT * FROM operation WHERE o_date = $o_date";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nOperation search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Operation Id : " . $row['o_id']."<br>";
	echo " Opearation Date : "  . $row['o_date'] . "<br>";
	echo " Operation Time : "  . $row['o_time']  ."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br><hr><br><br>";
	} }		


}


else if($_GET['sel'] == "o_time"){

	$o_time = $_GET['attr'];
	$query = "SELECT * FROM operation WHERE o_time= $o_time";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nOperation search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Operation Id : " . $row['o_id']."<br>";
	echo " Opearation Date : "  . $row['o_date'] . "<br>";
	echo " Operation Time : "  . $row['o_time']  ."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br><hr><br><br>";
	} }		


}

else if($_GET['sel'] == "doc_id"){

	$doc_id = $_GET['attr'];
	$query = "SELECT * FROM operation WHERE doc_id = $doc_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nOperation search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Operation Id : " . $row['o_id']."<br>";
	echo " Opearation Date : "  . $row['o_date'] . "<br>";
	echo " Operation Time : "  . $row['o_time']  ."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br><hr><br><br>";
	} }		


}
else if($_GET['sel'] == "pat_id"){

	$pat_id = $_GET['attr'];
	$query = "SELECT * FROM operation WHERE pat_id = $pat_id";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nOperation search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Operation Id : " . $row['o_id']."<br>";
	echo " Opearation Date : "  . $row['o_date'] . "<br>";
	echo " Operation Time : "  . $row['o_time']  ."<br>";
	echo " Doctor Id : "  . $row['doc_id'] . "<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br><hr><br><br>";
	} }		


}


?>
</body></html>