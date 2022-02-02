<?php 

session_start();

if(isset($_SESSION["username"])&&($_SESSION["kiaz"]=="diak")){ //CSAK A DIAKOKNAK

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
            $CNP=$_SESSION["CNP"];
            $tanarnev= explode(" ",$_POST["tanar"]);
            $Tcsaladnev=$tanarnev[0];
            $Tkeresztnev=$tanarnev[1];

    
          
    //tanar email betevese a diakhoz
            $sql = "SELECT TEmail FROM tanar WHERE CsaladNev='$Tcsaladnev' AND KeresztNev='$Tkeresztnev'";
            if($res = mysqli_query($dbcon,$sql)){
                    $row = mysqli_fetch_array($res);
                    $temail = $row['TEmail'];

            $sql2 = "UPDATE diak SET TEmail='$temail' WHERE CNP='$CNP'";
            mysqli_query($dbcon,$sql2);
           
            }

    // szakdolgozat tabla updateolasa
           
           if(isset( $_POST["tema"])){ //HA VALASZTOTT A LISTABOL
             $tema= $_POST["tema"];
             if( $_POST["tema"]=="Más"){ // HA A MAST VALASZTOTTA
                 $tema= $_POST["tema2"];
                
             } 
             echo "<script type='text/javascript'>
                window.history.back() ;
             </script>";
           }


            else{ // KULONBEN VEGYE A KEZZEL BEIRT TEMAT
              
                $tema= $_POST["tema2"];
                echo "<script type='text/javascript'>
                window.history.back() ;
             </script>";
            
            }

            $datum = "SELECT YEAR(CURDATE())";
            if($re = mysqli_query($dbcon,$datum)){
                    $row = mysqli_fetch_array($re);
                    $datum = $row[0];
            }
    
        //Klasszikusan

        /*$insert2="INSERT INTO szakdolgozat(Cim,Ev,CNP,TEmail)
        VALUES ('$tema',$datum,'$CNP','$temail')";
        mysqli_query($dbcon,$insert2);*/

        //PREPARE STATEMENT-EL

        $insert2="INSERT INTO szakdolgozat(Cim,Ev,CNP,TEmail)
            VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($dbcon, $insert2)){
            // hozzácsatolja a prepared statement-hez a változókat parameterekként
            mysqli_stmt_bind_param($stmt, "ssss",$tema,$datum,$CNP,$temail); ///s -a stringet jelenti
            mysqli_stmt_execute($stmt);
        
        } 
        else{
                echo "ERROR: Nem sikerült előkészírteni a lekérdezést: $insert2. " . mysqli_error($dbcon);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($dbcon);


          

}
else{
    echo "Page not found"; 
    echo "<script type='text/javascript'>
     window.history.back() ;
  </script>";
    }        

        
  
  
  
?>