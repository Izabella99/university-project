<?php 
session_start();
if ( isset($_SESSION["username"])&&$_SESSION['username'] == ' Admin'){ //AKKOR JELENIK MEG HA ADMIN


?>
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
 
   <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/osszesitoTablazat.css">
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
                              <li><a href="index.php" target="_blank">FŐOLDAL</a></li>
                              <li><a href="hataridok.php " target="_blank">HATÁRIDŐK</a></li>
                              <li><a href="tanarok.php"target="_blank">DOLGOZAT</a></li>
                              <li><a href="faq.php"target="_blank">GYIK</a></li>
                              <li><a href="Dokumentumok.php"target="_blank">DOKUMENTUMOK</a></li>
                              <li><a href="kapcsolat.php"target="_blank">KAPCSOLAT</a></li>
                                   
                                   <?php 
                                    if(isset($_SESSION["username"])){
                                      if($_SESSION["kiaz"]=="diak"){ //Diáknak kutatási terv jelenik meg
                                    ?>    
                                         <li><a href="kutatasiterv.php"target="_blank">KUTATÁSI TERV</a></li>
                                    <?php 
                                      }
                                      else if ($_SESSION["username"]==' Admin'){ //Adminnak összesítő táblázat jelenik meg
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
                  
                        <h1>ÖSSZESÍTŐ TÁBLÁZAT</h1>
                  
                   </section>
            
            </header>

      </div> <!--wrapper-->

        
   <!-----------------LOGIN--------------------->


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


        
          
  <!------------------TÁBLÁZAT------------------------>

    <?php

    $host='localhost';
    $user='root';
    $password='';
    $dbname='szakdolgozat';

    $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz

    if($dbcon->connect_error){ //sikertelen csatlakozas
        die("Connection failed:".$conn->$connect_error);
    }

        $dCNP = "SELECT CNP  FROM diak "; // DIÁKOK CNP-inek kimentése 
        if(mysqli_query($dbcon,$dCNP)){ 
          $diakCNP = mysqli_query($dbcon,$dCNP);
          $diakCNPArray = array();  

          while ( $row= mysqli_fetch_array( $diakCNP ))
              {
              $diakCNPArray[] = $row['CNP'];
              
              }

        }



      
        $temail="SELECT TEmail from tanar";  //tanárok e-mail-jeinek kimentése
        if(mysqli_query($dbcon,$temail)){
        $emailek = mysqli_query($dbcon,$temail);
        $emailekArray = array();  

        while ( $sor= mysqli_fetch_array( $emailek ))
              {
              $emailekArray[] = $sor['TEmail'];
              
              }
        
        }
          

      ?>
  <div class="diakok table-responsive table-hover ">

      <table class="table ">
        <thead >
          <tr>
        
            <th scope="col">Diák neve</th>
            <th scope="col">Matricol szám</th>
            <th scope="col">Szakirány</th>
            <th scope="col">Tanár neve</th>
            <th scope="col">Szakdolgozat címe</th>
            <th scope="col">Szakdolgozat jegy</th>
            <th scope="col">Kutatási terv </th>
            <th scope="col">Kutatási terv jegy</th>
          
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
          foreach (array_slice($diakCNPArray,0) as $value) { //minden diákra
          $dCNP= $value;
          
          $diak = "SELECT diak.CsaladNev as dCsaladNev,diak.KeresztNev as dKeresztNev,diak.MatricolSzam,diak.Szak,TEmail from diak
                  WHERE diak.CNP='$dCNP'"; //a soron levő diák adatainak lekérdezése
                if(mysqli_query($dbcon,$diak)){ 

                  $result = mysqli_query($dbcon,$diak);
                  $row= mysqli_fetch_array( $result );

          
                  $tanar = "SELECT tanar.CsaladNev as tCsaladNev,tanar.KeresztNev as tKeresztNev,szakdolgozat.KutatasiTerv,szakdolgozat.KutatasiTerv_Jegy, szakdolgozat.Jegy ,szakdolgozat.Cim FROM tema INNER JOIN tanar ON tema.TEmail=tanar.TEmail INNER JOIN diak ON tanar.TEmail=diak.TEmail INNER JOIN szakdolgozat ON tanar.TEmail=szakdolgozat.TEmail 
                  WHERE szakdolgozat.CNP='$dCNP'";     // a soron levő diák tanárának adatainak lekérdezése
                  $res = mysqli_query($dbcon,$tanar);
                  $roww= mysqli_fetch_array( $res );

                  //HA VALAMELY ADATOK HIÁNYOSAK HELYETTESÍTSE "nincs"-el

                  if( empty($roww['Cim'] )){
                    $roww['Cim']="nincs";
                  }
                  if( empty($roww['KutatasiTerv'] )){
                    $roww['KutatasiTerv']="nincs";
                  } 
                  if( empty($roww['KutatasiTerv_Jegy'] )){
                    $roww['KutatasiTerv_Jegy']="nincs";
                  } 
                  if( empty($roww['Jegy'] )){
                    $roww['Jegy']="nincs";
                  }

                  if( empty( $roww['tCsaladNev'])||empty($roww['tKeresztNev'])){
                    $roww['tCsaladNev']="nincs";
                    $roww['tKeresztNev']="";

                  }
                  
          
                    
          ?>
                

             <!-------------ADATOK BEHELYETTESÍTÉSE A TÁBLÁZATBA----------------------->

              <td> <?php echo $row['dCsaladNev']." ".$row['dKeresztNev'] ?></td>
              <td><?php echo $row['MatricolSzam'] ?></td>
              <td><?php echo $row['Szak'] ?></td>
              <?php 
              if( isset($row['TEmail'])){ 
                echo '<td>'.$roww['tCsaladNev']." ".$roww['tKeresztNev'] .'</td>'.
                      '<td>'. $roww['Cim'].'</td>'.
                      '<td>'.$roww['Jegy'].'</td>'.
                      '<td>'.$roww['KutatasiTerv'].'</td>'.
                      '<td>'. $roww['KutatasiTerv_Jegy']  .'</td>';

              }
              else{
                echo '<td>'.'nincs'.'</td>'.
                
                      '<td>'. 'nincs'.'</td>'.
                      '<td>'.'nincs'.'</td>'.
                      '<td>'.'nincs'.'</td>'.
                      '<td>'.'nincs'  .'</td>';
              };?>
            

          </tr>
            <?php  
            } //diak lekerdezes 
          } //foreach vege
          ?> 
          
        
        </tbody>
      </table>
  </div>




  <div class="tanarok table-responsive table-hover ">

      <table class="table ">
        <thead >
          <tr>

            <th scope="col">Tanár neve</th>
            <th scope="col">Diákok száma</th>

          </tr>
        
        </thead>

        <tbody>
          <tr>
            <?php foreach (array_slice($emailekArray,1) as $x) { //minden emailre
                    $email= $x;
                    
                    // LEKÉRDEZI A TANÁROK ADATAIT ÉS MEGSZÁMOLJA MELYIKNÉL HÁNY DIÁK VAN, A SZAKDOLGOZAT MAPPABAN LEVO TANAR EMAIL CIMEK MELLETTI DIAK CNP-K ALAPJAN
                      $tanarDiak=" SELECT tanar.CsaladNev,tanar.KeresztNev,COUNT(diak.CNP) as DiakokSzama from tanar LEFT JOIN szakdolgozat ON tanar.TEmail=szakdolgozat.TEmail LEFT JOIN diak ON szakdolgozat.CNP=diak.CNP
                                   WHERE szakdolgozat.TEmail='$email' ";
                    
                      if(mysqli_query($dbcon,$tanarDiak)){ 
                          $eredmeny = mysqli_query($dbcon,$tanarDiak);
                          $sorr= mysqli_fetch_array( $eredmeny );
                         
                                        
            ?>
                   
                       <td> <?php echo $sorr['CsaladNev']." ".$sorr['KeresztNev'] ?></td>
                       <td><?php echo $sorr['DiakokSzama'] ?></td>
                      
                      
          </tr>
          
                      <?php     
                   } // if vege
                } //foreach vege
                ?> 
        
        </tbody>
      </table>
    </div>



    <div class="tanarok table-responsive table-hover ">

      <table class="table ">
        <thead >
          <tr>

            <th scope="col">Tanár neve</th>
            <th scope="col">Diákjai</th>

          </tr>
        
        </thead>

        <tbody>
          <tr>
            <?php $select = "SELECT tanar.CsaladNev as tCsaladNev,tanar.KeresztNev as tKeresztNev,diak.CsaladNev as dCsaladNev,diak.KeresztNev as dKeresztNev FROM tanar LEFT JOIN szakdolgozat ON tanar.TEmail=szakdolgozat.TEmail LEFT JOIN diak ON szakdolgozat.CNP=diak.CNP";
                if($res = mysqli_query($dbcon,$select)){
                  
                  while($row = mysqli_fetch_array($res)){
                    
                
                                        
            ?>
                   
                       <td> <?php echo $row['tCsaladNev']." ".$row['tKeresztNev'] ?></td>
                       <td> <?php echo $row['dCsaladNev']." ".$row['dKeresztNev'] ?></td>
                      
                      
          </tr>
          
                      <?php     
                   } // if vege
                } //while vege
                ?> 
        
        </tbody>
      </table>
    </div>


  
 

 <!-- Footer -->
      
 <footer class="footer-distributed">
 


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

<?php } 
  else{
    echo "<script type='text/javascript'> window.location.href='index.php';</script>";
  }
?>
  



