<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="footer, address, phone, icons" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>FSEGA </title>


  
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/searchbar.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!---nav-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script> <!---nav-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"><!-----nav---> 
 


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/faq.css">
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
                                    <li><a href="index.php">F??OLDAL</a></li>
                                    <li><a href="hataridok.php">HAT??RID??K</a></li>
                                    <li><a href="tanarok.php">DOLGOZAT</a></li>
                                    <li><a href="faq.php">GYIK</a></li>
                                    <li><a href="dokumentumok.php">DOKUMENTUMOK</a></li>
                                    <li><a href="kapcsolat.php">KAPCSOLAT</a></li>
                                    <?php 
                                    if(isset($_SESSION["username"])){
                                      if($_SESSION["kiaz"]=="diak"){
                                    ?>    
                                         <li><a href="kutatasiterv.php"target="_blank">KUTAT??SI TERV</a></li>
                                    <?php 
                                      }
                                      else if ($_SESSION["username"]==' Admin'){
                                    ?>
                                        <li><a href="osszesitoTablazat.php"target="_blank">??SSZES??T?? T??BL??ZAT</a></li>
                                    <?php 
                                      }
                                    ?>
                                      <li ><a href="#"><span class="glyphicon glyphicon-user"></span> 
                                      <?php 
                                      echo $_SESSION["username"];
                                      ?>
                                      
                                    
                                    <span class="caret" ></span></a>
                                        <ul class="sub-menu">
                                            
                                            <li><a href="beallitasok.php">Be??ll??t??sok</a></li>
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
                  
                        <h1>GYAKORI K??RD??SEK</h1>
                  
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
            <li><a href="index.php" class="active">F??oldal</a>
            <li><a href="#"></a>
        </ul>  
           
       


<div class="accordion">
  <div class="item">
    <div class="heading">Hogyan v??lasszak szakdolgozat t??m??t ??s tan??rt?</div>
    <div class="content">K??t lehet??s??g van:</div>
    <div class="content"> 1. Ha ??rdekel egy t??ma akkor arr??l ??rsz, ??s keresel hozz?? egy tan??rt </div>
    <div class="content">2. Kin??zel egy tan??rt, akin??l szeretn??d meg??rni, ??s megk??rdezed, mit aj??nlana.</div>
  </div>
  <div class="item">
    <div class="heading">Mib??l ??ll a z??r??vizsga?</div>
    <div class="content"> ??r??sbeli, sz??beli, gyakorlati vizsga</div>
  </div>
  <div class="item">
    <div class="heading">Mik a z??r??vizsga tartalmi kovetelm??nyei?</div>
    <div class="content">Az ehez kapcsol??d?? s tematika ??s szakirodalom a dokumentumok k??z??tt megtal??lhat??.</div>
  </div>
    <div class="item">
    <div class="heading">Kik jelentkezhetnek a z??r??vizsg??ra?</div>
    <div class="content">A z??r??vizsg??ra azok a hallgat??k jelentkezhetnek, akik v??gz??s st??tussal rendelkeznek,
vagyis teljes m??rt??kben elv??gezt??k az illet?? szak / k??pz??si ??g eset??ben ??rv??nyes tantervben sz??mukra el????rt programokat.
A febru??ri z??r??vizsga-id??szakban nem jelentkezhetnek azok a v??gz??s hallgat??k, akik a tan??v v??gi rangsorol??sban nem vettek r??szt (sem pedig a r??gebbi tan??vek v??g??n t??rt??n?? rangsorol??sban).</div>
  </div>
    <div class="item">
    <div class="heading">Mit tegyek ha nem siker??lt a z??r??vizsg??m?</div>
    <div class="content">Azok a hallgat??k, akinek nem siker??lt a z??r??vizsg??juk, k??r??sre kapnak egy igazol??st,
hogy elv??gezt??k egy egyetemet, illetve egy tanulm??nyi el??menetelr??l sz??l?? kivonatot is. Tov??bb?? beiratkozhatnak z??r??vizsg??ra egy k??s??bbi z??r??vizsga-id??szakban, ak??r ugyanabban az int??zm??nyben ak??r egy m??sik,z??r??vizsg??t szervez?? int??zm??nyben, az erre vonatkoz?? szab??lyok ??s metodol??gia felt??telek mellett</div>
  </div>
  <div class="item">
    <div class="heading">Milyen mesteri k??pz??sek vannak magyar nyelven?</div>
    <div class="content">Digit??lis marketing</div>
    <div class="content">V??llalati p??nz??gyi menedzsment</div>
    <div class="content">V??llalkoz??smenedzsment</div>
  </div>
  <div class="item">
    <div class="heading">Hogy kell kin??zzen ??s mit kell tartalmazzon a vizsgamunka?</div>
    <div class="content">Ezzel kapcsolatosan minden inform??ci??t megtal??lsz a Dolgozat men??pont alatt.</div>
  </div>
  
</div>



 

 <!-- Footer -->
      
  <footer class="footer-distributed">
 
    <div class="footer-left">
      <p class="footer-links">
        <a href="index.php">F??oldal</a>
        ??
        <a href="hataridok.php">Hat??rid??k</a>
        ??
        <a href="tanarok.php">Dolgozat</a>
        ??
        <a href="faq.php">GYIK</a>
        ??
        <a href="dokumentumok.php">Dokumentumok</a>
        ??
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
        <script type="text/javascript" src="js/faq.js"></script>

        <link href="//www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet">




</body>
</html>