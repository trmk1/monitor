<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
		
		
<table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
<title>��������� �����</title>


  <tr>
    <td><table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
      <tr>

        <td valign="top">
		

	 
<?

echo "<br><br><p align='center'>���������� ��������� � ���� ���������</p><br><br>";
echo "<table border=1>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'I ���'."</td><td>".'II ���'."</td><td>".'III ���'."</td><td>".'����'."</td><td>".'IV ���'."</td><td>".'���'."</td><td>".'���'."</td><td>".'���'."</td><td>".'����'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW'  ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{echo "<tr><td>";
		
			$vd=$myrow["vid"];
				// ����� ���� ��������� �� ���� ����� 
				if ($vd==�������)	$pro="24";   
				if ($vd==��������)	 $pro="20" ; 
				if ($vd==���������) $pro="10";
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='1_��������' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='2_��������' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='3_��������' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='���' ")); // �������
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($cnt); // �������		
		
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' ")); // �������
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($cnt); // �������
		
		echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='�������' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert=' ���������������' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  										 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='���' ")); // �������
		echo  $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */  
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='��������' ")); // �������
		echo  $cnt[0] ; /*round($cnt[0]/8/$pro*100), */  
		}
		
		echo "</td></tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		



		
		
			</td> 
</table>
		
	</table>	
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
