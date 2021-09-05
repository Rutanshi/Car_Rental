<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
  #ab{
   position: fixed;            
            bottom: 0; 
            width: 100%;   
            height: 40px; 
            background: grey; 
}
</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Car On Hire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="contact.php">contact <span class="sr-only">(current)</span></a>
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/4.jpg" alt="Los Angeles" width="1920" height="1080">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="Chicago" width="1920" height="1080">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" alt="Chicago" width="1920" height="1080">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/9.jpg" alt="New York" width="1920" height="1080">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

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
			<a href="about.php" class="btn btn-success"> check more </a>
		</div>
		
	</div>
	</div>
</section>

<section class="my-5">
		
	<div class="py-5">
		<h1 class="text-center">Services</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div>
					<div class="card" >
  <img class="card-img-top" src="images/maruti1.jpg" alt="Card image">
  							<div class="card-body">
    							<h4 class="card-title">Wagnar</h4>
    							<p class="card-text">Maruti Suzuki</p>
    							<a href="#" class="btn btn-primary">See Profile</a>
 							 </div>
</div>
				</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12">
				<div>
					<div class="card" >
  <img class="card-img-top" src="images/Grand-i10.jpg" alt="Card image">
  							<div class="card-body">
    							<h4 class="card-title">Grand i10</h4>
    							<p class="card-text">Hyundai</p>
    							<a href="#" class="btn btn-primary">See Profile</a>
 							 </div>
</div>
				</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12">
				<div>
					<div class="card" >
  <img class="card-img-top" src="images/altroz.jpg" alt="Card image">
  							<div class="card-body">
    							<h4 class="card-title">Altroz</h4>
    							<p class="card-text">TATA</p>
    							<a href="#" class="btn btn-primary">See Profile</a>
 							 </div>
</div>
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