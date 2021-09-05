<?php
	session_start();
?>
<?php 

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'Car_On_Hire');
if(isset($_POST['submit']))
{
	   $user = $email = $mobile = $cmt ="";
  $username_err = $email_err = $mobile_err ="";
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
            if (empty($_POST["user"])) 
            {
               $username_err = "Name is required";
            }
            else 
            {
              $user = $_POST["user"];
            }
            
            if (empty($_POST["email"])) 
            {
               $email_err = "Email is required";
            }
            else 
            {
               $email = $_POST["email"];
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
              {
                  $email_err = "Invalid email format"; 
                }
            }

            if (empty($_POST["mobile"])) 
            {
               $mobile_err = "Mobile No is required";
            }
            else 
            {
               $mobile = $_POST["mobile"];
               if (strlen(trim($_POST["mobile"])) != 10) 
              {
                  $mobile_err = "Mobile No must have contain 10 digit"; 
              }
            }
 			$cmt=$_POST["cmt"]; 
	$query = "INSERT INTO userinfodata(user, email, mobile, comment) 
			  VALUES ('$user', '$email', '$mobile', '$cmt')";

	mysqli_query($con, $query);
}
}
mysqli_close($con);	
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

       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item active">
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
<section class="my-5">
		<div class="py-5">
		<h1 class="text-center">contact Us</h1>
			<div class="w-50 m-auto">
				<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" autocomplete="off" class="form-control">
						
					</div>

										<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" autocomplete="off" class="form-control">
						
					</div>

										<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" autocomplete="off" class="form-control">
						
					</div>

										<div class="form-group">
						<label>comment</label>
						<textarea class="form-control" name="cmt">
						</textarea>
					</div>
					 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					
				</form>
			
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