<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		

<title>
БД "Школьные сайты"  
<?echo $scool;?>
</title>


<table width="690" border="0" align="center" >

  <tr>
  
 </td>  <td valign='top'>   
    
	<table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>БД "Электронные адреса"</strong></p>

		

		
<div align="center">
  <?


// вывод списка
	
			echo "<table border=1 align='center'>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

			echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong> школа </strong>"."</td><td>"."<strong>электронный адрес</strong>"."</td></tr>";

			$result = mysql_query("SELECT * FROM mail  WHERE  TIP='NEW' "); // WHERE ZAVEDENIE='$user' AND  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{
     
			$ZAVEDENIE=$myrow["ZAVEDENIE"];
					$rezscol = mysql_query("SELECT * FROM userlist WHERE login='$ZAVEDENIE'");
					$myscol = mysql_fetch_array($rezscol);
					
			
			
			
			
			
			$mail1=$myrow["mail"];
			$m=$myrow[idn];
			echo "<tr><td>".$K."</td><td>".$myscol["scool"] ."</td><td>".'<a href=mailto:'.$mail1.'>'.$mail1.'</a>'."</td></tr>";
			
			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));

			echo "</table><br><center><a href='mail_add.php'>Добавить электроный адрес </a></center>";



?>
  

</div>
    

		
		
		
		
		
		
		
		
		
		
</td> 
</table>	
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
