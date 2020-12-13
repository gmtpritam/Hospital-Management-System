

<!doctype html>
<html lang = "en"> 
	<head>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
	<title> Blood Record Entry </title>
	</head> </head><h1><a href="../"> <img src="home.png" alt="home" style="width:180px;height:180px; " align="left" >
	</a>Blood Record Entry</h1>
	</head>
	<button style = "width:45px;height:30px; margin-left:70%;"  onclick="myFunction()">Print</button>
	<script>
		function myFunction() {
   		 window.print();
			}
			</script><br><br><BR><BR><hr>
	<body style="margin: auto;width: 60%; border:6px solid #f21729;padding: 20px;background-color: #e6edf5;">
	<form action = "insert.php" method = "get" >
		<div class="form-group">
            <label for="docid">
                <b>Blood Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="b_id" placeholder="Blood Id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Blood Id <b> <input type="text" name = "b_id" placeholder="b_id" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Blood Type :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="b_type" placeholder="Blood Type" pattern="[A-Z a-z + -]{2,20}"/>
        </div>
	<!-- <b>Blood Type <b> <input type="text" name = "b_type" placeholder="b_type" required="required" pattern="[A-Z a-z + -]{2,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Inventory Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="bi_id" placeholder="Inventory id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Inventory Id <b> <input type="text" name = "bi_id" placeholder="bi_id" required="required" pattern="[0-9]{1,20}">*<br><br> -->
		<div class="form-group">
            <label for="docid">
                <b>Donar Id :</b>
            </label>  *
            <input type="text" required  class="form-control"  name="d_id" placeholder="Donar Id" pattern="[0-9]{1,20}"/>
        </div>
	<!-- <b>Donar Id <b> <input type="text" name = "d_id" placeholder="d_id" required="required" pattern="[0-9]{1,20}">*<br><br> -->
	<input type="submit" value="Submit">

	</b></form>

	
	</body>
</html>
