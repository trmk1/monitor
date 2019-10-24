<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->





		
		

<br><br>

<td valign="top"><table width="800" border="0">
<tr>
<td colspan="3"><div align="center">
<form action="add_monitor_red.php" method="post" enctype="multipart/form-data" name="form1">
<? 
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php'); 
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');

echo $scool;

if (isset($_GET['id']))  {$id= $_GET['id'];   		if ($id == '') 	{unset($id);}}
echo "<br>изменение записи № ".$id;


$result = mysql_query("SELECT * FROM monitor2012 WHERE  id='$id' "); // dva>'0'   
$myrow = mysql_fetch_array($result);
// teacher 	pater 	chetir 	tri 	dva 	kol 	uspeuspev 	kachestvo 	neattest 	primech
$otl=$myrow[pater]; $hor=$myrow[chetir]; $tri=$myrow[tri]; $dva=$myrow[dva]; 
$teacher=$myrow[teacher]; $kol=$myrow[kol];   $neattest=$myrow[neattest];   $primech=$myrow[primech];  

$klass=$myrow[klass];   $predmet=$myrow[predmet];  $chetvert=$myrow[chetvert];
?>

<?
PRINT<<<HERE
 <br>
Редактирование мониторинга качества знаний <br>
$klass класс,   по предмету - $predmet, за $chetvert <br><br>

	<table width="400" border="2"> 
<tr>
<td><div align="center">тип оценки</div></td>
<td><div align="center">5</div></td>
<td><div align="center">4</div></td>
<td><div align="center">3</div></td>
<td><div align="center">2</div></td>
<td><div align="center">кол-во учащихся</div></td>
</tr>	

	
<tr>
<td><div align="center">кол-во оценок</div></td>
<td><div align="center"><input name="otli"  type="text" value="$otl" onkeypress="return input_keypress(event)" SIZE="2"  > </div></td>

<td><div align="center"><input name="hori"   type="text" value="$hor" onkeypress="return input_keypress(event)" SIZE="2" ></div></td>

<td><div align="center"><input name="trii"   type="text" value="$tri" onkeypress="return input_keypress(event)"   SIZE="2" ></div></td>

<td><div align="center"><input name="dvai"  type="text" value="$dva" onkeypress="return input_keypress(event)" SIZE="2" ></div></td>
<td><div align="center">$kol</div></td>
<input name="id" hidden type="text" value="$id"  > 
<input name="kol" hidden type="text" value="$kol"  > 
</table>
<p align='center' >	 
<br><br>
количество неатестованных <input name="neattest"  type="text"  value='$neattest' onkeypress="return input_keypress(event)" SIZE="2" > 
<br>
Примечание (причина почему не аттестован)<input name="primech" value='$primech' type="text" > 
<br>
</p>

<script type=text/javascript>
     function input_keypress(e) {
        var code = e.charCode ? e.charCode : e.keyCode;
            
        if (! e.shiftKey && ! e.ctrlKey && ! e.altKey && ! e.metaKey && code != 46 && (code > 31 && (code < 48 || code > 57))) return false;
        return true;
     }
</script>
Укажите учителя преподающего предмет	 
HERE;

//

							// Берем из базы данных код учителя
							$resteach = mysql_query("SELECT * FROM AA WHERE idn='$teacher' ");	//				
							$myrowtech = mysql_fetch_array($resteach);
							$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	$IM=substr( $IM, 0, 1 ); $OTC=substr( $OTC, 0, 1 ); 
							$teacher1=$FAM." ".$IM." ".$OTC." ";
							
							
							
							
							 echo $teacher1;

							
							// выводим в списке  ФИО и код
							$result = mysql_query("SELECT * FROM AA WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC ");	//				

							echo "<select name='codteach' id='codteach' >";	
							echo "<option value=", $teacher,">", $teacher1, "</option>";
							do 		{	
							$IM=$myrow["IMA"]; $OTC=$myrow["OTCH"];
							$IM=substr( $IM, 0, 1 ); $OTC=substr( $OTC, 0, 1 ); 
							$k=$myrow["FAM"]." ".$IM." ".$OTC;	$c=$myrow["idn"];	
							echo "<option value=",  $c,">", $k, "</option>";}
							while ($myrow = mysql_fetch_array($result));
							echo "</select>"; 




?>

<br><br><br><br> <input type="submit" name="submit" id="submit" value="*************** изменить данные ********************">
</td>
		
		
		
		
		
		
		
		
		
		
		
		
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
