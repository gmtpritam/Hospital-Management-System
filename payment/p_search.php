
<!doctype html>
<html lang = "en">
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title>Payment Details Search </title>
	</head>
	<h1 style="padding: 20px;margin: auto;width: 49%; border:3px;">Payment Details Search</h1><br><br> <br><br>
	<body style="margin: auto;width: 70%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "search.php" method = "get" >
	
	<select name = "sel" autofocus style="margin: auto;width: 30%;padding :3px;background-color: #e6edf5;">
		<option value="pat_id">Patient Id</option>
		<option value="pay_no">Payment No</option>
		<option value="bill_no">Bill No.</option>
		<br><b> <input type="text" name = "attr"  required="required" pattern="[a-z A-z 0-9 - ]{1,20}" style="margin-left: 20%;">*<br><br>
		</select><br><br><br><br>
		<input type="submit" style="padding :2px" >
  </select>
	</b></form>

	
	</body>




</html>
