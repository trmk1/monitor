
	<center>
<h1> Список преподаваемых предметов   </h1>

<?
echo "<table border=0 align=center>";
//echo "*******************************************************************************";
echo "<tr valign='middle'><td>2012-2013 учебный год</td><td>2013-2014 учебный год</td></tr>";

echo "<tr><td valign='top'>";

// echo $idn ; выборка средных данных учителя	echo "<table border=1>";
			// $user='1';
			
			 echo "<table border=1 align='center'>";

			$result = mysql_query("SELECT * FROM monitor2011  WHERE codscool='$user' AND teacher=$idn "); // 
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			
			$m=$myrow[predmet];
			$m1=$myrow[klass];
			$m2=$myrow[liter];
			echo "<tr><td>№".$K."</td><td>".$m." </td><td>".$m1."'".$m2." </td><td>"."<p>
			
			<a href = 'graf3.php?teacher=$idn & predmet=$m  & god=1213' > <img Src=diagram.jpg> </a></td></tr>";
		
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));

echo "</td></tr>";
echo "</table><br>";

echo "</td><td valign='top'>";

			echo "<table border=1 align='center'>";

			$result = mysql_query("SELECT * FROM monitor2012  WHERE codscool='$user' AND teacher=$idn "); // 
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
			$m=$myrow[predmet];
			$m1=$myrow[klass];
			$m2=$myrow[liter];
			echo "<tr><td>№".$K."</td><td>".$m." </td><td>".$m1."'".$m2." </td><td>"."<p>
			<a href = 'graf3.php?teacher=$idn & predmet=$m  & god=1314' > <img Src=diagram.jpg> </a></td></tr>";
		
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));
echo "</table>";

echo "</td></tr>";
echo "</table>";

?>

	</center>

