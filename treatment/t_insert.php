

<!doctype html>
<html lang = "en"> 
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Treatment's Page </title>
	</head> 
	<h1 style="padding: 10px;margin: auto;width: 28%; border:3px ;">Record Treatment </h1><br>
	<body style="margin: auto;width: 70%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Treatment Id</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="t_id" placeholder="Treatment's ID" pattern="[0-9]{3,20}"/>
        </div>
	<!-- <b>Treatment Id <b> <input type="text" name = "t_id" placeholder="Treatment's ID" required="required" pattern="[0-9]{3,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Doctor Id</b>
            </label>  *
            <input type="text" required  class="form-control" id="name" name="doc_id" placeholder="Doctor's ID" pattern="[0-9]{3,20}"/>
        </div>
	<!-- <b>Doctor Id <b> <input type="text" name = "doc_id" placeholder="Doctor's ID" required="required" pattern="[0-9]{3,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Patient Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="pat_id" placeholder="Patient Id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Patient Id <b> <input type="text" name = "pat_id" placeholder="Patient's ID" required="required" pattern="[0-9]{3,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Treatment symptom :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="t_sympt" placeholder="Treatment symptom" pattern="[a-z A-Z]{1,}"/>
        </div>
	<!-- <b>Treatment symptom <b><input type = "text" name = "t_sympt" placeholder="Treatment symptom" pattern="[a-z A-Z]{1,}" ><br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Treatment test:</b>
            </label>  *
            <input type="text" required  class="form-control"  name="t_test" placeholder="Treatment test" pattern="[a-z A-Z]{1,}"/>
        </div>
	<!-- <b>Treatment test <b> <input type = "text" name = " t_test" placeholder="Treatment test " pattern="*[a-z A-Z]{1,}"><br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Treatment prescription:</b>
            </label>  *
            <input type="text" required  class="form-control"  name="t_prescrp" placeholder="Treatment prescription" pattern="[a-z A-Z]{1,}"/>
        </div>
	<!-- <b>Treatment prescription <b> <input type = "text" name = "t_prescrp" placeholder="Treatment prescription " pattern="*[a-z A-Z]{1,}"><br><br> -->
	
	
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
