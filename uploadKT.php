  <?php
//FÁJLFELTÖLTÉS FELDOLGOZÁSA

session_start();

if ( isset($_SESSION["username"])&&($_SESSION["kiaz"]=="diak")){ //csak diak tolthet fel


    $temp = explode('.',$_FILES['fileToUpload']['name']); //temporálisba beleteszi a fájlnevet
    $extension = end($temp); //elmenti a kiterjesztést
    $targetfolder =  'uploads/kutatasiterv/'  ; //a mappa amibe kerül a fájl
    $filename = $_SESSION["username"]. '_KT.' . $extension; // a fájl nevének felépítése


    $uploadOk = 1;// ez a változó méri hogy rendben van-e a feltöltés  ha 1 rendben van, ha 0, akkkor valami hiba van

    // FÁJL LÉTEZÉSÉNEK ELLENŐRZÉSE
    if (file_exists($targetfolder .$filename)) {
  ?>
      <script>
        if(confirm('A fájl már létezik. Felül szeretnéd írni?')) {
        // FELÜLÍRÁS
          <?php 
            unlink($targetfolder .$filename);
          ?>
        }
        else {
          window.location.replace("kutatasiterv.php");
        }
      </script>
  <?php
    }


    // Megengedett kiterjesztések
    if($extension != "doc" && $extension != "docx") {
      $uploadOk = 0;
      echo "<script type='text/javascript'>
            alert('Csak doc,docx kiterjesztésű fájlok megengedettek!')
           window.history.back() ;
          </script>";
    }

    
    // Ha minden redben feltöltésre kerül a fájl
     
    if($uploadOk != 0){
      if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetfolder .$filename)) { //ha a feltöltés sikeres
       // echo "A ". htmlspecialchars( basename($targetfolder .$filename)). " fájlt sikeresen feltöltötted!"; //kiirja hogy sikerült
        require_once('mailer.php'); //meghivja a mailkuldesi fajlt
      
      } 
      else {
        echo "Sajnáljuk, valami hiba lépett fel! Próbáld újra!";
      }
    }



    //FELTOLTOTT FAJL NEVENEK BEIRASA AZ ADATBAZISBA

    if(isset($_SESSION ["username"])){
          
          
      $host='localhost';
      $user='root';
      $password='';
      $dbname='szakdolgozat';

      $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz
      
      if($dbcon->connect_error){ //sikertelen csatlakozas
          die("Connection failed:".$conn->$connect_error);
      }
      

          //Azonositsunk egy felhasznalot

          $username = $_SESSION ["username"];//itt az usename mar a diak teljes neve
          $teljesnev=$username;
          $nev = explode(" ", $teljesnev);//nev felbontasa
          $csaladnev=$nev[0]; // kiveszem a teljes nevbol a csaladnevet
          $keresztnev=$nev[1];

        
          /* Az alábbi 2 lekérdezés:
          1. megkeresi azt a diákot aki éppen be van jelentkezve és aki feltölteni kívánja a fájlt
          2. és a szakdolgozattáblába a CNP-je mellé beteszi a feltöltött fájl nevét*/

          $sql = "SELECT CNP FROM diak WHERE CsaladNev= '$csaladnev' AND KeresztNev='$keresztnev'";

          if(mysqli_query($dbcon,$sql)){ 

            $result = mysqli_query($dbcon,$sql);
            $count = mysqli_num_rows($result);    
            
            if($count == 1) {
              
                $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra
                $CNP= $row["CNP"];
                $fajlneve = $filename;
                
                $sql2="UPDATE szakdolgozat SET KutatasiTerv ='$fajlneve' WHERE CNP='$CNP'";
                mysqli_query($dbcon,$sql2);  
                
            }
          }
    } 
}//end if csak diak tolthet fel

else{ // ha nem diak aki ide ellatogat, ez az uzenet jelenik meg
    echo "Page not found"; 
    echo "<script type='text/javascript'>
     window.history.back() ;
    </script>";
}

?>