   <head>
		
      
        <script type="application/javascript" src="awesomechart.js"> </script>
    </head>
    <body>
		<center>
	<h1> �������� ������ �� ��������� ��  2012-2013 �������  ���</h1>
      	</center>  
        
        <div class="charts_container" align='center'>
            <div class="chart_container">
                <canvas id="chartCanvas3" align='center' width="600" height="300">
                    Ваш браузер не поддерживает элемент HTML 5 canvas.
                </canvas>
            </div>
        </div>

		
	

    
		
<script type="application/javascript">
var chart3 = new AwesomeChart('chartCanvas3');		
		
<?
// нарис
print<<<HERE
chart3.title = '$zag';
 chart3.chartType = "default";
HERE;
 

// echo $idn ; ������� ������� ������ �������


$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011 WHERE  teacher=$idn AND chetvert='1_��������'  "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m1=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011 WHERE  teacher=$idn AND chetvert='2_��������' "); // TIP='NEW'  AND 
$kachestvo=mysql_result($resu,0);
$m2=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011  WHERE  teacher=$idn AND chetvert='3_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m3=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011  WHERE  teacher=$idn AND chetvert='4_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m4=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011  WHERE  teacher=$idn AND chetvert='�������'"); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m5=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011  WHERE  teacher=$idn AND  chetvert=' ��������������� ' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m6=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2011  WHERE  teacher=$idn AND chetvert='��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m7=round($kachestvo, 2);
//echo "**", $m1,"**", $m2,"**", $m3,"**", $m4;



print<<<HERE
chart3.title = '�� ���� ��������� ������� ����� �������';
chart3.data = [$m1, $m2, $m3, $m4, $m5, $m6, $m7]; 
chart3.labels = ['I ��������', 'II �������� ', 'III �������� ', 'IV �������� ', '�������',  '�������', '��������' ]; 
chart3.draw();
HERE;
?>
</script>		
		  		  
		  
       

</body>


