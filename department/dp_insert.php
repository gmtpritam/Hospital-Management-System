

<!doctype html>
<html lang = "en"> 
	<head>
	<title> Department </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 35%; border:3px ">Department Addition</h1><br>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
	<b>Department Name : <b> <input type="text" name = "dept_name" placeholder="dept_name" required="required" pattern="[a-z A-Z]{1,25}">*<br><br>
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
