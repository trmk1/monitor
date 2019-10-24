<?php
include ("../lock.php");

//echo "<tr><td><div align='center'>". $predmet."</div></td></tr>	";
//echo "<tr><td><div align='center'>". $jazik." - язык обучения</div></td></tr>	";
$pro=$myrow["pro"];

//echo "<tr> <td rowspan='8' class='vertical'>".$pro."</td><td><div align='center'>класс</div></td><td><div align='center'>1</div></td><td><div align='center'>2</div></td><td><div align='center'>3</div></td><td><div align='center'>4</div></td><td><div align='center'>5</div></td><td><div align='center'>6</div></td><td><div align='center'>7</div></td><td><div align='center'>8</div></td><td><div align='center'>9</div></td><td><div align='center'>10</div></td><td><div align='center'>11</div></td></tr>	";

PRINT<<<HERE
<tr> <td rowspan='8' class='vertical'>
<object width="20" height="180" type="image/svg+xml" data="data:image/svg+xml;charset/windows-1251,<svg xmlns='http://www.w3.org/2000/svg'><text x='-70.5' y='12' style='font-family:Arial; font-size:14px; text-anchor:middle' transform='rotate(-90)'>$pro<!-- для устранения глюка в Opera --></text></svg>"></object>
</td><td><div align='center'>класс</div></td><td><div align='center'>1</div></td><td><div align='center'>2</div></td><td><div align='center'>3</div></td><td><div align='center'>4</div></td><td><div align='center'>5</div></td><td><div align='center'>6</div></td><td><div align='center'>7</div></td><td><div align='center'>8</div></td><td><div align='center'>9</div></td><td><div align='center'>10</div></td><td><div align='center'>11</div></td></tr>	



HERE;




 			// строчка 6
			echo "<tr> ";

			echo "<td><div align='center'>'количество учащихся'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
	
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];
			
			$ocenk6[$pro]=($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro]);
			
			
			
			
/* 			$request= mysql_query("SELECT SUM(kol) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk6[$pro]=$row['sum']; */
			
			echo "<td><div align='center'>$ocenk6[$pro]</div></td>"; 
			} 
			echo "</tr>" ;
			
			
				// строчка 5
			echo "<tr> ";

			echo "<td><div align='center'>'5'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];
			echo "<td><div align='center'>$ocenk5[$pro]</div></td>"; 
			} 
			echo "</tr>" ;

				// строчка 4
			echo "<tr> ";

			echo "<td><div align='center'>'4'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];
			echo "<td><div align='center'>$ocenk4[$pro]</div></td>"; 
			} 
			echo "</tr>" ;


				// строчка 3
			echo "<tr> ";

			echo "<td><div align='center'>'3'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			echo "<td><div align='center'>$ocenk3[$pro]</div></td>"; 
			} 
			echo "</tr>" ;


				// строчка 2
			echo "<tr> ";

			echo "<td><div align='center'>'2'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			echo "<td><div align='center'>$ocenk2[$pro]</div></td>"; 
			} 
			echo "</tr>" ;



						
// загол 
		echo "<tr> ";

			echo "<td><div align='center'>% успеваемости</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];

			
			$usp[$pro]=round(($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro])/($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro])*100);
			
			
			
			echo "<td><div align='center'>$usp[$pro]</div></td>"; 
			} 
			echo "</tr>" ;

						
// загол 
		echo "<tr> ";

			echo "<td><div align='center'>% качества</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND codscool='$user' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];

			
			$usp[$pro]=round(($ocenk5[$pro]+ $ocenk4[$pro])/($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro])*100);
			
			
			
			echo "<td><div align='center'>$usp[$pro]</div></td>"; 
			} 
			echo "</tr>" ;
	
	
?>
