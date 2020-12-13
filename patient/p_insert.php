<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" ></a>Patient's DataBase</h1>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	</head>
<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5">
<button style = "width:50px;height:30px; margin-left:60%;"  onclick="myFunction()">Print</button>
</h1>
	</head>	<script>
		function myFunction() {
   		 window.print();
			}
</script>
<br><br><br><br><hr>
<?php
// define variables and set to empty values
$pnameErr = $pmobErr = $pemailErr = $pgenderErr = $paddrErr =$pageErr=$gnameErr=$psttErr="";
$pname = $pmob= $pemail = $pgender = $paddr=$gname=$page=$pstt=$room_no=$cdate="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["pname"])) {
     $pnameErr = "Name is required";
   } else {
     
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {
       $pnameErr = "Only letters and white space allowed";
     }
   }
  
  if (empty($_POST["pmob"])) {
     $pmobErr = "Contact number is required";
   }/*else {
     if (!preg_match("/^([0-9]{10})$/",$pmob)) {
       $pmobErr = "invalid mobile number...!!!";
     }
   }*/
   
   if (empty($_POST["pemail"])) {
     $pemailErr = "optional";
   } else {
     $x=$_POST["pemail"];
     // check if e-mail address is well-formed
     if (!filter_var($x, FILTER_VALIDATE_EMAIL)) {
       $pemailErr = "Invalid email format";
     }
   }
    

   if (empty($_POST["paddr"])) {
     $paddr = "Address required";
   }

   if (empty($_POST["pgender"])) {
     $pgenderErr = "Gender is required";
   }
   
   if (empty($_POST["page"])) {
     $pageErr = "Patient age is required";
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
   
   if (empty($_POST["pstt"])) {
     $psttErr = "Status is required";
   }
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(isset($_POST['submit']) && isset($_POST['pname']) && isset($_POST['pstt']) && isset($_POST['pmob']) && isset($_POST['pemail']) && isset($_POST['pgender']) && isset($_POST['page'])){
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db_name = "hms" ;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	
	
	//echo 'connection successful';
	
	$pname=$_POST['pname'];
	$pmob=$_POST['pmob'];
	$pemail=$_POST['pemail'];
	$paddr=$_POST['paddr'];
	$pgender=$_POST['pgender'];
	$page=$_POST['page'];
	$gname=$_POST['gname'];
	$pstt=$_POST['pstt'];
	
	$sql = "insert into patient ".
	"(pat_name,pat_phone,pat_mail,pat_address,pat_gender,pat_age,pat_guardian_name,pat_status) ".
	"VALUES ".
	"('$pname','$pmob','$pemail','$paddr','$pgender','$page','$gname','$pstt')";
	
	$retval = mysqli_query( $conn, $sql);
	if(! $retval ){
		die('Could not enter data: ' . mysql_error());
	}
	// echo "Data Entered Successfully <br><br>";
	

	$sql2 = 'SELECT * FROM patient';
	
	$q2val=mysqli_query( $conn, $sql2 );
	
	if($q2val){
		while($row = mysqli_fetch_array($q2val, MYSQLI_ASSOC)){
			
			$pid=$row['pat_id'];
		}
			echo "\nPatient Data <br>";
			echo "Pat_id :$pid <br> ".
			"Pat_name  : $pname <br> ".
			"Pat_gender: $pgender<br> ".
			"Pat_phone : $pmob <br> ".
			"Pat_email:  $pemail <br> ".
			"Pat_addr:   $paddr <br> ".
			"Pat_age : 	 $page <br> ".
			"guardian_name : $gname <br> ".
			"--------------------------------<br>";
		//echo "Fetched data successfully\n";
	
		
		if($pstt == 'admitted'){	
   			$room_no=$_POST['room_no'];	
			$sql3="insert into admit_patient values ('$pid','$room_no')";
			
			echo "\nExtra details <br>";
			echo "Pat_id : $pid <br> ".
			"Room No  : $room_no <br> ";
	
		}
		else{
			$cdate=$_POST['cdate'];  	
			$sql3="insert into reg_patient values ('$pid','$cdate')"; 		
			
			echo "\nExtra Details <br>";
			echo "Pat_id : $pid <br> ".
			"L_Checkup Date  : $cdate <br> ";
	
		}
	
		$r3=mysqli_query($conn, $sql3);
	}
	mysqli_close($conn);
}
else{
	
	?>
	<h2 style="text-align:center; color:green ">PATIENT ENTRY FORM</h2>
	<p><span class="error" Style="margin-left:">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" Style="margin-left:">
		<div class="form-group">
            <label for="fname">
                <b>Patient Name:</b>
            </label> <span class="error">* <?php echo $pnameErr;?></span>
            <input type="text" required  class="form-control"  name="pname" placeholder="Patient Name" pattern="*[a-z A-Z]"/>
        </div>
	


	   <!-- Patient Name: <input type="text" name="pname" value="<?php #echo $pname;?>">
	   <span class="error">* <?php #echo $pnameErr;?></span>
	   <br><br> -->
	   <div class="form-group">
            <label for="phone">
                <b>Mobile number 1</b>
            </label><span class="error">* <?php echo $pmobErr;?></span>
            <input type="text" required  class="form-control" name="pmob" placeholder="mobile number" pattern="[0-9]{10}"/>
        </div>
	   <!-- Mobile No. : <input type="text" name="pmob" value="<?php #echo $pmob;?>">
	   <span class="error">* <?php #echo $pmobErr;?></span>
	   <br><br> -->
	   <div class="form-group">
            <label for="Email">
                <b>Email</b>
            </label> <span class="error">* <?php echo $pemailErr;?></span>
            <input type="email"  class="form-control" name="pemail" placeholder="Email" />
        </div>
	   <!-- E-mail: <input type="email" name="pemail" value="<?php #echo $pemail;?>">
	   <span class="error">* <?php #echo $pemailErr;?></span>
	   <br><br> -->
	   <div class="form-group">
            <label for="Address">
                <b>Address</b>
            </label> <span class="error">* <?php echo $paddr;?></span>
            <textarea name = "paddr" placeholder="address" class="form-control" required="required" cols="20" rows="4"></textarea>
        </div>
	  
	   <!-- Address: <textarea name="paddr" rows="5" cols="40"><?php #echo $paddr;?></textarea>
	   <br><br>
	    -->
	   <b>Gender:</b>
	   <input type="radio" name="pgender" <?php if (isset($pgender) && $pgender=="female") echo "checked";?>  value="female">Female
	   <input type="radio" name="pgender" <?php if (isset($pgender) && $pgender=="male") echo "checked";?>  value="male">Male
	   <span class="error">* <?php echo $pgenderErr;?></span>
	   <br><br>
	   <div class="form-group">
            <label for="Age">
                <b>Age</b>
            </label> <span class="error">* <?php echo $pageErr;?></span>
            <input type="text" required  class="form-control"  name="page" placeholder=" Age" pattern="[0-9]{1,3}"/>
        </div>
	   <!-- Age : <input type="text" name="page" value="<?php #echo $page;?>">
	   <span class="error">* <?php #echo $pageErr;?></span>
	   <br><br> -->
	   <div class="form-group">
            <label for="gname">
                <b>Guardian Name:</b>
            </label> <span class="error">* <?php echo $gnameErr;?></span>
            <input type="text" required  class="form-control"  name="gname" placeholder="Guardian Name" pattern="*[a-z A-Z]"/>
        </div>
	   <!-- Guardian Name: <input type="text" name="gname" value="<?php #echo $gname;?>">
	   <span class="error"> <?php #echo $gnameErr;?></span>
	   <br><br> -->
	   
	   <b>Status :</b>
	   <input type="radio" name="pstt" <?php if (isset($pstt) && $pstt=="admitted") echo "checked";?>  value="admitted">admitted
	   <input type="radio" name="pstt" <?php if (isset($pstt) && $pstt=="regular") echo "checked";?>  value="regular">regular
	   <span class="error">* <?php echo $psttErr;?></span>
	   <br><br>
	   
	   <pre> If status is admitted, then enter <b>Room No.</b>   
	   </pre>
	   <div class="form-group">
            <label for="room">
                <b>Room No.</b>
            </label> 
            <input type="text"  class="form-control"  name="room_no" placeholder=" Room No." pattern="[0-9]{1,3}"/>
        </div>
	   <!-- Room No : <input type="text" name="room_no" value="<?php #echo $room_no;?>">
	   <br><br> -->
	   
	   <pre> If status is regular, then enter <b>Checkup_Date</b>  
	   </pre>
	   <div class="form-group">
	        <label for="lastcheck">
	           Last Checkup Date
	        </label>
	        <input class="form-control" id="dob" name="cdate" type="date">
	    </div>
	   
	   <!-- Last Checkup Date (yyyy-mm-dd): <input type="text" name="cdate" value="<?php #echo $cdate;?>">
	   <br><br>
	    -->
	   <input type="submit" name="submit" value="Submit">
	</form>
<?php
}

?>

</body>
</html>
