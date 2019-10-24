<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		
		
		
		
		
		
		<?php
  $title='сохрание записи БД "телефоны"';
include ("blocks/bd.php");
include ("lock.php");
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.  */
if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['tel']))			{$tel = $_POST['tel']; 							if ($tel == ''){unset($tel);}}
if (isset($_POST['mestoust']))		{$mestoust = $_POST['mestoust']; 				if ($mestoust == ''){unset($mestoust);}}
if (isset($_POST['fio']))			{$fio = $_POST['fio']; 							if ($fio == ''){unset($fio);}}
if (isset($_POST['dolg']))			{$dolg = $_POST['dolg']; 						if ($dolg == ''){unset($dolg);}}
if (isset($_POST['inter']))			{$inter = $_POST['inter']; 						if ($inter == ''){unset($inter);}}
if (isset($_POST['vidinter']))		{$vidinter = $_POST['vidinter']; 				if ($vidinter == ''){unset($vidinter);}}
?>

<!--

// $mestoust $fio $osu $dolg $ISPRAVNOS nazprog  $mesto



		Номер телефона (Например: 33548)  <input name="tel"  size="5" type="text"  value="$tel">   <br> 
		Место установки  (Например: каб. директора)   <input name="mesto"  type="text"  value="$mesto">  <br> 
		ФИО ответственного  <input name="fio"  type="text"  value="$fio">  <br> 
		Должность <input name="dolg"  type="text"  value="$dolg">  <br> 	
sn 
-->	


<title>БД "телефоны"</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
 <!--Подключаем шапку сайта-->

</div>

 </td>  <td>
  <?
		$today = date("d.m.y, H:i:s"); //п
		$TIP='NEW'; 
		
		// /// idn 	tel 	ZAVEDENIE 	TIP 	ISPRAVNOS 	GODisset($ISPRAVNOS)tel &&
		$ZAVEDENIE=$user;    


		if 	( 		isset($tel) && 	isset($mestoust) && 	isset($inter) && isset($fio)   )
			
		{	$result = mysql_query ("INSERT INTO telefon (idn, 	TIP, 	ZAVEDENIE, raion, oblast,	tel,  dolg, mestoust, fio, inter, vidinter, DATAOBNOV  ) 
							               VALUES ('$idn', '$TIP', '$ZAVEDENIE', '$raion', '$oblast',  '$tel', '$dolg',  '$mestoust',  '$fio', '$inter', '$vidinter', '$today'  )");
		if ($result == 'true') {echo "<p>  успешно добавлено!</p>"; echo "<a href='tel.php'>Продолжить  </a>";}	
		else {echo "<p>Ваша информация не добавлена Ошибка базы данных!</p>"; echo "<a href='tel.php'>Продолжить  </a>";}	}
	 else 	{echo "<p><strong>Вы ввели не всю информацию, поэтому данные в базу не могут быть сохранены. <a href='javascript:history.back(1)'>НАЗАД</a>  </strong></p>";}	

			
?>

 
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
