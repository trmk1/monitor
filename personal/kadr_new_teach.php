<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		
		
		




<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

?> 


<title>Добавление учителя</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

		<form action="kadr_add_teach.php" method="post" enctype="multipart/form-data" name="form1">


<label> Введите данные</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>Персональная информация</legend>
			<?
				echo "Название школы <input name='ZAVEDENIE'  type='text'  value='$scool' disabled >     <br>";
				echo "<input name='ZAVEDENIE'  type='hidden'  value='$user' >     <br>";
				
			?>	
				Фамилия <input name="FAM"  type="text"  value="" >     <br>
				Имя <input name="IMA"  type="text"  value="" >         <br>
				Отчество <input name="OTCH"  type="text"  value="">    <br>
<!--					Пол     <input name="POL"  type="text" size="3" value="">    
				Дата рождения  <input name="DATAROG"  type="text" size="10" value="">    <br>
				Национальность   <input name="NACION"  type="text"  value="">     <br>
-->				
			</fieldset>
<!--			
			<fieldset class="fieldset1">
			<legend>Общие данные </legend>
				РНН     <input name="RNN"  type="text"  value="">   <br>           
				СИК     <input name="SIK"  type="text"  value="">     <br>         
				ИНН     <input name="IIN"  type="text"  value="">     <br>         
				Номер удостоверения личности"     <input name="NOMUDOSTOV"  type="text"  value="" maxlength="12">   <br>           
				Возраст     <input name="POLNLET"  type="text" size="3" value="">   <br>
				Номер телефона     <input name="NOMTELEF"  type="text"  value="" maxlength="12">  <br> 
                Образование     <input name="OBRAZ"  type="text"  value="" maxlength="12">  <br> 
				Специальность     <input name="SPECIALN"  type="text"  value="">      <br>
				Учебное заведение    <input name="UCHZAVOKON"  type="text"  value="">      <br>
			    Преподоваемый предмет    <input name="PREDMET"  type="text"  value="">      <br>
			    Нагрузка    <input name="NAGRUZ"  type="text"  value="">      <br>
				Должность     <input name="DOLG"  type="text"  value="">      <br>
				Стаж     <input name="STAG"  type="text" size="3"  value="">    <br>  
				Язык обучения    <input name="IAZOBUCH"  type="text"  value="">  <br>
				Категория    <input name="KATEGOR"  type="text"  value="">   <br>
				Год аттестации    <input name="GODATTES"  type="text" size="4" value="">  <br>
				Год прох курсов     <input name="KURSI"  type="text" size="4"  value="">  <br>
				Место прохождения курсов <input name="MESTOKURS"  type="text"   value=""><br>
				Тема курсов     <br><textarea name="TEMAKURS" cols="40"></textarea><br>
				Преподоваемый предмет     <input name="PREPPREDM"  type="text"  value=""> <br>
				Планируемый год прохождеденя курсов     <input name="PLANKURS"  type="text" size="4" value="">   <br>
			</fieldset>
			</div>
<div id="b">
			<fieldset class="fieldset1">
				<legend>Общие данные </legend>
				Методичекая тема <br> <textarea name="METTEMA" cols="53"></textarea><br>
				Заочное обучение     <input name="ZAOCHOBUCH"  type="text"  value=""> <br>
				Награды           <br><textarea name="NAGRADI" cols="53"></textarea><br>
				Общественные работа     <input name="OBCHRAB"  type="text"  value=""> <br>
				Увлечения     <input name="UVLECHENIE"  type="text"  value=""> <br>
				Год тестирования     <input name="GODTESTIR"  type="text" size="4" value=""> <br>
				Место тестирования  <input name="MESTOTEST"  type="text"  value=""> <br>
			</fieldset>
			<fieldset class="fieldset1">
				<legend>Общие данные </legend>
				Второе образование     <input name="VTOROEOBR"  type="text"  value=""> <br>
				Место обошеня передового опыта     <input name="PPOVIBOR"  type="text"  value="">  <br>
				Проблемная тема            <br><textarea name="PPOTEMA" cols="53"></textarea><br>
				Год обобщеня передавого опыта <input name="PPOGOD"  type="text" size="4" value="">  <br>
				УРОВЕНЬ     <input name="PPOUROVEN"  type="text"  value="">  <br>
				Изданные методические пособия 	  <br><textarea name="IZDANMETOD" cols="53"></textarea><br>
				Республиканского уровня       <br><textarea name="IZDANRESPU" cols="53"></textarea><br>
				ID     <input name="COD"  type="text"  value="">              <br>
			</fieldset>
-->			
            <input type="submit" name="submit" id="submit" value="Передать и сохранить  данные.">
			</div>		  


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>
