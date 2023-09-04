<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/lgoin.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Registration</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e40df777a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/f66055ef4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/totop.css">
    <link rel="icon" href="Images/logo.png">

</head>
<body>


<?php include 'header.php'; ?>








<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users ( username, email,password, user_type) VALUES ('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>
       
         
 







    <section id="heading-only">
        <div class="main-text-webcards">
            <h2>SIGNUP</h2>
             <h4>WELCOME,<br> CREATE YOUR PROFILE &LETS GET STATRED</h4>
        </div>
       </section>





    <section id="body">
      <div class="image-sign">
            <img src="Images/4652.jpg" alt="#">
        </div> 
    
    
    
    
    
        <div class="con-sign">
        <form action="#" method="post">
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <div class="form-sign first-sign">
                <!-- <header>WELCOME!</header> -->
                <div class="details-sign personal-sign">
                    <!-- <span class="title-sign">CREATE YOUR PROFILE, &LETS GET STATRED</span> -->
                    <br>
                    <br>
                    <!-- <label class="sign-sign"> Sign up </label> -->

                    <div class="fields-sign">
                        <div class="input-field-sign">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="name" required>    <i class="fa-solid fa-user op-sign"></i>
                        
                            
                        </div>

                        <div class="input-field-sign">
                            <label>Email</label>
                            
                            <input type="email" placeholder="Enter Your Email" name="email"required><i class="fa-solid fa-envelope op-sign"></i>
                        </div>

                        <div class="input-field-sign">
                            <label>Password</label>
                            
                            <input type="password" placeholder="Enter your Password" name="password"required><i class="fa-solid fa-eye-slash op-sign"></i>
                        
                        </div>

                        <div class="input-field-sign">
                            <label>Confirm Password</label>
                            
                            <input type="password" placeholder="Confirm your password" name="cpassword" required><i class="fa-solid fa-eye-slash op-sign"></i>
                            
</div>

<div class="input-field-sign">
<select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>                    
                            
</div>

                          
                          

                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" name="submit" value="register now" class="btn-sign"> 
                     </div>
                  
                              <div class="last-text">
                            <P style="margin-top: 15px;">YOU HAVE ALREADY AN ACCOUNT? <a href="login.html" style="color:#ffbd4a; font-size: 18px; text-decoration: underline;">Login</a></P>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</section>













<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>


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
    
    <script src="javascript/navbar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</body>
</html>
