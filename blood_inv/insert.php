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


$bi_id = $_GET['bi_id'];

$query = "INSERT into b_inventory values ('$bi_id');";


$result = mysqli_query($connection,$query);

if ($result) {
	/*echo "b_inventorys Exists : <br>"; */
}
else {
	die("1database query failed <br>" . mysqli_error($connection));

}

$query = "SELECT * FROM b_inventory ";

$result = mysqli_query($connection,$query);

if (!$result) {
 	die("2database query failed" . mysqli_error($connection));
}
?>


<!doctype html>
<html lang = "en">
	<head>
	<title> b_inventory </title>
	</head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>b_inventory's DataBase</h1>
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
	echo "b_inventory Id : " . $row['bi_id']."<br><br><hr>";
	
} 


?> 
</body>
</html>
