<?php

session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>




	<!-- navbar -->

<link rel="stylesheet" type="text/css" href="style.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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





	<div class="container ">
		<h2  class="text-center text-success"> Welcome <?php echo $_SESSION['username'];?> </h2>
	<a href="logout.php" class="btn  btn-primary">Logout</a>
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