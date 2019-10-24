<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Авторизация</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
       <form action="login.php" method="post" enctype="multipart/form-data" name="form1">
 <br>
<?
echo  "<div style='position: absolute; left: 45%; top: 50%; border: 2px solid #ccc;'>Введите (логин пароль на ссылке учителя)<br>  Логин  <input type='text' name='login'  ?>  <br>  Пароль	<input type='password' name='password' value='' maxlength='15'> <br> <br> <input name='submit' type='submit' value='Вход'>    </div>";

		
/* <table>
<tr><td>Логин:_</td><td><input type='text' name='login' value='<?php print $_POST['login'] ?>' maxlength='15'></td></tr>
<tr><td>Пароль:</td><td><input type='password' name='password' value='' maxlength='15'></td></tr>
<tr><td>&nbsp;</td><td><input name='submit' type='submit' value='Вход'></td></tr>
 */

 ?>



</table>
       
</body>
</html>
