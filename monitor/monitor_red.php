<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->






<?
// �������� ������
if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
echo $compdel;
if  (isset($compdel)) 
{
$result = mysql_query ("DELETE FROM monitor2012 WHERE id='$compdel'");
//$result = mysql_query ("UPDATE  kol_uch  SET  TIP='DEL'  WHERE idn='$compdel'");

if ($result == 'true') {echo "<p>������ ������� �������!</p>";}
else {echo "<p>������ !</p>";}
}



if (isset($_POST['jaz']))  	{$jaz = $_POST['jaz'];   			if ($jaz == '') {unset($jaz);}}


?>
		
		
		

<form action="monitor_red.php" method="post" enctype="multipart/form-data" name="form1">		
		
<table border="1" align="center" cellpadding="0" cellspacing="0">
<?	
echo "���� �������� <select name='jaz1' id='jaz1'>
                <option value='$jaz1'>$jaz1</option>
                <option value='���'>���</option>
				<option value='���'>���</option>
				</select>
				
����� <select name='klass1' id='klass1'>
                <option value='$klass1'>$klass1</option>
                <option value='���'>���</option>
				<option value='���'>���</option>
				                <option value='���'>���</option>
				<option value='���'>���</option>
				
				
				
				
				</select>				
				
				
				
				
				<input type='submit' name='submit' id='submit' value='<�����>'>
				";






$result = mysql_query("SELECT * FROM value  ");
$myrow = mysql_fetch_array ($result);
$chet=$myrow[chet];

$result = mysql_query("SELECT * FROM monitor2012 WHERE scool='$scool'   "); // AND chetvert='$chet'
$i=1;
// ��� ��� ������ ���������� ��������� �����, ��������� ����
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$cht=$myrow[chetvert];
$jz=$myrow[jaz];
$kll=$myrow[klass];		
$idn=$myrow[id];	
$liter=$myrow[liter];
$ct=$prd." (".substr($jz, 0, 15)." ��. ����. ".substr($cht, 0, 15)." ".$kll." '".$liter."' �����".")";
echo "<tr><td>".$i."."."</td><td>".$ct ."</td><td>"."<a href='stat_vid.php?id=".$idn."'>������������� </a> "."</td><td>"."<a href='monitor_red.php?compdel=".$idn."'>������� "."</a> " . "</tr></td>";
$i=$i+1;
}
?>
		
		
</table>		
		
		
		
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
