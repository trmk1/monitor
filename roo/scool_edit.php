<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



 
 
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Подключаем шапку сайта-->

<? include ("lock.php");
include ("blocks/bd.php");
// include("blocks/header.php");   ?>




<?
if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
//echo "nomer- ".$compdel;
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

$res=mysql_query("SELECT * FROM userlist WHERE  id=$compdel  ");
$myrow3 = mysql_fetch_array($res);
$password=$myrow3[password]; $tip1=$myrow3[tip]; $vid1=$myrow3[vid]; $scool1=$myrow3[scool];
//echo "кпрер".$password.$tip1. $vid1.$scool1;
?> 









<body>

<form action="scool_edit_obr.php" method="post" enctype="multipart/form-data" name="form1">

<label>Редактирование школы</label>

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
		
		Пароль   <input name="pass"  type="text"  value="$password">    
		   <input name="nom"  type="text" hidden value="$compdel">   <br> 
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
<br><br>
 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
