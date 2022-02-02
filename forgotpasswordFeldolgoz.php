<?php
session_start(); 
 use PHPMailer\PHPMailer\PHPMailer;

if(isset($_SESSION["username"])){ //BEJELENTKEZETT FELHASZNALO NEM ERHETI EL EZT AZ OLDALT
    echo "Page not found";
    echo "<script type='text/javascript'>
            window.history.back() ;
        </script>";
}

else{

    //1. LEELENORZI HOGY A BEIRT E-MAIL CIM BENNE VAN-E AZ ADATBAZISBAN 
    //2.GENERAL EGY JELSZOT
    //3. ELKULDI EMAILBAN AZ IDEIGLENES JELSZOT
    //4. AKTUALIZALJA AZ ADATBAZISBAN

    $host='localhost';
    $user='root';
    $password='';
    $dbname='szakdolgozat';
    $dbcon=new mysqli($host,$user,$password,$dbname); //letrehoz egy connectiont az adatbazishoz
    if($dbcon->connect_error){ //sikertelen csatlakozas
        die("Connection failed:".$conn->$connect_error);
    }

        //1. LEELENORZI HOGY A BEIRT E-MAIL CIM BENNE VAN-E AZ ADATBAZISBAN 
        $email = $_POST ["email"];
        $sql = "SELECT Email FROM diak WHERE Email= '$email'";
        if(mysqli_query($dbcon,$sql)){ 
            $result = mysqli_query($dbcon,$sql);
            $count = mysqli_num_rows($result);

            if($count == 1) { //a megadott email cim helyes, benne van az adatbazisban
                
                $row=mysqli_fetch_assoc($result);//rekordok halmazat bontja sorokra
                $_SESSION["email"]=$row["Email"];
                
                //2.GENERAL EGY JELSZOT
                function generatePassword($length = 8) {
                    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                    $count = mb_strlen($chars);
                
                    for ($i = 0, $result = ''; $i < $length; $i++) {
                        $index = rand(0, $count - 1);
                        $result .= mb_substr($chars, $index, 1);
                    }
                    return $result;
                
                }

                $newPassword= generatePassword(); //uj jelszo elmentese egy valtozoba

                //3. ELKULDI EMAILBAN AZ IDEIGLENES JELSZOT
                require_once "PHPMailer/PhpMailer.php";
                require_once "PHPMailer/SMTP.php";
                require_once "PHPMailer/Exception.php";
                require "PHPMailer/OAuth.php"; 
                $mail=new PHPMailer();
            
                //smtp beallitasok
                $mail->isSMTP();
                $mail->Host="ssl://smtp.gmail.com";
                $mail->SMTPAuth=true;
                $mail->Username="probamailfsega@gmail.com";
                $mail->Password='UBBFSEGACj';
                
                $mail->SMTPSecure="ssl";
                $mail->Port=465;
            
                //email beallitasok
                $mail->isHTML(true);
                $mail->setFrom("probamailfsega@gmail.com"); //errol a cimrol kuldi
                $mail->addAddress($email); //a megadott cimre
                $mail->addReplyTo("probamailfsega@gmail.com"); //ide jon vissza az uzenet
                $mail->Subject="Password restore"; //targy
                $mail->Body="<h1>Az ideiglenes jelszavad: ". $newPassword."</h1>"; //az uzenet szovege


                //4. AKTUALIZALJA AZ ADATBAZISBAN AZ UJ JELSZORA A REGIT
                $sql2="UPDATE diak SET Jelszo = SHA1('$newPassword') WHERE Email='$email'";
                mysqli_query($dbcon,$sql2);
                
            
                if(!$mail->send()){
                    $response="Sikertelen küldés";
                    echo "<script type='text/javascript'>alert('$response.$mail->ErrorInfo'); </script>";
            
                }
                else{
                    $response="Elküldtük az új jelszót a következő e-mailre: $email";
                    echo "<script type='text/javascript'>alert('$response'); window.location.href='index.php';</script>";
                }



            
            }


            else {
                $error= "Nincs ilyen e-mail cím regisztrálva!";
                echo "<script type='text/javascript'>
                    alert('$error');
                    window.history.back() ;
                </script>"; 
            }

        }
}
?>