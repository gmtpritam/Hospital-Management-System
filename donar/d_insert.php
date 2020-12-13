

<!doctype html>
<html lang = "en"> 
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Donar Registration </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 28%; border:3px ;">Register Donar</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Donar Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="d_id" placeholder="Donar Id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Donar Id <b> <input type="text" name = "d_id" placeholder="donar No" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Full Name :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="d_name" placeholder="Full Name" pattern="[a-z ' ' A-Z]{1,20}"/>
        </div>
	<!-- <b>Full Name <b><input type = "text" name = "d_name" placeholder="Full Name" required="required" pattern="[a-z ' ' A-Z]{1,20}" >*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Blood Type :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="d_b_type" placeholder="Blood Type" pattern="[a-zA-Z]{1,2}[+-]{1}"/>
        </div>
	<!-- <b>Blood Type <b><input type = "text" name = "d_b_type" placeholder="d_b_type" required="required" pattern="[a-zA-Z]{1,2}[+-]{1}" >*<br><br> -->
		<div class="form-group">
          <label class="label">
             <b> Gender </b>
          </label> *
	      <div class="row">
	        <div class="col">
	            <label class="radio-container m-r-45" for="male">
	                Male
	                <input id = "male" type = "radio" name = "d_gender" value="Male" required="">
	                    <span class="checkmark">
	                    </span>
	            </label>
	        </div>
	        <div class="col">
	            <label class="radio-container">
	                Female
	                <input  type = "radio" name = "d_gender" value="Female">
	                    <span class="checkmark">
	                    </span>
	            </label>
	         </div>
	      </div>
	  	</div>
	<!-- <b> Gender :<b><input type = "radio" name = "d_gender" value="Male">Male -->
	<!-- <input type = "radio" name = "d_gender" value="Female">Female<br> -->
		<div class="form-group">
            <label for="docid">
                <b>Age :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="d_age" placeholder="Age" pattern="[0-9]{1,3}"/>
        </div>
	<!-- <b>Age        <b> <input type = "text" name = "d_age" placeholder=" Age " required="required" pattern="[0-9]{1,3}">*<br><br> -->
		<div class="form-group">
            <label for="phone">
                <b>phone number</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="d_phone" placeholder="Phone number" pattern="[0-9]{10}"/>
        </div>
	<!-- <b>phone number <b> <input type ="text" name = "d_phone" placeholder="Phone number" required="required" pattern="[0-9]{10}">*<br><br> -->
		<div class="form-group">
            <label for="Address">
                <b>Address</b>
            </label>  *
            <textarea name = "d_addr" placeholder="address" class="form-control" required="required" cols="20" rows="4"></textarea>
        </div>
	<!-- <b>Address <b> <textarea name = " d_addr" placeholder="address" required="required" cols="20" rows="4"></textarea> *<br><br> -->
		
	
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
