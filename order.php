<html>
<?php
error_reporting(0);
?>
<head>
<title> ORDER NOW  </title>
<body style="background:url(https://img.freepik.com/free-photo/traditional-supreme-pizza-isolated-white-background_123827-20129.jpg?w=2000);backgound-repeat center center fixed;
background-size:100%">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div>
	<?php
	if(isset($_POST['create'])){
	   $NAME=$_POST['NAME'];
	   $PHONE=$_POST['PHONE'];
	   $EMAILID=$_POST['EMAILID'];
	   $FOODNAME=$_POST['FOODNAME'];
	   $ADDRESS=$_POST['ADDRESS'];
	}
	?>
	</div>
	<div class="container">
		<div class="row m-0">
			<div class=" col-lg-4 offset-lg-8">
			<div class="panelpanel-primary">
				<div class="panel-heading text-center">
				   <h1 > Order Now </h1>
				   <hr class="mb-3">
				</div>
				<div class="panel-body">
				   <form action="validate.php" method="POST">
				      <div class="form-group">
					<label for="NAME">NAME</label>
					<input type="text" class="form-control" name ="NAME" id="NAME" required/>
				      </div>   
				      <div class="form-group">
					<label for="PHONE">PHONE</label>
					<input type="text" class="form-control" name="PHONE" id="PHONE" required/>
				      </div>
				      <div class="form-group">
					<label for="EMAILID">EMAILID</label>
					<input type="text" class="form-control" name="EMAILID" id="EMAILID" required/>
				      </div>
				      <div class="form-group">
					<label for="FOODNAME">FOODNAME</label>
					<input type="text" class="form-control" name="FOODNAME" id="FOODNAME" required/>
				      </div>
				      <div class="form-group">
					<label for="ADDRESS">ADDRESS</label>
					<input type="text" class="form-control" name="ADDRESS" id="ADDRESS" required/>
				      </div>
				      <hr class="mb-3">
					
				      <input type="submit" name ="create" value ="Order Now" class ="btn btn-primary">
					<div class="form-check form-check-inline">
					<input type="checkbox" name="agreement" class="form-check-input" required>
					<label for="agreement" class="form-check-label font-ubuntu text-black-50"> I agree <a href="https://www.deliveryfoodservice.nl/terms-and-conditions/">term,conditions,and policy</a>(*)</label>
					<hr class="mb-2">
					
				   </form>
				</div>
			   </div>
			</div>
		</div>
	</div>
	
</body>
</html>
