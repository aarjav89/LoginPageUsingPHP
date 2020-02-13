<?php
	$isValidated = false;
	if(isset($_POST['name']) &&
			isset($_POST['email']) &&
			isset($_POST['password'])
	)
	{
		$name=$_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$isValidated=true;

		$server = "localhost";
		$user = "root";
		$password = "";
		$db = "login";

		// Create connection
		$conn = mysqli_connect($server, $user, $password, $db);
		// Check connection
		if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
		}



		$query="INSERT INTO user(name,email,password) values('".$name."','".$email."','".$pass."')";

if (!mysqli_query($conn, $query)) {
      echo "Error inserting in users table: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

	} // end if block of isset
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<?php if($isValidated==false) { ?>
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Sign Up</h3>
					</div> <!-- closed card header -->

					<div class="card-body">
						<form action="index.php" method="POST">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-chess-king"></i></span>
								</div>
						<input type="text" name="name" class="form-control" placeholder="enter your name">

					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="email" placeholder="username">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>

					<div class="form-group">
						<input type="submit" value="Sign up" class="btn float-right login_btn">
					</div>
				</form>
			</div> <!-- end card body -->

		</div> <!-- end card -->
	</div> <!-- end container -->



 <?php } else { ?> 
	 <div class="container">
		 	<div class="d-flex justify-content-center h-100">
		 <div class="card">
			<div class="card-body">
				<div class="card-header"><h3> Thank you for registration </h1></div>
				<span class="input-group-text"> Continue to <a href="#"> Login </a> ? </span>
			</div><!--end card body-->
		</div> <!--end card -->
	</div> <!-- end flex div -->
	</div> <!-- end container -->
<?php } ?>

</body>
</html>
