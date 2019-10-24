<?php
// include ("$_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php'");



// раскомментируйте строки ниже, если файл не будет загружаться
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

//стандартный заголовок, которого обычно хватает
    header('Content-Type: application/vnd.ms-excel; charset=windows-1251');
    header("Content-Disposition: attachment;filename=".date("d-m-Y")."-report_kadr.xls");
    header("Content-Transfer-Encoding: binary ");
// !! Шапка хтмл
echo '
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="author" content="zabey" />
        <title>Demo</title>
    </head>
    <body>
';

{ // формирование тела таблицы. Выберете ваш метод самостоятельно.
   
   $title='Экспорт в эксель качественного списка';
//

include_once ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php');

		$jz = 'рус';
 $predmet = 'физика';
 $chetvert = '1_четверть';	

			 $i=1;
			// echo $chetvert;
			// echo $predmet;
			 echo "<table border=1>";
			 



			 echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong>фамилия</strong>"."</td><td>"."<strong>имя</strong>"."</td><td>"."<strong>отчество</strong>"."</td><td>"."<strong>дата рождения</strong>"."</td><td>"."<strong>национальность</strong>"."</td><td>"."<strong>образование</strong>"."</td><td>"."<strong>специальность</strong>"."</td><td>"."<strong>вторая специальность</strong>"."</td><td>"."<strong>стаж</strong>"."</td><td>"."<strong>язык обучения</strong>"."</td><td>"."<strong>категория</strong>"."</td><td>"."<strong>год прохождения курсов</strong>"."</td><td>"."<strong>планируемый год  курсов</strong>"."</td><td>"."<strong>методическая тема</strong>"."</td><td>"."<strong>возраст</strong>"."</td><td>"."<strong>нагрузка</strong>"."</td><td>"."<strong>должность</strong>"."</td><td>"."<strong>заочное обучение</strong>"."</td><td>"."<strong>награды</strong>"."</td><td>"."<strong>номер удостоверения</strong>"."</td><td>"."<strong>домашний телефон </strong>"."</td><td>"."<strong>рабочий тел</strong>"."</td><td>"."<strong>сотовый телефон</strong>"."</td><td>"."<strong>веб сайт</strong>"."</td><td>"."<strong>общественная работа</strong>"."</td><td>"."<strong>пол</strong>"."</td><td>"."<strong>увлечения</strong>"."</td><td>"."<strong>год тестирования</strong>"."</td><td>"."<strong>место тестирования</strong>"."</td><td>"."<strong>место прохождения курсов</strong>"."</td><td>"."<strong>тема курсов</strong>"."</td><td>"."<strong>преподоваемый предмет</strong>"."</td><td>"."<strong>второе образование</strong>"."</td><td>"."<strong>место обобщения ПО</strong>"."</td><td>"."<strong>проблемная тема</strong>"."</td><td>"."<strong>год обобщения ПО</strong>"."</td><td>"."<strong>специальность</strong>"."</td><td>"."<strong>специальность</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM AA  WHERE ZAVEDENIE='$user' AND TIP='NEW' AND raion='$raion' and oblast='$oblast' ORDER BY `FAM` ASC  "); //  dva>'0'  ORDER BY `kachestvo`  DESC
			// Так как запрос возвращает несколько строк, применяем цикл AND chetvert='4 четверть' AND chetvert='годовая'  	 	
			while($myrow = mysql_fetch_array($result))
			{  
// Развернутое отображение данных 	idn 	ZAVEDENIE 	TIP 	FAM 	IMA 	OTCH 	denrod 	mesrod 	godrod 	DATAROG 	NACION 	OBRAZOV 	UCHZAVOKON 	GODZAKONBUZ 	SPECIALN 	OBRAZOV2 	UCHZAVOKON2 	GODZAKONBUZ2 	SPECIALN2 	STAG 	PREDMET 																					IAZOBUCH 	KATEGOR 	GODATTES 	KURSI 														PLANKURS 						METTEMA 				POLNLET 	NAGRUZ 	DOLG 	ZAOCHOBUCH 																											NAGRADI 	NOMUDOSTOV 	NOMTELEF 	RABNOMTELEF 	CODOPER 	COTNOMTELEF 																																WEB 	OBCHRAB 										POL 	UVLECHENIE 	GODTESTIR 	MESTOTEST 	MESTOKURS 																										TEMAKURS 	PREPPREDM 	VTOROEOBR 	PPOVIBOR 	PPOTEMA 	PPOGOD 	PPOUROVEN 	IZDANMETOD 	IZDANRESPU 	RNN 	SIK 	IIN 	COD 	DATAOBNOV 	KOMP 	INTERNETDOMA 	pass
			echo    "<tr><td>", $i, "</td><td>", $myrow[FAM], "</td><td>", $myrow[IMA], "</td><td>", $myrow[OTCH], "</td><td>", $myrow[DATAROG], "</td><td>", $myrow[NACION], "</td><td>", $myrow[OBRAZOV],  "</td><td>", $myrow[SPECIALN], "</td><td>", $myrow[SPECIALN2], "</td><td>", $myrow[STAG], "</td><td>", $myrow[IAZOBUCH], "</td><td>",                                                                                                                                                       $myrow[KATEGOR], "</td><td>",                                      $myrow[KURSI], "</td><td>", $myrow[PLANKURS], "</td><td>",                          $myrow[METTEMA], "</td><td>",                            $myrow[POLNLET],                "</td><td>", $myrow[NAGRUZ],    "</td><td>", $myrow[DOLG],               "</td><td>", $myrow[ZAOCHOBUCH],  "</td><td>",              $myrow[NAGRADI],  "</td><td>", $myrow[NOMUDOSTOV],  "</td><td>", $myrow[NOMTELEF],  "</td><td>", $myrow[RABNOMTELEF],  "</td><td>",                                   $myrow[CODOPER], $myrow[COTNOMTELEF],  "</td><td>",             $myrow[WEB],  "</td><td>",            $myrow[OBCHRAB],  "</td><td>",                    $myrow[POL], "</td><td>",    $myrow[UVLECHENIE], "</td><td>",                  $myrow[GODTESTIR], "</td><td>",                      $myrow[MESTOTEST], "</td><td>",                   $myrow[MESTOKURS], "</td><td>",                          $myrow[TEMAKURS],  "</td><td>",    $myrow[PREPPREDM],  "</td><td>",                  $myrow[VTOROEOBR],  "</td><td>",                      $myrow[PPOVIBOR],  "</td><td>",                   $myrow[PPOTEMA],  "</td><td>",               $myrow[PPOGOD],  "</td></tr>"; $i=$i+1; 
			}
			echo '</table>';
			echo "Найдено ".mysql_num_rows($result)." записей";

}
echo '</table>';
echo '</body></html>';
// не забываем закрывать таблицу, боди и сам хтмл документ






?>

