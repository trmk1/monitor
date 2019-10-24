<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<body>
 <?php
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php'); 
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */

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

//echo "язык".$jaz."четверг".$chetvert."предмет".$predmet." 5=".$otli." 4=".$hori." 3=".$trii." 2=".$dvai."код = ".$codteach."литер".$liter." колич".$kol. "путь".$_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php' ;

include ("proverka.php"); // провка нет файла 

$title='"Сохранение мониторинга_"'.$predmet.'_'.$chetvert.'_'.$jaz.'_язык обучения '.$klass." класс";


?>
<br><br><br>



<?
$skol=$otli+$hori+$trii+$dvai+$neattest;

//echo "суммк =", $skol, "колво =", $kol, "школа=", $scool;

if ($skol == $kol)
{

if ($sh < 1)
{


$today = date("d.m.y, H:i:s");
if ( isset($jaz) &&	isset($scool) &&	isset($predmet) &&	isset($klass)  &&	isset($liter)  &&	isset($codteach)  &&	isset($otli)  &&	isset($hori)  &&	isset($trii) &&	isset($dvai)  )
{
$uspev=($otli+$hori+$trii)/$kol*100;	$kachestvo=($otli+$hori)/$kol*100;
$result = mysql_query ("INSERT INTO monitor2012 (date, scool, raion, oblast, codscool, jaz, chetvert, predmet, klass, liter, teacher,  pater, chetir, tri, dva, kol, uspev, kachestvo, neattest, primech)  
VALUES ('$today', '$scool',  '$raion', '$oblast', '$user', '$jaz', '$chetvert', '$predmet', '$klass', '$liter', '$codteach', '$otli', '$hori', '$trii', '$dvai', '$kol', '$uspev', '$kachestvo', '$neattest', '$primech' )");
if ($result == 'true') 
	{
/* print<<<HERE

"<p  align='center'>  успешно сохранено    </p>"
<b><span id="time"></span></b>
<script type="text/javascript">
var i = 3;//время в сек.
function time(){
 document.getElementById("time").innerHTML = i;//визуальный счетчик
 i--;//уменьшение счетчика
 if (i < 0) location.href = "new_monitor.php?chet=$chetvert";//редирект
}
time();
setInterval(time, 1000);
</script>

HERE; */

// echo "<p  align='center'>  успешно сохранено    </p>";
	 
	 }	
	 
	 
	 else {echo "<p  align='center'>Ваша информация не добавлена Ошибка базы данных!</p>";}
}		
else 	
{echo "<p><strong>Вы ввели не всю информацию, поэтому данные в базу не могут быть сохранены. <br> Нажмите ссылку ниже и повторите ввод  </strong></p><A HREF='javascript:history.back()'> Назад </A>";}
}

else
{echo "Предмет уже введен<br>";}

echo "<a href=new_monitor.php?chet=", $chetvert, "> <p align='center'>продолжить </p> </a>";
}
else 
{echo "<p><strong>Количество оценок не соответствует количеству учеников. <br> Нажмите ссылку ниже и проверьте данные </strong></p><A HREF='javascript:history.back()'> Назад </A>";}





?>











		
</body>
</html>





