
<!doctype html>
<html lang = "en"> 
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Payment Details Entry </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 35%; border:3px ">Payment Details Entry</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Payment No:</b>
            </label>  *
            <input type="text" required  class="form-control"  name="pay_no" placeholder="Payment No" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Payment No: <b> <input type="text" name = "pay_no" placeholder="pay_no" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Patient Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="pat_id" placeholder="Patient Id" pattern="[0-9]{1,20}"/>
        </div>
	
	<!-- <b>Patient Id :<b> <input type="text" name = "pat_id" placeholder="pat_id" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Bill No. :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="bill_no" placeholder="Bill No." pattern="[0-9]{1,10}"/>
        </div>

	<!-- <b>Bill No. : <b><input type = "text" name = "bill_no" placeholder="bill_no" required="required" pattern="[0-9]{1,10}" >*<br><br> -->
		<div class="form-group">
	        <label for="lastcheck">
	           <b>Payment Date</b>
	        </label>
	        <input class="form-control"  name="pay_date" type="date">
	    </div>
	<!-- <b>Payment Date (yyyy-mm-dd) : <b><input type = "date" name = "pay_date" placeholder="pay_date" required="required" >*<br><br> -->
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
