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


$bill_no = $_GET['bill_no'];
$bill_stat = $_GET['bill_stat'];
$bill_amount  = $_GET['bill_amount'];


$query = "INSERT into bill values ('$bill_no','$bill_stat','$bill_amount');";


$result = mysqli_query($connection,$query);

if ($result) {
	echo "Billing Info DataBase : <br>";
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM bill ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Bill Query</h1>
	</head>
	<body style="margin: auto;width: 60%; border:6px solid #73AD21;padding: 20px;background-color: #e6edf5;">
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
	</script><br><br><br><br><hr>
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Bill No : " . $row['bill_no']."<br>";
	echo "Bill Status : "  . $row['bill_stat'] . "<br>";
	echo "Bill Amount : "  . $row['bill_amount']  ."<br><br><hr>";
	

} 


?> 
</body>
</html>
