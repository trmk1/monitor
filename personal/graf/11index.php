<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>граф</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
	
<?



print<<<HERE
		
$(function () {
        $('#container').highcharts({
            title: {
                text: 'Качество знаний',
                x: -20 //center
            },
            subtitle: {
                text: 'нажмите на предмет что бы скрыть показать',
                x: -20
            },
            xAxis: {
                categories: ['I-чет.', 'II-чет.', 'III-чет.', 'IV-чет.', 'годовая', 'экз.',  'ЕНТ', 'итог' ]
            },
            yAxis: {
                title: {
                    text: 'Качество (%)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#848080'
                }]
            },
            tooltip: {
                valueSuffix: '%'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 3
            },




HERE;

include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');

$idn=2503;



$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='1_четверть' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m1=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='2_четверть' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m2=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='3_четверть' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m3=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='4_четверть' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m4=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='годовая'"); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m5=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND  chetvert=' экзаменационная ' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m6=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='ИТОГОВАЯ' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m7=round($kachestvo, 2);
//echo "**", $m1, "**", $m2, "**", $m3, "**", $m4; $m2=45;


print<<<HERE
            series: [
			{    name: 'физика',             data: [$m1, $m2, $m3, $m4, $m5, $m6, $m7 ]            },
			{    name: 'математика',         data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0 ]            }
				]
        });
    });
    

HERE;
?>		



		</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>


