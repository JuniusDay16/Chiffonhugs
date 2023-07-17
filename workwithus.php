<?php 
include("wwu_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply here!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />  
   <link rel="stylesheet" href="workwithus.css">  
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Lato:ital@1&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="images/transparent.png" alt="Chiffon Hugs logo" width="300" height="100" class="d-inline-block align-middle mr-2"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Our Menu</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Workwithus.php">Work With Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="visitus.php">Visit Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>


      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-register">
  <form action="#" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
    <div class="title">
        Registration form
</div>
<div class="form">
<div class="input_field">
        <label>Upload Resume</label>
        <input type="file" name="uploadfile" style="width:100%;">

      
</div>
  


    <div class="input_field">
        <label>First Name</label>
        <input type="text" class="input" name="fname" id="fname" placeholder="Firstname" required>
        <br>
        <span id="firstname"></span>
    </div>

    <div class="input_field">
        <label>Last Name</label>
        <input type="text" class="input" name="lname" id="lname" placeholder="Lastname" required>
        <br><span id="lastname"></span>
    </div>
    <div class="input_field">
        <label>Gender</label>
        <div class="selectgender">
        <select name="gender" id="gender" required>
        <br><span id="gen"></span>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        </div>
    </div>

    <div class="input_field">
        <label>Email Address</label>
        <input type="text" class="input" name="email" id="email" placeholder="Enter Email" required>
        <br><span id="mail"></span>
    </div>

    <div class="input_field">
        <label>Phone Number</label>
        <input type="text" class="input" name="phone" id="phone" placeholder="Phone number"required>
        <br><span id="number"></span>
    </div>
    <div class="input_field">
        <label>Address</label>
        <textarea class="textarea" name="address" id="address" placeholder="Enter Address" required>
        </textarea>
        <br><span id="add"></span>
    </div>
    <div class="input_field terms">
       <label class="check">
        <input type="checkbox">
        <br><span class="checkmark" required></span>
       </label>
       <p>I agree to terms and conditions</p>
    </div>
    <div class="input_field">
        <input type="submit" value="Register" class="button" name="register">
        
    </div>


</div>
</form>
</div>




<!--footer-->

<section class="my-5">
<div class="py-5">
    <h1 class="text-center"></h1>
</div>
<footer class="site-footer">  
   <div class="container">  
    <div class="row">  
     <div class="col-sm-12 col-md-6">  
      <h6>About</h6>  
      <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
     </div>  
     <div class="col-6 col-md-3">  
     </div>  
     <div class="col-6 col-md-3">  
      <h6>Quick Links</h6>  
      <ul class="footer-links">  
       <li><a href="index.php">Home</a></li>  
       <li><a href="Visit Us">Contact Us</a></li>   
       <li><a href="#">Privacy Policy</a></li>    
      </ul>  
     </div>  
    </div>  
    <hr class="small">  
   </div>  
   <div class="container">  
    <div class="row">  
     <div class="col-md-8 col-sm-6 col-12">  
      <p class="copyright-text">Copyright © 2022 All Rights Reserved by  
       <a href="#"><span class="logo">Chiffon Hugs & Co.</span></a>  
      </p>  
     </div>  
     <div class="col-md-4 col-sm-6 col-12">  
      <ul class="social-icons">  
       <li><a class="facebook" href="facebook.com"><i class="fab fa-facebook-f"></i></a></li>  
       <li><a class="twitter" href="twitter"><i class="fab fa-twitter"></i></a></li>   
       <li><a class="linkedin" href="#"><i class="fab fa-instagram"></i></a></li>  
      </ul>  
     </div>  
    </div>  
   </div>  
  </footer>  

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   

<script type="text/javascript">
  function validation() 
  {
    var firstname = document.getElementById('fname').value;
    var lastname = document.getElementById('lname').value;
    var emailaddress  = document.getElementById('email').value;
    var phonenumber = document.getElementById('phone').value;
    var address = document.getElementById('address').value;

    if(firstname == "")
    {
      document.getElementById('firstname').innerHTML="Please fill your name";
    }

    if(lastname == "")
    {
      document.getElementById('lastname').innerHTML="Please fill your last name";
    }

    if(emailaddress == "")
    {
      document.getElementById('mail').innerHTML="Please fill your email";
    }

    if(phonenumber == "")
    {
      document.getElementById('number').innerHTML="Please fill your phone number";
    }
    if(address == "")
    {
      document.getElementById('').innerHTML="Please fill your address";
    }
    
  }
</script>
</body>
</html>
<?php
 if($_POST['register'])
 {
  $filename =  $_FILES["uploadfile"]["name"];
$tempname =  $_FILES["uploadfile"]["tmp_name"];
$folder = "resume/".$filename;
move_uploaded_file($tempname,$folder);


  $firstname  = $_POST['fname'];
  $lastname   = $_POST['lname'];
  $gender     = $_POST['gender'];
  $email      = $_POST['email'];
  $phone      = $_POST['phone'];
  $address    = $_POST['address'];

  $query = "INSERT INTO HIRE(firstname,lastname,gender,email,phone,address,Resume) VALUES('$folder','$firstname','$lastname','$gender','$email','$phone','$address')";
  $data = mysqli_query($connection,$query);

  if($data)
  {
    echo "<script> alert('Data inserted into database')</script>";
  }
  else
  {
    echo "ooops! data not inserted";
  }

}

?>