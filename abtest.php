<?php
    $host='localhost';
    $user='root';
    $password='';
    $dbname='szakdolgozat';

    $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz
    
    if($dbcon->connect_error){ //sikertelen csatlakozas
        die("Connection failed:".$conn->$connect_error);
    }
    else{
   // echo "sikerult";

      /*  // Megszamolja hany tema van felvezetve
        $sql = "SELECT Nev FROM tema Where Javasol_Ev='2020'" ;
        $result = mysqli_query($dbcon,$sql);//$resultba nem szam tarolodik
     
        if(mysqli_query($dbcon,$sql)){ 
          $count = mysqli_num_rows($result);//az eredmeny  sorainak megszamolasa
          echo "témák száma: " .$count;
         }
        else{
          echo "sikertelen select vegrehajtas  " . mysqli_error($dbcon);
        }*/

        //Azonositsunk egy felhasznalot

        $user = "2990921080042";
        $password = "hellobello";

        $sql = "SELECT CsaladNev,KeresztNev FROM diak WHERE CNP= '$user' and Jelszo = '$password'";
        if(mysqli_query($dbcon,$sql)){ 
        $result = mysqli_query($dbcon,$sql);
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            echo "sikeres";
            $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra
            echo $row["CsaladNev"]. $row["KeresztNev"];
         }else {
            $error = "Your Login Name or Password is invalid";
         }
        }
    }
    
?>