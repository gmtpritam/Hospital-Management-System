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
?>
<!doctype html>
<html lang = "en">
	<head>
	<title> Search Result of Doctor's query </title>
	<h1><a href="../"> <img src="home.png" alt="home" style="width:140px;height:140px; " align="left" ></a>Search Result of Doctor's query</h1>
	</head>
	<button style = "width:40px;height:20px; margin-left:70%;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script><br><br><br><br><hr>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5"><br><br>
	
	<?php

if($_GET['sel'] == "doc_id"){

	$doc_id = $_GET['attr'];
	$query = "SELECT * FROM doctor WHERE doc_id LIKE '%$doc_id%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	echo "\n <h2>Doctor's search result </h2>";
	if($result){
	while($row= mysqli_fetch_assoc($result)) {
	echo "Doctor's ID :" ."   " .$row['doc_id'] ."<br>";
	echo "<br>";
	 echo "First Name :" ."   " .$row['doc_fname'] ."<br>";
	echo "Last Name :" ."   "  .$row['doc_lname'] ."<br>";
	echo "<br>";
	echo "Age :"  ."   " . $row['doc_age'] ."<br>";
	echo "phone1 :" ."   "  .$row['doc_phone1']."<br>";
	echo "phone2 :"  ."   " .$row['doc_phone2']."<br>";
	echo "Address :"  ."   " .$row['doc_address']."<br>";
	echo "<br>";
	echo "Department :" ."   " . $row['dept_name']."<br>";
	echo "degree 1 :" ."   "  . $row['doc_degree1']."<br>";
	echo "degree2 :" ."   " . $row['doc_degree2'] ."<br>";
	echo "degree3 :" ."   " .$row['doc_degree2'] . "<hr><br><hr>";
	} 
	}		


}


elseif($_GET['sel'] == "doc_name"){

	$doc_name = $_GET['attr'];

	$query = "SELECT * FROM doctor WHERE doc_fname LIKE '%$doc_name%'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
	while($row= mysqli_fetch_assoc($result)) {
	echo "Doctor's ID :" ."   " .$row['doc_id'] ."<br>";
	 echo "First Name :" ."   " .$row['doc_fname'] ."<br>";
	echo "Last Name :" ."   "  .$row['doc_lname'] ."<br>";
	echo "Age :"  ."   " . $row['doc_age'] ."<br>";
	echo "phone1 :" ."   "  .$row['doc_phone1']."<br>";
	echo "phone2 :"  ."   " .$row['doc_phone2']."<br>";
	echo "Address :"  ."   " .$row['doc_address']."<br>";
	echo "Department :" ."   " . $row['dept_name']."<br>";
	echo "degree 1 :" ."   "  . $row['doc_degree1']."<br>";
	echo "degree2 :" ."   " . $row['doc_degree2'] ."<br>";
	echo "degree3 :" ."   " .$row['doc_degree2'] . "<hr><br><hr>";
	} 
}

}


else if($_GET['sel'] == "doc_age"){

	$doc_age = $_GET['attr'];
	$query = "SELECT * FROM doctor WHERE doc_age = $doc_age";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
	while($row= mysqli_fetch_assoc($result)) {
	echo "Doctor's ID :" ."   " .$row['doc_id'] ."<br>";
	 echo "First Name :" ."   " .$row['doc_fname'] ."<br>";
	echo "Last Name :" ."   "  .$row['doc_lname'] ."<br>";
	echo "Age :"  ."   " . $row['doc_age'] ."<br>";
	echo "phone1 :" ."   "  .$row['doc_phone1']."<br>";
	echo "phone2 :"  ."   " .$row['doc_phone2']."<br>";
	echo "Address :"  ."   " .$row['doc_address']."<br>";
	echo "Department :" ."   " . $row['dept_name']."<br>";
	echo "degree 1 :" ."   "  . $row['doc_degree1']."<br>";
	echo "degree2 :" ."   " . $row['doc_degree2'] ."<br>";
	echo "degree3 :" ."   " .$row['doc_degree2'] . "<hr><br><hr>";
	} }

}

else {

	$doc_degree = $_GET['attr'];
	$query = "SELECT * FROM doctor WHERE doc_degree1 LIKE '$doc_degree'";
		
	$result = mysqli_query($connection ,$query);
	if(! $result ){
		die('Could not search: ' . mysql_error());
	}
	
	if($result){
		
	while($row= mysqli_fetch_assoc($result)) {
	echo "Doctor's ID :" ."   " .$row['doc_id'] ."<br>";
	 echo "First Name :" ."   " .$row['doc_fname'] ."<br>";
	echo "Last Name :" ."   "  .$row['doc_lname'] ."<br>";
	echo "Age :"  ."   " . $row['doc_age'] ."<br>";
	echo "phone1 :" ."   "  .$row['doc_phone1']."<br>";
	echo "phone2 :"  ."   " .$row['doc_phone2']."<br>";
	echo "Address :"  ."   " .$row['doc_address']."<br>";
	echo "Department :" ."   " . $row['dept_name']."<br>";
	echo "degree 1 :" ."   "  . $row['doc_degree1']."<br>";
	echo "degree2 :" ."   " . $row['doc_degree2'] ."<br>";
	echo "degree3 :" ."   " .$row['doc_degree2'] . "<hr><br><hr>";
	} 

}}
?>
<a  href="d_search.php">Back</a>
</body></html>