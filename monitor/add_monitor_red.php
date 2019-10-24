<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->




		
		
		

<?php
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
if (isset($_POST['id']))  		{$id = $_POST['id'];   				if ($id == '') {unset($id);}}
if (isset($_POST['jaz']))  		{$jaz = $_POST['jaz'];   				if ($jaz == '') {unset($jaz);}}
if (isset($_POST['klass']))  		{$klass = $_POST['klass'];   				if ($klass == '') {unset($klass);}}
if (isset($_POST['chetvert']))  {$chetvert = $_POST['chetvert'];   		if ($chetvert == '') {unset($chetvert);}}
if (isset($_POST['predmet']))  	{$predmet = $_POST['predmet'];   		if ($predmet == '') 	{unset($predmet);}}
if (isset($_POST['otli']))  	{$otli = $_POST['otli'];   				if ($otli == '') 	{unset($otli);}}
if (isset($_POST['hori']))  	{$hori = $_POST['hori'];   				if ($hori == '') 	{unset($hori);}}
if (isset($_POST['trii']))  	{$trii = $_POST['trii'];   				if ($trii == '') 	{unset($trii);}}
if (isset($_POST['dvai']))  	{$dvai = $_POST['dvai'];   				if ($dvai == '') 	{unset($dvai);}}
if (isset($_POST['codteach']))  {$codteach = $_POST['codteach'];   		if ($codteach == '') 	{unset($codteach);}}
if (isset($_POST['kol']))  		{$kol = $_POST['kol'];   				if ($kol == '') {unset($kol);}}
if (isset($_POST['liter']))  {$liter = $_POST['liter'];   		if ($liter == '') 	{unset($liter);}}
if (isset($_POST['neattest']))  		{$neattest = $_POST['neattest'];   				if ($neattest == '') {unset($neattest);}}
if (isset($_POST['primech']))  		{$primech = $_POST['primech'];   				if ($primech == '') {unset($primech);}}


//echo $jaz.$chetvert.$predmet.$otli.$hori.$trii.$dvai.$codteach.$liter." ".$kol;

?>

<?
$skol=$otli+$hori+$trii+$dvai+$neattest;
$uspev=($otli+$hori+$trii)/$kol*100;	
$kachestvo=($otli+$hori)/$kol*100;
?>



<div align='center'>
<?
$today = date("d.m.y, H:i:s"); //
echo("Текущее время: $today ");	
echo "<br>номер записи -", $id, "<br>код учителя-", $codteach, "<br>'5' - ", $otli, "<br>'4' - ", $hori, "<br>'3' - ", $trii, "<br> '2' - ", $dvai, "<br>количество  учашихся - ", $kol, " чел.<br>успеваимость - ", $uspev, " %<br>качество - ", $kachestvo, " %<br>неаттестовано - ", $neattest, "<br>примечание", $primech;

if ( $skol == $kol )
{
// 		$result = mysql_query ("UPDATE  administr SET ZAVEDENIE='$ZAVEDENIE', scool='$scool', fdir='$fdir', idir='$idir', odir='$odir', drdir='$drdir', mrdir='$mrdir', grdir='$grdir', staj='$staj', DATAOBNOV='$today' WHERE ZAVEDENIE='$ZAVEDENIE' "); //("INSERT administr SET  fdir='$fdir'  ")
$relt = mysql_query ("UPDATE monitor2012 SET date='$today', teacher='$codteach', pater='$otli', chetir='$hori', tri='$trii', dva='$dvai', kol='$kol', uspev='$uspev', kachestvo='$kachestvo', neattest='$neattest', primech='$primech'  WHERE id='$id' " ) ;
if ($relt == 'true') {echo "<p> данные  успешно изменены!</p>";}	else {echo "<p>Ваша информация не добавлена Ошибка базы данных!</p>";}

echo "<a href=monitor_red.php", "> <p align='center'>продолжить </p> </a>";
}
else

{echo "<p><strong>Количество оценок не соответствует количеству учеников. <br> Нажмите ссылку ниже и повторите ввод  </strong></p><A HREF='javascript:history.back()'> Назад </A>";}

?>
</div>






		
		
		
		
		
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
