<?php
 // require_once("lock.php");

 if(isset($_SESSION['user_id']))
 {
  if($_SESSION['user_id'] == '')
  {
   //echo "user_id ����";
  }
  else
  {
   //echo "user_id �� ����";
   unset($_SESSION['user_id']);
   
   if(!isset($_SESSION['user_id']))
   {
    //echo "<br/>user_id �� ����������";
    
    if(isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW']))
    {
     //echo $_SERVER['PHP_AUTH_USER']."<br/>";
     //echo $_SERVER['PHP_AUTH_PW'];
     unset($_SERVER['PHP_AUTH_USER']);
     unset($_SERVER['PHP_AUTH_PW']);
    }
    if(isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW']))
    {
     //echo "��� ��� ����������";
    }
    else
    {
     //echo "��� �������";
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
  //echo "user_id �� ����������";
 }

?>