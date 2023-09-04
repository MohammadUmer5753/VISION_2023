<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"rel="stylesheet"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f66055ef4f.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.min.css">
     <script src="javascript/lightbox-plus-jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
      <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/video.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/totop.css">
    <link rel="icon" href="Images/logo.png">
    <link rel="icon" href="Images/logo.png">
    <title>Kreative Design</title>
</head>
<body>
   
       
 
<?php include 'header.php'; ?>


   
        <section>
    <div class="splitview skewed">
		<div class="panel bottom">
			<div class="content">
				<div class="description">
					<h1 id="headtwo">
            Creative and passionate.
          </h1>
					<p class="p-one"  id="p-one">Designs that you wish for</p>

				</div>

				<img src="Images/paint_logo.jpg" alt="Original">

			</div>

		</div>

		<div class="panel top">
			<div class="content">
				<div class="description">
					<h1 id="headone">creative design, successful result</h1>
					<p class="p-one">great design for good reason.
          </p>

				</div>

				<img src="Images/vector-1.jpg" alt="Duotone">
			</div>
		</div>

		<div class="handle"></div>
	</div>
        </section>
  


   <section id="heading-only">
    <div class="main-text-webcards">
        <h2> OUR SERVICES</h2>
         <h4>SOME OF THE SERVICES WE PROVIDE</h4>
    </div>
   </section>

   <section id="frequent">

   
    <div class="container-three">
        <div class="box-one" data-tilt data-tilt-max="50" data-tilt-speed="400" data-tilt-perspective="500">
            <h2 class="name-one">WEB DEVELOPING</h2>
            <a href="webone.html" class="buy-one">MORE DETAILS</a>  
            <div class="circle-one">
            </div>
            <img src="Images/vanilla-one.png" alt="#" class="product-one">
        </div>


        <div class="box-one" data-tilt data-tilt-max="50" data-tilt-speed="400" data-tilt-perspective="500">
            <h2 class="name-one">GRAPHIC DESIGNING</h2>
         <a href="graphic.html" class="buy-one">MORE DETAILS</a>  
            <div class="circle-one">

            </div>
            <img src="Images/vanilla-two.png" alt="#" class="product-one">
        </div>


        <div class="box-one" data-tilt data-tilt-max="50" data-tilt-speed="400" data-tilt-perspective="500">
            <h2 class="name-one">VIDEO EDITING</h2>
            <a href="video-one.html" class="buy-one">MORE DETAILS</a>  
            <div class="circle-one">

            </div>
            <img src="Images/vanilla-three.png" alt="#" class="product-one">
        </div>

        


    </div>

</section>

<section id="heading-only">
    <div class="main-text-webcards">
        <h2> OUR DESIGNERS</h2>
         <h4>OUR MOST INTELIIGENT AND CREATIVE DESIGNER</h4>
    </div>
   </section>
<section id="designers">
    
    <div class="container">
        <div class="row justify-content-center">
         
        </div>
        <div class="row">
         
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3 margin-left" data-aos="zoom-out-left" data-aos-duration="2000">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Mohammad Umer</h6>
                <p class="designation">WEB DESIGNER</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Hafeez Ahmed </h6>
                <p class="designation">Graphic Designer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="zoom-out-right" data-aos-duration="3000">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Rabia</h6>
                <p class="designation">Video Editing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>























<section id="heading-only">
    <div class="main-text-webcards">
        <h2>WEBSITE TEMPLATES</h2>
        <h4>SOME OF OUR DEVELOPED WEBSITES</h4>
    </div>
</section>

<section class="portfolio-webcards" id="portfolio-webcards">

    <div class="portfolio-content-webcards">
        <div class="row-webcards" data-aos="zoom-in" data-aos-duration="3000">
            <img src="images/portfolio1.jpg">
            <div class="main-row-webcards">
                <div class="row-text-webcards">
                    <h6>DATA ANALYTICS</h6>
                </div>
                <div class="row-icon-webcards">
                    <i class='bx bx-heart bx-webcards'></i>
                </div>
            </div>
            <h3>Mock interview to refine resume.</h3>
        </div>
       
        
            <div class="row-webcards" data-aos="zoom-out" data-aos-duration="3000">
                <img src="images/portfolio2.jpg">
                <div class="main-row-webcards">
                    <div class="row-text-webcards">
                        <h6>MIDTOWN BURGERS</h6>
                    </div>
                    <div class="row-icon-webcards">
                        <i class='bx bx-heart bx-webcards'></i>
                    </div>
                </div>
                <h3> Juciest zinger burgers in the town</h3>
            </div>

            
            
                <div class="row-webcards" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="images/portfolio3.jpg">
                    <div class="main-row-webcards">
                        <div class="row-text-webcards">
                            <h6>OT TRAVEL AND TOUR'S</h6>
                        </div>
                        <div class="row-icon-webcards">
                            <i class='bx bx-heart bx-webcards'></i>
                        </div>
                    </div>
                    <h3>Offering over 100+ sports and adventure</h3>
                </div>

                

               
                    <div class="row-webcards" data-aos="zoom-in" data-aos-duration="3000">
                        <img src="images/portfolio4.jpg">
                        <div class="main-row-webcards">
                            <div class="row-text-webcards">
                                <h6>GYM TOWER</h6>
                            </div>
                            <div class="row-icon-webcards">
                                <i class='bx bx-heart bx-webcards'></i>
                            </div>
                        </div>
                        <h3>GYM TOWER landing design & Services</h3>
                    </div>

                    

                    
                        <div class="row-webcards" data-aos="zoom-out" data-aos-duration="3000">
                            <img src="images/portfolio5.jpg">
                            <div class="main-row-webcards">
                                <div class="row-text-webcards">
                                    <h6>ELECTRO</h6>
                                </div>
                                <div class="row-icon-webcards">
                                    <i class='bx bx-heart bx-webcards'></i>
                                </div>
                            </div>
                            <h3>ELECTRO landing design & Services</h3>
                        </div>

                        

                       
                            <div class="row-webcards" data-aos="zoom-in" data-aos-duration="3000">
                                <img src="images/portfolio6.jpg">
                                <div class="main-row-webcards">
                                    <div class="row-text-webcards">
                                        <h6>Foodistan</h6>
                                    </div>
                                    <div class="row-icon-webcards">
                                        <i class='bx bx-heart bx-webcards'></i>
                                    </div>
                                </div>
                                <h3>Foodistan landing page design & Services</h3>
                            </div>
                
        

    </div>
</section>
<section id="heading-only">
    <div class="main-text-webcards">
        <h2>ILLUSTRATION GALLERY</h2>
        <h4>SOME OF OUR FINE ART </h4>
    </div>
</section>

<section id="gallery-section">
    <div class="container-gallery">
        
        <div class="box-gallery">
          
          <div class="dream-gallery">
            <a href="images/vector-1.jpg" data-lightbox="mygallery"><img src="images/vector-1.jpg" data-aos="fade-left"></a>
            <a href="images/vector-2.jpg" data-lightbox="mygallery"><img src="images/vector-2.jpg" data-aos="fade-right"></a>
            <a href="images/vector-3.jpg" data-lightbox="mygallery"><img src="images/vector-3.jpg" data-aos="fade-left"></a>
            
                
          </div>
    
          <div class="dream-gallery">
            <a href="images/vector-4.jpg" data-lightbox="mygallery"><img src="images/vector-4.jpg" data-aos="fade-right"></a>
            <a href="images/vector-5.jpg" data-lightbox="mygallery"><img src="images/vector-5.jpg" data-aos="fade-left"></a>
            <a href="images/vector-6.jpg" data-lightbox="mygallery"><img src="images/vector-6.jpg"data-aos="fade-right"></a>
            
                
          </div>
          <div class="dream-gallery">
            <a href="images/vector-7.jpg" data-lightbox="mygallery"><img src="images/vector-7.jpg" data-aos="fade-left"></a>
            <a href="images/vector-8.jpg" data-lightbox="mygallery"><img src="images/vector-8.jpg" data-aos="fade-right"></a>
            <a href="images/vector-9.jpg" data-lightbox="mygallery"><img src="images/vector-9.jpg" data-aos="fade-left"></a>
                
          </div>
    
    
    
    
        </div>
      
    
    
    
    
    
      </div>
</section>








<section id="testi">
    

</section>




<section id="heading-only">
  <div class="main-text-webcards">
      <h2>VIDEO GALLERY</h2>
      <h4>SOME OF OUR FINE EDITING </h4>
  </div>
</section>








<section id="video-section">
  <div class="video-container">
    <div class="main-video">
        <video src="videos/vibutton.mp4" autoplay muted controls></video>
        <i class='bx bx-x close'></i>
    </div>
    <div class="videos">
      <video src="videos/montage1.mp4"></video>
      <i class='bx bx-play-circle'></i>
    </div>
    <div class="videos">
      <video src="videos/montage2.mp4"></video>
      <i class='bx bx-play-circle'></i>
    </div>
    <div class="videos">
      <video src="videos/montage3.mp4"></video>
      <i class='bx bx-play-circle'></i>
    </div>
    <div class="videos">
      <video src="videos/montage4.mp4"></video>
      <i class='bx bx-play-circle'></i>
    </div>
  </div>
</section>

<script>
  const section = document.querySelector("#video-section"),
  mainVideo = document.querySelector(".main-video video"),
   videos = document.querySelectorAll(".videos"),
   close = document.querySelector(".close");

   for (var i = 0; i < videos.length; i++) {
     videos[i].addEventListener("click", (e)=>{
       const target = e.target;
       section.classList.add("active");
       target.classList.add("active");
       let src = document.querySelector(".videos.active video").src;
       mainVideo.src = src;

       close.addEventListener("click", ()=>{
         section.classList.remove("active");
         target.classList.remove("active");
         mainVideo.src = "";
       });
     });
   };
</script>














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








<script>

  let sideBar = document.querySelector('.container-video .side-bar');
  
  document.querySelector('#menu-btn').onclick = () =>{
      sideBar.classList.toggle('active');
  };
  
  let video = document.querySelector('.container-video .video-container video');
  let videoLinks = document.querySelectorAll('.container-video .side-bar .list li');
  
  videoLinks.forEach(link =>{
      link.onclick = () =>{
          let src = link.getAttribute('data-src');
          video.src = src;
          sideBar.classList.remove('active');
          videoLinks.forEach(remove =>{remove.classList.remove('active')});
          link.classList.add('active');
      }
  })
  
  </script>
      



































































 

<script src="javascript/counter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
   <script src="javascript/slider.js"></script>
    <script src="javascript/navbar.js"></script>









    <script type="text/javascript">
        //jquery for toggle dropdown menus
        $(document).ready(function(){
          //toggle sub-menus
          $(".sub-btn").click(function(){
            $(this).next(".sub-menu").slideToggle();
          });
    
          //toggle more-menus
          $(".more-btn").click(function(){
            $(this).next(".more-menu").slideToggle();
          });
        });
    
        //javascript for the responsive navigation menu
        var menu = document.querySelector(".menu");
        var menuBtn = document.querySelector(".menu-btn");
        var closeBtn = document.querySelector(".close-btn");
    
        menuBtn.addEventListener("click", () => {
          menu.classList.add("active");
        });
    
        closeBtn.addEventListener("click", () => {
          menu.classList.remove("active");
        });
    
        //javascript for the navigation bar effects on scroll
        window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        });
        </script>










    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>


</body>
</html>
