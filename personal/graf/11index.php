<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>����</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
	
<?



print<<<HERE
		
$(function () {
        $('#container').highcharts({
            title: {
                text: '�������� ������',
                x: -20 //center
            },
            subtitle: {
                text: '������� �� ������� ��� �� ������ ��������',
                x: -20
            },
            xAxis: {
                categories: ['I-���.', 'II-���.', 'III-���.', 'IV-���.', '�������', '���.',  '���', '����' ]
            },
            yAxis: {
                title: {
                    text: '�������� (%)'
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



$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='1_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m1=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='2_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m2=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='3_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m3=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='4_��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m4=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='�������'"); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m5=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND  chetvert=' ��������������� ' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m6=round($kachestvo, 2);

$resu = mysql_query("SELECT AVG(kachestvo) AS kachestvo FROM  monitor2012  WHERE  teacher=$idn AND chetvert='��������' "); // TIP='NEW'  AND
$kachestvo=mysql_result($resu,0);
$m7=round($kachestvo, 2);
//echo "**", $m1, "**", $m2, "**", $m3, "**", $m4; $m2=45;


print<<<HERE
            series: [
			{    name: '������',             data: [$m1, $m2, $m3, $m4, $m5, $m6, $m7 ]            },
			{    name: '����������',         data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0 ]            }
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


