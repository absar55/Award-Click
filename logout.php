<?php
   session_start();



   if ($_SESSION["role"]==2)
   {
     
      if(session_destroy()) {
         header("Location: merchant_login.php");
      }
   }
   
   else if ($_SESSION["role"]==1)
   {


     if(session_destroy()) {
      header("Location: login.php");
      }

   
     
 
   }

      else if ($_SESSION["role"]==3)
   {


     if(session_destroy()) {
      header("Location: index.html");
      }

   
     
 
   }

?>

