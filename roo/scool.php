<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->




 
 
 
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>����� ������ � ������</strong></p>

		

		
<div align="center">
  <?

// �������� ������
					if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
					echo $compdel;
					if  (isset($compdel)) 
					{
						// $result = mysql_query ("DELETE FROM compi WHERE idn='$compdel'");
						$result = mysql_query ("UPDATE  userlist  SET  TIPZAP='DEL'   WHERE id='$compdel' AND raion=$raion ");
 
						if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
						else {echo "<p>������ !</p>";}
					}

// ����� ������
	
	echo "<H1><center>������� �����</center></H1>";
			echo "<table align='center' border=1>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
// ����� �������
			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ����� </strong>"."</td><td>"."<strong> �����  </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."</td><td>"."<strong>�������</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='�������' AND TIPZAP='NEW' AND raion=$raion AND prawa='1' 	 ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='�������' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='�������' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));
	echo "</table><br><br>";
		
// ����� ��������	

	echo "<H1><center>�������� �����</center></H1>";

		echo "<table align='center' border=1>";

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ����� </strong>"."</td><td>"."<strong> �����  </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."</td><td>"."<strong>�������</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='��������' AND TIPZAP='NEW' AND raion=$raion ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='�������' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='�������' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));
	echo "</table><br><br>";
				
// ����� ���������	

	echo "<H1><center>��������� �����</center></H1>";
		echo "<table align='center' border=1>";
			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ����� </strong>"."</td><td>"."<strong> �����  </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."</td><td>"."<strong>�������</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='���������' AND TIPZAP='NEW' AND raion=$raion ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='�������' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='�������' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));

						
			
			
			
			
			
			echo "</table><H1><center><a href='scool_add.php'>�������� ����� </a></center></H1>";



?>
  

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
		<!--���� �������� ����� --> 
		
		</td> 


</table>
<br><br>
 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
