<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->





<div align='center'>
<br>
МОНИТОРИГ КАЧЕСТВА ЗНАНИЙ 
<br>
за
<?
if (isset($_GET['chet']))      {$chet = $_GET['chet'];   		        if ($chet == '') 	    {unset($chet);}}
echo $chet;
?>
  2013-14 учебный год<br>
Для заполнения выбери  литер класса из списка ниже в таблице
<br>
(по мере заполнения литеры классов исчезают)
<br>
</div>
<?	


if ( $tip == 'казахский' OR $tip == 'смешанный'  )
{
echo "<p align='center' >КАЗАХСКИЙ ЯЗЫК ОБУЧЕНИЯ</p>";

if 	($vid == 'начальная' )    {$codpred='1'; $maxkl=4;} //
if 	($vid == 'основная' )    {$codpred='2'; $maxkl=9;}  ;
if 	($vid == 'средняя' )    {$codpred='3'; $maxkl=11;}	;

if  ($chet == '')   echo "Укажите четверть";

else 
{

echo "<table border=1 align='center' >";
echo "<tr><td>"."№ "."<th colspan='1'>предметы\классы</th>"."<th colspan='1'>1</th>"."<th colspan='1'>2</th>"."<th colspan='1'>3</th>"."<th colspan='1'>4</th>";
if 	($vid == 'основная' or $vid == 'средняя')    echo "<th colspan='1'>5</th>"."<th colspan='1'>6</th>"."<th colspan='1'>7</th>"."<th colspan='1'>8</th>"."<th colspan='1'>9</th>" ;				 
if 	($vid == 'средняя' )    echo "<th colspan='1'>10</th>"."<th colspan='1'>11</th>" ;				 


$result = mysql_query("SELECT * FROM predmetsp WHERE cod_pred<='$codpred' "); // AND chetvert='$chet'  

$s=0;
// Так как запрос возвращает несколько строк, применяем цикл
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$s=$s+1;
echo "<tr><td>".$s."</td><td>";

{echo $prd; }
echo "</td><td>";	

for ($i = 1; $i <= $maxkl; $i++) 
{
$rescool = mysql_query("SELECT * FROM kol_uch  WHERE ZAVEDENIE='$user' AND jaz='казахский' AND klass='$i' AND TIP='NEW'  ORDER BY `liter` ASC   ");//
while ($myrowscool = mysql_fetch_array($rescool)):	
{

$klogin=$myrowscool[liter]; 	
//echo $klogin;
//include ("proverka.php");

$shw=0;
$re = mysql_query("SELECT  * FROM monitor2012 WHERE   predmet='$prd' AND  chetvert='$chet' AND scool='$scool' AND jaz='казахский' AND klass='$i' AND liter='$klogin' "); 

while($myro = mysql_fetch_array($re)):

{$shw=$shw+1; }

endwhile;

// echo $shw;

if ( $shw < 1 )
{
// проверка в базе прелметов

$predm = mysql_query("SELECT  * FROM predprov WHERE   predmet='$prd'  "); //AND  '$i'='$i' 
$myro4 = mysql_fetch_array($predm);
$prov=$myro4[$i];

//echo  $prov;

if ($prov == 1)

printf ("<a href='new_monitor_tab.php?chet=%s & predmet=%s & jaz=%s  & klass=%s & liter=%s'>%s</a>", $chet,  $prd, 'казахский',  $i, $klogin, $klogin   ) ; //

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




if ( $tip == 'русский' or $tip == 'смешанный'  )
{
echo "<p align='center' >РУССКИЙ ЯЗЫК ОБУЧЕНИЯ</p>";

if 	($vid == 'начальная' )    {$codpred='1'; $maxkl=4;} //
if 	($vid == 'основная' )    {$codpred='2'; $maxkl=9;}  ;
if 	($vid == 'средняя' )    {$codpred='3'; $maxkl=11;}	;

if  ($chet == '')   echo "Укажите четверть";

else 
{

echo "<table border=1 align='center' >";
echo "<tr><td>"."№ "."<th colspan='1'>предметы\классы</th>"."<th colspan='1'>1</th>"."<th colspan='1'>2</th>"."<th colspan='1'>3</th>"."<th colspan='1'>4</th>";
if 	($vid == 'основная' or $vid == 'средняя')    echo "<th colspan='1'>5</th>"."<th colspan='1'>6</th>"."<th colspan='1'>7</th>"."<th colspan='1'>8</th>"."<th colspan='1'>9</th>" ;				 
if 	($vid == 'средняя' )    echo "<th colspan='1'>10</th>"."<th colspan='1'>11</th>" ;				 

$result = mysql_query("SELECT * FROM predmetsp WHERE cod_pred<='$codpred' "); // AND chetvert='$chet'  

$s=0;
// Так как запрос возвращает несколько строк, применяем цикл
while($myrow = mysql_fetch_array ($result))
{  	
$prd=$myrow[predmet];
$s=$s+1;
echo "<tr><td>".$s."</td><td>";


{echo $prd  ; }
echo "</td><td>";	

for ($i = 1; $i <= $maxkl; $i++) 
{
$rescool = mysql_query("SELECT * FROM kol_uch  WHERE ZAVEDENIE='$user' AND jaz='русский' AND klass='$i' AND TIP='NEW'  ORDER BY `liter` ASC   ");//
while ($myrowscool = mysql_fetch_array($rescool)):	
{


$klogin=$myrowscool[liter]; 	
//echo $klogin;
//include ("proverka.php");


$shw=0;
$re = mysql_query("SELECT  * FROM monitor2012 WHERE   predmet='$prd' AND  chetvert='$chet' AND scool='$scool' AND jaz='русский' AND klass='$i' AND liter='$klogin' "); 

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

printf ("<a href='new_monitor_tab.php?chet=%s & predmet=%s & jaz=%s  & klass=%s & liter=%s '>%s</a>", $chet,  $prd, 'русский',  $i, $klogin, $klogin   ) ; //

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
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
