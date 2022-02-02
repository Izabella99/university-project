<?php 

session_start();

    if(isset($_POST ["username"])&&isset($_POST["password"])){
       
        //ellenorzes az AB segitsegevel
        //sikeres bejelentkezes eseten beirjuk a sessionbe
        
        $host='localhost';
        $user='root';
        $password='';
        $dbname='szakdolgozat';
    
        $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz
        
        if($dbcon->connect_error){ //sikertelen csatlakozas
            die("Connection failed:".$conn->$connect_error);
        }
        
      
            //Azonositsunk egy felhasznalot
    
            $username = $_POST ["username"];
            $password = sha1($_POST["password"]); //jelszo hashelés

    //DIÁK LOGIN
    
            $sql = "SELECT CsaladNev,KeresztNev FROM diak WHERE CNP= '$username' and Jelszo = '$password'";

            if(mysqli_query($dbcon,$sql)){ 

            $result = mysqli_query($dbcon,$sql);
            $count = mysqli_num_rows($result);

            
            if($count == 1) {
               // echo "sikeres azonositas";
                $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra
                $_SESSION["CNP"]= $_POST["username"];
                $_SESSION["username"]=$row["CsaladNev"].' '.$row["KeresztNev"];
                $_SESSION["kiaz"]="diak";

                if ( ($_SESSION["username"]==' Admin')){
                 header('Location: osszesitoTablazat.php'); //loginolás után ide vezet ha admin vagy
                }
                else{
                    header('Location: index.php');
                }
                
             }


             else {
                
 
                $error= "Hibás username vagy jelszó";
                echo "<script type='text/javascript'>
                    alert('$error');
                    window.history.back() ;
                  
                </script>"; 
                
                 
             }

            }



    //TANÁR LOGIN

            
            $sql2 = "SELECT CsaladNev,KeresztNev FROM tanar WHERE TEmail= '$username' and Jelszo = '$password'";

            if(mysqli_query($dbcon,$sql2)){ 

            $result2 = mysqli_query($dbcon,$sql2); //lekérdezés eredménye
            $count2 = mysqli_num_rows($result2); //eredmeny megszámolása

            
            if($count2 == 1) {
               // echo "sikeres azonositas";
                $row=mysqli_fetch_assoc($result2);//rekordok halmazat bontja sorokra
                $_SESSION["TEmail"]= $_POST["username"];
                $_SESSION["username"]=$row["CsaladNev"].' '.$row["KeresztNev"];
               
                $_SESSION["kiaz"]="tanar";

                header('Location: index.php');
                 
                
             }


             else {
                
 
                $error= "Hibás username vagy jelszó";
                echo "<script type='text/javascript'>
                    alert('$error');
                    window.history.back() ;
                  
                </script>"; 
                
                 
             }

            }

            
  
    }

  
  
?>