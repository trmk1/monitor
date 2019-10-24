<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--“ело страницы начало -->






	
	
<td valign="top" bgcolor="#CCCCFF"  >
<table  border="0"> 
<p align='center'>
<form method="get" action="/predmet/">
<select name="predmet" onChange="window.location='?predmet='+this.value;" >

<?
 if (isset($_GET['predmet']))  {$predmet10= $_GET['predmet'];   		if ($predmet10 == '') 	{unset($predmet);}}
  if (isset($_GET['jazik']))  {$jazik= $_GET['jazik'];   		if ($jazik == '') 	{unset($jazik);}}

echo "<option value=".$predmet." selected>".$predmet."</option>";
$respred = mysql_query("SELECT * FROM predmet ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
while ($mypred = mysql_fetch_array($respred))	
{
$predmet1=$mypred[predmet];
// echo $predmet1.$user;
echo "<option value=".$predmet1.">".$predmet1."</option>";
}
?>
</select>
 
	 
	 

<?
if ( $predmet10 == '')
echo "<br>”кажите предмет";
else
{
$jazik='русский';
echo "<p align='center'>—водна€ таблица результатов текущего контрол€ успеваемости, промежуточного и итоговой аттестации учащихс€ в “айыншинском районе " ;

echo ' по предмету - '.$predmet10.'<br> русский и казахский €зыки обучени€</p>';
echo "<br><table border='0' align='center' >";
$result = mysql_query("SELECT * FROM promejutki ");
while ($myrow = mysql_fetch_array($result))	

$predmet=$predmet;
$result = mysql_query("SELECT * FROM promejutki ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
while ($myrow = mysql_fetch_array($result))	





?>
	
		<td valign="top"><table width="700" bgcolor="#CCCCFF" border="0">
		 
		 <caption>		 </caption>
					<tr>
					  <td colspan="3" >
					<? echo '  <center> <h1>    ачество знаний по школам и классам  <h1></center>     ';
					


						$i=1;

						echo "<table border=1 align='center'>";
echo "<tr><td>".'є'."</td><td>".'Ќазвание школы'."</td><td>".' ѕѕ'."</td><td>".'1'."</td><td>".'2'."</td><td>".'3'."</td><td>".'4'."</td><td>".'5'."</td><td>".'6'."</td><td>".'7'."</td><td>".'8'."</td><td>".'9'."</td><td>".'10'."</td><td>".'11'."</td><td>".'всего'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' AND raion='$raion' and oblast='$oblast'  ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{echo "<tr><td>";
		
			
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		$lod=$myrow["login"];
		echo $k, "</td>";
		
		// переменные дл€ раскраски €чеек 
		$P0=0; 
		$P1=70;
		$P2=100;
			

			
		{
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass=' ѕѕ' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
 		
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};

		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='1'  "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);

				
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='2' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);

					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='3' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='4' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};	
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='5' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='6' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	

		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='7' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='8' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='9' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	

		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='10' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND  predmet='$predmet10'  AND klass='11' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	


		$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012 WHERE  predmet='$predmet10' AND raion='$raion' and oblast='$oblast'  AND codscool='$lod'  "); //AND klass='1'    teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$kachestvo=mysql_result($resu,0);	$kach=round($kachestvo, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		
		}
		
		echo "</td></tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";

		function cell ($kach )
			{
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
			}		
		
		echo "</table>";
}
	?>		
		



		
		
					
							
			 
				
					
</table>
 
 </div>
 
 
 
 
 
 
		<!--“ело страницы конец --> 
	</td> 
</table>
<!--ѕодключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
