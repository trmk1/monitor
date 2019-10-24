<?
$raion=1;
$oblast=1;

$idn=2060;

$table=monitor2011;

include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');
	$resteach = mysql_query("SELECT * FROM AA WHERE idn='$idn' ");	//				
	$myrowtech = mysql_fetch_array($resteach);
	$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	 
	$teacher=$FAM." ".$IM." ".$OTC." ";
	$z=$myrowtech[ZAVEDENIE]; 
	
	
	 $result1 = mysql_query("SELECT * FROM userlist  WHERE  login=$z "); //Z' WHERE  TIP='NEW' ORDER BY `FAM` ASC
	 $myrow1 = mysql_fetch_array($result1);
	 $sll=$myrow1[scool];
	
	





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

//$result = mysql_query("SELECT * FROM monitor2012 WHERE  id='$id' "); // dva>'0'   
//$myrow = mysql_fetch_array($result);
//$otl=$myrow[pater];
			
					$chetvert='1_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT * FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m1=$kach[kachestvo];
		echo '<br>айди -', $kach[id];


					$chetvert='2_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m2=$kach[kachestvo];
					
					$chetvert='3_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m3=$kach[kachestvo];
					
					$chetvert='4_четверть';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m4=$kach[kachestvo];
					

					$chetvert='годова€';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m5=$kach[kachestvo];
					
					$chetvert=' экзаменационна€ ';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m6=$kach[kachestvo];
					
					$chetvert='»“ќ√ќ¬јя';
					$kach=mysql_fetch_array(mysql_query("SELECT kachestvo FROM   $table   WHERE  teacher=$idn AND chetvert='$chetvert' AND predmet='$m' AND codscool=$z  AND klass='$mm1' AND liter='$mm2' AND raion='$raion'  AND oblast='$oblast' AND jaz='$mm4'  ")	);
					$m7=$kach[kachestvo];					
					


					echo "<br>**код учитель-", $idn, "код школы-",  $z, "предмет-", $m, "клас-", $mm1, "литер - ", $mm2," - ", $m1, "**", $m2, "**", $m3, "**", $m4, "**", $m5, "**", $m6, "**", $m7;

}

while ($myrow = mysql_fetch_array($result));

?>		


