<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->












<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">

  <tr>
  
 <td valign='top'>   
	<table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>������ ��������	</strong></p>
		<p align="center"><strong>������ �� ������ ����������	</strong></p>		
		<p align="center"><strong>(����� � ������ ���  ����� �� ������������ ���������)	</strong></p>
		
<form action="kadr_obr1.php" method="post" enctype="multipart/form-data" name="form1">
		
<div align="center">
  <?
if ($prawa == 1)	

		{
			// �������� ������
			if (isset($_GET['teachdel']))  {$teachdel = $_GET['teachdel'];   		if ($teachdel == '') 	{unset($teachdel);}}
			echo $teachdel;
			if  (isset($teachdel)) 
			{
			// $result = mysql_query ("DELETE FROM AA WHERE idn='$teachdel'");
			$result = mysql_query ("UPDATE  AA SET  TIP='DEL'  WHERE idn='$teachdel'");

			if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
			else {echo "<p>������ !</p>";}
			}

			// ����� ������

			echo "<table border=1 align='center'>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ��� </strong>"."</td><td>"."<strong> ����� </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."<strong> ������� </strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM AA WHERE ZAVEDENIE='$user' AND TIP='NEW' ORDER BY `FAM` ASC  "); //
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$F=$myrow["FAM"]." ".$myrow["IMA"]." ".$myrow["OTCH"];
			$m=$myrow[idn];


			echo "<tr><td>".$K."</td><td>". $F ."</td><td>".$m."</td><td>".$myrow[pass]."</td><td>".  "<p><a href='kadr_obr.php?teachdel=$m'><img alt='�������' src='delete-icon.gif' > </a></p>"."</td></tr>";

			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));

			echo "</table><br><br><center><a href='kadr_new_teach.php'>�������� �������� </a></center><br><br>";
		}

  
  else 
  
  

		{
			// �������� ������
			if (isset($_GET['teachdel']))  {$teachdel = $_GET['teachdel'];   		if ($teachdel == '') 	{unset($teachdel);}}
			echo $teachdel;
			if  (isset($teachdel)) 
			{
			// $result = mysql_query ("DELETE FROM AA WHERE idn='$teachdel'");
			$result = mysql_query ("UPDATE  AA SET  TIP='DEL'  WHERE idn='$teachdel'");

			if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
			else {echo "<p>������ !</p>";}
			}

			// ����� ������

			echo "<table border=1 align='center'>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ��� </strong>"."</td><td>"."<strong> ����� </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."<strong> ������� </strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM AA WHERE  TIP='NEW' ORDER BY `FAM` ASC  "); //ZAVEDENIE='$user' AND
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$F=$myrow["FAM"]." ".$myrow["IMA"]." ".$myrow["OTCH"];
			$m=$myrow[idn];


			echo "<tr><td>".$K."</td><td>". $F ."</td><td>".$m."</td><td>".$myrow[pass]."</td><td>".  "<p><a href='kadr_obr.php?teachdel=$m'><img alt='�������' src='delete-icon.gif' > </a></p>"."</td></tr>";

			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));

			echo "</table><br><br><center><a href='kadr_new_teach.php'>�������� �������� </a></center><br><br>";
		}


			
?>
  

</div>
    
	</td> 
</table>












		
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
