<?php
include("contactserver.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Us </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />  
   <link rel="stylesheet" href="index2.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="contact.js"></script>  
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


<section class="my-5">
<div class="py-5">
    <h1 class="text-center">| Contact Us |</h1>
</div>
    
      <div>

      </div>
    </div>
  </div>
</section>

<div class="container-contact">
  <form action="" method="GET" class="form">
    <div class="form-group"><br><h5><b>we would love to hear from you</b></h5><hr>
      <label for="name" class="form-lbl">Your Name</label>
      <input type="text" class="form-tt" id="name" name="name" placeholder="Name" tabindex="1" required>
    </div>

    <div class="form-group">
      <label for="email" class="form-lbl">Your Email</label>
      <input type="email" class="form-tt" id="email" name="email" placeholder="E-mail" tabindex="2" required>
    </div>

    <div class="form-group">
      <label for="subject" class="form-lbl">Subject</label>
      <input type="subject" class="form-tt" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
    </div>

    <div class="form-group">
      <label for="" class="form-lbl">Message</label>
      <textarea class="form-tt" name="message" id="message" cols="50" rows="5" placeholder="Enter your message" tabindex="4">Enter your Message</textarea>
    </div>

    <div>
      <button type="submit" class="button" id="submit" name="submit">Send Message</button><br><hr>
      <h5><b>Visit our shop, follow the google map given below</b></h5><hr>
      <!--map-->
      <div class="map">
      <iframe src="https://www.google.com/maps/d/embed?mid=1KEfDVhJdjm54eYJM2BgYBWqW3f2u3Vo&ehbc=2E312F"></iframe>
        </div>
    </div>
  </form>
</div>



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
   <div class="container" >  
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
</body>
</html>

<?php
$firstname=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$message=$_GET['message'];

$query="INSERT INTO CONTACTINFO VALUES ('$firstname','$email','$subject','$message')";
$data=mysqli_query($conn,$query);

if($data)
{
  //echo "data inserted woohoo!";
}
else 
{
  echo "failed to insert oh no :(";
}
?>

