<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="footer, address, phone, icons" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>FSEGA </title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/searchbar.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!---nav-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script> <!---nav-->
    <link rel="stylesheet" href="css/style.css">
 


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/kapcsolat.css">
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
                            <img src="img/ubbpng.png"height= "80" ></a>
                             <a href="http://hu.econ.ubbcluj.ro">
                                 <img src="img/fsegapng.png"height= "60"> </a>
                        </div>
                    


                        <div class="menu">
                              <ul>
                                    <li><a href="index.php">FŐOLDAL</a></li>
                                    <li><a href="hataridok.php">HATÁRIDŐK</a></li>
                                    <li><a href="tanarok.php">DOLGOZAT</a></li>
                                    <li><a href="faq.php">GYIK</a></li>
                                    <li><a href="dokumentumok.php">DOKUMENTUMOK</a></li>
                                    <li><a href="kapcsolat.php">KAPCSOLAT</a></li>
                                  
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
                  
                        <h1>KAPCSOLAT</h1>
                  
                   </section>
            
            </header>

      </div> <!--wrapper-->

        
   
        
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
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

   
  </form>
</div>



<!------------------end login modal------------------------>


        <ul class="breadcrumb">
            <li><a href="index.php" class="active">Főoldal</a>
            <li><a href="#"></a>
        </ul>  
           
       


 
<div class="contact-page">

    <div class="contact-info">
      <div class="item">
        <i class="icon fas fa-home"></i>
       Teodor Mihali utca 58–60 szám, Kolozsvár,   400591
      </div>
      <div class="item">
        <i class="icon fas fa-phone"></i>
         0264/418 652–5, 5888 belső szám
      </div>
      <div class="item">
        <i class="icon fas fa-envelope"></i>
       magyar.intezet@econ.ubbcluj.ro
      </div>
      
    </div>
    <form action="" class="contact-form">
    <?php 
      if(isset($_SESSION["username"])){ //ha be van jelentkezve t0ltse fel automatiikusan a mezoket
    ?>
        <input type="text" class="textb" value="<?php echo $_SESSION["username"];?>" style="color:black;">
        <?php 
        if($_SESSION["kiaz"]=="diak"){
        ?>
        <input type="email" class="textb"  value="<?php echo $_SESSION["email"];?>"style="color:black;">
        <?php 
        }
        if($_SESSION["kiaz"]=="tanar"){
        ?>
        <input type="email" class="textb"  value="<?php echo $_SESSION["TEmail"];?>"style="color:black;">
        <?php 
       }
      }
      else{
    ?>

      <input type="text" class="textb" placeholder="Teljes név">
      <input type="email" class="textb" placeholder="Email-cím">
      <?php 
      }
      ?>
      <textarea placeholder="Üzenet"></textarea>
      <input type="submit" class="btn" value='Küldés'>
    </form>
  </div>


 <!-- Footer -->
      
  <footer class="footer-distributed">
 
    <div class="footer-left">
      <p class="footer-links">
        <a href="index.php">Főoldal</a>
        ·
        <a href="hataridok.php">Határidők</a>
        ·
        <a href="tanarok.php">Dolgozat</a>
        ·
        <a href="faq.php">GYIK</a>
        ·
        <a href="dokumentumok.php">Dokumentumok</a>
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






   <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/nav.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>

        




</body>

</html>