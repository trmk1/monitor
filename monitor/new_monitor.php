<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->





<div align='center'>
<br>
��������� �������� ������ 
<br>
��
<?
if (isset($_GET['chet']))      {$chet = $_GET['chet'];   		        if ($chet == '') 	    {unset($chet);}}
echo $chet;
?>
  2013-14 ������� ���<br>
��� ���������� ������  ����� ������ �� ������ ���� � �������
<br>
(�� ���� ���������� ������ ������� ��������)
<br>
</div>
<?	


if ( $tip == '���������' OR $tip == '���������'  )
{
echo "<p align='center' >��������� ���� ��������</p>";

if 	($vid == '���������' )    {$codpred='1'; $maxkl=4;} //
if 	($vid == '��������' )    {$codpred='2'; $maxkl=9;}  ;
if 	($vid == '�������' )    {$codpred='3'; $maxkl=11;}	;

if  ($chet == '')   echo "������� ��������";

else 
{

echo "<table border=1 align='center' >";
echo "<tr><td>"."� "."<th colspan='1'>��������\������</th>"."<th colspan='1'>1</th>"."<th colspan='1'>2</th>"."<th colspan='1'>3</th>"."<th colspan='1'>4</th>";
if 	($vid == '��������' or $vid == '�������')    echo "<th colspan='1'>5</th>"."<th colspan='1'>6</th>"."<th colspan='1'>7</th>"."<th colspan='1'>8</th>"."<th colspan='1'>9</th>" ;				 
if 	($vid == '�������' )    echo "<th colspan='1'>10</th>"."<th colspan='1'>11</th>" ;				 


$result = mysql_query("SELECT * FROM predmetsp WHERE cod_pred<='$codpred' "); // AND chetvert='$chet'  

$s=0;
// ��� ��� ������ ���������� ��������� �����, ��������� ����
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$s=$s+1;
echo "<tr><td>".$s."</td><td>";

{echo $prd; }
echo "</td><td>";	

for ($i = 1; $i <= $maxkl; $i++) 
{
$rescool = mysql_query("SELECT * FROM kol_uch  WHERE ZAVEDENIE='$user' AND jaz='���������' AND klass='$i' AND TIP='NEW'  ORDER BY `liter` ASC   ");//
while ($myrowscool = mysql_fetch_array($rescool)):	
{

$klogin=$myrowscool[liter]; 	
//echo $klogin;
//include ("proverka.php");

$shw=0;
$re = mysql_query("SELECT  * FROM monitor2012 WHERE   predmet='$prd' AND  chetvert='$chet' AND scool='$scool' AND jaz='���������' AND klass='$i' AND liter='$klogin' "); 

while($myro = mysql_fetch_array($re)):

{$shw=$shw+1; }

endwhile;

// echo $shw;

if ( $shw < 1 )
{
// �������� � ���� ���������

$predm = mysql_query("SELECT  * FROM predprov WHERE   predmet='$prd'  "); //AND  '$i'='$i' 
$myro4 = mysql_fetch_array($predm);
$prov=$myro4[$i];

//echo  $prov;

if ($prov == 1)

printf ("<a href='new_monitor_tab.php?chet=%s & predmet=%s & jaz=%s  & klass=%s & liter=%s'>%s</a>", $chet,  $prd, '���������',  $i, $klogin, $klogin   ) ; //

else printf (""    ) ; //

}	
echo " ";	

}
endwhile;

echo "</td><td>";	

}
}
}
echo " </table>";
}




if ( $tip == '�������' or $tip == '���������'  )
{
echo "<p align='center' >������� ���� ��������</p>";

if 	($vid == '���������' )    {$codpred='1'; $maxkl=4;} //
if 	($vid == '��������' )    {$codpred='2'; $maxkl=9;}  ;
if 	($vid == '�������' )    {$codpred='3'; $maxkl=11;}	;

if  ($chet == '')   echo "������� ��������";

else 
{

echo "<table border=1 align='center' >";
echo "<tr><td>"."� "."<th colspan='1'>��������\������</th>"."<th colspan='1'>1</th>"."<th colspan='1'>2</th>"."<th colspan='1'>3</th>"."<th colspan='1'>4</th>";
if 	($vid == '��������' or $vid == '�������')    echo "<th colspan='1'>5</th>"."<th colspan='1'>6</th>"."<th colspan='1'>7</th>"."<th colspan='1'>8</th>"."<th colspan='1'>9</th>" ;				 
if 	($vid == '�������' )    echo "<th colspan='1'>10</th>"."<th colspan='1'>11</th>" ;				 

$result = mysql_query("SELECT * FROM predmetsp WHERE cod_pred<='$codpred' "); // AND chetvert='$chet'  

$s=0;
// ��� ��� ������ ���������� ��������� �����, ��������� ����
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$s=$s+1;
echo "<tr><td>".$s."</td><td>";


{echo $prd  ; }
echo "</td><td>";	

for ($i = 1; $i <= $maxkl; $i++) 
{
$rescool = mysql_query("SELECT * FROM kol_uch  WHERE ZAVEDENIE='$user' AND jaz='�������' AND klass='$i' AND TIP='NEW'  ORDER BY `liter` ASC   ");//
while ($myrowscool = mysql_fetch_array($rescool)):	
{


$klogin=$myrowscool[liter]; 	
//echo $klogin;
//include ("proverka.php");


$shw=0;
$re = mysql_query("SELECT  * FROM monitor2012 WHERE   predmet='$prd' AND  chetvert='$chet' AND scool='$scool' AND jaz='�������' AND klass='$i' AND liter='$klogin' "); 

while($myro = mysql_fetch_array($re)):

{  	
$shw=$shw+1; 
}

endwhile;

// echo $shw;

if ( $shw < 1 )
{


$predm = mysql_query("SELECT  * FROM predprov WHERE   predmet='$prd'  "); //AND  '$i'='$i' 
$myro4 = mysql_fetch_array($predm);
$prov=$myro4[$i];

// echo    $prov;

if ($prov == 1)

printf ("<a href='new_monitor_tab.php?chet=%s & predmet=%s & jaz=%s  & klass=%s & liter=%s '>%s</a>", $chet,  $prd, '�������',  $i, $klogin, $klogin   ) ; //

else printf (""    ) ; //





}	
echo " ";	
}
endwhile;

echo "</td><td>";	

}
}
}
echo " </table>";
}



?>


</td> 


</table>
<br><br>
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
