<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->




		
		
		




<td valign="top" bgcolor="#CCCCFF"  >
<table width="400" border="2"> 
<p align='center'>
<form method="get" action="/predmet/">
<select name="predmet" onChange="window.location='?predmet='+this.value;" >

<?
 if (isset($_GET['predmet']))  {$predmet= $_GET['predmet'];   		if ($predmet == '') 	{unset($predmet);}}
  if (isset($_GET['jazik']))  {$jazik= $_GET['jazik'];   		if ($jazik == '') 	{unset($jazik);}}

echo "<option value=".$predmet." selected>".$predmet."</option>";
$respred = mysql_query("SELECT * FROM predmet ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
while ($mypred = mysql_fetch_array($respred))	
{
$predmet1=$mypred[predmet];
// echo $predmet1.$user;
echo "<option value=".$predmet1.">".$predmet1."</option>";
}
?>
</select>
 
	 
	 

<?
if ( $predmet == '')
echo "<br>������� �������";
else
{
$jazik='�������';
echo "<p align='center'>������� ������� ����������� �������� �������� ������������, �������������� � �������� ���������� �������� � - " ;
echo  $scool;
echo ' �� �������� - '.$predmet.'  '.$jazik.' - ���� ��������</p>';
echo "<br><table border='1' align='center' >";
$result = mysql_query("SELECT * FROM promejutki ");
while ($myrow = mysql_fetch_array($result))	

$predmet=$predmet;
$result = mysql_query("SELECT * FROM promejutki ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
while ($myrow = mysql_fetch_array($result))	
{include ("itog_in_scool.php"); }
echo "</table>";

$jazik='���������';
echo "<p align='center'>������� ������� ����������� �������� �������� ������������, �������������� � �������� ���������� �������� � ������������ ������ �������� ����������� �� ��������  ";
echo ' '.$predmet.'   '.$jazik.' - ���� ��������</p>';
echo "<table border='1' align='center' >";
$predmet=$predmet;
$result = mysql_query("SELECT * FROM promejutki ");	// WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC				
while ($myrow = mysql_fetch_array($result))	
{ include ("itog_in_scool.php"); }
echo "</table>";  
}
?>		



		
		
		
		
		
		
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
