

<!doctype html>
<html lang = "en"> 
	<head>
	<title> Doctor's Page </title>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	</head> 
	<h1 style="padding: 2px;margin: auto;width: 50%; border:3px solid #a16325;">Doctor Registration</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Doctor Id</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_id" placeholder="Doctor's ID" pattern="[0-9]{3,20}"/>
        </div>
	<!-- <b>Doctor Id <b> <input type="text" name = "doc_id" placeholder="Doctor's ID" required="required" pattern="[0-9]{3,20}">*<br><br> -->
		<div class="form-group">
            <label for="fname">
                <b>First Name</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_fname" placeholder="First Name" pattern="*[a-z A-Z]"/>
        </div>
	<!-- <b>First Name <b><input type = "text" name = "doc_fname" placeholder="First Name" required="required" pattern="[a-z A-Z]{1,20}" >*<br><br> -->
		<div class="form-group">
            <label for="lname">
                <b>Last Name</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_lname" placeholder="Last Name" pattern="*[a-z A-Z]"/>
        </div>
	<!-- <b>Last Name <b> <input type = "text" name = " doc_lname" placeholder="Last Name " required="required" pattern="*[a-z A-Z]">*<br><br> -->
		<div class="form-group">
            <label for="Age">
                <b>Age</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_age" placeholder=" Age" pattern="[0-9]{1,3}"/>
        </div>
	<!-- <b>Age        <b> <input type = "text" name = "doc_age" placeholder=" Age " required="required" pattern="[0-9]{1,3}">*<br><br> -->
		<div class="form-group">
            <label for="phone">
                <b>phone number 1</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_phone1" placeholder="Phone number" pattern="[0-9]{10}"/>
        </div>
	<!-- <b>phone number 1<b> <input type ="text" name = "doc_phone1" placeholder="Phone number" required="required" pattern="[0-9]{10}">*<br><br> -->
		<div class="form-group">
            <label for="phone">
                <b>phone number 2</b>
            </label>  
            <input type="text" class="form-control" id="name" name="doc_phone2" placeholder="Phone number" pattern="[0-9]{10}"/>
        </div>
	<!-- <b>phone number 2<b> <input type ="text" name = "doc_phone2" pattern="[0-9]{10}"><br><br> -->
		<div class="form-group">
            <label for="Email">
                <b>Email</b>
            </label>  *
            <input type="email" required  class="form-control" id="name" name="doc_email" placeholder="Email" />
        </div>
	<!-- <b>Email<b> <input type = "email" name = "doc_email" placeholder="Email" required="required" >*<br> -->
		<div class="form-group">
            <label for="Address">
                <b>Address</b>
            </label>  *
            <textarea name = "doc_address" placeholder="address" class="form-control" required="required" cols="20" rows="4"></textarea>
        </div>
	<!-- <b>Address <b> <textarea name = " doc_address" placeholder="address" required="required" cols="20" rows="4"></textarea> *<br><br> -->
		<div class="form-group">
            <label for="Department">
                <b>Department Name</b>
            </label>  * (Enter Dept. that exist in Hospital Database)
            <input type="text" required  class="form-control" id="name" name="dept_name" placeholder="Department" pattern="[a-z A-Z]{1,20}"/>
        </div>
	<!-- <b>Department Name <b> <input type ="text" name = "dept_name" placeholder="Department" required="required" pattern="[a-z A-Z]{1,20}"> *<br> <br> -->
		<div class="form-group">
            <label for="Degree">
                <b>Doctor Degree 1</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_degree1" placeholder="Degree" pattern="[a-z A-Z]{1,20}"/>
        </div>
	<!-- <b> Doctor Degree 1<b><input type="text" name = "doc_degree1" placeholder="Degree" required="required" pattern="[a-z A-Z]{1,20}"> *<br> <br> -->
		<div class="form-group">
            <label for="Degree">
                <b>Doctor Degree 2</b>
            </label>  
            <input type="text" class="form-control" id="name" name="doc_degree2" placeholder="Degree" pattern="[a-z A-Z]{1,20}"/>
        </div>
	<!-- <b> Doctor Degree 2<b><input type="text" name = "doc_degree2" pattern="[a-z A-Z]{0,20}"> <br> <br> -->
		<div class="form-group">
            <label for="Degree">
                <b>Doctor Degree 3</b>
            </label>  
            <input type="text" class="form-control" id="name" name="doc_degree3" placeholder="Degree" pattern="[a-z A-Z]{1,20}"/>
        </div>
	<!-- <b> Doctor Degree 3<b><input type="text" name = "doc_degree3" pattern="[a-z A-Z]{0,20}"> <br> <br> -->
		<div class="form-group">
          <label class="label">
             <b> Doctor's Type </b>
          </label>
	      <div class="row">
	        <div class="col">
	            <label class="radio-container m-r-45" for="doc_on_call">
	                Regular doctor
	                <input id = "Regular_doc" type = "radio" name = "doc_type" value="regdoc" required="">
	                    <span class="checkmark">
	                    </span>
	            </label>
	        </div>
	        <div class="col">
	            <label class="radio-container">
	                Doctor on call
	                <input id = "doc_on_call" type = "radio" name = "doc_type" value="oncall">
	                    <span class="checkmark">
	                    </span>
	            </label>
	         </div>
	      </div>
	  	</div>
	<!-- <b> Doctor's Type :<b><input id = "doc_on_call" type = "radio" name = "doc_type" value="oncall">
	<label for="doc_on_call">Doctor on call</label>
	<input id = "Regular_doc" type = "radio" name = "doc_type" value="regdoc">
	<label for="doc_on_call">Regular doctor</label> -->
	<div class="form-group m-0">
        <button class="btn btn-primary btn-block"  type="submit">
           Submit
        </button>
    </div>
	<!-- <input type="submit" value="Submit"> -->

	</b></form>
	</body>
</html>
