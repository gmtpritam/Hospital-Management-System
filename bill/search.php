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
	<title>Bill Search Result </title>
	</head> 
	<h1 style="text-align: center;"><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Search Result</h1>
	<button style = "width:40px;height:20px; margin-left:70%;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
			</script>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<br><br><br><br><br><br><br><br>
<?php

if($_GET['sel'] == "bill_no"){

	$bill_no = $_GET['attr'];
	$query = "SELECT * FROM bill WHERE bill_no = $bill_no ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nBill search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Bill No : " . $row['bill_no']."<br>";
	echo " Bill Status : "  . $row['bill_stat'] . "<br>";
	echo " Bill Amount : "  . $row['bill_amount']  ."<br>";
	} }		


}
else if($_GET['sel'] == "bill_stat"){

	$bill_stat = $_GET['attr'];
	$query = "SELECT * FROM bill WHERE bill_stat like '$bill_stat' ";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		echo "\nBill search result <br>";
	while($row= mysqli_fetch_assoc($result)) {
	echo " Bill No : " . $row['bill_no']."<br>";
	echo " Bill Status : "  . $row['bill_stat'] . "<br>";
	echo " Bill Amount : "  . $row['bill_amount']  ."<br><br>";
	} }		


}



?>

</body></html>