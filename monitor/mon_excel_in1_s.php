<?php
$pro=$myrow["pro"];
PRINT<<<HERE
<tr> <td rowspan='8' class='vertical'> $pro </td><td> <div align='center'>класс</div></td><td><div align='center'>1</div></td><td><div align='center'>2</div></td><td><div align='center'>3</div></td><td><div align='center'>4</div></td><td><div align='center'>5</div></td><td><div align='center'>6</div></td><td><div align='center'>7</div></td><td><div align='center'>8</div></td><td><div align='center'>9</div></td><td><div align='center'>10</div></td><td><div align='center'>11</div></td></tr>	

HERE;

 			// строчка 6
			echo "<tr> ";

			echo "<td><div align='center'>'количество учащихся'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
	
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'AND   jaz='$jazik'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND     klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5' jaz='$jazik' AND
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND      klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'jaz='$jazik' AND
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  ANAND   jaz='$jazik'D  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];
			
			$ocenk6[$pro]=($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro]);
			
			
			
			
/* 			$request= mysql_query("SELECT SUM(kol) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'
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
			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'AND   jaz='$jazik'
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
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'AND   jaz='$jazik'
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
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'AND   jaz='$jazik'
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
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  AND  ocenka='5'AND   jaz='$jazik'
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
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND     klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  jaz='$jazik' AND AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //AND   jaz='$jazik'  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    // AND   jaz='$jazik' AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    // AND   jaz='$jazik' AND  ocenka='5'
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
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro'  AND   klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //AND   jaz='$jazik'  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND     klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //jaz='$jazik' AND   AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row['sum'];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND     klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    //  jaz='$jazik' AND AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row['sum'];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND      klass='$i'  AND raion='$raion' and oblast='$oblast'  ");    // jaz='$jazik' AND AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row['sum'];

			
			$usp[$pro]=round(($ocenk5[$pro]+ $ocenk4[$pro])/($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro])*100);
			
			
			
			echo "<td><div align='center'>$usp[$pro]</div></td>"; 
			} 
		
		echo "</tr>" ;
	
?>
