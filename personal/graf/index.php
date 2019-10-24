<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>граф</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
	
<?
$raion=1;
$oblast=1;

$idn=2060;

$table='monitor2011';

include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');
	$resteach = mysql_query("SELECT * FROM AA WHERE idn='$idn' ");	//				
	$myrowtech = mysql_fetch_array($resteach);
	$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	 
	$teacher=$FAM." ".$IM." ".$OTC." ";
	$z=$myrowtech[ZAVEDENIE]; 
	
	
	 $result1 = mysql_query("SELECT * FROM userlist  WHERE  login=$z "); //Z' WHERE  TIP='NEW' ORDER BY `FAM` ASC
	 $myrow1 = mysql_fetch_array($result1);
	 $sll=$myrow1[scool];
	
	
	
print<<<HERE
		
$(function () {
        $('#container').highcharts({
		        title: {
                text: 'Качество знаний - $teacher',
                x: -20 //center
            },
            subtitle: {
                text: '$sll ',
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


 series: [

HERE;







$result = mysql_query("SELECT * FROM $table  WHERE  teacher=$idn "); // codscool='$user' AND
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$m=$myrow[predmet];
			$mm1=$myrow[klass];
			$mm2=$myrow[liter];
			$mm4=$myrow[jaz];
			
			//Echo '1--'.$m;
			
			
			$mm3=$m.''.$mm1.$mm2;
			
			// $m=iconv("UTF-8", "windows-1251",  $m); 
			// Echo '2--'.$m;




					$chetvert='1_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m1=$kach[kachestvo];
					if ($m1 < 1 ) $m1=0;   

					$chetvert='2_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m2=$kach[kachestvo];
					if ($m2 < 1 ) $m2=$m1;
					
					$chetvert='3_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m3=$kach[kachestvo];
					if ($m3 < 1 ) $m3=$m2;   
					
					$chetvert='4_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m4=$kach[kachestvo];
					if ($m4 < 1 ) $m4=$m3;   
					
					$chetvert='годовая';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m5=$kach[kachestvo];
					if ($m5 < 1 ) $m5=$m4;  
					
					$chetvert=' экзаменационная ';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m6=$kach[kachestvo];
					if ($m6 < 1 ) $m6=$m5;  
					
					$chetvert='ИТОГОВАЯ';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m7=$kach[kachestvo];
					if ($m7 < 1 ) $m7=$m6;  
					

					//echo "**", $m1, "**", $m2, "**", $m3, "**", $m4; $m2=45;


print<<<HERE
{    name: '$mm3',             data: [$m1, $m2, $m3, $m4, $m5, $m6, $m7 ]            },
HERE;




$K=$K+1;




}
while ($myrow = mysql_fetch_array($result));



print<<<HERE
           
			
			
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


