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
        <title>Electronic communication : Purchase</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="bhumi1.css">
        <script type="text/javascript" href="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#slide").click(function(){
                     $("#slideup").slideToggle('slow');
                 });
          });
          </script>
          <style type="text/css">
              .back-video{
        position:absolute;
        right:0;
        bottom:0;
        z-index:-1;
          </style>
          <link rel="stylesheet" href="indexbackground.css">
    </head>
    <body>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand mb-0 h1" href="#"><img src="bhumitrust.jpeg" alt="bhumi trust" style="border-radius :50%; width: 100px; height:100px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                  <a class="nav-link text-capitalize font-weight-bold text-center" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bhumii</a>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact us&nbsp;&nbsp;&nbsp;
                          </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                              </svg> facebook</a>
                            <div class="dropdown-divider"></div> 
                            <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg> youtube</a>
                            <!--<div class="dropdown-divider"></div> add may more here!!!
                            <a class="dropdown-item" href="#">C</a>-->
                          </div>
                      </li>
                </ul>
                </div>
                <input class="form-control mr-sm-2" type="search" id="searchbar" onkeyup="search_item()" placeholder="search here" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-lg-0 text-dark" type="button"><a href="logout.php" style="font-family : Calibri;">Log Out</a></button>
              </form>
            </div>
          </nav>
          <h1 class="text-center text-dark bg-light" style="font-family : Calibri;" >Hello <?php echo $user_data['user_name'];?>😌 </h1>
          
        <div class="example-box">
  <div class="background-shapes"></div>
  
  <section >
              
              <div class="container " id="elect" >
                  <div class="row align-items-start ">
                    <div class="col-4">
              <div class="text-align-right "><small class="text-muted">/&nbsp;&nbsp;Course/&nbsp;&nbsp;Electronics</small></div>          
              
              </div>
              <div class="Cart-Container row col align-items-end text-dark bg-light   ">
                  
                      <br><br><br><br>
                      <div class="Header  ">
                          
                          
                          </div>
                          <br><br><br><br>
                          <div class="Cart-Items  bg-light text-dark ">
                              
                              <div class="about">
                              <h1 class="title" >Electronics </h1><br>
                              <div class="image-box subtitle">
                              <img src="electronics.jpg" style= "height:150%; width: 100%;" class="img-thumbnail img-fluid">
                              </div>
                              </div>
                              
                             </div>
  
                                      <div class="header1">
                                      <h3><u>Sample modules 👇</u>- <small class="text-muted">Pay for full modules</small></h3><br><br>
                                    </div>
                                  
                                    <div class="header2 "><br>
                                      <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 1</a> Data Visualization : Introduction</div>
                                      <div id="slideup"><a href="#" class="btn btn-outline-light">Naa illa daaaa</a></div>
                                      <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 2</a> Data Visualization : Introduction</div>
                                      <div id="slideup"><a href="#" class="btn btn-outline-light">Naa illa daaaa</a></div>
                                      <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 3</a> Data Visualization : Introduction</div>
                                      <div id="slideup"><a href="#" class="btn btn-outline-light">Naa illa daaaa</a></div>
                                      <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 4</a> Data Visualization : Introduction</div>
                                      <div id="slideup"><a href="#" class="btn btn-outline-light">Naa illa daaaa</a></div>
                                    </div><br>
                                    <div class="header1"><br>
                                      <h3><u>About This Course</u></h3><br>
                                    </div><br><br><br><br>
                                                              
                                      <p class="text-justify text-dark bg-light " style="text-overflow:ellipsis;"><br>Everywhere we turn today, the world is crowded with people busy typing SMSes on their Nokias or iPhones or someone is staring unblinkingly at a Facebook or Yahoo page on the computer screen. Whether you like it or not, the age of Information Technology is upon us, and we can either learn new skills and adapt to this new technology, or be forever lost and stuck in the older generation. In my opinion, I am fully convinced that this growing trend is the way of the future, and it brings countless benefits to mankind. In this essay, I will discuss three positive effects of electronic communication, namely its efficiency, enhances communication and creates a borderless world community.
  
                                          First and foremost, more and more people are relying on e-mail, Facebook, Short Message System (SMS) and other types of electronic communication tools because of its high efficiency. This is because in today's age of globalisation, we need information at the tip of our fingers. Moreover, with the use of these tools, we can increase the speed of getting the necessary and relevant information within seconds and this will increase our productivity. For example, gone are the days of using 'snail mail' or regular letters using stamps and envelopes and many more examples of 'old' technology because it is simply too slow and inefficient. Therefore, these e-communication tools increases the access to important information which is why the new generation is fully accepting this growing trend.</p><br>
                                          <div class="row">
                                            <div class="col">
                                              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                              </svg></a>
                                            </div>
                                            <div class="col order-5">
                                             <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                            </svg></a>
                                            </div>
                                            <div class="col order-1">
                                              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                              </svg></a>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="prices text-dark bg-light ">
                                  <div class="amount">$2.99</div>
                                              <div class="save"><button type="button" class="btn btn-outline-primary btn-lg">Pay</button></div>
                                      </div>
                                  </div>
                                  </div>
                                  </div>
  
          </section>
          <br><br><br>
        
        
        <section>
          <div class="container " id="machine">
              <div class="row align-items-start">
                <div class="col-4">
          <div class="text-align-right "><a href="Purchase.php">store</a><small class="text-muted">/&nbsp;&nbsp;Course/&nbsp;&nbsp;machinelearning</small></div>          
          
          </div>
          <div class="Cart-Container row col align-items-end text-dark bg-light  ">
                  <br><br><br><br>
                  <div class="Header bg-light text-dark ">
                      
                      
                      </div>
                      <br><br><br><br>
                      <div class="Cart-Items text-dark bg-light ">
                          
                          <div class="about">
                          <h1 class="title " >Machine learning</h1><br>
                          <div class="image-box">
                          <img src="machinelearning.jpg" style= "height:150%; width: 100%;" class="img-thumbnail img-fluid subtitle" >
                          </div>
                          </div>
                          
                          </div>
                            
                          
                                  <br><br>
                                  <div class="header1">
                                  <h3><u>Sample modules 👇</u>- <small class="text-muted">Pay for full modules</small></h3><br><br>
                                </div><br>
                                <div class="header2"><br>
                                  <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 1</a> Data Visualization : Introduction</div>
                                  <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                  <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 2</a> Data Visualization : Introduction</div>
                                  <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                  <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 3</a> Data Visualization : Introduction</div>
                                  <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                  <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 4</a> Data Visualization : Introduction</div>
                                  <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                </div><br>
                                <div class="header1"><br>
                                  <h3><u>About This Course</u></h3><br>
                                </div><br><br><br><br>
                                                          
                                  <p class="text-justify text-dark bg-white " style="text-overflow:ellipsis;"><br>Everywhere we turn today, the world is crowded with people busy typing SMSes on their Nokias or iPhones or someone is staring unblinkingly at a Facebook or Yahoo page on the computer screen. Whether you like it or not, the age of Information Technology is upon us, and we can either learn new skills and adapt to this new technology, or be forever lost and stuck in the older generation. In my opinion, I am fully convinced that this growing trend is the way of the future, and it brings countless benefits to mankind. In this essay, I will discuss three positive effects of electronic communication, namely its efficiency, enhances communication and creates a borderless world community.

                                      First and foremost, more and more people are relying on e-mail, Facebook, Short Message System (SMS) and other types of electronic communication tools because of its high efficiency. This is because in today's age of globalisation, we need information at the tip of our fingers. Moreover, with the use of these tools, we can increase the speed of getting the necessary and relevant information within seconds and this will increase our productivity. For example, gone are the days of using 'snail mail' or regular letters using stamps and envelopes and many more examples of 'old' technology because it is simply too slow and inefficient. Therefore, these e-communication tools increases the access to important information which is why the new generation is fully accepting this growing trend.</p><br>
                                      <div class="row">
                                        <div class="col">
                                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                          </svg></a>
                                        </div>
                                        <div class="col order-5">
                                         <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                        </svg></a>
                                        </div>
                                        <div class="col order-1">
                                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                          </svg></a>
                                          
                                        </div>
                                      </div>
                                      <br>
                                      <div class="prices text-dark bg-light ">
                              <div class="amount">$2.99</div>
                                          <div class="save"><button type="button" class="btn btn-outline-primary btn-lg">Pay</button></div>
                                  </div>
                              </div>
                              </div>
                              </div>

      </section>
        <br><br><br>
         <section>
            <div class="container " id="php">
                <div class="row align-items-start">
                  <div class="col-4">
            <div class="text-align-right "><a href="Purchase.php">store</a><small class="text-muted">/&nbsp;&nbsp;Course/&nbsp;&nbsp;Phpdesign</small></div>          
            
            </div>
            <div class="Cart-Container row col align-items-end text-dark bg-light  ">
                    <br><br><br><br>
                    <div class="Header bg-light text-dark ">
                        
                        
                        </div>
                        <br><br><br><br>
                        <div class="Cart-Items text-dark bg-light " >
                            
                            <div class="about">
                            <h1 class="title " >Php Design</h1><br>
                            <div class="image-box">
                            <img src="electronics.jpg" style= "height:150%; width: 100%;" class="img-thumbnail img-fluid">
                            </div>
                            </div>
                            
                            </div>
                              
                           
                                    <br><br>
                                    <div class="header1">
                                    <h3><u>Sample modules 👇</u>- <small class="text-muted">Pay for full modules</small></h3><br><br>
                                  </div>
                                
                                  <div class="header2"><br>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 1</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 2</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 3</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 4</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                  </div><br>
                                  <div class="header1"><br>
                                    <h3><u>About This Course</u></h3><br>
                                  </div><br><br><br><br>
                                                            
                                    <p class="text-justify text-dark bg-light " style="text-overflow:ellipsis;"><br>Everywhere we turn today, the world is crowded with people busy typing SMSes on their Nokias or iPhones or someone is staring unblinkingly at a Facebook or Yahoo page on the computer screen. Whether you like it or not, the age of Information Technology is upon us, and we can either learn new skills and adapt to this new technology, or be forever lost and stuck in the older generation. In my opinion, I am fully convinced that this growing trend is the way of the future, and it brings countless benefits to mankind. In this essay, I will discuss three positive effects of electronic communication, namely its efficiency, enhances communication and creates a borderless world community.

                                        First and foremost, more and more people are relying on e-mail, Facebook, Short Message System (SMS) and other types of electronic communication tools because of its high efficiency. This is because in today's age of globalisation, we need information at the tip of our fingers. Moreover, with the use of these tools, we can increase the speed of getting the necessary and relevant information within seconds and this will increase our productivity. For example, gone are the days of using 'snail mail' or regular letters using stamps and envelopes and many more examples of 'old' technology because it is simply too slow and inefficient. Therefore, these e-communication tools increases the access to important information which is why the new generation is fully accepting this growing trend.</p><br>
                                        <div class="row">
                                          <div class="col">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg></a>
                                          </div>
                                          <div class="col order-5">
                                           <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                          </svg></a>
                                          </div>
                                          <div class="col order-1">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg></a>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="prices text-dark bg-light ">
                                <div class="amount">$2.99</div>
                                            <div class="save"><button type="button" class="btn btn-outline-primary btn-lg">Pay</button></div>
                                    </div>
                                </div>
                                </div>
                                </div>

        </section>
        <br><br><br>
         <section>
            <div class="container " id="python">
                <div class="row align-items-start">
                  <div class="col-4">
            <div class="text-align-right "><a href="Purchase.php">store</a><small class="text-muted">/&nbsp;&nbsp;Course/&nbsp;&nbsp;PythonAndMySql</small></div>          
            
            </div>
            <div class="Cart-Container row col align-items-end text-dark bg-light  ">
                    <br><br><br><br>
                    <div class="Header bg-white text-dark ">
                        
                        
                        </div>
                        <br><br><br><br>
                        <div class="Cart-Items text-dark bg-light  ">
                           
                            <div class="about">
                            <h1 class="title " >Python and MySql Connect</h1><br>
                            <div class="image-box">
                            <img src="electronics.jpg" style= "height:150%; width: 100%;" class="img-thumbnail img-fluid">
                            </div>
                            </div>
                           
                            </div>
                              
                           
                                    <br><br>
                                    <div class="header1">
                                    <h3><u>Sample modules 👇</u>- <small class="text-muted">Pay for full modules</small></h3><br><br>
                                  </div>
                                
                                  <div class="header2"><br>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 1</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 2</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 3</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                    <div id="slide" class="bg-light text-dark"><a href="module1.html" class="btn btn-outline-dark text-dark">module : 4</a> Data Visualization : Introduction</div>
                                    <div id="slideup"><a href="#" class="btn btn-outline-dark">Naa illa daaaa</a></div>
                                  </div><br>
                                  <div class="header1"><br>
                                    <h3><u>About This Course</u></h3><br>
                                  </div><br><br><br><br>
                                                            
                                    <p class="text-justify text-dark bg-light " style="text-overflow:ellipsis;"><br>Everywhere we turn today, the world is crowded with people busy typing SMSes on their Nokias or iPhones or someone is staring unblinkingly at a Facebook or Yahoo page on the computer screen. Whether you like it or not, the age of Information Technology is upon us, and we can either learn new skills and adapt to this new technology, or be forever lost and stuck in the older generation. In my opinion, I am fully convinced that this growing trend is the way of the future, and it brings countless benefits to mankind. In this essay, I will discuss three positive effects of electronic communication, namely its efficiency, enhances communication and creates a borderless world community.

                                        First and foremost, more and more people are relying on e-mail, Facebook, Short Message System (SMS) and other types of electronic communication tools because of its high efficiency. This is because in today's age of globalisation, we need information at the tip of our fingers. Moreover, with the use of these tools, we can increase the speed of getting the necessary and relevant information within seconds and this will increase our productivity. For example, gone are the days of using 'snail mail' or regular letters using stamps and envelopes and many more examples of 'old' technology because it is simply too slow and inefficient. Therefore, these e-communication tools increases the access to important information which is why the new generation is fully accepting this growing trend.</p><br>
                                        <div class="row">
                                          <div class="col">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg></a>
                                          </div>
                                          <div class="col order-5">
                                           <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                          </svg></a>
                                          </div>
                                          <div class="col order-1">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg></a>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="prices text-dark bg-light ">
                                <div class="amount">$2.99</div>
                                            <div class="save"><button type="button" class="btn btn-outline-primary btn-lg">Pay</button></div>
                                    </div>
                                </div>
                                </div>
                                </div>

        </section>
        <br><br><br>
  
</div>
    </body>
    </html>