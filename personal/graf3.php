<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->





















    <head>
		
        <style>
        
            body{
                background: #fff;
                color: #333;
            }
            
            a, a:visited, a:link, a:active{
                color: #333;
            }
            
            a:hover{
                color: #00f;
            }
        
            .charts_container{
                overflow: auto;
                width: 800px;
                height: 420px;
                margin: 10px auto;
            }
            
            .chart_container_centered{
                text-align: center;
                width: 900px;
                height: 420px;
                margin: 10px auto;
            }
            
            .chart_container{
                width: 400px;
                height: 400px;
                margin: 0px 25px;
                float: left;
            }
			
		    .charts_container_last{
                overflow: auto;
                width: 900px;
                height: 300px;
                margin: 10px auto;
				overflow: hidden;
            }
			
			.chart_container_last{
                width: 400px;
                height: 250px;
                margin: 0px 25px;
                float: left;
            }

            
        </style>
        <script type="application/javascript" src="awesomechart.js"> </script>
    </head>
    <body>
	<center>
	<h1> �������� ������ �� ��������� ��  2013-2014 �������  ���</h1>
        
        
        <div class="charts_container">
            <div class="chart_container">
                <canvas id="chartCanvas1" width="600" height="300">
                    Ваш браузер не поддерживает элемент HTML 5 canvas.
                </canvas>
            </div>
        </div>

		
	

    
		
<script type="application/javascript">
var chart1 = new AwesomeChart('chartCanvas1');		
		
<?

if (isset($_GET['teacher']))  {$teacher = $_GET['teacher'];   		if ($teacher == '') 	{unset($teacher);}}
if (isset($_GET['predmet']))  {$predmet = $_GET['predmet'];   		if ($predmet == '') 	{unset($predmet);}}
if (isset($_GET['god']))  	{$god = $_GET['god'];   				if ($god == '') 		{unset($god);}}


if ($god == '1213')     $BD='monitor2011';
if ($god == '1314')     $BD='monitor2012';

//echo "++ ", $god, $BD; 

$idn=$teacher;
// $teacher, "  -- ", $predmet, "-----", $idn





// нарисpareto
print<<<HERE
chart1.title = '$zag';
 chart1.chartType = "";
HERE;
 

// echo $idn ; ������� ������� ������ �������


$resu1 = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD WHERE  teacher='$idn'  AND chetvert='1_��������' AND predmet='$predmet' "); //  
$kachestvo1=mysql_result($resu1,0);
$m1=round($kachestvo1, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD WHERE  teacher='$idn'  AND chetvert='2_��������' AND predmet='$predmet' "); // TIP='NEW'  AND 
$kachestvo=mysql_result($resu,0);
$m2=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD  WHERE  teacher='$idn'  AND chetvert='3_��������' AND predmet='$predmet' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m3=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD  WHERE  teacher='$idn'  AND chetvert='4_��������' AND predmet='$predmet' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m4=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD  WHERE  teacher='$idn'  AND chetvert='�������' AND predmet='$predmet' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m5=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD  WHERE  teacher='$idn'  AND chetvert=' ��������������� ' AND predmet='$predmet'  "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m6=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  $BD  WHERE  teacher='$idn'  AND chetvert='��������' AND predmet='$predmet' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m7=round($kachestvo, 2);

//echo "**", $m1,"**", $m2,"**", $m3,"**", $m4;


			$resteach = mysql_query("SELECT * FROM AA WHERE idn='$idn' ");	//				
			$myrowtech = mysql_fetch_array($resteach);
			$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	 
			$teacher=$FAM." ".$IM." ".$OTC." ";

print<<<HERE
chart1.title = '�� $predmet  �������  $teacher';
chart1.data = [$m1, $m2, $m3, $m4, $m5, $m6, $m7]; 
chart1.labels = ['I ��������', 'II �������� ', 'III �������� ', 'IV �������� ', '�������',  '�������', '��������' ]; 

chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
chart1.randomColors = true;


chart1.draw();
HERE;
// 
// chart1.chartLineStrokeStyle = 'rgba(0, 0, 100, 0.5)';
// chart1.chartPointFillStyle = 'rgb(0, 0, 100)';


?>
</script>		
		  		  
		  
       

</body>

	</center>

		
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>




