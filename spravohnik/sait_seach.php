<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
		
		
		
<div align="center">
  <?


// ����� ������
	
			echo "<table border=1>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong>����� </strong>"."</td><td>"."<strong> ����� ����� </strong>"."</td><td>"."<strong> ��������� </strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM sait  WHERE   TIP='NEW' AND raion='$raion' and oblast='$oblast'  ORDER BY `ZAVEDENIE` ASC "); //ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
     
					$ZAVEDENIE=$myrow["ZAVEDENIE"];
					$rezscol = mysql_query("SELECT * FROM userlist WHERE login='$ZAVEDENIE' ");
					$myscol = mysql_fetch_array($rezscol);	 
	 
			
			$m=$myrow[idn];  $adres=$myrow["adres"];
			echo "<tr><td>".$K."</td><td>". $myscol["scool"]."</td><td>". "<a href='$adres'>$adres</a>"."</td><td>".$myrow["sost"]."</td></tr>";
			
			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));

			



?>
		
		
		
		
		
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
