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
                  
                        <h1>SZAKDOLGOZAT ??S DISSZERT??CI??S DOLGOZAT </h1>
                  
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
            <li><a href="index.php" class="active">F??oldal</a></li>
            <li><a href="#"></a></li>
        </ul>  
           

<div class="dokumentumok">
<div class="cim">
    <h2>Dokumentumok</h2>
  </div>
<div class="linkek">


  <li><a href="https://econ.ubbcluj.ro/documente2020/Calendar%20inscriere%20si%20probe%20examen%20licenta%20si%20masterat%20iulie%202020.PDF">Szak- ??s disszert??ci??s dolgozat v??d??s ??temez??se  j??nius-j??lius</a></li>
  <li><a href="http://hu.econ.ubbcluj.ro/data/pdf/Vegzosoknek/Temavalasztas%20leosztas%202019.pdf">Szakdolgozat/disszert??ci??s dolgozat t??mavezet?? beoszt??s</a></li>
<li><a href="docs/Sablon2018.docx">Szakdolgozat - SABLON, 2019-2020</a></li>
<li><a href="http://hu.econ.ubbcluj.ro/data/pdf/Licensz%20irasbeli/Szak-es-disszertacios-dolgozatok-utmutatoja-2018.pdf">??tmutat?? szakdolgozat ??s disszert??ci??s dolgozat k??sz??t??s??hez</a></li>
<li><a href="docs/Szak-es disszertacios dolgozat kutatasi terve.doc">Szakdolgozat ??s mesteri dolgozat kutat??si terv modell</a></li>
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
    <div class="title">DR. ALT M??NIKA-ANETTA, DOCENS </div>
    <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p><strong>Marketingkutat??s</strong></p>
         <p> 1. Online eszk??z??k alkalmaz??sa a marketingkutat??sban</p>
          <p>2. Marketing inform??ci??s rendszer egy v??llalatn??l</p> 
         <p>3. A kereslet kutat??sa egy term??k/szolg??ltat??s piac??n</p>
         <p> 4. Egy m??rka ismerts??g??nek a kutat??sa</p>
         <p><strong> Marketingtervez??s</strong></p>
         <p> 1. Egy term??k/v??llalat marketingterve</p>
         <p> 2. Marketing strat??gi??k egy v??llalatn??l</p>
         <p> 3. Term??kpolitika egy v??llalatn??l</p>
         <p> 4. Egy term??k pozicion??l??sa egy piacon</p>
         <p> 5. ??rpolitika egy v??llalatn??l</p>
         <p><strong> Elad??smenedzsment</strong></p>
         <p> 1. Digit??lis eszk??z??k haszn??lata a szem??lyes elad??sban</p>
         <p> 2. ??rt??kes??t??si rendszerek kidolgoz??sa egy v??llalatn??l</p>
         <p> 3. A szem??lyes ??rt??kes??t??s egy v??llalatn??l</p>
       

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/ALT.jpg">
  </div>
  <div class="content">
    <div class="title">DR. ALT M??NIKA-ANETTA, DOCENS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p><strong>Rekl??m</strong></p>
<p>1. Rekl??m??zenetek ??s kreat??v form??i</p>
<p>2. Kreat??v strat??gia a rekl??mban</p>
<p>3. Retorika a rekl??mban</p>
<p>4. CSR tev??kenys??gek egy adott ipar??gban</p>
<p>5. Egy v??llalat marketingkommunik??ci??ja/rekl??mkamp??nya</p>
<p>6. A rekl??m hat??sa a c??lk??z??ns??gre (n??kre/f??rfiakra/gyerekekre/nyugd??jasokra stb.)</p>
<p>7. A rekl??m hat??konys??ga</p>
<p>8. A marketing tev??kenys??g hat??konys??ga</p>
<p><strong>Kereskedelemi marketing</strong></p>
<p>1. Innov??ci?? a kiskereskedelemben</p>
<p>2. M ??? kereskedelem</p>
<p>3. S ??? kereskedelem</p>
<p>4. M-payment bevezet??se egy kiskereskedelmi v??llalatn??l</p>
<p>5. Egy kereskedelmi v??llalat/v??llalatok strat??gi??ja</p>
<p>6. Egy kereskedelmi v??llalat term??kportf??li??ja</p>
<p>7. Egy kereskedelmi v??llalat ??rpolitik??ja</p>


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
     <p>1. Egy online ??ruh??z megtervez??se objektumorient??lt m??dszerrel</p>
      <p>2. Egy GPS rendszer megtervez??se ??s implement??l??sa android telefonokra</p>
      <p>3. Modellvez??relt tervez??s egyedi gazdas??gi alkalmaz??s eset??n</p>
      <p>4. Internetes lehet??s??gek a t??zsdei elemz??sben</p>
      <p>5. Elektronikus- ??s mobil kereskedelem a sz??kelyf??ldi turizmusban</p>
      <p>6. Elektronikus- ??s mobil kereskedelem a rom??niai aut??alkatr??sz piacon</p>
      <p>7. Elektronikus al????r??s. Trendek ??s alkalmaz??si lehet??s??gek a bankszektorban.</p>
      <p>8. Aukci?? az Interneten. Trendek ??s alkalmaz??si lehet??s??gek a k??zint??zm??nyek eset??n.</p>
      <p>9. Trendek a rom??niai elektronikus kereskedelemben</p>
      <p>10. Internet- ??s mobil banking k??t rom??niai bankn??l</p>
      <p>11. E-government Rom??ni??ban</p>
      <p>12. Elektronikus piacterek megval??s??t??sa</p>
      <p>13. Az online- rekl??m ??s marketing szerepe a sz??kelyf??ldi ??nkorm??nyzatok ??let??ben</p>
      <p>14. Online marketing egy sz??llodal??nc eset??ben</p>
 


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Avornicului.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. AVORNICULUI MIHAI-CONSTANTIN, ADJUNKTUS</div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p>1. ERP rendszer bevezet??se egy KKV eset??n</p>
        <p>2. Az inform??ci?? szerepe a turizmusban</p>
        <p>3. Online devizakereskedelemi lehet??s??gek ??s trendek</p>
        <p>4. E-logisztikai rendszerek j??v??j</p>
        <p>5. Egy mobil t??vk??zl??si c??g online marketing strat??gi??ja, a piacbefoly??sol??s lehets??ges eszk??zei</p>
        <p>6. A Richter gy??gyszert??rl??nc disztrib??ci??s rendszer??nek informatikai alapjai ??s a j??v??beli fejleszt??sek lehet??s??gei Rom??ni??ban</p>
        <p>7. IT infrastrukt??ra optimaliz??l??sa egy KKV eset??n, esettanulm??ny</p>
        <p>8. Sz??m??t??g??ppel t??mogatott audit??l??si technik??k</p>
        <p>9. Az adatv??delem ??s adatbiztons??g vizsg??lata nagyv??llalati k??rnyezetben</p>
        <p>10. V??llalati informatikai probl??m??k elemz??se ??s megold??sa</p>
        <p>11. ??zleti folyamatmenedzsment rendszerek bevezet??se</p>
        <p>12. Robotiz??lt folyamatautomatiz??l??s</p>
        <p>13. ??rt??kpap??rok folyamatmodellez??se</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. CARDO?? ILDIK?? R??KA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p>1. A nyeres??gad?? jellemz??i, sz??m??t??sa, k??nyvel??se ??s elemz??se egy konkr??t v??llalkoz??s p??ld??j??n</p>
        <p>2. A nyeres??gad?? jellemz??i, sz??m??t??sa, k??nyvel??se, elemz??se ??s ??sszehasonl??t??sa k??l??nb??z?? ipar??gakban m??k??d??</p>
        <p>v??llalkoz??sok eset??n (termel??s, szolg??ltat??sok, kereskedelem)</p>
        <p>3. Nyeres??gad?? vs. mikrov??llalati j??vedelemad?? ??? jellemz??k, sz??m??t??s ??s k??nyvel??se</p>
        <p>4. Munkab??rek ??s munkav??llal??i juttat??sok jellegzetess??gei ??s k??nyvel??se a hazai jogszab??lyok ??s IFRS-ek t??kr??ben</p>
        <p>5. Munkab??rek sz??m??t??sa, ad??z??sa ??s k??nyvel??se ??? jogszab??lyok v??ltoz??sa ??s ezek hat??sa. Esettanulm??ny egy konkr??t v??llalkoz??s p??ld??j??n.</p>
        <p>6. A v??llalati hitelez??s form??i ??s ezek sz??mviteli saj??toss??gai</p>
        <p>7. V??llalkoz??sok ??ltal fizetett illet??kek ??s ad??k ??? sz??m??t??s, k??nyvel??s ??s elemz??s egy konkr??t v??llalkoz??s p??ld??j??n</p>
        <p>8. Az ??ltal??nos forgalmi ad?? jellemz??i, m??k??d??se ??s sz??mvitele Rom??ni??ban vagy egy konkr??t v??llalkoz??s p??ld??j??</p>
        <p> 9. Import-export m??veletek saj??toss??gai ??s k??nyvel??se egy konkr??t v??llalkoz??s p??ld??j??</p>
       <p> 10. K??l??nf??le ipar??gi tev??kenys??gek sz??mviteli saj??toss??gainak bemutat??sa (??tterem/cukr??szda, turisztikai iroda,mez??gazdas??gi tev??kenys??gek, stb.)</p>
        
        



    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
       <p> 1. ??ves besz??mol?? vagy egyes elemeinek elk??sz??t??se ??s/vagy elemz??se <p>
        <p>2. A l??zing??gyletek sz??mviteli elsz??mol??sa<p>
        <p>3. B??rsz??mfejt??s az ABC SRL v??llalatn??l<p>
        <p>4. Ad??cs??kkent??si lehet??s??gek az ABC SRL v??llalatn??l<p>
        <p>5. Non-profit szervezet sz??mviteli saj??toss??gai. Esettanulm??ny az ABC SRL v??llalatn??l.<p>
        <p>6. Nyeres??gad?? vs mikrov??llalati ad??<p>
        <p>7. Az x ipar??gi tev??kenys??g sz??mviteli specialit??sai. Esettanulm??ny az ABC SRL v??llalatn??l <p>
        <p>8. Sz??mviteli politika vizsg??lata t??zsdei c??gek eset??ben<p>
        <p>9. A nyeres??gad?? jellemz??i, sz??m??t??sa ??s k??nyvel??se egy konkr??t v??llalkoz??s p??ld??j??n<p>
        <p>10. A v??llalati finansz??roz??s form??i ??s ezek sz??mviteli saj??toss??gai<p>
        <p>11. K??rnyezetv??delmi sz??mvitel<p>
        <p>12. V??ls??g menedzsel??s ??s ennek sz??mviteli lek??pz??d??se/k??vetkezm??nyei<p>
        <p>13. C??ltartal??kok ??s ??rt??khelyesb??t??sek a rom??n sz??mviteli rendszerben. Empirikus viszg??lat t??zsdei c??gek eset??n.<p>
      

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. GUB??N ??KOS, F??ISKOLAI TAN??R</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Egy val??s inform??ci??rendszer fejleszt??se agilis m??dszertannal</p>
    <p>2. Tesztadatrendszer ??ssze??ll??t??sa ??s alkalmaz??sa</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. GUB??N MIKL??S, F??ISKOLAI TAN??R </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p>1. Termel??s??temez??si probl??ma megold??sa evol??ci??s algoritmusokkal</p>
        <p>2. J??rattervez??si probl??m??k megold??sa MI m??dszerekkel</p>
        <p>3. Tanul?? algoritmusok ??s a j??t??kok</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. GY??RFY LEHEL-ZOLT??N, DOCENS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
      <p>1. A strat??giai tervez??s folyamata. Az XY v??llalat esete.</p>
       <p>2. Strat??giai d??nt??si pontok az AB ??gazatban/term??kp??ly??n. Az XY v??llalat esete.</p>
       <p>3. Strat??gia ??s strukt??ra kapcsolata. Az XY v??llalat esete.</p>
       <p>4. Szervezeti magatart??si elemek jav??t??sa az XY v??llalatn??l.</p>
       <p>5. Szervezeti magatart??si elemek hat??sa az XY v??llalat teljes??tm??ny??re.</p>
       <p>6. Szervezeti strukt??ra ??s szervezeti kult??ra kapcsolata. Az XY v??llalatesete.</p>
       <p>7. V??llalatkorm??nyz??si kih??v??sok az XY v??llalatn??l.</p>
       <p>8. Szervezeti strukt??ra ??talak??t??s az XY v??llalatn??l.</p>
       <p>9. Teljes??tm??ny??rt??kel??si mechanizmusok. Az XY v??llalat esete.</p>
       <p>10. Strat??giai ??s operat??v tervez??s kapcsolata. Az XY v??llalat esete.</p>
       <p>11. A BalancedScorecard m??dszer ??s alkalmaz??sa. Az XY v??llalat esete.</p>
       <p>12. Az ??zleti tervez??s szerepe a v??llalkoz??sok magvet?? szakasz??ban. Az XY v??llalat esete.</p>
       <p>13. Az ??zleti tervez??s szerepe a KKV-k start-up szakasz??ban. Az XY v??llalat esete.</p>
       <p>14. Az ??zleti tervez??s szerepe a KKV menedzsmentben. Az XY v??llalat esete.</p>
       

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Gyorfy.jpg">
  </div>
  <div class="content">
    <div class="title">DR. GY??RFY LEHEL-ZOLT??N, DOCENS </div>
  <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p>1. A strat??giai tervez??s folyamata. Az XY v??llalat esete.</p>
        <p>2. Strat??giai d??nt??si pontok az AB ??gazatban/term??kp??ly??n. Az XY v??llalat esete.</p>
        <p>3. Strat??gia ??s strukt??ra kapcsolata. Az XY v??llalat esete.</p>
        <p>4. Szervezeti magatart??si elemek jav??t??sa az XY v??llalatn??l</p>
        <p>5. Szervezeti magatart??si elemek hat??sa az XY v??llalat teljes??tm??ny??re</p>
        <p>6. Szervezeti strukt??ra ??s szervezeti kult??ra kapcsolata. Az XY v??llalat esete.</p>
        <p>7. V??llalatkorm??nyz??si kih??v??sok az XY v??llalatn??l</p>
        <p>8. Szervezeti strukt??ra ??talak??t??sa az XY v??llalatn??l</p>
        <p>9. Teljes??tm??ny??rt??kel??si mechanizmusok. Az XY v??llalat esete.</p>
        <p>10. Strat??giai ??s operat??v tervez??s kapcsolata. Az XY v??llalat esete.</p>
        <p>11. A Balanced Scorecard m??dszer ??s alkalmaz??sa. Az XY v??llalat esete.</p>
        <p>12. Az ??zleti tervez??s szerepe a v??llalkoz??sok magvet?? szakasz??ban. Az XY v??llalat esete.</p>
        <p>13. Az ??zleti tervez??s szerepe a KKV-k start-up szakasz??ban. Az XY v??llalat esete.</p>
        <p>14. Az ??zleti tervez??s szerepe a KKV menedzsmentben. Az XY v??llalat esete.</p>
     

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. HORV??TH R??KA, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. A v??llalat t??rsadalmi felel??ss??gv??llal??sa (CSR)</p>
    <p>2. J??vedelmi egyenl??tlens??gek az EU-ban</p>
    <p>3. Term??k/szolg??ltat??s bevezet??se egy ??j piacra</p>
    <p>4. EU tag??llamok gazdas??gi fejletts??g??nek ??sszehasonl??t??sa</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Horvath.jpg">
  </div>
  <div class="content">
    <div class="title">DR. HORV??TH R??KA, ADJUNKTUS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
       <p> 1. A v??llalat t??rsadalmi felel??ss??gv??llal??sa (CSR)</p>
        <p>2. J??vedelmi egyenl??tlens??gek az EU-ban</p>
        <p>3. Term??k/szolg??ltat??s bevezet??se egy ??j piacra</p>
        <p>4. EU tag??llamok gazdas??gi fejletts??g??nek ??sszehasonl??t??sa<p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. JUH??SZ J??CINT-ATTILA, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
        <p><strong>V??llalati p??nz??gyek</strong></p>
        <p>1. Egy v??llalat forg??t??ke-menedzsmentje</p>
        <p>2. V??llalati kereskedelmi hitelpolitika elem??se vagy optimiz??l??sa</p>
        <p>3. V??llalati k??szlet-gazd??lkod??si politika hat??sa a p??nz??gyi teljes??tm??nyre</p>
        <p>4. T??zsd??n jegyzett v??llalatok osztal??kfizet??si politik??j??t meghat??roz?? t??nyez??k</p>
        <p><strong>Beruh??z??s-??rt??kel??s</strong></p>
        <p>1. Egy v??llalati beruh??z??si projekt megval??s??t??s??nak ki??rt??kel??se</p>
        <p>2. Egy v??llalat potenci??lis g??pcser??j??nek ki??rt??kel??se</p>
        <p>3. Egy v??llalat kapacit??s-b??v??t??si d??nt??s??nek el??k??sz??t??se</p>
        <p>4. Egy v??llalat beruh??z??s-id??z??t??si probl??m??j??nak bemutat??sa</p>
        
        <p><strong>Egy v??llalati probl??ma ki??rt??kel??se re??lopci??s elemz??s seg??ts??g??vel</strong></p>
        <p>1. Operat??v l??zing vs. hitel a felmond??si lehet??s??g ki??rt??kel??s??vel</p>
        <p>2. Egy v??llalat kapacit??s-b??v??t??si d??nt??s??nek el??k??sz??t??se</p>
        <p>3. Egy v??llalat beruh??z??s-id??z??t??si probl??m??j??nak bemutat??sa</p>
        <p>4. V??ltoz?? technol??gia alkalmaz??sa ny??jtotta rugalmass??g ??rt??k??nek meghat??roz??sa</p>
     


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Juhasz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. JUH??SZ J??CINT-ATTILA, ADJUNKTUS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
       <p> 1. Egy v??llalat forg??t??ke-menedzsmentje<p>
        <p>2. Egy v??llalat kereskedelmi hitelpolitik??j??nak optimaliz??l??sa<p>
        <p>3. T??zsd??n jegyzett v??llalatok osztal??kfizet??si politik??j??t meghat??roz?? t??nyez??k<p>
        <p>4. T??zsd??n jegyzett v??llalatok finansz??roz??si politik??j??t meghat??roz?? t??nyez??k<p>
        <p>5. Egy v??llalati beruh??z??si projekt megval??s??t??s??nak ki??rt??kel??se<p>
        <p>6. Egy v??llalat potenci??lis g??pcser??j??nek ki??rt??kel??se<p>
        <p>7. Egy v??llalat kapacit??s-b??v??t??si d??nt??s??nek el??k??sz??t??se<p>
        <p>8. Egy v??llalat beruh??z??s-id??z??t??si probl??m??j??nak bemutat??sa<p>
        <p>9. Egy adott v??llalat ??rt??k??nek meghat??roz??sa FCF-alap??, eszk??z alap?? ??s sz??rz??sz??mos ??rt??kel??s alapj??n<p>
        <p>10. Operat??v l??zing vs. hitel a felmond??si lehet??s??g re??lopci??s ki??rt??kel??s??vel<p>
        <p>11. Egy v??llalat kapacit??s-b??v??t??si d??nt??s??nek el??k??sz??t??se re??lopci??s elemz??s seg??ts??g??vel<p>
        <p>12. Egy v??llalat beruh??z??s-id??z??t??si probl??m??j??nak bemutat??sa re??lopci??s elemz??s seg??ts??g??vel<p>
        <p>13. V??ltoz?? technol??gia alkalmaz??sa ny??jtotta rugalmass??g ??rt??k??nek meghat??roz??sa re??lopci??s elemz??s seg??ts??g??vel<p>
       
     

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <p>1. A projektek szerepe XY v??llalat strat??gi??j??nak megval??s??t??s??ban</p>
    <p>2. A projektek sikeress??g??t befoly??sol?? t??nyez??k XY v??llalat eset??ben</p>
    <p>3. A projektek sikeress??g??t befoly??sol?? t??nyez??k (felm??r??s projektvezet??k k??r??ben)</p>
    <p>4. Hum??ner??forr??s menedzsment a projektekben</p>
    <p>5. A munkaer??hi??ny okai ??s kezel??se XY v??llalatn??l</p>
    <p>6. A fluktu??ci?? okai ??s kezel??se XY v??llalatn??l</p>
    <p>7. A munkahelyi elk??telezetts??g vizsg??lata XY v??llalatn??l</p>
    <p>8. A rom??niai munkaer??piac jellemz??i ??s ezek hat??sa a v??llalatok munkaer??-gazd??lkod??s??ra</p>
    <p>9. Multinacion??lis v??llalatok hum??ner??forr??s menedzsmentje</p>
    <p>10. A hallgat?? ??ltal javasolt Hum??ner??forr??s menedzsment vagy Projektmenedzsment t??ma    </p> 

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kerekes.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. KEREKES KINGA, DOCENS</div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
       <p> 1. A projektek szerepe XY v??llalat strat??gi??j??nak megval??s??t??s??ban</p>
        <p>2. A projektek szerepe a XY k??zs??g/kist??rs??g fejleszt??si strat??gi??j??nak megval??s??t??s??ban</p>
        <p>3. A projektek sikeress??g??t befoly??sol?? t??nyez??k XY v??llalat eset??ben</p>
        <p>4. A projektek sikeress??g??t befoly??sol?? t??nyez??k (felm??r??s projektvezet??k k??r??ben)</p>
        <p>5. A projektteljes??t??si strat??gia kiv??laszt??sa ??s alkalmaz??sa a gyakorlatban</p>
        <p>6. Projektalap?? v??llalatok hum??ner??forr??s menedzsmentje</p>
        <p>7. A munkaer??hi??ny okai ??s kezel??se XY v??llalatn??l</p>
        <p>8. A munkahelyi elk??telezetts??g vizsg??lata XY v??llalatn??l</p>
        <p>9. A rom??niai munkaer??piac jellemz??i ??s ezek hat??sa a v??llalatok munkaer??-gazd??lkod??s??ra</p>
        <p>10. Nemzetk??zi csapatok m??k??d??se online k??rnyezetben (X-Culture)</p>
        <p>11. Multinacion??lis v??llalatok hum??ner??forr??s menedzsmentje</p>
        <p>12. A hallgat?? ??ltal javasolt Projektmenedzsment, Hum??ner??forr??s menedzsment vagy Vid??kfejleszt??s t??ma</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. KOV??CS GY??NGYV??R-EMESE, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Adatvez??relt ??zleti alkalmaz??sok fejleszt??se</p>
     <p> 2. Felhaszn??l??i ??lm??nytervez??s webalkalmaz??sok eset??n</p>
     <p> 3. Adatb??zis-kezel??si megk??zel??t??sek webalkalmaz??sok kiszolg??l??s??ra</p>
     <p> 4. Online aj??nl??rendszerek</p>
     <p> 5. Web alap?? tartalomkezel?? (CMS) rendszerek</p>
     <p> 6. ??gyf??lkapcsolat rendszer (CRM) fejleszt??se</p>
     <p> 7. Mobil platformra val?? fejleszt??s: iOS, Android vagy WindowsPhone OS</p>
     <p> 8. Oktat??st t??mogat?? alkalmaz??s fejleszt??se cross-platform technol??gi??kkal</p>
     <p> 9. Ingatlan k??zvet??t?? webalkalmaz??s fejleszt??se</p>
     <p> 10. Id??pontfoglal?? rendszer fejleszt??se cross-platform technol??gi??kkal</p>
     <p> 11. Java alap?? backend rendszerek tervez??se ??s megval??s??t??sa</p>
    <p>  12. Agilis szoftverfejleszt??s a gyakorlatban - egyedi ??zleti alkalmaz??s fejleszt??se</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Kovacs.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. KOV??CS GY??NGYV??R-EMESE, ADJUNKTUS</div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
       <p> 1. ??zleti Intelligencia (BI) rendszer alkalmaz??sa/fejleszt??se</p>
        <p> 2. ??gyf??lkapcsolat rendszer (CRM) alkalmaz??sa/fejleszt??se</p>
         <p>3. Web alap?? tartalomkezel?? (CMS) rendszerek</p>
        <p> 4. Adatvez??relt d??nt??shozatal</p>
         <p>5. Big data alap?? adatt??rol??s ??s hat??kony adatkezel??s</p>
         <p>6. Az adatvizualiz??ci?? alkalmaz??si lehet??s??gei</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. NAGY B??LINT-ZSOLT, DOCENS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p> <strong>Portf??li?? menedzsment </strong><p>
     <p>1. Befektetesi alapok teljes??tm??nye, akt??v ??s passz??v portf??li??kezel??s <p>
     <p>2. Ny??lt ??s z??rtv??g?? befektet??si alapok, ETF-ek <p>
     <p>3. A CAPM ??s az arbitr??zs??raz??si modell tov??bbfejleszt??sei <p>
     <p>4. Kock??ztatott ??rt??k (VaR) sz??m??t??sok portf??li??k eset??n <p>
     <p>5. Posztmodern portf??li?? elm??let <p>
     <p>6. Spekulat??v bubor??kok <p>
     <p><strong>P??nz??gyi piacok </strong><p>
     <p>1. Az algoritmikus keresked??s hat??sai <p>
     <p>2. Jelent??s t??zsdei ??sszeoml??sok (krachok) osszehasonl??t?? vizsg??lata <p>
     <p>3. T??kepiaci koszolid??ci??k (f??zi??k, tranzakci??s k??lts??gek, clearing )<p>
     <p>4. Az elektronikus keresked??si platformok t??rnyer??se <p>
     <p>5. Els??dleges nyilvanos kibocs??t??sok (IPO) - Rom??ni??ban, k??lf??ld??n <p>
     <p>6. Fedezeti ??gyletek (hedging) az ??rfolyamkock??zat kezel??s??re <p>
     <p>7. Fekete hatty??k a p??nz??gyi piacokon <p>
   

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Nagy.png">
  </div>
  <div class="content">
    <div class="title">DR. NAGY B??LINT-ZSOLT, DOCENS </div>
 <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
      <p><strong>Befektet??si d??nt??sek</strong><p>
      <p>1. Befektetesi alapok teljes??tm??nye, akt??v ??s passz??v portf??li??kezel??s<p>
      <p>2. Ny??lt ??s z??rtv??g?? befektet??si alapok, ETF-ek<p>
      <p>3. Faktor alap?? befektet??si strat??gi??k<p>
      <p>4. Kock??ztatott ??rt??k (VaR) sz??m??t??sok portf??li??k eset??n<p>
      <p>5. Posztmodern portf??li?? elm??let<p>
      <p>6. Spekulat??v bubor??kok<p>
      <p><strong>Sz??rmaztatott term??kek ??raz??sa</strong><p>
      <p>1. Line??ris ??s nemline??ris kock??zatok<p>
      <p>2. Fedezeti ??gyletek (hedging) az ??rfolyamkock??zat kezel??s??re<p>
      <p>3. Fedezeti ??gyletek (hedging) a kamatkock??zat kezel??s??re<p>
      <p>4. Kamatcsere (swap) ??gyletek a kamatkock??zat kezel??s??re<p>
      <p>5. Hogyan v??ltoztatta meg a 2007-2009-es v??ls??g a sz??rmaztatott term??kek ??raz??s??t?<p>
      <p>6. Hitelderivat??v??k<p>
    



    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. R??CZ B??LA-GERGELY, ADJUNKTUS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p><strong> P??nz??gyi menedzsment</strong><p>
    <p>1. Egy v??llalati beruh??z??si projekt megval??s??t??s??nak ki??rt??kel??se<p>
    <p>2. V??llalati kontrollig rendszer kialak??t??sa ??s implement??l??sa<p>
    <p>3. Kintl??v??s??gek kezel??s??nek jav??t??sa egy adott v??llalatn??l<p>
    <p>4. ERP fejleszt??se, bevezet??se ??s saj??toss??gai a v??llalati gyakorlatban<p>
    <p><strong>Mikro??kon??mia, K??z??ss??gi p??nz??gyek, ??llamh??ztart??s p??nz??gyei</strong><p>
    <p>1. Szabad kereskedelem vagy protekcionizmus, komparat??v el??ny??k versus abszol??t el??ny??k Ad??rendszerek hat??konys??g??nak ??s tendenci??inak elemz??se<p>
    <p>2. Gazdas??gi fejl??d??s ??s popul??ci??s dinamika kapcsolata a 21. sz??zadban<p>
    <p>3. A migr??ci?? hat??sa a gazdas??g n??veked??s??re<p>
    <p><strong>Szervezeti menedzsment</strong><p>
    <p>1. Tud??stranszfer hat??sa a v??llalat ??zleti teljes??tm??ny??re<p>
    <p>2. Tud??smenedzsment elm??letek ??s rendszerek adapt??l??sa<p>
    <p>3. Termel??v??llalatok strat??gi??ja ??s ??zleti teljes??tm??ny??nek kapcsolata<p>
    <p>4. Ny??lt innov??ci?? hat??sa az ??zleti teljes??tm??nyre<p>
   

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Racz.jpg">
  </div>
  <div class="content">
    <div class="title">DR. R??CZ B??LA-GERGELY, ADJUNKTUS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        
       <p><strong>??zleti tervez??s</strong> </p>
       <p>1. Egy v??llalati beruh??z??si projekt megval??s??t??s??nak ki??rt??kel??se</p>
       <p>2. V??llalati kontrollig rendszer kialak??t??sa ??s implement??l??sa</p>
       <p>3. Kintlev??s??gek kezel??s??nek jav??t??sa egy adott v??llalatn??l</p>
       <p>4. ERP fejleszt??se, bevezet??se ??s saj??toss??gai a v??llalati gyakorlatban</p>
       <p>5. XY v??llalat ??zleti terve</p>
    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. S??PL??CAN ZSUZSA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p><strong>??ltal??nos marketing</strong></p>
      <p>1. A k??n??lat kialak??t??sa ??s term??kpolitika egy v??llalatn??l</p>
      <p>2. ??rpolitika kialak??t??sa</p>
      <p>3. ??rt??kes??t??si strat??gia kialak??t??sa, t??bbcsatorn??s ??rt??kes??t??si rendszer megtervez??se</p>
      <p>4. A marketing tev??kenys??g megszervez??se a v??llalatokn??l. ??gazati/region??lis k??rk??p.</p>
      <p><strong>Fogyaszt??i magatart??s</strong></p>
      <p>1. Valamely term??k, szolg??ltat??s piac??nak magatart??salap?? szegment??ci??ja</p>
      <p>2. Az attit??d ??s v??s??rl??si sz??nd??k vizsg??lata valamely (??j/innovat??v) term??k ir??nt</p>
      <p>3. Influencer marketing ??s hat??sa a fogyaszt??i magatart??sra</p>
      <p>4. M??rkapozicion??l??sok sikeress??g??nek m??r??se</p>
      <p><strong>Szolg??ltat??smarketing ??s Bankmarketing</strong></p>
      <p>1. Vev????lm??ny (customer experience) elemz??se ??s tervez??se egy szolg??ltat??v??llalat/bank eset??ben</p>
      <p>2. A szolg??ltat??smin??s??g m??r??se adott v??llalatn??l ??s strat??giai alkalmaz??sa</p>
      <p>3. A szolg??ltat??smarketing-mix megtervez??se egy v??llalatn??l</p>
      




    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Saplacan.jpg">
  </div>
  <div class="content">
    <div class="title">DR. S??PL??CAN ZSUZSA, ADJUNKTUS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p><strong>Fogyaszt??i magatart??s ??s marketing strat??gia</strong></p>
        <p>1. A vev????lm??ny elemei ??s befoly??sol?? t??nyez??i valamely term??k, szolg??ltat??s eset??n</p>
        <p>2. Egy term??k piac??nak magatart??salap?? szegment??l??sa</p>
        <p>3. Valamely term??k ir??nti fogyaszt??i magatart??s tanulm??nyoz??sa k??l??nb??z?? szegmentumok szerint</p>
        <p>4. V??s??rl??s??szt??nz??si m??dszerek ir??nti fogyaszt??i preferencia vizsg??lata</p>
        <p>5. A fogyaszt?? magatart??sa a t??bbcsatorn??s ??rt??kes??t??si rendszerben</p>
        <p><strong>??raz??si strat??gi??k ??s taktik??k</strong></p>
        <p>1. A fogyaszt?? ??r??szlel??s??nek vizsg??lata</p>
        <p>2. Egy tem??k / szolg??ltat??s ??rstrat??gi??j??nak kialak??t??sa</p>
        <p>3. Az online ??rkeres??s ??s ??r??sszehasonl??t??s hat??sa a v??s??rl??i magatart??sra</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. SEER L??SZL??-CSABA, ADJUNKTUS</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
      <p>1. Digit??lis technol??gi??k fogyaszt??k ??ltali elfogad??sa (??ltal??nos t??ma)</p>
      <p>2. Mesters??ges intelligencia, okos term??kek ??s szolg??ltat??sok, IoT</p>
      <p>3. Szoftverek marketingje</p>
      <p>4. X web??ruh??z / Internetes szolg??ltat??s marketingterve</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Seer.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SEER L??SZL??-CSABA, ADJUNKTUS</div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p>1. Digit??lis technol??gi??k fogyaszt??k ??ltali elfogad??sa (??ltal??nos t??ma)</p>
        <p>2. Mesters??ges intelligencia, okos term??kek ??s szolg??ltat??sok, IoT</p>
        <p>3. Szoftverek marketingje</p>
        <p>4. X term??kinnov??ci??r??l val?? percepci?? vizsg??lata X szegmens k??r??ben</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DR. SZAB?? T??NDE PETRA, DOCENS </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
   <p>1. ??rfolyamok alakul??s??t befoly??sol?? t??nyez??k</p>
        <p>2. Nemek k??zti k??l??nbs??gek iskol??zotts??g szerint</p>
        <p>3. Munkaer??piacot befoly??sol?? t??nyez??k</p>
        <p>4. Valamely gazdas??gi folyamatot befoly??sol?? t??nyez?? beazonos??t??sa</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szabo.jpg">
  </div>
  <div class="content">
    <div class="title">DR. SZAB?? T??NDE PETRA, DOCENS </div>
     <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p>1. ??rfolyamok alakul??s??t befoly??sol?? t??nyez??k</p>
        <p>2. Nemek k??zti k??l??nbs??gek iskol??zotts??g szerint</p>
        <p>3. Munkaer??piacot befoly??sol?? t??nyez??k</p>
        <p>4. Valamely gazdas??gi folyamatot befoly??sol?? t??nyez?? beazonos??t??sa</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. SZ??SZ LEVENTE, EGYETEMI TAN??R</div>
   <div class="subtitle">Szakdolgozat</div>
    <div class="text">
    <p> <strong>Termel??s- ??s szolg??ltat??smenedzsment, ??rt??kteremt?? folyamatok menedzsmentje</strong></p>
    <p>1. Az Ipar 4.0  hat??sainak vizsg??lata egy adott ipar??g/termel??v??llalat folyamataira</p>
    <p>2. Az ??j technol??gi??k  bevezet??s??nek vizsg??lata egy szolg??ltat?? v??llalatn??l</p>
    <p>3. Az ??j technol??gi??k  alkalmaz??sa egy termel??/szolg??ltat?? v??llalatn??l a vev??kapcsolat menedzsmentj??nek fejleszt??se ??rdek??ben</p>
    <p>4. ??lm??nyszolg??ltat??sok gyakorlati eszk??zeinek alkalmaz??sa ??s hat??sainak elemz??se egy v??llalatn??l</p>
    <p><strong>Logisztika</strong></p>
    <p>1. Logisztikai (informatikai) rendszerek kiv??laszt??s??nak ??s bevezet??s??nek elemz??se egy v??llalatn??l</p>
    <p>2. Logisztikai (informatikai) rendszerek hat??sa a v??llalat m??k??d??s??re ??s p??nz??gyi helyzet??re</p>
    <p>3. Az automatiz??l??s, robotiz??l??s, ???smart??? technol??gi??k, blockchain technol??gia stb. hat??sa a logisztikai folyamatok menedzsmentj??re</p>
    <p>4. Logisztikai kiszervez??si projektek p??nz??gyi ??rt??kel??se</p>
    <p>5. Sz??ll??t??si rendszerek ??s sz??ll??t??si h??l??zatok optimaliz??l??sa</p>
    <p>6. Besz??ll??t??i kapcsolatmenedzsment elemz??se ??s fejleszt??se egy v??llalatn??l</p>
    <p>7. Rakt??roz??si rendszerek ??s rakt??roz??si h??l??zatok optimaliz??l??sa</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
</div>
</div>
<div class="slider-item swiper-slide">
  <div class="slider-img">
    <img src="img/Szasz.jpg">
  </div>
  <div class="content">
    <div class="title"> DR. SZ??SZ LEVENTE, EGYETEMI TAN??R</div>
 <div class="subtitle">Disszert??ci??s dolgozat</div>
    <div class="text">
        <p><strong>Ell??t??sil??nc-menedzsment</strong></p>
        <p>1. Tud??smenedzsment, tud??smegoszt??s egy multinacion??lis v??llalat h??l??zat??n bel??l</p>
        <p>2. Nemzetk??zi termel??si h??l??zatok felt??rk??pez??se ??s egy vagy t??bb ??zem strat??giai fejleszt??se</p>
        <p>3. Nemzetk??zi termel??si h??l??zatok felt??rk??pez??se ??s a h??l??zat tagjait k??pez?? ??zemek strat??giai szerep??nek azonos??t??sa</p>
        <p>4. A ???sharing economy??? aktu??lis ??s v??rhat?? hat??sa egy termel?? vagy szolg??ltat?? ??gazat ell??t??si l??nc??ra </p>
        <p>5. A ???sharing economy??? ??zleti modelljeinek ??sszehasonl??t?? elemz??se adott ??gazatban</p>
        <p>6. A 3D-nyomtat??si technol??gia aktu??lis ??s v??rhat?? hat??sai egy adott ??gazat ell??t??si l??nc??ra</p>
        <p>7. Az automatiz??l??s, robotiz??l??s, ???smart??? technol??gi??k stb. hat??sa egy adott ipar??g/v??llalat ell??t??si l??nc??nak m??k??d??s??re</p>
        <p>8. A blockchain technol??gia hat??sa az ell??t??si l??ncok menedzsmentj??re egy adott ipar??gban / v??llalatn??l</p>
        <p>9. R??vid ell??t??si l??ncok az ??lelmiszeriparban ??? a helyi termel??s ??s fogyaszt??s versenyk??pess??ge</p>
        <p>10. Ell??t??si l??nc menedzsment gyakorlatok v??llalat??rt??kre gyakorolt hat??s??nak elemz??se</p>
        <p>11. Ell??t??si l??nc szintj??n termelt gazdas??gi hozz??adott ??rt??k becsl??se egy term??k ell??t??si l??nc??nak p??ld??j??n kereszt??l</p>
        <p>12. Ell??t??sil??nc-strat??gia d??nt??seinek elemz??se egy termel?? vagy szolg??ltat?? v??llalatn??l. K??ls?? k??rnyezet ??? ell??t??sil??ncstrat??gia ??sszef??gg??seinek vizsg??lata</p>
        <p>13. Ell??t??si l??nc szint?? fejleszt??si projektek elemz??se ??s p??nz??gyi ??rt??kel??se</p>
    
        


    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title"> DR. SZ??KELY IMRE, TAN??RSEG??D</div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     <p>1. Az eur?? rom??niai bevezet??s??nek re??lgazdas??gi vizsg??lata</p>
        <p>2. Valamely kelet-k??z??p eur??pai ??llam vagy ??llamcsoport makrogazdas??gi egyens??lyi helyzet??nek elemz??se egy meghat??rozott id??szakra vonatkoz??an</p>
        <p>3. Rom??niai makrogazdas??gi ??sszef??gg??sek regresszi??s becsl??se</p>
        <p>4. A k??lts??gvet??si felel??ss??g keretrendszer??nek m??k??d??si tapasztalatai valamely eur??pai- vagy vil??ggazdas??gi szempontb??l jelent??s orsz??gban</p>
        <p>5. A helyi p??nzek szerepe ??s gazdas??gi hat??sai</p>
        <p>6. Valamely eur??pai uni??s ??llamcsoport nemzetk??zi fizet??si m??rleg??nek ??s k??lf??ldi beruh??z??si poz??ci??j??nak hossz?? t??v?? alakul??sa</p>
        <p>7. A rom??niai nyugd??jrendszer v??ltoz??s??nak makrogazdas??gi hat??sai</p>

    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
    <div class="title">DRD. BENEDEK BOTOND, TAN??RSEG??D </div>
     <div class="subtitle">Szakdolgozat</div>
    <div class="text">
     
     <p><strong>Biztos??t??sok</strong></p>
      <p>1. Innov??ci?? a vagyon ??s ??r?? biztos??t??sok ter??n</p>
      <p>2. Innov??ci?? az ??letbiztos??t??sok ter??n</p>
      <p>3. Biztos??t??si term??kek online ??rt??kes??t??s??nek p??nz??gyi hat??sai</p>
      <p>4. Okos-eszk??z??k ??s a szem??lyre szabott biztos??t??si term??kek</p>
      <p>5. Aut??biztos??t??si csal??sok</p>
      <p>6. A biztos??t??si csal??sok hat??sa a gazdas??gra</p>
      <p>7. ??letbiztos??t??si term??kek mint befektet??si alternat??v??k</p>
      <p><strong>V??llalati p??nz??gyek ??s Beruh??z??s ??rt??kel??s</strong></p>
      <p>1. A v??llalati finansz??roz??si politika ??s ennek hat??sa a felhaszn??lt t??ke k??lts??g??re</p>
      <p>2. V??llalati p??nzgazd??lkod??s ??s optim??lis k??szp??nzk??szlet</p>
      <p>3. V??llalati k??szletgazd??lkod??s ??s optim??lis k??szlet??llom??ny</p>
      <p>4. Z??ldmez??s beruh??z??sok ??s gazdas??goss??guk</p>
      <p>5. V??llalati kock??zatelemz??s Monte Carlo szimul??ci?? seg??ts??g??vel</p>
      <p>6. Kriptovalut??k mint befektet??si lehet??s??gek v??llaltok sz??m??ra</p>
      
    </div>

    
  <a href="tanarvalasztas.php" class="button">JELENTKEZ??S</a>
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
     

        

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
   <script type="text/javascript" src="js/tanartema.js"></script>



</body>