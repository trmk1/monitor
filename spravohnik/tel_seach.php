<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
	


<title>Телефонный справочник</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="690" border="0" align="center" >

  <tr>
  

  
 <td valign='top'>   
	<table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top">
	

 <H1><center>Телефоны школ района </H1></center>


	
<?



			echo "<table border=1>";
			echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong>школа </strong>"."</td><td>"."<strong> номер тел. </strong>"."</td><td>"."<strong> место установки </strong>"."</td><td>"."<strong> ФИО </strong>"."</td></tr>";

			
	
			
			
			$result = mysql_query("SELECT * FROM telefon WHERE   TIP='NEW' AND raion='$raion' and oblast='$oblast'  ORDER BY `ZAVEDENIE` ASC "); //AND ZAVEDENIE='$klogin' ANDZAVEDENIE='$user' WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);

			$K=1;

			do 
			{		
					$ZAVEDENIE=$myrow["ZAVEDENIE"];
					$rezscol = mysql_query("SELECT * FROM userlist WHERE  login='$ZAVEDENIE'");
					$myscol = mysql_fetch_array($rezscol);
					
					
					
			
			$m=$myrow[idn];
			echo "<tr><td>".$K."</td><td>". $myscol["scool"]."</td><td>". $myrow["tel"]."</td><td>".$myrow["mestoust"]."</td><td>".$myrow["fio"]."</td></tr>";
			
			$K=$K+1;

			}
			while ($myrow = mysql_fetch_array($result));
			
			
	
	
		

?>


	</tr> 
	</td> 
</table>




	</tr> 
</table>
	</tr> 
</table>



		
		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
