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

$t_id = $_GET['t_id'];
$doc_id = $_GET['doc_id'];
$pat_id  = $_GET['pat_id'];
$t_test  = $_GET['t_test'];
$t_prescrp  = $_GET['t_prescrp'];
$t_sympt  = $_GET['t_sympt'];


$query = "INSERT into treatment values ('$t_id','$doc_id','$pat_id','$t_sympt','$t_test','$t_prescrp');";


$result = mysqli_query($connection,$query);

if ($result) {
	/*echo "Treatment DataBase";*/
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM treatment ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title>Treatment </title>
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Treatment's DataBase</h1>
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
	echo "Doctor Id" . $row['doc_id']."<br>";
	echo "Treatment Id "  . $row['t_id']  ."<br>";
	echo "Patient ID "  . $row['pat_id'] . "<br>";
	echo "Treatment test "  . $row['t_test'] . "<br>";
	echo "Prescription "  . $row['t_prescrp'] . "<br>";
	echo "Symptom"  . $row['t_sympt'] . "<br><hr><br><br>";

} 


?> 
</body>
</html>
