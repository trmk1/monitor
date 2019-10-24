<?
$result33 = mysql_query("SELECT * FROM predmetsp  "); // AND chetvert='$chet'  WHERE cod_pred<='$codpred'
$s=0;
// Так как запрос возвращает несколько строк, применяем цикл
while($myrow33 = mysql_fetch_array ($result33))
			{  	
			$prd=$myrow33[predmet];
			$predmet=$prd;
			
			if ($jazik==русский)  $jazik1='русским';
			if ($jazik==казахский)  $jazik1='казахским';

			// else $jazik1='казахским';
			echo "<br><table border='1' align='center' >";
			$result = mysql_query("SELECT * FROM promejutki ");
			
			    while ($myrow = mysql_fetch_array($result))	 
					{
							
					$predmet=$predmet;
								$result = mysql_query("SELECT * FROM promejutki ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
								 while ($myrow = mysql_fetch_array($result))	
								{
					
								include ("mon_excel_in1.php");
								
								}
										
					 $s=$s+1;
					 echo '</tr> ';
					 	 
					 
					// $today = date("d.m.y, H:i:s");
					 // echo '<tr> ******* Отчет сформирован   '.$today.'********* </td> ';					 
					 }
					 
					echo "<p align='center'>Сводная таблица результатов 
					текущего  успеваемости, промежуточного контроля  <br> и итоговой аттестации 
					учащихся по школам ".$raion1 ;
					echo '<br>по предмету - '.$predmet.' (в школе с '.$jazik1.' языком  обучения)</p>';
					echo  substr($predmet, 0, 15).'('.substr($jazik, 0, 3).')';
	
					 
			}
?>