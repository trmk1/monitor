<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



 
 
 

<?

if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */

if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

?> 




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Добавление школы</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

		<form action="scool_add_obr.php" method="post" enctype="multipart/form-data" name="form1">

Добавление школы</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>Введите данные</legend>
	
			
			<?
	
print<<<HERE
		Название Школы   <input name="scool1"  size="50" type="text"  value="$scool1">   <br> 

		

		Тип школы   <select name="vid1" id="vid1"   >
		<option value="$vid1">$vid1</option>
		<option value="средняя">средняя</option>
		<option value="основная">основная</option>
		<option value="начальная">начальная</option>		
		</select>
		

		Язык обучения   <select name="tip1" id="tip1"   >
		<option value="$tip1">$tip1</option>
		<option value="казахский">казахский</option>
		<option value="русский">русский</option>
		<option value="смешанный">смешанный</option>		
		</select>
		<br>		
		
		

HERE;
				

			?>	
   




	</fieldset>
	<br>
	<center>
	<input type="submit" name="submit" id="submit" value="Передать и сохранить  данные.">
	</center>
	</div>		  

 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
		<!--Тело страницы конец --> 
		
		</td> 


</table>
<br><br>
 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
