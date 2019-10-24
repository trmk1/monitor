<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		
		
		
		






<?php
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.  */
if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['adres']))			{$adres = $_POST['adres']; 							if ($adres == ''){unset($adres);}}
if (isset($_POST['mestoust']))		{$mestoust = $_POST['mestoust']; 				if ($mestoust == ''){unset($mestoust);}}
if (isset($_POST['sost']))			{$sost = $_POST['sost']; 							if ($sost == ''){unset($sost);}}
if (isset($_POST['adresadmin']))			{$adresadmin = $_POST['adresadmin']; 						if ($adresadmin == ''){unset($adresadmin);}}
?>


<title>БД "Сайты школ </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
<!--Подключаем шапку сайта-->

</div>
<table width="690" border="2" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF" class="main_border">
<tr>
<td>


</td>  <td>
<?
$today = date("d.m.y, H:i:s"); //п
$TIP='NEW'; 

// /// idn 	tel 	ZAVEDENIE 	TIP 	ISPRAVNOS 	GODisset($ISPRAVNOS)tel &&
$ZAVEDENIE=$user;    


if 	( 		isset($adres) &&  isset($sost) &&isset($adresadmin) )

{	$result = mysql_query ("INSERT INTO sait (idn, 	TIP, 	ZAVEDENIE, raion, oblast,	adres,  sost, adresadmin, DATAOBNOV ) 
VALUES ('$idn', '$TIP', '$ZAVEDENIE',  '$raion', '$oblast',  '$adres', '$sost',  '$adresadmin', '$today' )");
if ($result == 'true') {echo "<p>  успешно добавлено!</p>"; echo "<a href='sait.php'>Продолжить  </a>";}	
else {echo "<p>Ваша информация не добавлена Ошибка базы данных!</p>"; echo "<a href='sait.php'>Продолжить  </a>";}	}
else 	{echo "<p><strong>Вы ввели не всю информацию, поэтому данные в базу не могут быть сохранены. <a href='javascript:history.back(1)'>НАЗАД</a>  </strong></p>";}	

?>


</td>
</tr>
</table>










		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
