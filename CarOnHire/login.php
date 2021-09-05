<?php 
  session_start();
 
  $conn = mysqli_connect("localhost","root","");
  mysqli_select_db($conn,"Car_On_Hire");
  
  if(isset($_GET['submit']))
  { 
    $uname = $password = "";
    $uname_err = $password_err = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
      if (empty($_GET["uname"])) 
      {
         $uname_err = "Name is required";
      }
      else 
      {
        $uname = $_GET["uname"];
      }
      if (empty($_GET["password"])) 
      {
         $password_err = "password is required";
      }
      else 
      {
        $password = $_GET["password"];
      }
      if(empty($uname_err) && empty($password_err))
      {
        $SQL = "select * from  register where Username = '$uname' and Password = '$password'";
        $result = mysqli_query($conn,$SQL);
        if(mysqli_num_rows($result)>0)
        {
          $_SESSION['loggedin'] = "true";
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = $uname;
          header("location: index.php");
        }
        else
        {
          echo '<script>alert("Invalid username and password")</script>';
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>CarOnHire</title>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
  <a class="navbar-brand" href="#">Car On Hire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
        <form class="form-inline my-2 my-lg-0">
     
      <a href="register.php" class="btn btn-danger my-2 my-sm-0 m-2"> Register </a>
    </form>
		 </ul>
   
      
  </div>
</nav>


<section class="my-5">
    <div class="py-5">
      <div class="w-50 m-auto">

<form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
 

  <div class="container">
    <label for="uname"><b>Username</b><span style="color: red">*<?php 
      if(isset($_GET['submit']))
      {
        echo $uname_err; 
        
      }
    ?></span></label>
    <input type="text" placeholder="Enter Username" autocomplete="off" name="uname">

    <label for="psw"><b>Password</b><span style="color: red">*<?php 
      if(isset($_GET['submit']))
      {
        echo $password_err; 
        
      }
    ?></span></label>
    <input type="password" placeholder="Enter Password" autocomplete="off" name="password">

    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forgotpassword.php">password?</a></span>
  </div>


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