

<!doctype html>
<html lang = "en"> 
	<head>
		<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> staff's Page </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 28%; border:3px solid #f17420;">Register Staff</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Staff No.</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="sf_no" placeholder="staff's No" pattern="[0-9]{3,20}"/>
        </div>
	<!-- <b>Staff No. <b> <input type="text" name = "sf_no" placeholder="staff's No" required="required" pattern="[0-9]{3,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Full Name</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="sf_name" placeholder="Full Name" pattern="[a-z ' ' A-Z]{1,20}"/>
        </div>
	<!-- <b>Full Name <b><input type = "text" name = "sf_name" placeholder="Full Name" required="required" pattern="[a-z ' ' A-Z]{1,20}" >*<br><br> -->
		<div class="form-group">
          <label class="label">
             <b> Gender </b>
          </label> *
	      <div class="row">
	        <div class="col">
	            <label class="radio-container m-r-45" for="male">
	                Male
	                <input id = "male" type = "radio" name = "sf_gender" value="Male" required="">
	                    <span class="checkmark">
	                    </span>
	            </label>
	        </div>
	        <div class="col">
	            <label class="radio-container">
	                Female
	                <input  type = "radio" name = "sf_gender" value="Female">
	                    <span class="checkmark">
	                    </span>
	            </label>
	         </div>
	      </div>
	  	</div>
	<!-- <b> Gender :<b><input type = "radio" name = "sf_gender" value="Male">Male -->
		<div class="form-group">
            <label for="Age">
                <b>Age</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="sf_age" placeholder=" Age" pattern="[0-9]{1,3}"/>
        </div>
	<!-- <input type = "radio" name = "sf_gender" value="Female">Female<br> -->
	<!-- <b>Age        <b> <input type = "text" name = "sf_age" placeholder=" Age " required="required" pattern="[0-9]{1,3}">*<br><br> -->
		<div class="form-group">
            <label for="phone">
                <b>phone number 1</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="sf_phno" placeholder="Phone number" pattern="[0-9]{10}"/>
        </div>
	<!-- <b>phone number 1<b> <input type ="text" name = "sf_phno" placeholder="Phone number" required="required" pattern="[0-9]{10}">*<br><br> -->
		<div class="form-group">
            <label for="phone">
                <b>phone number 2</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="sf_phno2" placeholder="Phone number" pattern="[0-9]{10}"/>
        </div>
	<!-- <b>phone number 2<b> <input type ="text" name = "sf_phno2" pattern="[0-9]{10}"><br><br> -->
		<div class="form-group">
            <label for="Address">
                <b>Address</b>
            </label>  *
            <textarea name = " sf_addr" placeholder="address" class="form-control" required="required" cols="20" rows="4"></textarea>
        </div>
	<!-- <b>Address <b> <textarea name = " sf_addr" placeholder="address" required="required" cols="20" rows="4"></textarea> *<br><br> -->
		<div class="form-group">
            <label for="Department">
                <b>Department Name</b>
            </label>  * (Enter Dept. that exist in Hospital Database)
            <input type="text" required  class="form-control" id="name" name="sf_dept" placeholder="Department" pattern="[a-z A-Z]{1,20}"/>
        </div>
	<!-- <b>Department Name <b> <input type ="text" name = "sf_dept" placeholder="Department" required="required" pattern="[a-z A-Z]{1,20}"> *<br> <br> -->
		
	
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
