<html>
<?php
error_reporting(0);
?>
<head>
<title> REGISTRATION  </title>
<body style="background:url(https://img.freepik.com/free-photo/delicious-burgers-blue-background-unhealthy-diet-concept_80743-19.jpg);backgound-repeat center center fixed;
background-size:80%">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div>
	<?php
	if(isset($_POST['create'])){
	   $FIRSTNAME=$_POST['FIRSTNAME'];
	   $LASTNAME=$_POST['LASTNAME'];
	   $PHONE=$_POST['PHONE'];
	   $EMAILID=$_POST['EMAILID'];
	   $PASSWORD=$_POST['PASSWORD'];
	}
	?>
	</div>
	<div class="container">
		<div class="row m-0">
			<div class=" col-lg-4 offset-lg-8">
			<div class="panelpanel-primary">
				<div class="panel-heading text-center">
				   <h1 > Registration </h1>
				   <hr class="mb-3">
				</div>
				<div class="panel-body">
				   <form action="connect.php" method="POST">
				      <div class="form-group">
					<label for="FIRSTNAME">FIRSTNAME</label>
					<input type="text" class="form-control" name ="FIRSTNAME" id="FIRSTNAME" required/>
				      </div>
				      <div class="form-group">
					<label for="LASTNAME">LASTNAME</label>
					<input type="text" class="form-control" name ="LASTNAME" id="LASTNAME" required/>
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
					<label for="PASSWORD">PASSWORD</label>
					<input type="password" class="form-control" name="PASSWORD" id="PASSWORD" required/>
				      </div>
				      <hr class="mb-3">
					
				      <input type="submit" name ="create" value ="Sign Up" class ="btn btn-primary">
					<div class="form-check form-check-inline">
					<input type="checkbox" name="agreement" class="form-check-input" required>
					<label for="agreement" class="form-check-label font-ubuntu text-black-50"> I agree <a href="https://www.deliveryfoodservice.nl/terms-and-conditions/">term,conditions,and policy</a>(*)</label>
					<hr class="mb-2">
					<div class=" col-lg-6 offset-lg-0"><span> I already have <a href="login.php">Login</a></span></div> 
				   </form>
				</div>
			   </div>
			</div>
		</div>
	</div>
	
</body>
</html>
