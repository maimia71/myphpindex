<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>



	<!-- navbar -->

<link rel="stylesheet" type="text/css" href="style.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Himanshu Morwal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="services.php">Services</a>
      </li>


  </div>
</nav>
<!-- end of navbar -->

	
	<div class="container">
		<div class="row">

			<!-- sign up -->
			<div class="col-lg-6">
				<h2 class="my-5">Sign Up</h2>
				<form action="registration.php" method="post" class="my-5">

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary my-4">Sign Up</button>

				</form>
			</div>
			<!-- end of sign up -->
			<div class="container display-flex my-5">
						<div class="row">
							<div class="col-lg-6">
								<h4 class="text-center">Already registered ?</h4>
								<a href="login.php">Login here</a>
							</div>

						</div>
			</div>

		</div>
	</div>



	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>