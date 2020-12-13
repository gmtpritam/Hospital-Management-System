
<!doctype html>
<html lang = "en"> 
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Operation Details Entry </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 28%; border:3px;">Operation Details Entry</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Operation Id</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="o_id" placeholder="Operation Id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Operation Id <b> <input type="text" name = "o_id" placeholder="o_id" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
	        <label for="lastcheck">
	           Operation Date
	        </label>
	        <input class="form-control"  name="o_date" type="date">
	    </div>
	<!-- <b>Operation Date <b><input type = "date" name = "o_date" placeholder="o_date" required="required" pattern="[a-z ' ' A-Z]{1,20}" >*<br><br> -->
		<div class="form-group">
	        <label for="lastcheck">
	           Operation Time
	        </label>
	        <input class="form-control" name="o_time" type="time">
	    </div>
	<!-- <b>Operation Time  <b><input type = "time" name = "o_time" placeholder="o_time" required="required" pattern="[a-zA-Z]{1,2}[+-]{1}" >*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Doctor Id</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_id" placeholder="Doctor's ID"/>
        </div>
	<!-- <b>Doctor Id <b> <input type = "text" name = "doc_id" placeholder="doc_id" required="required" pattern="[0-9]{1,10}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Patient Id</b>
            </label>  *
            <input type="text" required  class="form-control"  name="pat_id" placeholder="Patient Id" />
        </div>
	<!-- <b>Patient Id <b> <input type ="text" name = "pat_id" placeholder="pat_id" required="required" pattern="[0-9]{1,10}">*<br><br> -->
	
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
