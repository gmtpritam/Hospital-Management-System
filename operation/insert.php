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


$o_id = $_GET['o_id'];
$o_date = $_GET['o_date'];
$o_time = $_GET['o_time'];
$doc_id  = $_GET['doc_id'];
$pat_id  = $_GET['pat_id'];


$query = "INSERT into operation values ('$o_id','$o_date','$o_time','$doc_id','$pat_id');";


$result = mysqli_query($connection,$query);

if ($result) {
	/*echo "Operation DataBase : <br>";*/
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM operation ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> Display Donar's query </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Operation's DataBase</h1>
	</head>
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
</script>
	</head>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<br><br><br><br><br>	
	<?php 
while($row= mysqli_fetch_assoc($result)) {
	echo "Operation Id : " . $row['o_id']."<br>";
	echo "Operation Time : "  . $row['o_time'] . "<br>";
	echo "Doctor Id : "  . $row['doc_id']  ."<br>";
	echo "Patient Id : "  . $row['pat_id'] . "<br><br><br>";

} 

?> 
</body>
</html>
