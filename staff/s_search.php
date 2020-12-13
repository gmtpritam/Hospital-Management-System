

<!doctype html>
<html lang = "en">
	<head>
		<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Search Staff's query </title>
	</head>
	<h1 style="padding: 20px;margin: auto;width: 49%; border:3px ">Search Staff by attributes</h1><br><hr><br> <br><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "search.php" method = "get" >
	
	<select name = "sel" autofocus style="margin: auto;width: 30%;padding :3px;background-color: #e6edf5;">
		<option value="sf_name">Staff's name</option>
		<option value="sf_no">Staff's no</option>
		<option value="sf_gender">Staff's gender</option>
		<option value="sf_dept">Staff's Department</option>
		<br><b> <input type="text" name = "attr"  required="required" pattern="[a-z A-z 0-9]{1,20}" style="margin-left: 20%;">*<br><br>
		</select><br><br><br><br>
		<input type="submit" style="padding :2px" >
  </select>
	</b></form>

	
	</body>






</html>
