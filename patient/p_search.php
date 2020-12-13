<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Patient's Search
<button style = "width:80px;height:80px; margin-left:250px;"  onclick="myFunction()">Print</button>
</h1>
	</head>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5">
	<script>
		function myFunction() {
   		 window.print();
			}
</script><br><br><br><br><br><br><br><hr>
<?php
// define variables and set to empty values
$pnameErr = $pmobErr = $pemailErr = $pgenderErr = $paddrErr =$pageErr=$gnameErr=$psttErr="";
$pname = $pmob= $pemail = $pgender = $paddr=$gname=$page=$pstt=$room_no=$cdate="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["pname"])) {
     $pnameErr = "";
   } else {
     
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {
       $pnameErr = "Only letters and white space allowed";
     }
   }
  
   
   if (empty($_POST["pemail"])) {
   } else {
     $x=$_POST["pemail"];
     // check if e-mail address is well-formed
     if (!filter_var($x, FILTER_VALIDATE_EMAIL)) {
       $pemailErr = "Invalid email format";
     }
   }
    

   if (empty($_POST["page"])) {
   	}/*else {
     if (!preg_match("/^([0-9]{1,3})$/",$page)) {
       $pageErr = "invalid age...!!!";
     }
   }*/
  	
   
   if (empty($_POST["gname"])) {
     $gnameErr = "";
   } else {
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$gname)) {
       $gnameErr = "Only letters and white space allowed";
     }
   }
   
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(isset($_POST['s1']) && isset($_POST['pname'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$pname=$_POST['pname'];
	$sql = "SELECT * FROM patient WHERE pat_name LIKE '%$pname%'";
		
	$retval = mysqli_query( $conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s2']) && isset($_POST['pmob'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$pmob=$_POST['pmob'];
	$sql = "SELECT * FROM patient WHERE pat_phone LIKE '%$pmob%'";
		
	$retval = mysqli_query( $conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s3']) && isset($_POST['pemail'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$pemail=$_POST['pemail'];
	$sql = "SELECT * FROM patient WHERE pat_mail LIKE '%$pemail%'";
		
	$retval = mysqli_query( $conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s4']) && isset($_POST['paddr'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$paddr=$_POST['paddr'];
	$sql = "SELECT * FROM patient WHERE pat_address LIKE '%$paddr%'";
		
	$retval = mysqli_query($conn, $sql);
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s5']) && isset($_POST['pgender'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$pgender=$_POST['pgender'];
	$sql = "SELECT * FROM patient WHERE pat_gender LIKE '$pgender%'";
		
	$retval = mysqli_query( $conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s6']) && isset($_POST['page'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	//echo 'connection successful';
	
	$page=$_POST['page'];
	$sql = "SELECT * FROM patient WHERE pat_age LIKE '%$page%'";
		
	$retval = mysqli_query($conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s7']) && isset($_POST['gname'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}

	//echo 'connection successful';
	
	$gname=$_POST['gname'];
	$sql = "SELECT * FROM patient WHERE pat_guardian_name LIKE '%$gname%'";
		
	$retval = mysqli_query( $conn, $sql);
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}
else if(isset($_POST['s8']) && isset($_POST['pstt'])){
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	//echo 'connection successful';
	
	$pstt=$_POST['pstt'];
	$sql = "SELECT * FROM patient WHERE pat_status LIKE '%$pstt%'";
		
	$retval = mysqli_query( $conn, $sql );
	if(! $retval ){
		die('Could not enter data: ' . mysqli_error());
	}
	
	if($retval){
		echo "\nPatient Data <br>";
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			
			
			echo "Pat_id :{$row['pat_id']} <br> ".
			"Pat_name  : {$row['pat_name']}<br> ".
			"Pat_gender: {$row['pat_gender']}<br> ".
			"Pat_phone : {$row['pat_phone']} <br> ".
			"Pat_email:  {$row['pat_mail']} <br> ".
			"Pat_addr:   {$row['pat_address']}<br> ".
			"Pat_age : 	 {$row['pat_age']}<br> ".
			"guardian_name : {$row['pat_guardian_name']}<br> ".
			"Pat_status : {$row['pat_status']} <br>";
			
		//echo "Fetched data successfully\n";
			$pstt=$row['pat_status'];
			$pid=$row['pat_id'];
			
			

		echo "------------------------------------------------------------------------------------<br>";
		}
	}

	
	mysqli_close($conn);
}

else{
	
	?>
	<h2 style="text-align:center; color:green ">Search Patient Acc. to Info Provided</h2>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" Style="margin-left:">
		<div class="form-group">
            <label for="fname">
                <b>Patient Name:</b>
            </label> <span class="error">* <?php echo $pnameErr;?></span>
            <input type="text"   class="form-control"  name="pname" placeholder="Patient Name" pattern="*[a-z A-Z]" value="<?php echo $pname;?>"/>
            <input type="submit" name="s1" value="Search">
        </div>
	   <!-- Patient Name: <input type="text" name="pname" value="<?php #echo $pname;?>">
	   <span class="error"><?php #echo $pnameErr;?></span>
	   <input type="submit" name="s1" value="Search">
	   <br><br> -->
	   <div class="form-group">
            <label for="phone">
                <b>Mobile number 1</b>
            </label><span class="error">* <?php echo $pmobErr;?></span>
            <input type="text"   class="form-control" name="pmob" placeholder="mobile number" pattern="[0-9]{10}" value="<?php echo $pmob;?>"/>
            <input type="submit" name="s2" value="Search">
        </div>
	   <!-- Mobile No. : <input type="text" name="pmob" value="<?php #echo $pmob;?>">
	   <input type="submit" name="s2" value="Search">
	   <br><br> -->
	   <div class="form-group">
            <label for="Email">
                <b>Email</b>
            </label> <span class="error">* <?php echo $pemailErr;?></span>
            <input type="email"  class="form-control" name="pemail" placeholder="Email" value="<?php echo $pemail;?>" />
            <input type="submit" name="s3" value="Search">
        </div>
	  <!--  E-mail: <input type="text" name="pemail" value="<?php# echo $pemail;?>">
	   <span class="error"><?php #echo $pemailErr;?></span>
	   <input type="submit" name="s3" value="Search">
	   <br><br> -->
	  <div class="form-group">
            <label for="Address">
                <b>Address</b>
            </label> <span class="error">* <?php echo $paddr;?></span>
            <textarea name = "paddr" placeholder="address" class="form-control" ="" cols="20" rows="4" value="<?php echo $paddr;?>"></textarea>
            <input type="submit" name="s4" value="Search">
        </div>
	   <!-- Address: <textarea name="paddr" rows="5" cols="40"><?php echo $paddr;?></textarea>
	   <input type="submit" name="s4" value="Search">
	   <br><br> -->
	   
	  <b> Gender:</b>
	   <input type="radio" name="pgender" <?php if (isset($pgender) && $pgender=="female") echo "checked";?>  value="female">Female
	   <input type="radio" name="pgender" <?php if (isset($pgender) && $pgender=="male") echo "checked";?>  value="male">Male
	   <input type="submit" name="s5" value="Search">
	   <br><br>
	   <div class="form-group">
            <label for="Age">
                <b>Age</b>
            </label> <span class="error">* <?php echo $pageErr;?></span>
            <input type="text"   class="form-control"  name="page" placeholder=" Age" pattern="[0-9]{1,3}" value="<?php echo $page;?>"/>
            <input type="submit" name="s6" value="Search">
        </div>
	   <!-- Age : <input type="text" name="page" value="<?php #echo $page;?>">
	   <input type="submit" name="s6" value="Search">
	   <br><br>
	    -->
	    <div class="form-group">
            <label for="gname">
                <b>Guardian Name:</b>
            </label> <span class="error">* <?php echo $gnameErr;?></span>
            <input type="text"   class="form-control"  name="gname" placeholder="Guardian Name" pattern="*[a-z A-Z]"/ value="<?php echo $gname;?>">
            <input type="submit" name="s7" value="Search">
        </div>
	   <!-- Guardian Name: <input type="text" name="gname" value="<?php #echo $gname;?>">
	   <input type="submit" name="s7" value="Search">
	   <span class="error"> <?php #echo $gnameErr;?></span>
	   <br><br> -->
	   
	   <b>Status :</b>
	   <input type="radio" name="pstt" <?php if (isset($pstt) && $pstt=="admitted") echo "checked";?>  value="admitted">admitted
	   <input type="radio" name="pstt" <?php if (isset($pstt) && $pstt=="regular") echo "checked";?>  value="regular">regular
	   <span class="error"> <?php echo $psttErr;?></span>
	   <input type="submit" name="s8" value="Search">
	   <br><br>
	   
	    
	   
	</form>
<?php
}

?>

</body>
</html>
