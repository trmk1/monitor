<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
 <table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>�� "��������"</strong></p>

		

		
<div align="center">
  <?

// �������� ������
					if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
					echo $compdel;
					if  (isset($compdel)) 
					{
						// $result = mysql_query ("DELETE FROM compi WHERE idn='$compdel'");
						$result = mysql_query ("UPDATE  telefon  SET  TIP='DEL'  WHERE idn='$compdel'");
 
						if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
						else {echo "<p>������ !</p>";}
					}

// ����� ������
	
			echo "<table border=1>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ����� ���. </strong>"."</td><td>"."<strong> ����� ��������� </strong>"."</td><td>"."<strong> ��� </strong>"."</td><td>"."<strong>�������</strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM telefon  WHERE  ZAVEDENIE='$user' AND TIP='NEW' "); // WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
     
			
			$m=$myrow[idn];
			echo "<tr><td>".$K."</td><td>". $myrow["tel"]."</td><td>".$myrow["mestoust"]."</td><td>".$myrow["fio"]."</td><td>"."<p><a href='tel.php?compdel=$m'><img alt='�������' src='delete-icon.gif' ></a></p>"."</td></tr>";
			
			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));

			echo "</table><a href='tel_add.php'>�������� ������� </a>";



?>
  

</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
