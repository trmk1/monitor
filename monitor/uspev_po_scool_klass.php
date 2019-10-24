<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--“ело страницы начало -->






		<td valign="top"><table width="800" bgcolor="#CCCCFF" border="1">
		 
		 <caption>		 </caption>
					<tr>
					  <td colspan="3" >
					<? echo '  <center> <h1>   ”спеваимость по школам и классам  <h1></center>     ';
					


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
		$P1=85;
		$P2=100;
			

			
		{
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass=' ѕѕ' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
 		
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='1' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);

				
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='2' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);

					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='3' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='4' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='5' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='6' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='7' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='8' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='9' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='10' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='11' "); //   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // желтые €чейки

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // красные €чейки
						};

						};
	


		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'   "); //AND klass='1'   teacher=$m TIP='NEW'   AND chetvert='1_четверть' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
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
