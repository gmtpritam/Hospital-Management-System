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



$pay_no = $_GET['pay_no'];
$pat_id = $_GET['pat_id'];
$bill_no  = $_GET['bill_no'];
$pay_date = $_GET['pay_date'];

$query = "INSERT into payment values ('$pay_no','$pat_id','$bill_no','$pay_date');";


$result = mysqli_query($connection,$query);

if ($result) {
	/*echo "Billing Info DataBase : <br>";*/
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM payment ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>



<!doctype html>
<html lang = "en">
	<head>
	<title>payment </title>
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Payment's DataBase</h1>
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
	echo "Payment No : " . $row['pay_no']."<br>";
	echo "Patient Id : "  . $row['pat_id'] . "<br>";
	echo "Bill No : "  . $row['bill_no'] . "<br>";
	echo "Payment Date : "  . $row['pay_date']  ."<br><hr><br>";
	

} 


?> 
</body>
</html>
