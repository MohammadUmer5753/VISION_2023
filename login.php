
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['name'] = $row['name'];
         header('location:ADMIN.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['name'] = $row['name'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
















<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/singup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/f66055ef4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/totop.css">
    <link rel="icon" href="Images/logo.png">
    <title>login-form</title>   
  </head>
<body>
      
 

  





<?php include 'header.php'; ?>











<section id="heading-only">
  <div class="main-text-webcards">
      <h2>LOGIN</h2>
       <h4>Welcome back! Please login to your account</h4>
  </div>
 </section>



  <section class="sign">
  <div class="container-login">
    <div class="cover-login">
      <div class="front-login">
        <img src="images/sign-up page.jpg" alt="#">
       
      </div>
    </div>
    <div class="forms-login">
        <div class="form-content-login">
          <div class="login-form-login">
            <div class="logo-image-login"><img src="images/logo.png" alt="#"></div>
            <!-- <div class="title-login">Login</div>
            <div class="para-login">Welcome back! Please login to your<br>account</div> -->
          <form action="#" method="post">
          <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <div class="input-boxes-login">
              <div class="input-box-login">
                
                <input type="text"name="email" required placeholder="email" required>
                <i class="fas fa-user"></i>
              </div>
              <div class="input-box-login">
                
                <input type="password"name="password" placeholder=" password" required>
                <i class="fas fa-eye-slash"></i>
              </div>
              <!-- <div class="text-forget-one-login">
                 <div class="contect-login">
                  <i class="fas fa-check-square ic-login"></i>
                  <div class="text-forget-login"><a href="#">Remember me</a></div>
                </div>
                <div class="contect-login">
                  <i class="fas fa-lock ic-login"></i>
                  <div class="text-forget-login"><a href="#">Forgot password?</a></div>
                </div> 
                
              
               </div> -->
              <div class="button-login input-box-login">
                <input type="submit" name="sumbit" value="Sumbit">
              </div>
            <a href="registration.php"><div class="text-login sign-up-text-login">New User? <label>Sigup now</label></div></a>  
            </div>
         </form>
      </div>
        
    </form>
    </div>
    </div>
    </div>
  </div>
</section>



















<footer class="footer-fot">
  <div class="container-fot">
      <div class="row-fot">
          <div class="footer-col-fot">
              <img src="images/logo.png" class="footer-logo">
              <ul>
                  <li><a href="about.html"><i class="fa fa-info ic"></i>about us</a></li>
                  <li><a href="services.html"><i class="fa fa-server ic"></i>our services</a></li>
                  <li><a href="#"><i class="fa fa-shield ic" aria-hidden="true"></i>privacy policy</a></li>
                  
              </ul>
          </div>
          <div class="footer-col-fot">
              <h4><i class="fa fa-server ic"></i>Services</h4>
              <ul>
                <li><a href="webone.html"><i class="fa fa-code ic"></i>WEB DESIGNING</a></li>
                <li><a href="graphic.html"><i class="fa fa-brush ic"></i>GRAPHIC DESIGNING</a></li>
                <li><a href="video-one.html"><i class="fa fa-video ic"></i>VIDEO EDITING</a></li>
                
              </ul>
          </div>
          <div class="footer-col-fot">
              <h4><i class="fa fa-user ic"></i>CONTACT US </h4>
              <ul>
                  <li><a href="registration.html"><i class="fa fa-user-plus ic"></i>SIGN UP </a></li>
                  <li><a href="login.html"><i class="fa fa-right-to-bracket ic"></i>LOGIN</a></li>
                  <li><a href="https://www.google.com/intl/en-GB/gmail/about/"><i class="fa fa-envelope ic"></i>MU86581@GMAIL.COM</a></li>
                  <li><a href="#"><i class="fa fa-phone ic"></i> 03134608519</a></li>
              </ul>
          </div>
          <div class="footer-col-fot">
              <h4>follow us</h4>
              <div class="social-links">
                  <a href="https://www.facebook.com/mohammad.umer.7543653"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/mohammadumer5753/?hl=en"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      </div>
  </div>
</footer>
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

<script src="javascript/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>

</body>
</html>
