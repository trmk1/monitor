<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->






		<td valign="top"><table width="800" bgcolor="#CCCCFF" border="1">
		 
		 <caption>		 </caption>
					<tr>
					  <td colspan="3" >
					<? echo '  <center> <h1>   ������������ �� ������ � �������  <h1></center>     ';
					


						$i=1;

						echo "<table border=1 align='center'>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'���'."</td><td>".'1'."</td><td>".'2'."</td><td>".'3'."</td><td>".'4'."</td><td>".'5'."</td><td>".'6'."</td><td>".'7'."</td><td>".'8'."</td><td>".'9'."</td><td>".'10'."</td><td>".'11'."</td><td>".'�����'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' AND raion='$raion' and oblast='$oblast'  ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{echo "<tr><td>";
		
			
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		$lod=$myrow["login"];
		echo $k, "</td>";
		
		// ���������� ��� ��������� ����� 
		$P0=0; 
		$P1=85;
		$P2=100;
			

			
		{
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='���' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
 		
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='1' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);

				
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='2' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);

					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
		
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='3' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='4' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='5' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
		
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='6' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='7' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='8' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='9' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	

		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='10' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	
		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'  AND klass='11' "); //   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
	


		$resu = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2012 WHERE codscool='$lod' AND raion='$raion' and oblast='$oblast'   "); //AND klass='1'   teacher=$m TIP='NEW'   AND chetvert='1_��������' 
		$uspev=mysql_result($resu,0);	$kach=round($uspev, 2);
					if ($kach ==  $P2 or $kach ==  $P0)   {echo "<td bgcolor='#00FF7F'><center>", $kach, "</center></td>";} 
						else 
						{	
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
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
						if ($kach < $P2 and  $kach > $P1)   {echo "<td bgcolor='#FFFF00'><center>", $kach,  "</center></td>";} // ������ ������

						else 
						{	
						if ($kach < $P1)  {echo "<td bgcolor='#FF4500'><center>", $kach, "</center></td>";} // ������� ������
						};

						};
			}		
		
		
	?>		
		



		
		
					
							
			 
				
					
</table>
 
 </div>
 
 
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
