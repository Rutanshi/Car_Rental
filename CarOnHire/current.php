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
  <style>
      table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 50%;
      border: 1px solid #ddd;
      margin-left:auto;
      margin-right: auto;
      margin-top: 50px;
      margin-bottom: 20px;
    }

    th, td {
      text-align: center;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    h1{
      margin-top: 50px;
      text-align: center;
    }
</style>
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

       <li class="nav-item ">
        <a class="nav-link" href="contact.php">contact </a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <a href="Previous.php" class="btn btn-info my-2 my-sm-0 m-2"> All Bookings </a>
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

	
</head>
<body>
    <h1>Current Booking</h1>
      <table>
            <tr><th>Name</th><td><?php echo $_SESSION['name'];?></td></tr>
            <tr><th>Pickupcity</th><td><?php echo $_SESSION['pcity'];?></td></tr>
            <tr><th>Pickupdate</th><td><?php echo $_SESSION['pdate'];?></td></tr>
            <tr><th>Dropcity</th><td><?php echo $_SESSION['dcity'];?></td></tr>
            <tr><th>dropdate</th><td><?php echo $_SESSION['ddate'];?></td></tr>
            <tr><th>Booked car</th><td><?php echo $_SESSION['car'];?></td></tr>
    	       <tr>
              <th colspan="2"><form class="form-inline my-2 my-lg-0">
                <a href="" id="lin" class="btn btn-danger my-2 my-sm-0 m-2" onclick="myFunction()">Cancle booking</a>
                  </form>
              </th><td></td></tr>
    </table>
    <script>
      function myFunction() 
      {
        var txt;
        var r = confirm("are you sure!");
        if (r == true)  
        {
          document.getElementById("lin").href="http://localhost/Car%20On%20Hire/cancle.php";
        } 
        else 
        {
          return false;
        }
      }

    </script>
<footer>
	<p class="p-3 bg-dark text-white text-center"> @Car On Hire Limited</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>