<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		

		
		
		
		
		
		
		
<table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
<title>��������� �����</title>


  <tr>
    <td><table width="690" border="0"   align="center"  cellspacing="0" cellpadding="0">
      <tr>

        <td valign="top">
		

	 
<?

echo "<br><br><p align='center'>��������� �����</p><br>";
echo "<p align='center'>(�������� ����� �����������)</p><br><br>";
echo "<table border=1 align=center>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'���'."</td><td>".'I ���'."</td><td>".'II ���'."</td><td>".'III ���'."</td><td>".'IV ���'."</td><td>".'���'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='���������' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// ����� ���� ��������� �� ���� ����� 
		if ($vd==�������)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='��';  }  
		if ($vd==��������)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='��';}
		if ($vd==���������) {$pro="10"; $color_tab ='#00FF7F';  $vd1='��';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($cnt); // �������	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($reszap); // �������
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='�������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' ���������������' ")); // �������
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='��������' ")); // �������
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		


<?

echo "<br><br><p align='center'>�������� �����</p><br>";

echo "<table border=1 align=center>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'���'."</td><td>".'I ���'."</td><td>".'II ���'."</td><td>".'III ���'."</td><td>".'IV ���'."</td><td>".'���'."</td><td>".'���'."</td><td>".'����'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='��������' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// ����� ���� ��������� �� ���� ����� 
		if ($vd==�������)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='��';  }  
		if ($vd==��������)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='��';}
		if ($vd==���������) {$pro="10"; $color_tab ='#00FF7F';  $vd1='��';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($cnt); // �������	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($reszap); // �������
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='�������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' ���������������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		//if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
		$s=$s+1;
		
		}
		while ($myrow = mysql_fetch_array($result));
		
		echo "</table>";


	?>		
		


<?

echo "<br><br><p align='center'>������� �����</p><br>";

echo "<table border=1 align=center>";
echo "<tr><td>".'�'."</td><td>".'�������� �����'."</td><td>".'���'."</td><td>".'I ���'."</td><td>".'II ���'."</td><td>".'III ���'."</td><td>".'IV ���'."</td><td>".'���'."</td><td>".'���'."</td><td>".'���'."</td><td>".'����'."</td></tr>";
$s=1;
$result = mysql_query("SELECT * FROM userlist WHERE TIPZAP='NEW' and raion=$raion AND prawa='1' AND vid='�������' ORDER BY `scool` ASC"); //
			
		$myrow = mysql_fetch_array($result);
		
		
		do 
		{
		
		$vd=$myrow["vid"];
		// ����� ���� ��������� �� ���� ����� 
		if ($vd==�������)	{$pro="24"; $color_tab ='#FFFAF0'; $vd1='��';  }  
		if ($vd==��������)	 {$pro="20" ; $color_tab ='#E6E6FA';  $vd1='��';}
		if ($vd==���������) {$pro="10"; $color_tab ='#00FF7F';  $vd1='��';}
		
		echo "<tr 	bgcolor=$color_tab ><td>";
		
		$codscool=$myrow["login"];
				
		echo $s, "</td><td>";
		$k=$myrow["scool"];
		echo $k, "</td><td>";
		
		echo $vd1, "</td>";
		
		
		{
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='1_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 

		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='2_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='3_��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		//$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  scool='$k' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($cnt); // �������	
		//echo $cnt[0], "</td><td>" ; /*round($cnt[0]/8/$pro*100), */   
		
		$reszap = mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='4_��������' "); 
		$cnt = mysql_fetch_row($reszap); // �������
		
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='�������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
				
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert=' ���������������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='���' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		
		
		$cnt = mysql_fetch_row( mysql_query("SELECT COUNT(*) FROM monitor2012 WHERE  codscool='$codscool' AND chetvert='��������' ")); // �������
		if ($cnt[0] == 0)  {echo "<td><font color=#FF0000>"."<center><b>".$cnt[0]."</b></center></font></td>";  } else {echo "<td><font color=#00000>"."<center>".$cnt[0]."</center></font></td>";} 
		}
		
		echo "</tr>";
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
