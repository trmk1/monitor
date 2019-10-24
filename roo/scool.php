<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->




 
 
 
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
		<p align="center"><strong>Школы логины и пароли</strong></p>

		

		
<div align="center">
  <?

// удаление учител
					if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
					echo $compdel;
					if  (isset($compdel)) 
					{
						// $result = mysql_query ("DELETE FROM compi WHERE idn='$compdel'");
						$result = mysql_query ("UPDATE  userlist  SET  TIPZAP='DEL'   WHERE id='$compdel' AND raion=$raion ");
 
						if ($result == 'true') {echo "<p>Запись успешно удалена!</p>";}
						else {echo "<p>Ошибка !</p>";}
					}

// вывод списка
	
	echo "<H1><center>Средние школы</center></H1>";
			echo "<table align='center' border=1>";
			// $user='1';
			if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
// вывод средних
			echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong> школа </strong>"."</td><td>"."<strong> логин  </strong>"."</td><td>"."<strong> пароль </strong>"."</td><td>"."</td><td>"."<strong>удалить</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='средняя' AND TIPZAP='NEW' AND raion=$raion AND prawa='1' 	 ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='удалить' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='удалить' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));
	echo "</table><br><br>";
		
// вывод основных	

	echo "<H1><center>Основные школы</center></H1>";

		echo "<table align='center' border=1>";

			echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong> школа </strong>"."</td><td>"."<strong> логин  </strong>"."</td><td>"."<strong> пароль </strong>"."</td><td>"."</td><td>"."<strong>удалить</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='основная' AND TIPZAP='NEW' AND raion=$raion ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='удалить' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='удалить' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));
	echo "</table><br><br>";
				
// вывод начальных	

	echo "<H1><center>Начальные школы</center></H1>";
		echo "<table align='center' border=1>";
			echo "<tr><td>"."<strong>№</strong>"."</td><td>"."<strong> школа </strong>"."</td><td>"."<strong> логин  </strong>"."</td><td>"."<strong> пароль </strong>"."</td><td>"."</td><td>"."<strong>удалить</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM userlist WHERE  vid='начальная' AND TIPZAP='NEW' AND raion=$raion ORDER BY `scool` ASC "); // ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
			$myrow = mysql_fetch_array($result);
			$K=1;
			do 
			{
			$m=$myrow[id];
			echo "<tr><td>".$K."</td><td>". $myrow["scool"]."</td><td>". $myrow["login"]."</td><td>".$myrow["password"]."</td><td>"."<p><a href='scool_edit.php?compdel=$m'><img alt='удалить' src='b_edit.png' ></a></p>"."</td><td>"."<p><a href='scool.php?compdel=$m'><img alt='удалить' src='delete-icon.gif' ></a></p>"."</td></tr>";
			$K=$K+1;
			}
			while ($myrow = mysql_fetch_array($result));

						
			
			
			
			
			
			echo "</table><H1><center><a href='scool_add.php'>Добавить школу </a></center></H1>";



?>
  

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
		<!--Тело страницы конец --> 
		
		</td> 


</table>
<br><br>
 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
