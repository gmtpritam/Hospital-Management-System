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

$doc_id = $_GET['doc_id'];


$query = "DELETE FROM doctor WHERE doc_id = '$doc_id'";


$result = mysqli_query($connection,$query);

if ($result) {

	echo "sucess ";
}
else 
	die("1database query failed <br>" . mysqli_error($connection));



?>

<!doctype html>
<html lang = "en">
	<head>
	<title> Display Doctor's query </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Delete from database</h1>
	
	<button style = "width:80px;height:80px; margin-left:400px;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script><br><br><br><br><hr>

<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5" >
	
	<?php 

echo "Doctor Id $doc_ic deleted successfully";

?> 


</body>
</html>