<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->








<script language="JavaScript">
      function doPopup(popupPath) 
      {
	         window.showModalDialog(popupPath,'name', "dialogWidth:450px; dialogHeight:400px; dialogScrollbars=no; dialogtop=50; dialogleft=600;" ); 
       }
      </script> 





<table width="690" border="0" align="center" cellpadding="0" >

  <tr>
  
 <td valign='top'>   
	<table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>������ ��������	</strong></p>
		<p align="center"><strong>������ �� ������ ����������	</strong></p>		
		<p align="center"><strong>(��������� ����������� ����)	</strong></p>
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
						$result = mysql_query ("UPDATE  AA SET  TIP='DEL'  WHERE idn='$teachdel' AND raion='$raion' and oblast='$oblast'");
 
						if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
						else {echo "<p>������ !</p>";}
					}

// ����� ������
	
			echo "<table border=1 align=center>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ���� </strong>"."</td><td>"."<strong>���</strong>"."</td><td>"."<strong> % ������  <br>2013-14 </strong>"."</td><td>"."<strong> % �����  <br>2013-14 </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."<strong> ������ </strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM AA WHERE ZAVEDENIE='$user' AND TIP='NEW' AND raion='$raion' and oblast='$oblast' ORDER BY `FAM` ASC  "); //
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$F=$myrow["FAM"]." ".$myrow["IMA"]." ".$myrow["OTCH"];
			$m=$myrow[idn];

			$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011 WHERE  teacher=$m  AND raion='$raion' and oblast='$oblast'"); //   TIP='NEW'  AND AND chetvert='1_��������' 
			$kachestvo=mysql_result($resu,0);
			$kach=round($kachestvo, 2);

	
			$resu1 = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2011 WHERE  teacher=$m  AND raion='$raion' and oblast='$oblast'"); //  TIP='NEW'  AND AND chetvert='1_��������' 
			$uspev=mysql_result($resu1,0);
			$uspev=round($uspev, 2);		
			
			
			
			
			// echo "<tr><td>".$K."</td><td>". $F ."</td><td>". "<img alt='' src='/foto/upload/$m.jpg'>"."<p><a href='foto/index.php?teachedit=$m' target='_blank' onclick='window.open(this.href); return false' >���� </a></p>"."</td><td>". "<p><a href='kadr_obr1.php?teachedit=$m'>������������� </a></p>"."</td><td>". "<p><a href='kadr_obr.php?teachdel=$m'>������� </a></p>"."</td></tr>";
			echo "<tr><td>".$K."</td><td>"."<p align='center'><strong><img alt='��� ����' src='foto/upload/$m.jpg' width='60' height='80'></strong></p>"."<p><a href=javascript:doPopup('foto/index.php?teachedit=$m');> ���.���.���� </a></p>"."</td><td>". $F ."</td><td>".$kach ."%</td><td>".$uspev ."%</td><td>". "<a href='kadr_obr1.php?teachedit=$m' > <img Src=anket.jpg> </a>"."</td><td>". "<a href = 'graf.php?teachedit=$m' > <img Src=diagram.jpg> </a>"."</td></tr>";
			
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
						$result = mysql_query ("UPDATE  AA SET  TIP='DEL'  WHERE idn='$teachdel' AND raion='$raion' and oblast='$oblast'");
 
						if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
						else {echo "<p>������ !</p>";}
					}

// ����� ������
	
			echo "<table border=1 align=center>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong> ���� </strong>"."</td><td>"."<strong>���</strong>"."</td><td>"."<strong> % ������  <br>2013-14 </strong>"."</td><td>"."<strong> % �����  <br>2013-14 </strong>"."</td><td>"."<strong> ������ </strong>"."</td><td>"."<strong> ������ </strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM AA WHERE  TIP='NEW' AND raion='$raion' and oblast='$oblast' ORDER BY `FAM` ASC  "); //
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$F=$myrow["FAM"]." ".$myrow["IMA"]." ".$myrow["OTCH"];
			$m=$myrow[idn];

			$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011 WHERE  teacher=$m  AND raion='$raion' and oblast='$oblast' "); // TIP='NEW'  AND AND chetvert='1_��������' 
			$kachestvo=mysql_result($resu,0);
			$kach=round($kachestvo, 2);

	
			$resu1 = mysql_query("SELECT AVG(uspev) AS uspev FROM  monitor2011 WHERE  teacher=$m  AND raion='$raion' and oblast='$oblast' "); // TIP='NEW'  AND AND chetvert='1_��������' 
			$uspev=mysql_result($resu1,0);
			$uspev=round($uspev, 2);		
			
			
			
			
			// echo "<tr><td>".$K."</td><td>". $F ."</td><td>". "<img alt='' src='/foto/upload/$m.jpg'>"."<p><a href='foto/index.php?teachedit=$m' target='_blank' onclick='window.open(this.href); return false' >���� </a></p>"."</td><td>". "<p><a href='kadr_obr1.php?teachedit=$m'>������������� </a></p>"."</td><td>". "<p><a href='kadr_obr.php?teachdel=$m'>������� </a></p>"."</td></tr>";
			echo "<tr><td>".$K."</td><td>"."<p align='center'><strong><img alt='��� ����' src='foto/upload/$m.jpg' width='60' height='80'></strong></p>"."<p><a href=javascript:doPopup('foto/index.php?teachedit=$m');> ���.���.���� </a></p>"."</td><td>". $F ."</td><td>".$kach ."%</td><td>".$uspev ."%</td><td>". "<a href='kadr_obr1.php?teachedit=$m' > <img Src=anket.jpg> </a>"."</td><td>". "<a href = 'graf.php?teachedit=$m' > <img Src=diagram.jpg> </a>"."</td></tr>";
			
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
