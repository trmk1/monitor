<?php
 // require_once("lock.php");

 if(isset($_SESSION['user_id']))
 {
  if($_SESSION['user_id'] == '')
  {
   //echo "user_id пуст";
  }
  else
  {
   //echo "user_id не пуст";
   unset($_SESSION['user_id']);
   
   if(!isset($_SESSION['user_id']))
   {
    //echo "<br/>user_id не существует";
    
    if(isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW']))
    {
     //echo $_SERVER['PHP_AUTH_USER']."<br/>";
     //echo $_SERVER['PHP_AUTH_PW'];
     unset($_SERVER['PHP_AUTH_USER']);
     unset($_SERVER['PHP_AUTH_PW']);
    }
    if(isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW']))
    {
     //echo "Они ещё существуют";
    }
    else
    {
     //echo "Они удалены";
     //$_SERVER["PHP_AUTH_USER"] == '';
     //$_SERVER["PHP_AUTH_PW"] == '';
     session_destroy();
     unset ($_SESSION['user_id']);
     if(is_null($_SESSION['user_id']))
     {
      header ("location: index.php");
      exit();
     }     
    }
    
   }
  }
  
 }
 else
 {
  //echo "user_id не существует";
 }

?>