<?php session_start();
if(isset($_SESSION["username"])&&($_SESSION["kiaz"]=="diak")){ //CSAK A DIAKOKNAK
?>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   

   <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lemon" />
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/searchbar.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"><!-----nav---> 
  
  <link rel="stylesheet" href="css/tanarvalasztas.css" /> 
  <link rel="stylesheet" href="css/login.css"> 
  
</head>





<body >


        
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
                                    <li><a href="dokumnetumok.php">DOKUMENTUMOK</a></li>
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
                  
                        <h1> TÉMA ÉS VEZETŐ TANÁR VÁLASZTÁS</h1>
                  
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
            <li><a href="tanarok.php">Dolgozat</DATA></a>
             <li><a href=""></a>

        </ul>  
           
<?php 
    
       
      $host='localhost';
      $user='root';
      $password='';
      $dbname='szakdolgozat';
  
      $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz
      
      if($dbcon->connect_error){ //sikertelen csatlakozas
          die("Connection failed:".$conn->$connect_error);
      }
      
    
          //Azonositsunk egy felhasznalot
          //betesszuk Session-be az adatait

          $username = $_SESSION ["username"];//itt az usename mar a diak teljes neve
          $CNP=$_SESSION["CNP"];
   
          $diak = "SELECT MatricolSzam,Beiratkozas_Ev,Email,Szak FROM diak WHERE CNP=$CNP";
          if(mysqli_query($dbcon,$diak)){ 
          $result = mysqli_query($dbcon,$diak);
          $count = mysqli_num_rows($result);
          
          if($count == 1) {
             
              $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra
              $_SESSION["nev"]=$_SESSION ["username"];
              $_SESSION["nrmatricol"]=$row["MatricolSzam"];
              $_SESSION["email"]=$row["Email"];
              $_SESSION["tanev"]=$row["Beiratkozas_Ev"];
              $_SESSION["szak"]= $row["Szak"];
   
           }
    
          }

          $temail = "SELECT  TEmail FROM tanar "; //tanárok emailjainak lekérdezése és tárolása
          if(mysqli_query($dbcon,$temail)){ 
            $result = mysqli_query($dbcon,$temail);   
            $answer = array();  
            while ( $row= mysqli_fetch_array( $result ))
               {
                $answer[] = $row['TEmail'];
               }

          }
           
            

          $tema = "SELECT  Nev FROM tema "; //témák lekérdezése és tárolása
          if(mysqli_query($dbcon,$tema)){ 
            $result = mysqli_query($dbcon,$tema);
            $temak = array(); 
            while ( $row= mysqli_fetch_array( $result ))
            {
              $temak[] = $row['Nev'];
            }
          }
   
            
         
?>



<div class="form-style-5">
  <form name="form1"  method="post" action="szakdolgozatbeszur.php">
    <fieldset>
    <legend><span class="number">1</span>Személyes adatok</legend>
    <label for="nev"> Teljes név </label>
    <p name="nev"style="color: #17345c;"><?php  echo $_SESSION["nev"]; ?></p>
    <label for="nrmatricol"> Anyakönyvi szám (nr. matricol) </label>
    <p name="nrmatricol" style="color: #17345c;"><?php  echo $_SESSION["nrmatricol"]; ?></p>
    <label for="szakirány">Szakirány</label>
    <p name="szak" id="szak"style="color: #17345c;"><?php  echo $_SESSION["szak"]; ?></p>
    <label for="email"> E-mail cím </label>
    <p name="email" style="color: #17345c;"><?php  echo $_SESSION["email"]; ?></p>

    <label for="tanev">Tanév </label>
    <p name="tanev" style="color: #17345c;"><?php  echo $_SESSION["tanev"]; ?></p>

    <?php
    echo '<br />';
    echo'<br />';
    echo '<legend><span class="number">2</span> Választott tanár és téma</legend>';

    $vanTema = "SELECT  Szakdolgozat_Kod,Cim,TEmail FROM szakdolgozat WHERE  CNP=$CNP ";
              
      if(mysqli_query($dbcon,$vanTema)){ 
             
                $eredmeny = mysqli_query($dbcon,$vanTema);
                $count = mysqli_num_rows($eredmeny);
                
                
                if($count == 1) { //HA A DIÁK SZEREPEL MÁR A SZAKDOLGOZAT TÁBLÁBAN, VAGYIS VÁLASZTOTT TANÁRT ÉS TÉMÁT AKKOR KIIRJA AZOKAT
                
                  
                  $row=mysqli_fetch_assoc($eredmeny);//rekordok halmazat bontja sorokra

                  $temail=$row["TEmail"];
                  $_SESSION["temail"]=$temail;
                
                  $tanarod = "SELECT CsaladNev,KeresztNev FROM tanar WHERE TEmail='$temail'";
              
                  if(mysqli_query($dbcon,$tanarod)){ 
             
                    $ere = mysqli_query($dbcon,$tanarod);
                    $sor= mysqli_fetch_array( $ere );
                
                    echo'<label for="tanar"> Tanár: </label>';
                    echo '<p style="color: #17345c;" >'.$sor['CsaladNev']." ".$sor['KeresztNev'].'</p>';
                  }
                 
                  echo'<label for="tema"> Téma: </label>';
                  echo '<p style="color: #17345c;">'.$row["Cim"].'</p>';
                    
                }  
              
              else{ //HA NINCS TÉMA ÉS TANÁR VÁLASZTVA MEGJELIK A FORM

                ?>
                <label for="vizsgára"> Milyen vizsgára jelentkezel be? </label>
                <select id="vizsga" name="vizsga">
                  <?php
                  switch ($_SESSION["szak"]) {
                    case 'IEM':
                    case 'MGM':
                    case 'MKM':
                    case 'FBM':
                    echo ' <option value="valassz">Kiválasztás</option>
                          <option value="februári szesszió" >Szakdolgozat - 2021 februári szesszió</option>
                          <option value="2021 júliusi szesszió">Szakdolgozat - 2021 júliusi szesszió</option>';
                    break;
                    default:
                      echo'<option value="disszertacio1">Disszertációs dolgozat - 2021 februári szesszió</option>
                          <option value="disszertacio2">Disszertációs dolgozat - 2021 júliusi szesszió</option>';
                }

                ?> 
                </select>


                <legend><span class="number">2</span> Választás</legend>
                <br />
                <br />
                <label for="tanar">A témavezető tanár </label>

                <!---TANAROK NEVEINEK KIIRASA LEGORDULO LISTABAN --->
                <select data-target="secondList" class="firstList selectFilter" id="tanarok1" name="tanar" required>
                <option value="" disabled selected>Kiválasztás</option>
                  <?php
                    
                    foreach (array_slice($answer,1) as $value) {
                      $temail= $value;
                      
                      $tanar = "SELECT CsaladNev,KeresztNev FROM tanar WHERE TEmail='$temail'";
                            if(mysqli_query($dbcon,$tanar)){ 
                              $result = mysqli_query($dbcon,$tanar);
                              $row= mysqli_fetch_array( $result );
                              echo'<option name="tanar" >'.$row['CsaladNev']." ".$row['KeresztNev'].' </option>'; 
                            }  
                    }
                  

                  ?>
                </select>
               

                <label for="tema">A dolgozat témája</label>
               <!---TÉMÁK  KIIRASA LEGORDULO LISTABAN --->
                <select data-target="thirdList" class="secondList selectFilter" name="tema" >
               
                <?php
                 
                  foreach (array_slice($temak,1) as $val) {
                    $tema= $val;
                    echo'<option name="tema" >'.$tema.' </option>';
                  }
                  echo'<option name="tema" >Más</option>';
                  
                ?>  
                </select>

                <label for="egyeb">  Amennyiben más témát választottál, kérünk, hogy írd be a címét: </label>
                <input type="text"  placeholder="Saját válasz"name="tema2" >
                </fieldset>

                <label> Elfogadom a felhasznalasi felteteleket</label>
                <input type="checkbox" name="checkbox" id="checkbox" value="check"/>

                </fieldset>

                <input type="submit" value="Küldés" onclick="ValidateEmail(document.form1.email);/*validate()*/myFunction3()"/>
                </form>
                  <?php 

              }//nincs benne 
        }
?>
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
        <a href="#velemenyek">Dokumentumok</a>
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


<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="js/tanarvalasztas.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="js/nav.js"></script>


</body>
</html>
<?php 
} // VEGE IF ,CSAK A DIAKOKNAK
else{ //HA NEM DIAK LEP ERRE az oldalra
  echo "Page not found"; 
  echo "<script type='text/javascript'>
        window.history.back() ;
      </script>";
  } 
?>