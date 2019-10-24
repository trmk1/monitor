<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		<form action="tel_add_obr.php" method="post" enctype="multipart/form-data" name="form1">		
	
<label> БД "Телефоны"</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>Введите данные</legend>
<!--
$matplata Материнская плата
 <style>
#a, #b { position: absolute; }
#a, #b { width: 30em; }
#a { left: 0; }
#b { left: 30em; }

</style>
-->			
			
			<?
	
print<<<HERE

		Номер телефона (Например: 33548)  <input name="tel"  size="5" type="text"  value="$tel">   <br> 
		Место установки  (Например: каб. директора)   <input name="mestoust"  type="text"  value="$mestoust">  <br> 
		Используется для работы в сети ИНТЕРНЕТ 
		<select name="inter" id="inter"   >
		<option value="$inter">$inter</option>
		<option value="да">да</option>
		<option value="нет">нет</option>
		</select>
		<br>
		Вид соединения ИНТЕРНЕТ 
		<select name="vidinter" id="vidinter"   >
		<option value="$vidinter">$vidinter</option>
		<option value="dialap">dialap</option>
		<option value="Okynet">Okynet</option>
		<option value="Megaline">Megaline</option>		
		</select>
		  <br> 
		ФИО ответственного  <input name="fio"  type="text"  value="$fio">  <br> 
		Должность <input name="dolg"  type="text"  value="$dolg">  <br> 		
			
		
HERE;
				

			?>	
   




			</fieldset>

            <input type="submit" name="submit" id="submit" value="Передать и сохранить  данные.">
			</div>			
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
