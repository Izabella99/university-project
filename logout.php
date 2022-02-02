<?php 
session_start();
  if(isset($_SESSION["username"])){ //ha be van jelentkezve
     
   unset($_SESSION["username"]);//dobjon ki :))
   header('Location: index.php');
exit;
  }
  
?>