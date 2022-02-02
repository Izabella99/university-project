<?php

//1. LEELENORZI HOGY A BEIRT JELENLEGI JELSZO HELYES-E 
//2. AKTUALIZALJA AZ ADATBAZISBAN AZ UJAT

session_start();
if(isset($_SESSION["username"])){
    $host='localhost';
    $user='root';
    $password='';
    $dbname='szakdolgozat';
    $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz

    if($dbcon->connect_error){ //sikertelen csatlakozas
        die("Connection failed:".$conn->$connect_error);
    }


    //Adatok kimentése sessionból változókba

    $username = $_SESSION ["username"];
    $CNP=$_SESSION["CNP"];
    $TEmail=$_SESSION["TEmail"];
    $password = sha1($_POST["password"]);
    $newPassword=sha1($_POST["newpassword"]);
    
    // a bejelentkezett diák jelszavának lekérése
    $sql = "SELECT Jelszo FROM diak WHERE CNP= '$CNP' and Jelszo = '$password'"; 

    // a bejelentkezett tanár jelszavának lekérése
    $sql3 = "SELECT Jelszo FROM tanar WHERE TEmail= '$TEmail' and Jelszo = '$password'"; 
    
    if($_SESSION["kiaz"]=="diak"){ //ha diák aki be van jelentkezve
        if(mysqli_query($dbcon,$sql)){ //diákos lekérdezés

            $result = mysqli_query($dbcon,$sql);
            $count = mysqli_num_rows($result);
            if($count == 1) { // rendben van a beírt jelszó, jöhet a csere
        
                $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra

                $sql2="UPDATE diak SET Jelszo = '$newPassword' WHERE CNP='$CNP'"; //kicseréli a jelszót az adatbázisban
                mysqli_query($dbcon,$sql2);

                echo "<script type='text/javascript'>
                        alert('Sikeres jelszócsere');
                        window.history.back() ;
                    </script>"; 
            
            }


            else { //ha nem jó a megadott jelenlegi  jelszó
            
                $error= "Helytelen jelszó";
                echo "<script type='text/javascript'>
                    alert('$error');
                    window.history.back() ;
                
                </script>";  
            }
        }
    }

    else if($_SESSION["kiaz"]=="tanar"){ //ha tanár van bejelentkezve

        if(mysqli_query($dbcon,$sql3)){ //tanáros lekérdezés

                
            $res = mysqli_query($dbcon,$sql3);
            $countt = mysqli_num_rows($res);

        
            if($countt == 1) { // rendben van a jelszo, jöhet a csere
                $roww=mysqli_fetch_assoc($res);//rekordok halmazat bontja sorokra

                $sql4="UPDATE tanar SET Jelszo = '$newPassword' WHERE TEmail='$TEmail'"; //updateolja az adatbázisban a jelszót
                mysqli_query($dbcon,$sql4);

                echo "<script type='text/javascript'>
                        alert('Sikeres jelszócsere');
                        window.history.back() ;
                    </script>"; 
            
            }

            else { //ha nem jó a beírt jelszó


                $error= "Helytelen jelszó";
                echo "<script type='text/javascript'>
                    alert('$error');
                    window.history.back() ;
                
                </script>";  
            }

        }
    }

}//isset session username

else{ // ha nincs bejelentkezve a felhasználó, ez az oldal nem elérhető
    echo"Page not found";
   
    echo "<script type='text/javascript'>
    window.history.back() ;
</script>";
}

?>
