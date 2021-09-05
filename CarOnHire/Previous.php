<?php
	session_start();
?>
<?php
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"Car_On_Hire");
	$ab=$_SESSION['username'];
	$sql1="SELECT * FROM booking WHERE loginid='$ab' ORDER BY id DESC";
	$retval1=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
  #ab{
   position: fixed; 
            padding: 10px 10px 0px 10px; 
            bottom: 0; 
            
            width: 100%; 
            /* Height of the footer*/  
            height: 40px; 
            background: grey; 
}
</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <style>
	
		table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
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
  <?php
    if(isset($_SESSION["submit"]) && $_SESSION["submit"] === "on")
    {
  ?>
      <form class="form-inline my-2 my-lg-0">
        <a href="current.php" class="btn btn-info my-2 my-sm-0 m-2"> Current Bookings </a>
      </form>
  <?php
    }
    else
    {
  ?>
      <form class="form-inline my-2 my-lg-0">
        <a href="" class="btn btn-info my-2 my-sm-0 m-2" data-toggle="modal" data-target="#myModal"> Current Bookings </a>
      </form>
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  <?php
    }
  ?>
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
	
		<h2>Previous Booking</h2>
		<table cellspacing="0px">
			<tr>
				<th>Username</th>
				<th>Pickupcity</th>
				<th>pickupdate</th>
				<th>dropcity</th>
				<th>dropdate</th>
				<th>car</th>
				<th>registrationdate</th>
			
			</tr>
		<?php
			if($retval1)
			{
				while($row=mysqli_fetch_assoc($retval1))
				{
					$f1=$row["username"];
					$f2=$row["pickupcity"];
					$f3=$row["pickupdate"];
					$f4=$row["dropcity"];
					$f5=$row["dropdate"];
					$f6=$row["car"];
					$f7=$row["registrationdate"];
		?>
					<tr> 
		                <td><?php echo $f1 ?></td>
		                <td><?php echo $f2 ?></td>
		                <td><?php echo $f3 ?></td>
		                <td><?php echo $f4 ?></td>
		               	<td><?php echo $f5 ?></td>
		               	<td><?php echo $f6 ?></td>
		               	<td><?php echo $f7 ?></td>
		               <br>
		           </tr>
		<?php
				}	
			}
			?>
		</table>
	
<footer>
	<p class="p-3 bg-dark text-white text-center" id="ab"> @Car On Hire Limited</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>