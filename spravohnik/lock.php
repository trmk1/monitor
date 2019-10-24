<?php
include ("lock/members.php");
include ("blocks/bd.php");
	$log=$_SESSION['login'];
								$query = "SELECT * FROM userlist WHERE login='$log'";
					$lst = @mysql_query($query);

					$qury = "SELECT * FROM userlist WHERE login='$log'";
					$lscot = @mysql_query($qury);
					$pcos =  @mysql_fetch_array($lscot);
					global $scool;
					global $vid;
					global $tip;
					global $iazfase;
					global $user;
					global $raion;	
					global $oblast;					
					$scool=$pcos[scool];
					$vid=$pcos[vid];
					$tip=$pcos[tip];
					$raion=$pcos[raion];					
					$oblast=$pcos[oblast];
					$user=$log;
					$iazfase=$pcos[iazfase];
					
			$today = date("d.m.y"); //ï raion 	oblast
			$time = date("H:i:s"); //ï
			$oper=$title;
			$resjur = mysql_query ("INSERT INTO jurnal_vhodov (scool, date, time, oper) VALUES ('$scool',	'$today', '$time', '$oper')");
 ?>

