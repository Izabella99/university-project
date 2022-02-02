<?php session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="keywords" content="footer, address, phone, icons" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>FSEGA</title>
      <link rel="stylesheet" href="css/style.css">
     
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <!--script src="https://code.jquery.com/jquery-3.3.1.js"></script--->
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/searchbar.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!---nav-->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      <link rel="stylesheet" href="css/vel.css">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
      <link rel="stylesheet" href="css/tanarok.css">
      <link rel="stylesheet" href="css/features.css">
       <link rel="stylesheet" href="css/rolunk.css">
       <link rel="stylesheet" href="css/login.css">


</head>
<body>
      <div class="wrapper">
       
            <header>
                  
                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>
                        <div class="logo">
                          <a href="https://www.ubbcluj.ro">
                            <img src="img/ubbpng.png" height= "80" ></a>
                             <a href="http://hu.econ.ubbcluj.ro">
                                 <img src="img/fsegapng.png"height= "60"> </a>
                        </div>
                    
                        <div class="menu">
                              <ul>
                                    <li><a href="index.php" target="_blank">FŐOLDAL</a></li>
                                    <li><a href="hataridok.php " target="_blank">HATÁRIDŐK</a></li>
                                    <li><a href="tanarok.php"target="_blank">DOLGOZAT</a></li>
                                    <li><a href="faq.php"target="_blank">GYIK</a></li>
                                    <li><a href="Dokumentumok.php"target="_blank">DOKUMENTUMOK</a></li>
                                    <li><a href="kapcsolat.php"target="_blank">KAPCSOLAT</a></li>
                                    
                                   
                                    <?php 
                                    if(isset($_SESSION["username"])){
                                      if($_SESSION["kiaz"]=="diak"){
                                    ?>    
                                         <li><a href="kutatasiterv.php"target="_blank">KUTATÁSI TERV</a></li>
                                    <?php 
                                      }
                                      else if ($_SESSION["username"]==' Admin'){
                                    ?>
                                        <li><a href="osszesitoTablazat.php"target="_blank">ÖSSZESÍTŐ TÁBLÁZAT</a></li>
                                    <?php 
                                      }
                                    ?>
                                      <li ><a href="#"><span class="glyphicon glyphicon-user"></span> 
                                      <?php 
                                      echo $_SESSION["username"];
                                      ?>
                                      
                                    
                                    <span class="caret" ></span></a>
                                        <ul class="sub-menu">
                                           
                                            <li><a href="beallitasok.php">Beállítások</a></li>
                                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                         </ul>
                                      </li>
                                      
                    
                                    <?php }
                                    else{?>
                                    <li class="login-btn"><a><button class="login-btn" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> LOGIN</button></a></li>
                                    <?php } ?>
                                    

                              </ul>
                        </div>
                  </nav>
                  <section  class=headline id="headline">  
                  
                        <div class='console-container'><span id='text'></span>
                        <div class='console-underscore' id='console'>&#95;</div></div>
                  
                   </section>
            
            </header>
  </div>

<!-----------------login modal--------------------->


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span class="title">Login</span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="modal-container">
      
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
     
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> 
      <button type="submit">Login</button>
      <span class="psw">Forgot <a href="forgotpassword.php">password?</a></span>
    </div>

   
  </form>
</div>



<!------------------end login modal------------------------>

  <!--------------------feature section--------------------------->

  <div class="features-section">
    <div class="container">
      <div class="features-inner">


        <div class="features-box">
            <div class="icon">
              <img src="img/papir.png" alt ="papir">
            </div>
            <h1>Dokumentumok</h1>
            <p> Nyomtatványok, szükséges iratok, kutatási terv sablon stb.</p>
        </div>

        <div class="features-box">
            <div class="icon">
              <img src="img/hatarido.png" alt ="hatarido">
            </div>
            <h1>Adminisztratív tudnivalók</h1>
            <p> Minden határidő összefoglalva egy helyen</p>
        </div>

        <div class="features-box">
            <div class="icon">
              <img src="img/valasz.png" alt ="valasz">
            </div>
            <h1>Válaszok</h1>
            <p> Vannak kérdéseid? Itt megtalálod a válaszokat!</p>
        </div>

        <div class="features-box">
            <div class="icon">
              <img src="img/licenta.png" alt ="licenta">
            </div>
            <h1>Írásbeli záróvizsga</h1>
            <p> Záróvizsgára szükséges anyagrészek</p>
        </div>

      </div>
    </div>
  </div>




<!---------------------------rolunk-------------------->






<div class="rolunk">

<div class="about-section">
        <div class="inner-container">
            <h1>Kedves Hallgató!</h1>
            <p class="szoveg">
                Weboldalunk azért jött létre, hogy hasznos információkat szolgáltasson a végzősök számára. Összefoglaltunk minden fontos tudnivalót amire szükséged van.
            </p>

            <p class="szoveg">
                Ha mégis akad olyan kérdésed, amire nem találtál weboldalunkon választ, keress meg minket!
            </p>
            <a href="kapcsolat.php" class="Kapcsolat">Kapcsolat</a>
        </div>
    </div>









      
<div class="container-fluid">
  <h1 class="text-center mb-3"  >TÉMAVEZETŐ TANÁROK</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Alt.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. ALT MÓNIKA-ANETTA, DOCENS</h4>
          
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Avornicului.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. AVORNICULUI MIHAI-CONSTANTIN, ADJUNKTUS</h4>
           
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Cardos.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. CARDOŞ ILDIKÓ RÉKA, ADJUNKTUS</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Fekete.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. FEKETE-PALI-PISTA SZILVESZTER, ADJUNKTUS</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/GubanA.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. GUBÁN ÁKOS, FŐISKOLAI TANÁR</h4>
          
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/GubanM.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. GUBÁN MIKLÓS, FŐISKOLAI TANÁR</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Gyorfy.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. GYÖRFY LEHEL-ZOLTÁN, DOCENS</h4>
         
          
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Horvath.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. HORVÁTH RÉKA, ADJUNKTUS</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Juhasz.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. JUHÁSZ JÁCINT-ATTILA, ADJUNKTUS</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Kerekes.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. KEREKES KINGA, DOCENS</h4>
            
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Kovacs.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. KOVÁCS GYÖNGYVÉR-EMESE, ADJUNKTUS</h4>
          
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Nagy.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. NAGY BÁLINT-ZSOLT, DOCENS</h4>
           
           
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Racz.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. RÁCZ BÉLA-GERGELY, ADJUNKTUS</h4>
            
            
          </div>
        </div>
      </div>
       <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Saplacan.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. SĂPLĂCAN ZSUZSA, ADJUNKTUS</h4>
            
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Seer.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. SEER LÁSZLÓ-CSABA, ADJUNKTUS</h4>
           
           
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Szabo.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. SZABÓ TÜNDE PETRA, DOCENS</h4>
           
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Szasz.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. SZÁSZ LEVENTE, EGYETEMI TANÁR</h4>
            
           
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Szekely.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DR. SZÉKELY IMRE, TANÁRSEGÉD</h4>
          
            
          </div>
        </div>
      </div>
        <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/Benedek.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">DRD. BENEDEK BOTOND, TANÁRSEGÉD</h4>
          
           
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div> <!--tanarok reszleg --->

<div class="button">
  <a href="tanarvalasztas.php" class="button instagram">Jelentkezés</a>
</div>




<!-------------------------------VÉLEMÉNY----------------------------->
  
  <div class="velemeny">
     <h1 class="text-center mb-3"  >VÉLEMÉNYEK</h1>
 
 
<div class="testimonial" >  
<div class="testimonials-container">
	<image class="quote" src=img/quote.png ></image>
	<p class="text"></p>
	<strong class="name"></strong>
	<div class="authors-container">
		<div class="author selected"><img src="img/girl1.jpg"></div>
		<div class="author"><img src="img/man.jpg" alt=""></div>
		<div class="author"><img src="img/girl2.jpg" alt=""></div>
		
	</div>
</div>
</div>

 </div>                    
  

<!-- Footer -->
      
  <footer class="footer-distributed">
 
    <div class="footer-left">
      <p class="footer-links">
        <a href="#">Főoldal</a>
        ·
        <a href="hataridok.php">Határidők</a>
        ·
        <a href="tanarok.php">Dolgozat</a>
        ·
        <a href="faq.php">GYIK</a>
        ·
        <a href="documentumok.php">Dokumentumok</a>
        ·
        <a href="kapcsolat.php">Kapcsolat</a>
      </p>
   </div>
 
    <div class="footer-center">
      <div><i class="fa fa-map-marker"></i>
         <p><span>Str. Teodor Mihali, Nr. 58-56</span> 400 591, Cluj Napoca, Romania</p>
      </div>
      <div><i class="fa fa-phone"></i>
          <p>Tel.: +40.264 41 86 55</p>
      </div>
    </div>
 
    <div class="footer-right">

      <div class="footer-icons">
        <a href="https://www.facebook.com/pages/FSEGA/299450305961"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ubbfsega"><i class="fa fa-twitter"></i></a>
        <a href="http://www.youtube.com/ubbfsega"><i class="fa fa-youtube"></i></a>

      </div>

    </div>
 
  </footer>


<!--tanarok-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--velemeny-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vel.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/login.js"></script>



      <script type="text/javascript" src="js/nav.js"> </script>

</body>
</html>
