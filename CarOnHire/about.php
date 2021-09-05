<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
		<body>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Car On Hire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
   <form class="form-inline my-2 my-lg-0">
      
      <a href="carlisting.php" class="btn btn-info my-2 my-sm-0 m-2"> Hire Now </a>
</form>
        <?php
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === "true")
      {
    ?>
      <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" class="btn btn-danger my-2 my-sm-0 m-2"> Logout </a>
      </form>
    <?php
      }
    else
    {
    ?>
        <form class="form-inline my-2 my-lg-0">
          <a href="login.php" class="btn btn-danger my-2 my-sm-0 m-2"> Login Here </a>
        </form> 
    <?php
    }
    ?>

  </div>
</nav>
<section class="my-5">
		
	<div class="py-5">
		<h1 class="text-center">About Us</h1>
	</div>
		<div class="container-fluid">
	<div class="row">

		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/bmw.jpg" class="img-fluid ">
		</div>
		
		<div class="col-lg-6 col-md-6 col-12">
			<h3 class="display-4"> CAR On HIRE</h3>
			<p class="py-4">As the world’s biggest online car rental service, we specialize in finding the cheapest car rental deals from major brands such as Hertz, Avis, Alamo and Budget. Daily, weekly or monthly car rentals… just fill in our search form to compare deals from different companies – and find out how much you can save when you rent a car from us..
			</p>
			
		</div>
		
	</div>
	</div>
</section>
<footer>
	<p class="p-3 bg-dark text-white text-center"> @Car On Hire Limited</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>