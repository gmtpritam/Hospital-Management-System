

<!doctype html>
<html lang = "en"> 
	<head>
		<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Bill Generation </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 35%; border:3px ;">Bill Generation</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Bill No</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="bill_no" placeholder="Bill No" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Bill No <b> <input type="text" name = "bill_no" placeholder="bill_no" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
          <label class="label">
             <b> Bill Status </b>
          </label> *
	      <div class="row">
	        <div class="col">
	            <label class="radio-container m-r-45" for="paid">
	                Paid
	                <input id = "paid" type = "radio" name = "bill_stat" value="paid" required="">
	                    <span class="checkmark">
	                    </span>
	            </label>
	        </div>
	        <div class="col">
	            <label class="radio-container" for="unpaid">
	                Female
	                <input id="unpaid" type = "radio" name = "bill_stat" value="unpaid">
	                    <span class="checkmark">
	                    </span>
	            </label>
	         </div>
	      </div>
	  	</div>
	
	<!-- <b> Bill Status :<b><input id = "paid" type = "radio" name = "bill_stat" value="paid">
	<label for="paid">Paid</label>
	<input id = "unpaid" type = "radio" name = "bill_stat" value="unpaid">
	<label for="unpaid">Unpaid</label><br><br> -->
	<div class="form-group">
            <label for="Age">
                <b>Bill Amount(in Rs)</b>
            </label>  *
            <input type="text" required  class="form-control"  name="bill_amount" placeholder=" Bill Amount" pattern="[0-9]{1,10}"/>
        </div>

	<!-- <b>Bill Amount (in Rs)<b><input type = "text" name = "bill_amount" placeholder="bill_amount" required="required" pattern="[0-9]{1,10}" >*<br><br> -->
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
