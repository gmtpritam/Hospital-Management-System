

<!doctype html>
<html lang = "en">
	<head>
	<title> Search Doctor's query </title>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	</head>
	<h1 style="padding: 20px;margin: auto;width: 49%; border:3px ">Search doctor by attributes</h1><br><hr><br> <br><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "search.php" method = "get" >
	<select name = "sel" autofocus style="margin: auto;width: 30%;padding :3px;background-color: #e6edf5;">
		<option value="doc_name">doctor's name</option>
		<option value="doc_id">doctor's id</option>
		<option value="doc_deg">doctor's degreee</option>
		<option value="doc_age">doctor's age</option>
		<br><b> <input type="text" name = "attr"  required="required" pattern="[a-z A-z 0-9]{1,20}" style="margin-left: 20%;">*<br><br>
		</select><br><br><br><br>
		<input type="submit" style="padding :2px" >
  
	</b></form>

	
	</body>






</html>
