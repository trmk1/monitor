

	

<?  include ("bd.php"); ?> 

 <td width="1000 px" valign="top" class="left">
 <p><a href="index.php">Главная</a></p><bp>
 
 <br> <br>
       <?  echo "Вы зашли как ", "<bp>",  $scool;       
?>  
<p><a href="http://www.tainsha.kz/roo/stat.php">просмотр</a></p><bp>
<p><a href="http://www.tainsha.kz/roo/reiting.php">рейтинг</a></p><bp>

<p><a href="lessons.php">Уроки</a></p>	<bp>

		<p align="center" >Введены следующие предметы</p>

<?
				echo   "<br>";
				echo "<table border=1>";
				echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong>предмет</strong>"."</td><td>"."<strong>школа</strong>"."</td><td>"."</td></tr>";
				
			
				$result = mysql_query("SELECT * FROM zapol ORDER BY `scool`;");
				$myrow = mysql_fetch_array($result);
				$i=1;
				// Так как запрос возвращает несколько строк, применяем цикл
				while($myrow = mysql_fetch_array($result))
				{  echo    "<tr><td>".$i."</td><td>".$myrow[predmet]."</td><td>".$myrow[scool]. "</td></tr>"; $i=$i+1; }
				// {  echo    "<tr><td>", $i, "</td><td>", $myrow[scool], "</td><td>", $myrow[chetvert], "</td><td>", $myrow[ocenka], "</td><td>", $myrow[predmet],  "</td><td>", $myrow[pervi],"</td><td>", $myrow[vtoroi],"</td><td>", $myrow[tretii], "</td><td>", $myrow[chetverti], "</td><td>", $myrow[pjtij],"</td><td>", $myrow[shestoj], "</td><td>", $myrow[sedmoi], "</td><td>",$myrow[vosmoi], "</td><td>", $myrow[devjtij], "</td><td>", $myrow[desjtii], "</td><td>", $myrow[odinad], "</td></tr>"; $i=$i+1; }

				echo '</table>';
				close();
?>	


        
        </td>