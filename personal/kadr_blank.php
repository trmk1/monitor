<?
			$re = mysql_query("SELECT * FROM userlist WHERE login=$ZAVEDENIE   "); //ORDER BY `FAM` ASC 
			while ($myscool = mysql_fetch_array($re))  
			$scoola=$myscool[scool];
?>

<?

if (isset($_POST['idn']))			{$idn = $_POST['idn']; 							if ($idn == ''){unset($idn);}}
print<<<HERE
			
		<form action="kadr_edit_teach.php" method="post" enctype="multipart/form-data" name="form1">



<title> $FAM $IMA $OTCH</title>

 <h3>$scoola</h3>

<div id="a">
			<fieldset class="fieldset1">
			<legend>ФИО</legend>
			
			<input name="idn"  type="hidden"  value="$idn" >
				<input name="ZAVEDENIE"  type="hidden"  value="$ZAVEDENIE" >    
			
			
				<p align='center'><strong><img alt='фото' src='http://www.trmk.idhost.kz/1/personal/foto/upload/$idn.jpg' width='200' height='266'></strong></p>
		
				<input name="TIP"  type="hidden"  value="$TIP" disabled>  
				
				<input name="TIP"  type="hidden"  value="$TIP" >  
				
				Фамилия: <strong>$FAM</strong>	<br>
				<input name="FAM"  type="hidden"  value="$FAM"  >  
				Имя: <strong>$IMA</strong>			<br>
				<input name="IMA"  type="hidden"  value="$IMA"  > 
				Отчество: <strong>$OTCH</strong>		<br>
				<input name="OTCH"  type="hidden"  value="$OTCH"  >
			
			</fieldset>
			<fieldset class="fieldset1">
			<legend>Общие данные </legend>
				Пол <select name="POL" id="POL"   >
                <option value="$POL">$POL</option>
                <option value="муж">муж</option>
				<option value="жен">жен</option>
				</select>
				Возраст    <strong>$POLNLET</strong>     
				<br>
				
				Дата рождения  	
														
					<select name="denrod" id="denrod"  >			
					<option value="$denrod">$denrod</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>
						<select name="mesrod" id="mesrod"  >
						<option value="$mesrod">$mesrod</option>
						<option value="январь">январь</option>
						<option value="февраль">февраль</option>
						<option value="март">март</option>
						<option value="апрель">апрель</option>
						<option value="май">май</option>
						<option value="июнь">июнь</option>
						<option value="июль">июль</option>
						<option value="август">август</option>
						<option value="сентябрь">сентябрь</option>
						<option value="октябрь">октябрь</option>
						<option value="ноябрь">ноябрь</option>
						<option value="декабрь">декабрь</option>
						</select>
							<select name="godrod" id="godrod"  >
							<option value="$godrod">$godrod</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1943">1943</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							</select>
							<strong>$DATAROG</strong>
	
					<br>
				Национальность   <input name="NACION"  type="text"  value="$NACION"  >    

				ИНН     <input name="IIN"  type="text"  value="$IIN">     
				</fieldset>
			<fieldset class="fieldset1">
			<legend>Контактные данные </legend>
				Домашний телефон  8(71436)   <input name="NOMTELEF"  type="text"  value="$NOMTELEF" maxlength="5" size="5">  
				Рабочий телефон  8(71436)   <input name="RABNOMTELEF"  type="text"  value="$RABNOMTELEF" maxlength="5" size="5">   	
				Сотовый телефон  8    
						<select name="CODOPER" id="CODOPER"  >
						<option value="$CODOPER">$CODOPER</option>
						<option value="777">777</option>
						<option value="705">705</option>
						<option value="775">775</option>
						<option value="701">701</option>
						<option value="702">702</option>
						<option value="700">700</option>
						<option value="707">707</option>
						</select>
				
				<input name="COTNOMTELEF"  type="text"  value="$COTNOMTELEF" maxlength="7" size="7">  <br> 	
				Е-mail     <input name="COD"  type="text"  value="$COD">        
				Web-сайт    <input name="WEB"  type="text"  value="$WEB"  >              <br>
					
			</fieldset>
					<fieldset class="fieldset1">
					<legend>Образование</legend>
					Образование    
					<select name="OBRAZOV" id="OBRAZOV">
					<option value="$OBRAZOV">$OBRAZOV</option>
					<option value="высшее">высшее</option>
					<option value="сред/спец">сред/спец</option>
					<option value="среднее">среднее</option>
					</select>
					
					Специальность     <input name="SPECIALN"  type="text"  value="$SPECIALN">       <br>
					Учебное заведение (ВУЗ, колледж)    <input name="UCHZAVOKON"  type="text"  value="$UCHZAVOKON">     
					год окон.		<select name="GODZAKONBUZ" id="GODZAKONBUZ"  >
							<option value="$GODZAKONBUZ">$GODZAKONBUZ</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1943">1943</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>							
							
							</select>
					 <br>
HERE;

						echo 	"Предмет по диплому";
						include ("blocks/bd.php");
						$result = mysql_query("SELECT * FROM special");

						echo "<select name='PREDMET' id='PREDMET' >";
						echo "<option value=$PREDMET>$PREDMET</option>";
						do 
						{
						$k=$myrow["predmet"];

						echo "<option value='$k'> $k</option>";
						}
						while ($myrow = mysql_fetch_array($result));
						echo "</select><br>";
print<<<HERE
						
						</fieldset>
						
						
						
							</fieldset>
					<fieldset class="fieldset1">
					<legend>Второе образование</legend>
					Образование    
					<select name="OBRAZOV2" id="OBRAZOV2">
					<option value="$OBRAZOV2">$OBRAZOV2</option>
					<option value="высшее">высшее</option>
					<option value="сред/спец">сред/спец</option>
					<option value="среднее">среднее</option>
					</select>
					
					Специальность     <input name="SPECIALN2"  type="text"  value="$SPECIALN2">     <br> 
					Учебное заведение (ВУЗ, колледж)    <input name="UCHZAVOKON2"  type="text"  value="$UCHZAVOKON2">    
					год окон.		<select name="GODZAKONBUZ2" id="GODZAKONBUZ2"  >
							<option value="$GODZAKONBUZ2">$GODZAKONBUZ2</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1943">1943</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>	
							</select>
				 <br>
HERE;

						echo 	"Предмет по диплому";
						include ("blocks/bd.php");
						$result = mysql_query("SELECT * FROM special");

						echo "<select name='PREDMET2' id='PREDMET2' >";
						echo "<option value=$PREDMET2>$PREDMET2</option>";
						do 
						{
						$k=$myrow["predmet"];

						echo "<option value='$k'> $k</option>";
						}
						while ($myrow = mysql_fetch_array($result));
						echo "</select>";
print<<<HERE
						Второе образование     <input name="VTOROEOBR"  type="text"  value="$VTOROEOBR"> 	<br>
						Заочное обучение     <input name="ZAOCHOBUCH"  type="text"  value="$ZAOCHOBUCH"> 
						</fieldset>
						
			<fieldset class="fieldset1">
			<legend>Педагогические сведения</legend>
					Должность         
					<select name="DOLG" id="DOLG"  >
					<option value="$DOLG">$DOLG</option>
					<option value="учитель">учитель</option>
					<option value="воспитатель">воспитатель</option>
					</select>
					
HERE;
						


				
				
print<<<HERE
		
			    Нагрузка		<select name="NAGRUZ" id="NAGRUZ"  >
				<option value="$NAGRUZ">$NAGRUZ</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				</select>
				
				
				Стаж     
				<select name="STAG" id="STAG"  >
				<option value="$STAG">$STAG</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				</select>
								
				Язык обучения    <select name="IAZOBUCH" id="IAZOBUCH"   >
                <option value="$IAZOBUCH">$IAZOBUCH</option>
                <option value="казахский">казахский</option>
				<option value="русский">русский</option>
				<option value="смешанный">смешанный</option>				
				</select>
				 
				
				
				
		</fieldset>

</div>
<div id="b">

		<fieldset class="fieldset1">
		<legend>Категория </legend>
				Категория   <select name="KATEGOR" id="KATEGOR"   >
                <option value="$KATEGOR">$KATEGOR</option>
                <option value="высшая">высшая</option>
				<option value="первая">первая</option>
                <option value="вторая">вторая</option>
				<option value="б/к">б/к</option>			
				</select>
				 				
				
				Год получения категории  
				<select name="GODATTES" id="GODATTES"   >
                <option value="$GODATTES">$GODATTES</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				</select>
				 <br>


	</fieldset>
		<fieldset class="fieldset1">
		<legend>Курсовая переподготовка</legend>
				
				
				Год прохождения  курсов    		<select name="KURSI" id="KURSI"   >
                <option value="$KURSI">$KURSI</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				</select>
				

				
				
				
				Место прохождения курсов <input name="MESTOKURS"  type="text"   value="$MESTOKURS"><br>
				Тема курсов     <br><textarea name="TEMAKURS" cols="90">$TEMAKURS</textarea><br>

				Планируемый год прохождения курсов   
				<select name="PLANKURS" id="PLANKURS"   >
                <option value="$PLANKURS">$PLANKURS</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				</select>
				 <br>
				
				
				

				</fieldset>

				<fieldset class="fieldset1">
				<legend>Методическая работа </legend>
				Методическая тема <br> <textarea name="METTEMA" cols="90">$METTEMA</textarea><br>
				Проблемная тема            <br><textarea name="PPOTEMA" cols="90">$PPOTEMA</textarea><br>

				</fieldset>
<fieldset class="fieldset1">
				<legend>Обобщение ПО </legend>

				Место обобщения передогого опыта     <input name="PPOVIBOR"  type="text"  value="$PPOVIBOR">  
				
				Год обобщения передогого опыта 
				<select name="PPOGOD" id="PPOGOD"   >
                <option value="$PPOGOD">$PPOGOD</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				</select>
				 
				
				 <br> 
				УРОВЕНЬ    
				<select name="PPOUROVEN" id="PPOUROVEN"   >
                <option value="$PPOUROVEN">$PPOUROVEN</option>
                <option value="республиканский">республиканский</option>
				<option value="областной">областной</option>
                <option value="районный">районный</option>
				<option value="школьный">школьный</option>			
				</select>
				 <br>  
				
				
				
				Изданные методические пособия 	  <br><textarea name="IZDANMETOD" cols="90">$IZDANMETOD</textarea><br>
				Республиканского уровня       <br><textarea name="IZDANRESPU" cols="90">$IZDANRESPU</textarea><br>
				
			</fieldset>
				<fieldset class="fieldset1">
				<legend>Награды и достижения</legend>
				
				Награды           <br><textarea name="NAGRADI" cols="90">$NAGRADI</textarea><br>
				</fieldset>

				<fieldset class="fieldset1">
				<legend>Дополнительные сведения</legend>
				Имеется ли у Вас домашный компьютер         
				<select name="KOMP" id="KOMP"  >
				<option value="$KOMP">$KOMP</option>
				<option value="да">да</option>
				<option value="нет">нет</option>
				</select> 
				Имеется подключение к сети интернет (дома)        
				<select name="INTERNETDOMA" id="INTERNETDOMA"  >
				<option value="$INTERNETDOMA">$INTERNETDOMA</option>
				<option value="да">да</option>
				<option value="нет">нет</option>
				</select><br>  
				
								
				Общественная работа     <input name="OBCHRAB"  type="text"  value="$OBCHRAB"> 
				Увлечения     <input name="UVLECHENIE"  type="text"  value="$UVLECHENIE"> <br>
			
			</fieldset>
						<fieldset class="fieldset1">
				<legend>Дата и время последнего обновления анкеты</legend>
		 <h4>$DATAOBNOV</h4>
					</fieldset>
            
		
HERE

?>
<center>
<input type="submit" name="submit" id="submit" value="<  < < << Передать и сохранить  данные >> >  >  >">
</center>




