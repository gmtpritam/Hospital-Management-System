

<!doctype html>
<html lang = "en">
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title>Donar Search query </title>
	</head>
	<h1 style="padding: 20px;margin: auto;width: 49%; border:3px ">Search Donar by attributes</h1><br><br> <br><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "search.php" method = "get" >
	
	<select name = "sel" autofocus style="margin: auto;width: 30%;padding :3px;background-color: #e6edf5;">
		<option value="d_name">Donar name</option>
		<option value="d_b_type">Blood Type</option>
		<option value="d_id">Donar id</option>
		<option value="d_addr">Donar Address</option>
		<br><b> <input type="text" name = "attr"  required="required" pattern="[a-z A-z 0-9 + -]{1,20}"style="margin-left: 20%;">*<br><br>
		</select><br><br><br><br>
		<input type="submit" style="padding :2px" >
  </select>
	</b></form>

	
	</body>




</html>
