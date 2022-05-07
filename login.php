<html>
<head>
	<title> login </title>
	<body style="background:url(https://www.itl.cat/pngfile/big/301-3016937_burger-wallpaper-hamburger.jpg);backgound-repeat center center fixed;
background-size:98%">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class ="login-box"
	   <div class ="row m-0">
		<div class="col-lg-6 offset-lg-8">
			<h2> Login Here </h2>
			  <hr class="mb-3">
			<form action="validation.php" method="post">
			<div class="form-group">
			  <label>PHONE </label>
			  <input type="text" name="PHONE" class="form-control" required>
			</div>
			<div class="form-group">
			  <label>PASSWORD </label>
			  <input type="password" name="PASSWORD" class="form-control" required>
			</div>
			  <button type="submit" class="btn btn-primary">Login </button>
			  <label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
			
	       </div>
		</form>
	</div>
     </div>
</div>
</body>
</html>

