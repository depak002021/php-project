<?php 
ob_start();
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Video : course 3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Tamil:ital,wght@1,500&display=swap" rel="stylesheet">
<style>
html{
    scroll-behaviour:smooth;
}
    .videosize {
    position:absolute;
    
    top:0;
    left:0;
    width:100%; 
    height:100vh;
}
</style>

    </head>
    <body>
        <!--Main Navigation-->
<header>
    <style>
      /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      }
  
      .carousel-item:nth-child(1) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
  
      .carousel-item:nth-child(2) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
  
      .carousel-item:nth-child(3) {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
  
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }
  
      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
  
    <!-- Navbar -->
    <nav
         class="navbar navbar-expand-lg navbar-dark d-none d-lg-block"
         style="z-index: 2000"
         >
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a
           class="navbar-brand nav-link"
           target="_blank"
           href="https://manvaasam.com/BhumiDk/Purchase.php"
           >
          <strong>Bhumi Trust</strong>
        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#intro">Home</a>
            </li>
            <li class="nav-item">
              <a
                 class="nav-link"
                 href="https://www.manvaasam.com/BhumiDk/index.php"
                 rel="nofollow"
                 target="_blank"
                 >Modules</a
                >
            </li>
            <li class="nav-item">
              <a
                 class="nav-link"
                 href="https://manvaasam.com/BhumiDk/index.php"
                 target="_blank"
                 >Download Bhumii App</a
                >
            </li>
          </ul>
  
          <ul class="navbar-nav list-inline">
            <!-- Icons -->
            <li class="">
              <a
                 class="nav-link"
                 href="https://www.youtube.com/channel/UCI-RpNV4XZjGdlxpUtudK1w/videos"
                 rel="nofollow"
                 target="_blank"
                 >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
              </a>
            </li>
            <li class="">
              <a
                 class="nav-link"
                 href="https://www.facebook.com/"
                 rel="nofollow"
                 target="_blank"
                 >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
              </a>
            </li>
            <li class="nav-item">
              <a
                 class="nav-link"
                 href="https://twitter.com/"
                 rel="nofollow"
                 target="_blank"
                 >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
              </a>
            </li>
            <li class="nav-item">
              <a
                 class="nav-link"
                 href="https://github.com/"
                 rel="nofollow"
                 target="_blank"
                 >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
              </a>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  
    <!-- Carousel wrapper -->
    <div
         id="introCarousel"
         class="carousel slide carousel-fade shadow-2-strong"
         data-mdb-ride="carousel"
         >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li
            data-mdb-target="#introCarousel"
            data-mdb-slide-to="0"
            class="active"
            ></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>
  
      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
         <video class="hidden-xs hidden-sm hidden-md hidden-custom videosize embed-responsive-item"  playsinline
                 autoplay
                 muted
                 loop>
    <source src="videos/pormovideo.mp4" type="video/mp4" />
</video>
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div
                 class="d-flex justify-content-center align-items-center h-100"
                 >
              <div class="text-white text-center">
                <h1 class="mb-3">Learn with Bhumi Trust</h1>
                <h5 class="mb-4">
                  Best & Usefull Content
                </h5>
               
              </div>
            </div>
          </div>
        </div>
  
        <!-- Single item -->
        <div class="carousel-item">
          <video
                 style="min-width: 100%; min-height: 100%"
                 playsinline
                 autoplay
                 muted
                 loop
                 >
            <source
                    class="h-100"
                    src="https://manvaasam.com/BhumiDk/elctroinics.jpeg"
                    type="video/mp4"
                    />
          </video>
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
            <div
                 class="d-flex justify-content-center align-items-center h-100"
                 >
              <div class="text-white text-center">
                <h2>You can place here any content</h2>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Single item -->
        <div class="carousel-item">
          <video
                 style="min-width: 100%; min-height: 100%"
                 playsinline
                 autoplay
                 muted
                 loop
                 >
            <source
                    class="h-100"
                    src="https://manvaasam.com/"
                    type="video/mp4"
                    />
          </video>
          <div
               class="mask"
               style="
                      background: linear-gradient(
                      45deg,
                      rgba(29, 236, 197, 0.7),
                      rgba(91, 14, 214, 0.7) 100%
                      );
                      "
               >
            <div
                 class="d-flex justify-content-center align-items-center h-100"
                 >
              <div class="text-white text-center">
                <h2>And cover it with any mask</h2>
                <a
                   class="btn btn-outline-light btn-lg m-2"
                   href="https://manvaasam.com/"
                   target="_blank"
                   role="button"
                   >View some other Courses</a
                  >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->
  
      <!-- Controls -->
      <a
         class="carousel-control-prev"
         href="#introCarousel"
         role="button"
         data-mdb-slide="prev"
         >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
         class="carousel-control-next"
         href="#introCarousel"
         role="button"
         data-mdb-slide="next"
         >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light  bg-dark ">
            <a class="navbar-brand mb-0 h1" href="#"><img src="images/bhumitrust.jpeg" alt="bhumi trust" style="border-radius :50%; width: 100px; height:100px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="Purchase.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item dropdown"> "if needed add pannikonga coursers dropdown"
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">B</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">C</a>
                  </div>
                </li>-->
                <li class="nav-item">
                  <a class="nav-link active" href="#">News Feed</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-capitalize font-weight-bold text-center" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bhumii</a>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                      <li class="nav-item">
                  <a class="nav-link active" href="https://www.gnanasuriabahavan.com/p/contact-us.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Contact-us</a>
                </li>
                </ul>
                </div>
                
                <a class="btn btn-danger" data-bs-toggle="collapse" href="logout.php" role="button" aria-expanded="false" >Logout</a>
              </form>
            </div>
          </nav>
  <main class="mt-5">
      
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div
                 class="bg-image hover-overlay ripple shadow-2-strong"
                 data-mdb-ripple-color="light"
                 >
              <img
                   src="images/medicine1.jpg"
                   class="img-fluid"
                   />
              <a href="#!">
                <div
                     class="mask"
                     style="background-color: rgba(251, 251, 251, 0.15)"
                     ></div>
              </a>
            </div>
          </div>
          
  
          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Hello <?php echo $user_data['user_name'];?>🤩 </strong></h4>
            <p class="text-muted">
              <strong>Trees :</strong>
<h2>Trees and its Uses :</h2>

Trees are very important, valuable and necessary to our existence as they have furnished us with two important life essentials; food and oxygen. Apart from basically keeping us alive, there are many other little and big benefits we get from trees. So, trees are vital resources for the survival of all living beings. Therefore, Governments world over and many Organizations are taking steps to prevent deforestation and to tell the benefits of planting trees. Let us go through some important Tree plantation for the existence of human life.
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->
  
      <hr class="my-5" />
  
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Course Modules 👇🏽</strong></h4>
  
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/dkJJaXjSoo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 1-->
              <div class="card-body">
                <h5 class="card-title">மரம் நட மியாவாக்கியின் வழிமுறைகள்</h5>
                <p class="card-text">
                Hi Friends! Are you interested to plant trees? Are you interested to create a Mini Forest? Are you interested to create a  mini  High Dense Forest? Are you interested to make your village green? Please listen to this video ..
                </p>
                
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                <<iframe width="347" height="315" src="https://www.youtube.com/embed/uV5Kjm6H6nw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <div class="card-body">
                  <!--card-2-->
                <h5 class="card-title">கிணத்துக்கு உயிர் குடுங்க - REFILL GROUND WATER</h5>
                <p class="card-text">
                  In this video Bhumii Gnana Soorian, gives a picture of the status of the existing open wells in villages of either Tamil Nadu or India.
                </p>
                
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/fc_PmqkEoGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <div class="card-body">
                  <!--card-3-->
                <h5 class="card-title">இஸ்ரேலின் மந்திரக்கோல் - பூமி ஞான சூரியன்</h5>
                <p class="card-text">
                Do you know? What is the Magic Wand of Israel? That is Drip Irrigation. Drip Irrigation is the Magic Wand behind all its development.
                </p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                <img
                     src="https://manvaasam.com/BhumiDk/images/miyavaakki.png"
                     class="img-fluid"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 4-->
              <div class="card-body">
                <h5 class="card-title">ஓவர் வெயிட்டா ஒபீசிட்டியா ?-OVER WEIGHT OR OBESITY</h5>
                <p class="card-text">
                This is quite new and unique subject with reference to Jamun fruit, so for none has brought out the fact that they can also help to bring down the overweight and Obesity of the people, Gnana surian detailed all the relevant information as detailed below.
                </p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/NF1l_TyPLE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 5-->
              <div class="card-body">
                <h5 class="card-title">NOBEL PRIZE SOLUTION FOR HEPATITIS C</h5>
                <p class="card-text">
                In this programme,Gnana Surian have described detail about hepatitis C and its causes.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/MC2-XF-m6No" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 6-->
              <div class="card-body">
                <h5 class="card-title">மணல் காடுகள்- BYE BYE DEATH VALLEY </h5>
                <p class="card-text">
                 n this program, Gnana surian have described about the death valley.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/RdQdyYeLrAc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 7-->
              <div class="card-body">
                <h5 class="card-title">கெட்ட தண்ணி குளம்- See Bad Water Below Sea Level </h5>
                <p class="card-text">
                 In this program, Gnana surian have described about the bad water below sea level.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/imKvKG8NPr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 8-->
              <div class="card-body">
                <h5 class="card-title">சிறு மரமும் சேர்க்குமே பேரழகு - HOUSE BUILDING LOVES ONLY SMALL TREES</h5>
                <p class="card-text">
                 Bhumii Gnana Soorian tells about house building trees.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div
                   class="bg-image hover-overlay ripple"
                   data-mdb-ripple-color="light"
                   >
                   <iframe width="347" height="315" src="https://www.youtube.com/embed/tzfLnvFklj4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.15)"
                       ></div>
                </a>
              </div>
              <!--card 9-->
              <div class="card-body">
                <h5 class="card-title">பிரேசில் - 3 அதிசய மரங்கள் BRAZIL 3 TREE WONDERS</h5>
                <p class="card-text">
                  In this program, Gnana surian have described about the 3 wonders of brazil trees.
                </p>
                <a href="https://youtu.be/pWcoiwXNljU" class="btn btn-primary">Play</a>
              </div>
            </div>
          </div>
          
          
        </div>
      </section>
      <!--Section: Content-->
  
      <hr class="my-5" />
  
      <!--Section: Content-->
      <section class="mb-5">
       
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
  
              <!-- Register buttons -->
              <div class="text-center">
                <p>Join US On</p>
                <button
                        type="button"
                        class="btn btn-primary btn-floating mx-1"
                        >
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
                </button>
  
                <button
                        type="button"
                        class="btn btn-primary btn-floating mx-1"
                        >
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
                </button>
  
                <button
                        type="button"
                        class="btn btn-primary btn-floating mx-1"
                        >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
                </button>
  
                <button
                        type="button"
                        class="btn btn-primary btn-floating mx-1"
                        >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!--Section: Content-->
    </div>
  </main>
  <!--Main layout-->
  
  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
      <a
         role="button"
         class="btn btn-primary btn-lg m-2"
         href="https://www.youtube.com/channel/UCI-RpNV4XZjGdlxpUtudK1w/videos"
         rel="nofollow"
         target="_blank"
         >
        Learn With Bhumii
      </a>
      <a
         role="button"
         class="btn btn-primary btn-lg m-2"
         href="https://manvaasam.com/"
         target="_blank"
         >
        Download Bhumii App
      </a>
    </div>
  
    <hr class="m-0" />
  
    <div class="text-center py-4 align-items-center">
      <p>Follow Bhumii on social media</p>
      <a
         href="https://www.youtube.com/channel/UCI-RpNV4XZjGdlxpUtudK1w/videos"
         class="btn btn-primary m-1"
         role="button"
         rel="nofollow"
         target="_blank"
         >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
      </a>
      <a
         href="https://www.facebook.com/"
         class="btn btn-primary m-1"
         role="button"
         rel="nofollow"
         target="_blank"
         >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
      </a>
      <a
         href="https://twitter.com/"
         class="btn btn-primary m-1"
         role="button"
         rel="nofollow"
         target="_blank"
         >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
      </a>
      <a
         href="https://github.com/"
         class="btn btn-primary m-1"
         role="button"
         rel="nofollow"
         target="_blank"
         >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
      </a>
    </div>
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      тФм╨╣ 2022 Copyright:
      <a class="text-dark" href="https://manvaasam.com/">Manvaasam.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
 
    </body>
</html>