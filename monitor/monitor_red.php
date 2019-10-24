<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->






<?
// удаление записи
if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
echo $compdel;
if  (isset($compdel)) 
{
$result = mysql_query ("DELETE FROM monitor2012 WHERE id='$compdel'");
//$result = mysql_query ("UPDATE  kol_uch  SET  TIP='DEL'  WHERE idn='$compdel'");

if ($result == 'true') {echo "<p>Запись успешно удалена!</p>";}
else {echo "<p>Ошибка !</p>";}
}



if (isset($_POST['jaz']))  	{$jaz = $_POST['jaz'];   			if ($jaz == '') {unset($jaz);}}


?>
		
		
		

<form action="monitor_red.php" method="post" enctype="multipart/form-data" name="form1">		
		
<table border="1" align="center" cellpadding="0" cellspacing="0">
<?	
echo "Язык обучения <select name='jaz1' id='jaz1'>
                <option value='$jaz1'>$jaz1</option>
                <option value='каз'>каз</option>
				<option value='рус'>рус</option>
				</select>
				
Класс <select name='klass1' id='klass1'>
                <option value='$klass1'>$klass1</option>
                <option value='каз'>каз</option>
				<option value='рус'>рус</option>
				                <option value='каз'>каз</option>
				<option value='рус'>рус</option>
				
				
				
				
				</select>				
				
				
				
				
				<input type='submit' name='submit' id='submit' value='<найти>'>
				";






$result = mysql_query("SELECT * FROM value  ");
$myrow = mysql_fetch_array ($result);
$chet=$myrow[chet];

$result = mysql_query("SELECT * FROM monitor2012 WHERE scool='$scool'   "); // AND chetvert='$chet'
$i=1;
// Так как запрос возвращает несколько строк, применяем цикл
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$cht=$myrow[chetvert];
$jz=$myrow[jaz];
$kll=$myrow[klass];		
$idn=$myrow[id];	
$liter=$myrow[liter];
$ct=$prd." (".substr($jz, 0, 15)." яз. обуч. ".substr($cht, 0, 15)." ".$kll." '".$liter."' класс".")";
echo "<tr><td>".$i."."."</td><td>".$ct ."</td><td>"."<a href='stat_vid.php?id=".$idn."'>редактировать </a> "."</td><td>"."<a href='monitor_red.php?compdel=".$idn."'>удалить "."</a> " . "</tr></td>";
$i=$i+1;
}
?>
		
		
</table>		
		
		
		
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
