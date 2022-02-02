<?php
//session_start();

use PHPMailer\PHPMailer\PHPMailer;
if(isset($_SESSION["username"])&&($_SESSION["kiaz"]=="diak")){ //CSAK A DIÁKOKNAK
    $email = $_SESSION ["email"];
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
    $mail->addAddress($email);//a bejelentkezett diák email címére
    $mail->addReplyTo("probamailfsega@gmail.com");//ide jon vissza az uzenet
    $mail->Subject="Sikeres feltoltes";//targy
    $mail->Body="<h1>Sikeresen feltoltotted a dokumentumot! </h1>"; //az uzenet szovege
    

    if(!$mail->send()){
        $response="Az e-mail nem lett elküldve";
        echo "<script type='text/javascript'>alert('$response.$mail->ErrorInfo'); </script>";

    }
    else{
        $response="Sikeres küldés";
        echo "<script type='text/javascript'>alert('$response');  window.history.back() ;</script>";
    }
    



}
else{ //ha nem diák akkor nem láthatja az oldalt
    echo "Page not found"; 
    echo "<script type='text/javascript'>
     window.history.back() ;
  </script>";
    } 

?>
