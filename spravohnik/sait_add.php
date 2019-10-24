<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		
		
		<title> БД "Сайты школ" </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Подключаем шапку сайта-->


<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
?> 

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="sait_add_obr.php" method="post" enctype="multipart/form-data" name="form1">


<div id="a">
<fieldset class="fieldset1">
<legend>Введите данные</legend>

<?
print<<<HERE
Адрес сайта в сети интернет (Например: http://www.mysite.kz)  <br>  
<input name="adres"   size="90" type="text"  value="http://">   <br> 
Состояние сайта 
<select name="sost" id="sost"   >
<option value="$sost">$sost</option>
<option value="действует">действует</option>
<option value="не действует">не действует</option>
<option value="создается">создается</option>		
</select>
<br>
Адрес электронной почты администратора сайта   <br>  
<input name="adresadmin"   size="10" type="text"  value="">   <br> 
HERE;
?>	

</fieldset>

<input type="submit" name="submit" id="submit" value="Передать и сохранить  данные.">
</div>		  


		
		
	</td> 
</table>		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
