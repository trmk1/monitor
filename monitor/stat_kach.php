<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->




 

		<td valign="top"><table width="800" border="1">
		 <caption>���������� �������� �� ������		 </caption>
					<tr>
					  <td colspan="3"><div align="center">
					<? echo $scool;
					


						$i=1;

						echo "<table border=1>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'���'."</td><td>".'1'."</td><td>".'2'."</td><td>".'3'."</td><td>".'4'."</td><td>".'5'."</td><td>".'6'."</td><td>".'7'."</td><td>".'8'."</td><td>".'9'."</td><td>".'10'."</td><td>".'11'."</td><td>".'�����'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW'  ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{echo "<tr><td>";
		
			
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		$lod=$myrow["login"];
		echo $k, "</td><td><center>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='0'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  

		$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='1'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  

		$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='2'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  

		$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='3'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  

				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='4'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='5'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='6'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='7'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='8'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='9'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='10'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW' AND klass='11'   ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
				$cnt = mysql_fetch_row( mysql_query("SELECT SUM(kol) FROM kol_uch WHERE  ZAVEDENIE='$lod' AND TIP='NEW'    ")); 
		echo  $cnt[0], "</center></td><td><center>" ; /*round($cnt[0]/8/$pro*100), */  
		
		}
		
		echo "</td></tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		



		
		
					
							
			 
				
					
</table>
 
 
 
 
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
