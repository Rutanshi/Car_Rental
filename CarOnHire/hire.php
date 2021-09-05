<?php
    session_start();
    $c=$_GET['car'];

      $conn = mysqli_connect("localhost","root","");
  
 /* if(!$conn)
    die("could not connect".mysqli_connect_error());
  echo "connected successfully";*/

 /* $sql1 = "CREATE TABLE booking(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      username VARCHAR(30) NOT NULL,
      loginid VARCHAR(255) NOT NULL,
      mobile INT(20) NOT NULL,
      email VARCHAR(30) NOT NULL,
      pickupcity VARCHAR(30) NOT NULL,
      pickupdate Date NOT NULL,
      dropcity VARCHAR(30) NOT NULL,
      dropdate Date NOT NULL)";*/
  mysqli_select_db($conn,"Car_On_Hire");
 /* $retval1 = mysqli_query( $conn,$sql1);
  
  if(! $retval1 )
      die('Could not create Table: '.mysqli_error($conn));
    echo "Table created successfully\n";*/
    /*if(isset($_POST['submit']))
  {  
    $sub="on";
  }
  else
  {
    $sub="off";
  }*/
  if(isset($_POST['submit']))
{   
  $name=$_POST['name'];
  $mob=$_POST['phno'];
  $email=$_POST['email'];
  $pickupcity=$_POST['pickupcity'];
  $pickupdate=$_POST['pickupdate'];
  $dropcity=$_POST['dropcity'];
  $dropdate=$_POST['dropdate']; 
  $ab=$_SESSION['username'];
    $sql2 = "INSERT INTO booking(username,loginid,mobile,email,pickupcity,pickupdate,dropcity,dropdate,car) VALUES ('$name','$ab','$mob','$email','$pickupcity','$pickupdate','$dropcity','$dropdate','$c')";

$retval2 = mysqli_query( $conn,$sql2);
    /*if(! $retval2 )
      die('Could not insert data: '.mysqli_error($conn));
    echo "successfully\n";*/
  if($retval2)
  {
    $_SESSION['submit'] = "on";
    $_SESSION['name']=$name;
    $_SESSION['pcity']=$pickupcity;
    $_SESSION['pdate']=$pickupdate;
    $_SESSION['dcity']=$dropcity;
    $_SESSION['ddate']=$dropdate;
    $_SESSION['car']=$c;
  $msg='<div class="alert alert-success" role="alert" align="center">
  <h4 class="alert-heading">Well done!</h4>
  <h4>You have successfully Booked a car</h4>
  <hr>
  <h4 class="mb-0">Thank you</h4>
</div>';
  }
}
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
    body {
  margin: 0;
  background-color: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  background-color: #333;
  position: fixed;
  top: -50px;
  width: 100%;
  display: block;
  transition: top 0.3s;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}


input[type=text], input[type=password],input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.abc input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: orange;
  text-align: center;
  font-size: 20px;
  font-family: verdana;
}
select{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}
select:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
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

       <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
       <form class="form-inline my-2 my-lg-0">
      <a href="Previous.php" class="btn btn-danger  my-2 my-sm-0 m-2">My booking</a>
    </form>
      </div>
</nav>

<?php 
  if(isset($_POST['submit']))
  {
    echo $msg;
  }
?>
<div>
<section class="my-5">
    <div class="py-5">
      <div class="w-50 m-auto">

<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" name="myForm" onsubmit="return validateForm() && validatedate()">
  <div class="container">
    <h1>Booking Details</h1>
    <hr>
    
   
    <div class="abc">
    <input type="text" name="Selected_car" value="<?php echo $c;?>" readonly>
    </div>
    <label><b>Name</b><span style="color: red">*</span></label> 
    <input type="text" placeholder="Enter Username" name="name">

    <label><b>Mobile No</b><span style="color: red">*</span></label> 
    <input type="text" placeholder="Enter Phone No" name="phno">

    <label><b>Email</b><span style="color: red">*</span></label> 
    <input type="text" placeholder="Enter Email" name="email">
    
    <label><b>Pick up location</b><span style="color: red">*</span></label>
    <br>
    <select name="pickupcity">
            <option value="ab" selected> Please Select </option>
            <option value="Ahmedabad"> Ahmedabad </option>
            <option value="Anand"> Anand </option>
            <option value="Ankleshwar">Ankleshwar</option>
            <option value="Bharuch"> Bharuch </option>
            <option value="Bhavnagar">Bhavnagar  </option>
            <option value="Botad"> Botad </option>
            <option value="Dahod"> Dahod </option>
            <option value="Dwarka"> Dwarka </option>
            <option value="Gandhinagar"> Gandhinagar </option>
            <option value="Jamnagar"> Jamnagar </option>
            <option value="Junagadh"> Junagadh </option>
            <option value="Morbi"> Morbi </option>
            <option value="Rajkot"> Rajkot </option>
    </select>
    <br>
    <label><b>Pick up date</b><span style="color: red">*</span></label>
    <br>
    <input type="date" name="pickupdate" id="pickupdate">
    <br>
    <label><b>Drop location</b><span style="color: red">*</span></label>
    <br>
    <select name="dropcity">
            <option value="bc" selected> Please Select </option>
            <option value="Ahmedabad"> Ahmedabad </option>
            <option value="Anand"> Anand </option>
            <option value="Ankleshwar">Ankleshwar</option>
            <option value="Bharuch"> Bharuch </option>
            <option value="Bhavnagar">Bhavnagar  </option>
            <option value="Botad"> Botad </option>
            <option value="Dahod"> Dahod </option>
            <option value="Dwarka"> Dwarka </option>
            <option value="Gandhinagar"> Gandhinagar </option>
            <option value="Jamnagar"> Jamnagar </option>
            <option value="Junagadh"> Junagadh </option>
            <option value="Morbi"> Morbi </option>
            <option value="Rajkot"> Rajkot </option>
    </select>
    <br>
    <label><b>Drop date</b><span style="color: red">*</span></label>
    <br>
    <input type="date" name="dropdate" id="dropdate">
    <hr>
    <button type="submit" class="registerbtn" name="submit" data-toggle="modal" data-target="#myModal">Book Now</button>
  </div>
</form>

</div>
</div>
</section>
</div>
<script>
function validateForm()
 {
  if (document.myForm.name.value== "") 
  {
    alert("Name must be filled out");
    document.myForm.name.focus() ;
            return false;
  }
  if(!isNaN(document.myForm.name.value))
  {
      alert("Name must be character only");
    document.myForm.name.focus() ;
            return false;
  }
  if( document.myForm.phno.value == "" || isNaN( document.myForm.phno.value ) ||
            document.myForm.phno.value.length != 10 ) 
  {    
      alert( "Please provide a 10 digit Mobile no" );
      document.myForm.phno.focus() ;
      return false;
  }
  if( document.myForm.email.value == "" ) 
  {
     alert( "Please provide your Email!" );
      document.myForm.email.focus() ;
      return false;
  }

  if( document.myForm.pickupcity.value == "ab" ) 
  {
     alert("Please select pick up destination");
      document.myForm.pickupcity.focus() ;
      return false;
  }
  if( document.myForm.dropcity.value == "bc" ) 
  {
     alert("Please select drop destination");
      document.myForm.dropcity.focus() ;
      return false;
  }
  

  if( document.myForm.email.value != "" ) 
  {
      var emailID = document.myForm.email.value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
      if (atpos < 1 || ( dotpos - atpos < 2 )) 
      {
        alert("Please enter correct email ID");
        document.myForm.email.focus() ;
        return false;
      }
  }
}
  function validatedate()
  {
    var startDate = $("pickupdate").val();
       var endDate = $("dropdate".val();
       if (startDate != '' && endDate !='') {
           if (Date.parse(startDate) > Date.parse(endDate)) {
               $("txttodate").val('');
               alert("Start date should not be greater than end date");
           }
       }
       return false;
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