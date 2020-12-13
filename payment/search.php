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
	<title> Search Result payment</title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Search Result of Payment</h1>
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
if($_GET['sel'] == "pay_no"){

	$pay_no = $_GET['attr'];
	$query = "SELECT * FROM payment WHERE pay_no = $pay_no ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nPayment search details <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Payment No : " . $row['pay_no']."<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br>";
	echo " Bill No : "  . $row['bill_no']  ."<br>";
	echo " Payment Date : "  . $row['pay_date']  ."<br><br>";
	} }		


}
else if($_GET['sel'] == "pat_id"){

	$pat_id = $_GET['attr'];
	$query = "SELECT * FROM payment WHERE pat_id = $pat_id ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nPayment search details <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Payment No : " . $row['pay_no']."<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br>";
	echo " Bill No : "  . $row['bill_no']  ."<br>";
	echo " Payment Date : "  . $row['pay_date']  ."<br><br>";
	} }		


}
else if($_GET['sel'] == "bill_no"){

	$bill_no = $_GET['attr'];
	$query = "SELECT * FROM payment WHERE bill_no = $bill_no ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nPayment search details <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Payment No : " . $row['pay_no']."<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br>";
	echo " Bill No : "  . $row['bill_no']  ."<br>";
	echo " Payment Date : "  . $row['pay_date']  ."<br><br>";
	} }		


}
else if($_GET['sel'] == "pay_date"){

	$bill_no = $_GET['attr'];
	$query = "SELECT * FROM payment WHERE pay_date = $pay_date ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nPayment search details <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Payment No : " . $row['pay_no']."<br>";
	echo " Patient Id : "  . $row['pat_id'] . "<br>";
	echo " Bill No : "  . $row['bill_no']  ."<br>";
	echo " Payment Date : "  . $row['pay_date']  ."<br><br>";
	} }		


}

?>

</body></html>