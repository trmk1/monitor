

	

<?  include ("bd.php"); ?> 

 <td width="1000 px" valign="top" class="left">
 <p><a href="index.php">�������</a></p><bp>
 
 <br> <br>
       <?  echo "�� ����� ��� ", "<bp>",  $scool;       
?>  
<p><a href="http://www.tainsha.kz/roo/stat.php">��������</a></p><bp>
<p><a href="http://www.tainsha.kz/roo/reiting.php">�������</a></p><bp>

<p><a href="lessons.php">�����</a></p>	<bp>

		<p align="center" >������� ��������� ��������</p>

<?
				echo   "<br>";
				echo "<table border=1>";
				echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong>�������</strong>"."</td><td>"."<strong>�����</strong>"."</td><td>"."</td></tr>";
				
			
				$result = mysql_query("SELECT * FROM zapol ORDER BY `scool`;");
				$myrow = mysql_fetch_array($result);
				$i=1;
				// ��� ��� ������ ���������� ��������� �����, ��������� ����
				while($myrow = mysql_fetch_array($result))
				{  echo    "<tr><td>".$i."</td><td>".$myrow[predmet]."</td><td>".$myrow[scool]. "</td></tr>"; $i=$i+1; }
				// {  echo    "<tr><td>", $i, "</td><td>", $myrow[scool], "</td><td>", $myrow[chetvert], "</td><td>", $myrow[ocenka], "</td><td>", $myrow[predmet],  "</td><td>", $myrow[pervi],"</td><td>", $myrow[vtoroi],"</td><td>", $myrow[tretii], "</td><td>", $myrow[chetverti], "</td><td>", $myrow[pjtij],"</td><td>", $myrow[shestoj], "</td><td>", $myrow[sedmoi], "</td><td>",$myrow[vosmoi], "</td><td>", $myrow[devjtij], "</td><td>", $myrow[desjtii], "</td><td>", $myrow[odinad], "</td></tr>"; $i=$i+1; }

				echo '</table>';
				close();
?>	


        
        </td>