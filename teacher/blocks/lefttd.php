

	

<?  include ("bd.php"); ?> 

 <td width="250 px" valign="top" class="left">
 <p align="center" class="title">Информация</p>
<div id="coolmenu">
 <?  echo "Вы зашли как - ","<br>",  $scool, "<br>", "тип школы - ", $vid,"<br>", "язык обучения -", $tip,"<br>"; 
 print("<a href=\"http://www.talgat.idhost.kz/1/lock/logout.php?".session_name()."=".session_id()."\">Выход</a>");  ?>  
 </div>	
 
  <p align="center" class="title">Сообщения</p>
<div id="coolmenu">
<?
	echo			" <p><a href='mess.php' target='_blank'>отправить прочитать</a></p>";				//echo			"<input type='submit' name='submit' id='submit' value='Передать.'>";
?>	

  
 </div>	
 
      <p align="center" ></p>
    <p align="center" class="title">Мониторинг качества знаний</p>
<div id="coolmenu">
     
 <p><a href="index.php">Заполнить</a></p><bp>
  <p><a href="monitor_red.php">просмотреть и изменить</a></p><bp>
 <!-- Это комментарий  <p><a href="stat.php">просмотр</a></p><bp><p><a href="edit_mon.php">Редактировать</a></p>	<bp> --> 

</div>	
	  		<p align="center" class="title">Кадры</p>
<div id="coolmenu">
      <p><a href="kadr_obr.php">Учителя</a></p><bp>
	    <p><a href="kadr_new_teach.php">Добавить</a></p><bp>
         <p><a href=" kadr_stat.php">статистика</a></p><bp


</div>

		<p align="center" class="title">Предметники</p>
<div id="coolmenu">
      <p><a href="predmet.php">предметы</a></p><bp>

</div>

        <p align="center" class="title">Контингент</p>
<div id="coolmenu">
     
 <p><a href="new_titul.php">кол-во учащихся</a></p><bp>


</div>	
		

 <p align="center" class="title">Итоги по району</p>
<div id="coolmenu">
<p><a href="reiting.php">рейтинг</a></p><bp>
<p><a href="sdali.php">% введенных предметов</a></p><bp>
<p><a href="itog.php">итог</a></p><bp>
<p><a href="stat_dva.php">школы где есть двойки</a></p><bp>
<p><a href="stat_jur.php">журнал системы</a></p><bp>


<br>

<a href="http://counter.co.kz" target="_blank"><img src="http://counter.co.kz/CounterCoKz?page=www.tainsha.kz_roo&style=grnyelo&digits=8" alt="Счетчик посещений Counter.CO.KZ - бесплатный счетчик на любой вкус!" border=0 width="120" height="20"></a> 
    
	 </div>    
        </td>
