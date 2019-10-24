<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		








<title> БД "Электронные адреса школ" </title>





<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
?> 



<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="mail_add_obr.php" method="post" enctype="multipart/form-data" name="form1">


<label> БД "Электронные адреса школ"</label>

<div id="a">
<fieldset class="fieldset1">
<legend>Введите данные</legend>


<?

print<<<HERE

Электронный адрес школы  (Например: user@mail.kz)  <br>  
<input name="mail"   size="100" type="text" >   <br> 





HERE;


?>	





</fieldset>

<input type="submit" name="submit" id="submit" value="Передать и сохранить  данные.">
</div>		  

</body>
</html>



		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
