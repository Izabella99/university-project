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
 
<link href="//www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
 
   

  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" rel="stylesheet"><!---tanaroktemak---->  
  <link rel="stylesheet" href="css/tanartema.css">
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
                  
                        <h1>SZAKDOLGOZAT ÉS DISSZERTÁCIÓS DOLGOZAT </h1>
                  
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
            <li><a href="index.php" class="active">Főoldal</a></li>
            <li><a href="#"></a></li>
        </ul>  
           

<div class="dokumentumok">
<div class="cim">
    <h2>Dokumentumok</h2>
  </div>
<div class="linkek">


  <li><a href="https://econ.ubbcluj.ro/documente2020/Calendar%20inscriere%20si%20probe%20examen%20licenta%20si%20masterat%20iulie%202020.PDF">Szak- és disszertációs dolgozat védés ütemezése  június-július</a></li>
  <li><a href="http://hu.econ.ubbcluj.ro/data/pdf/Vegzosoknek/Temavalasztas%20leosztas%202019.pdf">Szakdolgozat/disszertációs dolgozat témavezető beosztás</a></li>
<li><a href="docs/Sablon2018.docx">Szakdolgozat - SABLON, 2019-2020</a></li>
<li><a href="http://hu.econ.ubbcluj.ro/data/pdf/Licensz%20irasbeli/Szak-es-disszertacios-dolgozatok-utmutatoja-2018.pdf">Útmutató szakdolgozat és disszertációs dolgozat készítéséhez</a></li>
<li><a href="docs/Szak-es disszertacios dolgozat kutatasi terve.doc">Szakdolgozat és mesteri dolgozat kutatási terv modell</a></li>
</div>
</div>




<!--------------TANROK-------------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/ALT.jpg">
  </div>
  <div class="content">
    <div class="title">DR. ALT MÓNIKA-ANETTA, DOCENS </div>
    <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p><strong>Marketingkutatás</strong></p>
         <p> 1. Online eszközök alkalmazása a marketingkutatásban</p>
          <p>2. Marketing információs rendszer egy vállalatnál</p> 
         <p>3. A kereslet kutatása egy termék/szolgáltatás piacán</p>
         <p> 4. Egy márka ismertségének a kutatása</p>
         <p><strong> Marketingtervezés</strong></p>
         <p> 1. Egy termék/vállalat marketingterve</p>
         <p> 2. Marketing stratégiák egy vállalatnál</p>
         <p> 3. Termékpolitika egy vállalatnál</p>
         <p> 4. Egy termék pozicionálása egy piacon</p>
         <p> 5. Árpolitika egy vállalatnál</p>
         <p><strong> Eladásmenedzsment</strong></p>
         <p> 1. Digitális eszközök használata a személyes eladásban</p>
         <p> 2. Értékesítési rendszerek kidolgozása egy vállalatnál</p>
         <p> 3. A személyes értékesítés egy vállalatnál</p>
       

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/ALT.jpg">
  </div>
  <div class="content">
    <div class="title">DR. ALT MÓNIKA-ANETTA, DOCENS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p><strong>Reklám</strong></p>
<p>1. Reklámüzenetek és kreatív formái</p>
<p>2. Kreatív stratégia a reklámban</p>
<p>3. Retorika a reklámban</p>
<p>4. CSR tevékenységek egy adott iparágban</p>
<p>5. Egy vállalat marketingkommunikációja/reklámkampánya</p>
<p>6. A reklám hatása a célközönségre (nőkre/férfiakra/gyerekekre/nyugdíjasokra stb.)</p>
<p>7. A reklám hatékonysága</p>
<p>8. A marketing tevékenység hatékonysága</p>
<p><strong>Kereskedelemi marketing</strong></p>
<p>1. Innováció a kiskereskedelemben</p>
<p>2. M – kereskedelem</p>
<p>3. S – kereskedelem</p>
<p>4. M-payment bevezetése egy kiskereskedelmi vállalatnál</p>
<p>5. Egy kereskedelmi vállalat/vállalatok stratégiája</p>
<p>6. Egy kereskedelmi vállalat termékportfóliója</p>
<p>7. Egy kereskedelmi vállalat árpolitikája</p>


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>

<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Avornicului.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. AVORNICULUI MIHAI-CONSTANTIN, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Egy online áruház megtervezése objektumorientált módszerrel</p>
      <p>2. Egy GPS rendszer megtervezése és implementálása android telefonokra</p>
      <p>3. Modellvezérelt tervezés egyedi gazdasági alkalmazás esetén</p>
      <p>4. Internetes lehetőségek a tőzsdei elemzésben</p>
      <p>5. Elektronikus- és mobil kereskedelem a székelyföldi turizmusban</p>
      <p>6. Elektronikus- és mobil kereskedelem a romániai autóalkatrész piacon</p>
      <p>7. Elektronikus aláírás. Trendek és alkalmazási lehetőségek a bankszektorban.</p>
      <p>8. Aukció az Interneten. Trendek és alkalmazási lehetőségek a közintézmények esetén.</p>
      <p>9. Trendek a romániai elektronikus kereskedelemben</p>
      <p>10. Internet- és mobil banking két romániai banknál</p>
      <p>11. E-government Romániában</p>
      <p>12. Elektronikus piacterek megvalósítása</p>
      <p>13. Az online- reklám és marketing szerepe a székelyföldi önkormányzatok életében</p>
      <p>14. Online marketing egy szállodalánc esetében</p>
 


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Avornicului.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. AVORNICULUI MIHAI-CONSTANTIN, ADJUNKTUS</div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p>1. ERP rendszer bevezetése egy KKV esetén</p>
        <p>2. Az információ szerepe a turizmusban</p>
        <p>3. Online devizakereskedelemi lehetőségek és trendek</p>
        <p>4. E-logisztikai rendszerek jövőj</p>
        <p>5. Egy mobil távközlési cég online marketing stratégiája, a piacbefolyásolás lehetséges eszközei</p>
        <p>6. A Richter gyógyszertárlánc disztribúciós rendszerének informatikai alapjai és a jövőbeli fejlesztések lehetőségei Romániában</p>
        <p>7. IT infrastruktúra optimalizálása egy KKV esetén, esettanulmány</p>
        <p>8. Számítógéppel támogatott auditálási technikák</p>
        <p>9. Az adatvédelem és adatbiztonság vizsgálata nagyvállalati környezetben</p>
        <p>10. Vállalati informatikai problémák elemzése és megoldása</p>
        <p>11. Üzleti folyamatmenedzsment rendszerek bevezetése</p>
        <p>12. Robotizált folyamatautomatizálás</p>
        <p>13. Értékpapírok folyamatmodellezése</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>
</div>





<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Cardos.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. CARDOŞ ILDIKÓ RÉKA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p>1. A nyereségadó jellemzői, számítása, könyvelése és elemzése egy konkrét vállalkozás példáján</p>
        <p>2. A nyereségadó jellemzői, számítása, könyvelése, elemzése és összehasonlítása különböző iparágakban müködő</p>
        <p>vállalkozások esetén (termelés, szolgáltatások, kereskedelem)</p>
        <p>3. Nyereségadó vs. mikrovállalati jövedelemadó – jellemzők, számítás és könyvelése</p>
        <p>4. Munkabérek és munkavállalói juttatások jellegzetességei és könyvelése a hazai jogszabályok és IFRS-ek tükrében</p>
        <p>5. Munkabérek számítása, adózása és könyvelése – jogszabályok változása és ezek hatása. Esettanulmány egy konkrét vállalkozás példáján.</p>
        <p>6. A vállalati hitelezés formái és ezek számviteli sajátosságai</p>
        <p>7. Vállalkozások által fizetett illetékek és adók – számítás, könyvelés és elemzés egy konkrét vállalkozás példáján</p>
        <p>8. Az általános forgalmi adó jellemzői, működése és számvitele Romániában vagy egy konkrét vállalkozás példájá</p>
        <p> 9. Import-export műveletek sajátosságai és könyvelése egy konkrét vállalkozás példájá</p>
       <p> 10. Különféle iparági tevékenységek számviteli sajátosságainak bemutatása (étterem/cukrászda, turisztikai iroda,mezőgazdasági tevékenységek, stb.)</p>
        
        



    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>



<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/FEKETE.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. FEKETE-PALI-PISTA SZILVESZTER,   ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
       <p> 1. Éves beszámoló vagy egyes elemeinek elkészítése és/vagy elemzése <p>
        <p>2. A lízingügyletek számviteli elszámolása<p>
        <p>3. Bérszámfejtés az ABC SRL vállalatnál<p>
        <p>4. Adócsökkentési lehetőségek az ABC SRL vállalatnál<p>
        <p>5. Non-profit szervezet számviteli sajátosságai. Esettanulmány az ABC SRL vállalatnál.<p>
        <p>6. Nyereségadó vs mikrovállalati adó<p>
        <p>7. Az x iparági tevékenység számviteli specialitásai. Esettanulmány az ABC SRL vállalatnál <p>
        <p>8. Számviteli politika vizsgálata tőzsdei cégek esetében<p>
        <p>9. A nyereségadó jellemzői, számítása és könyvelése egy konkrét vállalkozás példáján<p>
        <p>10. A vállalati finanszírozás formái és ezek számviteli sajátosságai<p>
        <p>11. Környezetvédelmi számvitel<p>
        <p>12. Válság menedzselés és ennek számviteli leképződése/következményei<p>
        <p>13. Céltartalékok és értékhelyesbítések a román számviteli rendszerben. Empirikus viszgálat tőzsdei cégek esetén.<p>
      

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>


<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/GubanA.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. GUBÁN ÁKOS, FŐISKOLAI TANÁR</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Egy valós információrendszer fejlesztése agilis módszertannal</p>
    <p>2. Tesztadatrendszer összeállítása és alkalmazása</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>


<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/GubanM.jpg">
  </div>
  <div class="content">
    <div class="title">DR. GUBÁN MIKLÓS, FŐISKOLAI TANÁR </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p>1. Termelésütemezési probléma megoldása evolúciós algoritmusokkal</p>
        <p>2. Járattervezési problémák megoldása MI módszerekkel</p>
        <p>3. Tanuló algoritmusok és a játékok</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>


<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Gyorfy.jpg">
  </div>
  <div class="content">
    <div class="title">DR. GYÖRFY LEHEL-ZOLTÁN, DOCENS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
      <p>1. A stratégiai tervezés folyamata. Az XY vállalat esete.</p>
       <p>2. Stratégiai döntési pontok az AB ágazatban/termékpályán. Az XY vállalat esete.</p>
       <p>3. Stratégia és struktúra kapcsolata. Az XY vállalat esete.</p>
       <p>4. Szervezeti magatartási elemek javítása az XY vállalatnál.</p>
       <p>5. Szervezeti magatartási elemek hatása az XY vállalat teljesítményére.</p>
       <p>6. Szervezeti struktúra és szervezeti kultúra kapcsolata. Az XY vállalatesete.</p>
       <p>7. Vállalatkormányzási kihívások az XY vállalatnál.</p>
       <p>8. Szervezeti struktúra átalakítás az XY vállalatnál.</p>
       <p>9. Teljesítményértékelési mechanizmusok. Az XY vállalat esete.</p>
       <p>10. Stratégiai és operatív tervezés kapcsolata. Az XY vállalat esete.</p>
       <p>11. A BalancedScorecard módszer és alkalmazása. Az XY vállalat esete.</p>
       <p>12. Az üzleti tervezés szerepe a vállalkozások magvető szakaszában. Az XY vállalat esete.</p>
       <p>13. Az üzleti tervezés szerepe a KKV-k start-up szakaszában. Az XY vállalat esete.</p>
       <p>14. Az üzleti tervezés szerepe a KKV menedzsmentben. Az XY vállalat esete.</p>
       

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Gyorfy.jpg">
  </div>
  <div class="content">
    <div class="title">DR. GYÖRFY LEHEL-ZOLTÁN, DOCENS </div>
  <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p>1. A stratégiai tervezés folyamata. Az XY vállalat esete.</p>
        <p>2. Stratégiai döntési pontok az AB ágazatban/termékpályán. Az XY vállalat esete.</p>
        <p>3. Stratégia és struktúra kapcsolata. Az XY vállalat esete.</p>
        <p>4. Szervezeti magatartási elemek javítása az XY vállalatnál</p>
        <p>5. Szervezeti magatartási elemek hatása az XY vállalat teljesítményére</p>
        <p>6. Szervezeti struktúra és szervezeti kultúra kapcsolata. Az XY vállalat esete.</p>
        <p>7. Vállalatkormányzási kihívások az XY vállalatnál</p>
        <p>8. Szervezeti struktúra átalakítása az XY vállalatnál</p>
        <p>9. Teljesítményértékelési mechanizmusok. Az XY vállalat esete.</p>
        <p>10. Stratégiai és operatív tervezés kapcsolata. Az XY vállalat esete.</p>
        <p>11. A Balanced Scorecard módszer és alkalmazása. Az XY vállalat esete.</p>
        <p>12. Az üzleti tervezés szerepe a vállalkozások magvető szakaszában. Az XY vállalat esete.</p>
        <p>13. Az üzleti tervezés szerepe a KKV-k start-up szakaszában. Az XY vállalat esete.</p>
        <p>14. Az üzleti tervezés szerepe a KKV menedzsmentben. Az XY vállalat esete.</p>
     

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>


<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Horvath.jpg">
  </div>
  <div class="content">
    <div class="title">DR. HORVÁTH RÉKA, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. A vállalat társadalmi felelősségvállalása (CSR)</p>
    <p>2. Jövedelmi egyenlőtlenségek az EU-ban</p>
    <p>3. Termék/szolgáltatás bevezetése egy új piacra</p>
    <p>4. EU tagállamok gazdasági fejlettségének összehasonlítása</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Horvath.jpg">
  </div>
  <div class="content">
    <div class="title">DR. HORVÁTH RÉKA, ADJUNKTUS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
       <p> 1. A vállalat társadalmi felelősségvállalása (CSR)</p>
        <p>2. Jövedelmi egyenlőtlenségek az EU-ban</p>
        <p>3. Termék/szolgáltatás bevezetése egy új piacra</p>
        <p>4. EU tagállamok gazdasági fejlettségének összehasonlítása<p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>




<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Juhasz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. JUHÁSZ JÁCINT-ATTILA, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p><strong>Vállalati pénzügyek</strong></p>
        <p>1. Egy vállalat forgótőke-menedzsmentje</p>
        <p>2. Vállalati kereskedelmi hitelpolitika elemése vagy optimizálása</p>
        <p>3. Vállalati készlet-gazdálkodási politika hatása a pénzügyi teljesítményre</p>
        <p>4. Tőzsdén jegyzett vállalatok osztalékfizetési politikáját meghatározó tényezők</p>
        <p><strong>Beruházás-értékelés</strong></p>
        <p>1. Egy vállalati beruházási projekt megvalósításának kiértékelése</p>
        <p>2. Egy vállalat potenciális gépcseréjének kiértékelése</p>
        <p>3. Egy vállalat kapacitás-bővítési döntésének előkészítése</p>
        <p>4. Egy vállalat beruházás-időzítési problémájának bemutatása</p>
        
        <p><strong>Egy vállalati probléma kiértékelése reálopciós elemzés segítségével</strong></p>
        <p>1. Operatív lízing vs. hitel a felmondási lehetőség kiértékelésével</p>
        <p>2. Egy vállalat kapacitás-bővítési döntésének előkészítése</p>
        <p>3. Egy vállalat beruházás-időzítési problémájának bemutatása</p>
        <p>4. Változó technológia alkalmazása nyújtotta rugalmasság értékének meghatározása</p>
     


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Juhasz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. JUHÁSZ JÁCINT-ATTILA, ADJUNKTUS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
       <p> 1. Egy vállalat forgótőke-menedzsmentje<p>
        <p>2. Egy vállalat kereskedelmi hitelpolitikájának optimalizálása<p>
        <p>3. Tőzsdén jegyzett vállalatok osztalékfizetési politikáját meghatározó tényezők<p>
        <p>4. Tőzsdén jegyzett vállalatok finanszírozási politikáját meghatározó tényezők<p>
        <p>5. Egy vállalati beruházási projekt megvalósításának kiértékelése<p>
        <p>6. Egy vállalat potenciális gépcseréjének kiértékelése<p>
        <p>7. Egy vállalat kapacitás-bővítési döntésének előkészítése<p>
        <p>8. Egy vállalat beruházás-időzítési problémájának bemutatása<p>
        <p>9. Egy adott vállalat értékének meghatározása FCF-alapú, eszköz alapú és szórzószámos értékelés alapján<p>
        <p>10. Operatív lízing vs. hitel a felmondási lehetőség reálopciós kiértékelésével<p>
        <p>11. Egy vállalat kapacitás-bővítési döntésének előkészítése reálopciós elemzés segítségével<p>
        <p>12. Egy vállalat beruházás-időzítési problémájának bemutatása reálopciós elemzés segítségével<p>
        <p>13. Változó technológia alkalmazása nyújtotta rugalmasság értékének meghatározása reálopciós elemzés segítségével<p>
       
     

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>






<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kerekes.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. KEREKES KINGA, DOCENS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p>1. A projektek szerepe XY vállalat stratégiájának megvalósításában</p>
    <p>2. A projektek sikerességét befolyásoló tényezők XY vállalat esetében</p>
    <p>3. A projektek sikerességét befolyásoló tényezők (felmérés projektvezetők körében)</p>
    <p>4. Humánerőforrás menedzsment a projektekben</p>
    <p>5. A munkaerőhiány okai és kezelése XY vállalatnál</p>
    <p>6. A fluktuáció okai és kezelése XY vállalatnál</p>
    <p>7. A munkahelyi elkötelezettség vizsgálata XY vállalatnál</p>
    <p>8. A romániai munkaerőpiac jellemzői és ezek hatása a vállalatok munkaerő-gazdálkodására</p>
    <p>9. Multinacionális vállalatok humánerőforrás menedzsmentje</p>
    <p>10. A hallgató által javasolt Humánerőforrás menedzsment vagy Projektmenedzsment téma    </p> 

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kerekes.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. KEREKES KINGA, DOCENS</div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
       <p> 1. A projektek szerepe XY vállalat stratégiájának megvalósításában</p>
        <p>2. A projektek szerepe a XY község/kistérség fejlesztési stratégiájának megvalósításában</p>
        <p>3. A projektek sikerességét befolyásoló tényezők XY vállalat esetében</p>
        <p>4. A projektek sikerességét befolyásoló tényezők (felmérés projektvezetők körében)</p>
        <p>5. A projektteljesítési stratégia kiválasztása és alkalmazása a gyakorlatban</p>
        <p>6. Projektalapú vállalatok humánerőforrás menedzsmentje</p>
        <p>7. A munkaerőhiány okai és kezelése XY vállalatnál</p>
        <p>8. A munkahelyi elkötelezettség vizsgálata XY vállalatnál</p>
        <p>9. A romániai munkaerőpiac jellemzői és ezek hatása a vállalatok munkaerő-gazdálkodására</p>
        <p>10. Nemzetközi csapatok működése online környezetben (X-Culture)</p>
        <p>11. Multinacionális vállalatok humánerőforrás menedzsmentje</p>
        <p>12. A hallgató által javasolt Projektmenedzsment, Humánerőforrás menedzsment vagy Vidékfejlesztés téma</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>





<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kovacs.jpg">
  </div>
  <div class="content">
    <div class="title">DR. KOVÁCS GYÖNGYVÉR-EMESE, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Adatvezérelt üzleti alkalmazások fejlesztése</p>
     <p> 2. Felhasználói élménytervezés webalkalmazások esetén</p>
     <p> 3. Adatbázis-kezelési megközelítések webalkalmazások kiszolgálására</p>
     <p> 4. Online ajánlórendszerek</p>
     <p> 5. Web alapú tartalomkezelő (CMS) rendszerek</p>
     <p> 6. Ügyfélkapcsolat rendszer (CRM) fejlesztése</p>
     <p> 7. Mobil platformra való fejlesztés: iOS, Android vagy WindowsPhone OS</p>
     <p> 8. Oktatást támogató alkalmazás fejlesztése cross-platform technológiákkal</p>
     <p> 9. Ingatlan közvetítő webalkalmazás fejlesztése</p>
     <p> 10. Időpontfoglaló rendszer fejlesztése cross-platform technológiákkal</p>
     <p> 11. Java alapú backend rendszerek tervezése és megvalósítása</p>
    <p>  12. Agilis szoftverfejlesztés a gyakorlatban - egyedi üzleti alkalmazás fejlesztése</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kovacs.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. KOVÁCS GYÖNGYVÉR-EMESE, ADJUNKTUS</div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
       <p> 1. Üzleti Intelligencia (BI) rendszer alkalmazása/fejlesztése</p>
        <p> 2. Ügyfélkapcsolat rendszer (CRM) alkalmazása/fejlesztése</p>
         <p>3. Web alapú tartalomkezelő (CMS) rendszerek</p>
        <p> 4. Adatvezérelt döntéshozatal</p>
         <p>5. Big data alapú adattárolás és hatékony adatkezelés</p>
         <p>6. Az adatvizualizáció alkalmazási lehetőségei</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>


<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Nagy.png">
  </div>
  <div class="content">
    <div class="title"> DR. NAGY BÁLINT-ZSOLT, DOCENS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p> <strong>Portfólió menedzsment </strong><p>
     <p>1. Befektetesi alapok teljesítménye, aktív és passzív portfóliókezelés <p>
     <p>2. Nyílt és zártvégű befektetési alapok, ETF-ek <p>
     <p>3. A CAPM és az arbitrázsárazási modell továbbfejlesztései <p>
     <p>4. Kockáztatott érték (VaR) számítások portfóliók esetén <p>
     <p>5. Posztmodern portfólió elmélet <p>
     <p>6. Spekulatív buborékok <p>
     <p><strong>Pénzügyi piacok </strong><p>
     <p>1. Az algoritmikus kereskedés hatásai <p>
     <p>2. Jelentős tőzsdei összeomlások (krachok) osszehasonlító vizsgálata <p>
     <p>3. Tőkepiaci koszolidációk (fúziók, tranzakciós költségek, clearing )<p>
     <p>4. Az elektronikus kereskedési platformok térnyerése <p>
     <p>5. Elsődleges nyilvanos kibocsátások (IPO) - Romániában, külföldön <p>
     <p>6. Fedezeti ügyletek (hedging) az árfolyamkockázat kezelésére <p>
     <p>7. Fekete hattyúk a pénzügyi piacokon <p>
   

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Nagy.png">
  </div>
  <div class="content">
    <div class="title">DR. NAGY BÁLINT-ZSOLT, DOCENS </div>
 <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
      <p><strong>Befektetési döntések</strong><p>
      <p>1. Befektetesi alapok teljesítménye, aktív és passzív portfóliókezelés<p>
      <p>2. Nyílt és zártvégű befektetési alapok, ETF-ek<p>
      <p>3. Faktor alapú befektetési stratégiák<p>
      <p>4. Kockáztatott érték (VaR) számítások portfóliók esetén<p>
      <p>5. Posztmodern portfólió elmélet<p>
      <p>6. Spekulatív buborékok<p>
      <p><strong>Származtatott termékek árazása</strong><p>
      <p>1. Lineáris és nemlineáris kockázatok<p>
      <p>2. Fedezeti ügyletek (hedging) az árfolyamkockázat kezelésére<p>
      <p>3. Fedezeti ügyletek (hedging) a kamatkockázat kezelésére<p>
      <p>4. Kamatcsere (swap) ügyletek a kamatkockázat kezelésére<p>
      <p>5. Hogyan változtatta meg a 2007-2009-es válság a származtatott termékek árazását?<p>
      <p>6. Hitelderivatívák<p>
    



    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
    
</div>
<div class="slider-pagination"></div>
</div>


</div>



<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Racz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. RÁCZ BÉLA-GERGELY, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p><strong> Pénzügyi menedzsment</strong><p>
    <p>1. Egy vállalati beruházási projekt megvalósításának kiértékelése<p>
    <p>2. Vállalati kontrollig rendszer kialakítása és implementálása<p>
    <p>3. Kintlévőségek kezelésének javítása egy adott vállalatnál<p>
    <p>4. ERP fejlesztése, bevezetése és sajátosságai a vállalati gyakorlatban<p>
    <p><strong>Mikroökonómia, Közösségi pénzügyek, Államháztartás pénzügyei</strong><p>
    <p>1. Szabad kereskedelem vagy protekcionizmus, komparatív előnyök versus abszolút előnyök Adórendszerek hatékonyságának és tendenciáinak elemzése<p>
    <p>2. Gazdasági fejlődés és populációs dinamika kapcsolata a 21. században<p>
    <p>3. A migráció hatása a gazdaság növekedésére<p>
    <p><strong>Szervezeti menedzsment</strong><p>
    <p>1. Tudástranszfer hatása a vállalat üzleti teljesítményére<p>
    <p>2. Tudásmenedzsment elméletek és rendszerek adaptálása<p>
    <p>3. Termelővállalatok stratégiája és üzleti teljesítményének kapcsolata<p>
    <p>4. Nyílt innováció hatása az üzleti teljesítményre<p>
   

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Racz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. RÁCZ BÉLA-GERGELY, ADJUNKTUS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        
       <p><strong>Üzleti tervezés</strong> </p>
       <p>1. Egy vállalati beruházási projekt megvalósításának kiértékelése</p>
       <p>2. Vállalati kontrollig rendszer kialakítása és implementálása</p>
       <p>3. Kintlevőségek kezelésének javítása egy adott vállalatnál</p>
       <p>4. ERP fejlesztése, bevezetése és sajátosságai a vállalati gyakorlatban</p>
       <p>5. XY vállalat üzleti terve</p>
    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>






<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Saplacan.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SĂPLĂCAN ZSUZSA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p><strong>Általános marketing</strong></p>
      <p>1. A kínálat kialakítása és termékpolitika egy vállalatnál</p>
      <p>2. Árpolitika kialakítása</p>
      <p>3. Értékesítési stratégia kialakítása, többcsatornás értékesítési rendszer megtervezése</p>
      <p>4. A marketing tevékenység megszervezése a vállalatoknál. Ágazati/regionális körkép.</p>
      <p><strong>Fogyasztói magatartás</strong></p>
      <p>1. Valamely termék, szolgáltatás piacának magatartásalapú szegmentációja</p>
      <p>2. Az attitűd és vásárlási szándék vizsgálata valamely (új/innovatív) termék iránt</p>
      <p>3. Influencer marketing és hatása a fogyasztói magatartásra</p>
      <p>4. Márkapozicionálások sikerességének mérése</p>
      <p><strong>Szolgáltatásmarketing és Bankmarketing</strong></p>
      <p>1. Vevőélmény (customer experience) elemzése és tervezése egy szolgáltatóvállalat/bank esetében</p>
      <p>2. A szolgáltatásminőség mérése adott vállalatnál és stratégiai alkalmazása</p>
      <p>3. A szolgáltatásmarketing-mix megtervezése egy vállalatnál</p>
      




    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Saplacan.jpg">
  </div>
  <div class="content">
    <div class="title">DR. SĂPLĂCAN ZSUZSA, ADJUNKTUS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p><strong>Fogyasztói magatartás és marketing stratégia</strong></p>
        <p>1. A vevőélmény elemei és befolyásoló tényezői valamely termék, szolgáltatás esetén</p>
        <p>2. Egy termék piacának magatartásalapú szegmentálása</p>
        <p>3. Valamely termék iránti fogyasztói magatartás tanulmányozása különböző szegmentumok szerint</p>
        <p>4. Vásárlásösztönzési módszerek iránti fogyasztói preferencia vizsgálata</p>
        <p>5. A fogyasztó magatartása a többcsatornás értékesítési rendszerben</p>
        <p><strong>Árazási stratégiák és taktikák</strong></p>
        <p>1. A fogyasztó árészlelésének vizsgálata</p>
        <p>2. Egy temék / szolgáltatás árstratégiájának kialakítása</p>
        <p>3. Az online árkeresés és árösszehasonlítás hatása a vásárlói magatartásra</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>




<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Seer.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SEER LÁSZLÓ-CSABA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
      <p>1. Digitális technológiák fogyasztók általi elfogadása (általános téma)</p>
      <p>2. Mesterséges intelligencia, okos termékek és szolgáltatások, IoT</p>
      <p>3. Szoftverek marketingje</p>
      <p>4. X webáruház / Internetes szolgáltatás marketingterve</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Seer.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SEER LÁSZLÓ-CSABA, ADJUNKTUS</div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p>1. Digitális technológiák fogyasztók általi elfogadása (általános téma)</p>
        <p>2. Mesterséges intelligencia, okos termékek és szolgáltatások, IoT</p>
        <p>3. Szoftverek marketingje</p>
        <p>4. X termékinnovációról való percepció vizsgálata X szegmens körében</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>



<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szabo.jpg">
  </div>
  <div class="content">
    <div class="title">DR. SZABÓ TÜNDE PETRA, DOCENS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
   <p>1. Árfolyamok alakulását befolyásoló tényezők</p>
        <p>2. Nemek közti különbségek iskolázottság szerint</p>
        <p>3. Munkaerőpiacot befolyásoló tényezők</p>
        <p>4. Valamely gazdasági folyamatot befolyásoló tényező beazonosítása</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szabo.jpg">
  </div>
  <div class="content">
    <div class="title">DR. SZABÓ TÜNDE PETRA, DOCENS </div>
     <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p>1. Árfolyamok alakulását befolyásoló tényezők</p>
        <p>2. Nemek közti különbségek iskolázottság szerint</p>
        <p>3. Munkaerőpiacot befolyásoló tényezők</p>
        <p>4. Valamely gazdasági folyamatot befolyásoló tényező beazonosítása</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>




<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szasz.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SZÁSZ LEVENTE, EGYETEMI TANÁR</div>
   <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p> <strong>Termelés- és szolgáltatásmenedzsment, Értékteremtő folyamatok menedzsmentje</strong></p>
    <p>1. Az Ipar 4.0  hatásainak vizsgálata egy adott iparág/termelővállalat folyamataira</p>
    <p>2. Az új technológiák  bevezetésének vizsgálata egy szolgáltató vállalatnál</p>
    <p>3. Az új technológiák  alkalmazása egy termelő/szolgáltató vállalatnál a vevőkapcsolat menedzsmentjének fejlesztése érdekében</p>
    <p>4. Élményszolgáltatások gyakorlati eszközeinek alkalmazása és hatásainak elemzése egy vállalatnál</p>
    <p><strong>Logisztika</strong></p>
    <p>1. Logisztikai (informatikai) rendszerek kiválasztásának és bevezetésének elemzése egy vállalatnál</p>
    <p>2. Logisztikai (informatikai) rendszerek hatása a vállalat működésére és pénzügyi helyzetére</p>
    <p>3. Az automatizálás, robotizálás, „smart” technológiák, blockchain technológia stb. hatása a logisztikai folyamatok menedzsmentjére</p>
    <p>4. Logisztikai kiszervezési projektek pénzügyi értékelése</p>
    <p>5. Szállítási rendszerek és szállítási hálózatok optimalizálása</p>
    <p>6. Beszállítói kapcsolatmenedzsment elemzése és fejlesztése egy vállalatnál</p>
    <p>7. Raktározási rendszerek és raktározási hálózatok optimalizálása</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szasz.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SZÁSZ LEVENTE, EGYETEMI TANÁR</div>
 <div class="subtitle">Disszertációs dolgozat</div>
    <div class="text">
        <p><strong>Ellátásilánc-menedzsment</strong></p>
        <p>1. Tudásmenedzsment, tudásmegosztás egy multinacionális vállalat hálózatán belül</p>
        <p>2. Nemzetközi termelési hálózatok feltérképezése és egy vagy több üzem stratégiai fejlesztése</p>
        <p>3. Nemzetközi termelési hálózatok feltérképezése és a hálózat tagjait képező üzemek stratégiai szerepének azonosítása</p>
        <p>4. A „sharing economy” aktuális és várható hatása egy termelő vagy szolgáltató ágazat ellátási láncára </p>
        <p>5. A „sharing economy” üzleti modelljeinek összehasonlító elemzése adott ágazatban</p>
        <p>6. A 3D-nyomtatási technológia aktuális és várható hatásai egy adott ágazat ellátási láncára</p>
        <p>7. Az automatizálás, robotizálás, „smart” technológiák stb. hatása egy adott iparág/vállalat ellátási láncának működésére</p>
        <p>8. A blockchain technológia hatása az ellátási láncok menedzsmentjére egy adott iparágban / vállalatnál</p>
        <p>9. Rövid ellátási láncok az élelmiszeriparban – a helyi termelés és fogyasztás versenyképessége</p>
        <p>10. Ellátási lánc menedzsment gyakorlatok vállalatértékre gyakorolt hatásának elemzése</p>
        <p>11. Ellátási lánc szintjén termelt gazdasági hozzáadott érték becslése egy termék ellátási láncának példáján keresztül</p>
        <p>12. Ellátásilánc-stratégia döntéseinek elemzése egy termelő vagy szolgáltató vállalatnál. Külső környezet – ellátásiláncstratégia összefüggéseinek vizsgálata</p>
        <p>13. Ellátási lánc szintű fejlesztési projektek elemzése és pénzügyi értékelése</p>
    
        


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>



<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szekely.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SZÉKELY IMRE, TANÁRSEGÉD</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Az euró romániai bevezetésének reálgazdasági vizsgálata</p>
        <p>2. Valamely kelet-közép európai állam vagy államcsoport makrogazdasági egyensúlyi helyzetének elemzése egy meghatározott időszakra vonatkozóan</p>
        <p>3. Romániai makrogazdasági összefüggések regressziós becslése</p>
        <p>4. A költségvetési felelősség keretrendszerének működési tapasztalatai valamely európai- vagy világgazdasági szempontból jelentős országban</p>
        <p>5. A helyi pénzek szerepe és gazdasági hatásai</p>
        <p>6. Valamely európai uniós államcsoport nemzetközi fizetési mérlegének és külföldi beruházási pozíciójának hosszú távú alakulása</p>
        <p>7. A romániai nyugdíjrendszer változásának makrogazdasági hatásai</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


</div>






<!--------------masik tanar-------------------------------->

<div class="tanarok">
<div class="slider">
  <div class="swiper-wrapper">
  <div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Benedek.jpg">
  </div>
  <div class="content">
    <div class="title">DRD. BENEDEK BOTOND, TANÁRSEGÉD </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     
     <p><strong>Biztosítások</strong></p>
      <p>1. Innováció a vagyon és árú biztosítások terén</p>
      <p>2. Innováció az életbiztosítások terén</p>
      <p>3. Biztosítási termékek online értékesítésének pénzügyi hatásai</p>
      <p>4. Okos-eszközök és a személyre szabott biztosítási termékek</p>
      <p>5. Autóbiztosítási csalások</p>
      <p>6. A biztosítási csalások hatása a gazdaságra</p>
      <p>7. Életbiztosítási termékek mint befektetési alternatívák</p>
      <p><strong>Vállalati pénzügyek és Beruházás értékelés</strong></p>
      <p>1. A vállalati finanszírozási politika és ennek hatása a felhasznált tőke költségére</p>
      <p>2. Vállalati pénzgazdálkodás és optimális készpénzkészlet</p>
      <p>3. Vállalati készletgazdálkodás és optimális készletállomány</p>
      <p>4. Zöldmezős beruházások és gazdaságosságuk</p>
      <p>5. Vállalati kockázatelemzés Monte Carlo szimuláció segítségével</p>
      <p>6. Kriptovaluták mint befektetési lehetőségek vállaltok számára</p>
      
    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZÉS</a>
</div>
</div>

</div>
<div class="slider-pagination"></div>
</div>


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
     

        

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
   <script type="text/javascript" src="js/tanartema.js"></script>



</body>