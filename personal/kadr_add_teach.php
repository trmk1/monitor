<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->



		

 <?php
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php'); 
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');

// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.  */
if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['TIP']))		{$TIP = $_POST['TIP']; 				if ($TIP == ''){unset($TIP);}}
if (isset($_POST['FAM']))		{$FAM = $_POST['FAM']; 				if ($FAM == ''){unset($FAM);}}
if (isset($_POST['IMA']))		{$IMA = $_POST['IMA']; 				if ($IMA == ''){unset($IMA);}}
if (isset($_POST['OTCH']))		{$OTCH = $_POST['OTCH']; 				if ($OTCH == ''){unset($OTCH);}}
if (isset($_POST['SPECIALN']))		{$SPECIALN = $_POST['SPECIALN']; 			if ($SPECIALN == ''){unset($SPECIALN);}}
if (isset($_POST['DATAROG']))		{$DATAROG = $_POST['DATAROG']; 				if ($DATAROG == ''){unset($DATAROG);}}
if (isset($_POST['NACION']))		{$NACION = $_POST['NACION']; 				if ($NACION == ''){unset($NACION);}}
if (isset($_POST['IAZOBUCH']))		{$IAZOBUCH = $_POST['IAZOBUCH']; 			if ($IAZOBUCH == ''){unset($IAZOBUCH);}}
if (isset($_POST['KATEGOR']))		{$KATEGOR = $_POST['KATEGOR']; 				if ($KATEGOR == ''){unset($KATEGOR);}}if (isset($_POST['IAZOBUCH']))		{$IAZOBUCH = $_POST['IAZOBUCH']; 				if ($IAZOBUCH == ''){unset($IAZOBUCH);}}
if (isset($_POST['GODATTES']))		{$GODATTES = $_POST['GODATTES']; 			if ($GODATTES == ''){unset($GODATTES);}}
if (isset($_POST['OBRAZ']))		{$OBRAZ = $_POST['OBRAZ']; 			if ($OBRAZ == ''){unset($OBRAZ);}}
if (isset($_POST['UCHZAVOKON']))	{$UCHZAVOKON = $_POST['UCHZAVOKON']; 		if ($UCHZAVOKON == ''){unset($UCHZAVOKON);}}
if (isset($_POST['STAG']))		  {$STAG = $_POST['STAG']; 				  if ($STAG == ''){unset($STAG);}}
if (isset($_POST['PREDMET']))		{$PREDMET = $_POST['PREDMET']; 				if ($PREDMET == ''){unset($PREDMET);}}
if (isset($_POST['KURSI']))		  {$KURSI = $_POST['KURSI']; 				  if ($KURSI == ''){unset($KURSI);}}
if (isset($_POST['PLANKURS']))		{$PLANKURS = $_POST['PLANKURS']; 				if ($PLANKURS == ''){unset($PLANKURS);}}
if (isset($_POST['POLNLET']))		{$POLNLET = $_POST['POLNLET']; 				if ($POLNLET == ''){unset($POLNLET);}}
if (isset($_POST['NAGRUZ']))		{$NAGRUZ = $_POST['NAGRUZ']; 				if ($NAGRUZ == ''){unset($NAGRUZ);}}
if (isset($_POST['DOLG']))		{$DOLG = $_POST['DOLG']; 				if ($DOLG == ''){unset($DOLG);}}
if (isset($_POST['ZAOCHOBUCH']))		{$ZAOCHOBUCH = $_POST['ZAOCHOBUCH']; 				if ($ZAOCHOBUCH == ''){unset($ZAOCHOBUCH);}}
if (isset($_POST['NAGRADI']))		{$NAGRADI = $_POST['NAGRADI']; 				if ($NAGRADI == ''){unset($NAGRADI);}}
if (isset($_POST['NOMUDOSTOV']))		{$NOMUDOSTOV = $_POST['NOMUDOSTOV']; 				if ($NOMUDOSTOV == ''){unset($NOMUDOSTOV);}}
if (isset($_POST['NOMTELEF']))		{$NOMTELEF = $_POST['NOMTELEF']; 				if ($NOMTELEF == ''){unset($NOMTELEF);}}
if (isset($_POST['OBCHRAB']))		{$OBCHRAB = $_POST['OBCHRAB']; 				if ($OBCHRAB == ''){unset($OBCHRAB);}}
if (isset($_POST['POL']))		{$POL = $_POST['POL']; 				if ($POL == ''){unset($POL);}}
if (isset($_POST['UVLECHENIE']))		{$UVLECHENIE = $_POST['UVLECHENIE']; 				if ($UVLECHENIE == ''){unset($UVLECHENIE);}}
if (isset($_POST['GODTESTIR']))		{$GODTESTIR = $_POST['GODTESTIR']; 				if ($GODTESTIR == ''){unset($GODTESTIR);}}
if (isset($_POST['METTEMA']))		{$METTEMA = $_POST['METTEMA']; 				if ($METTEMA == ''){unset($METTEMA);}}
if (isset($_POST['MESTOTEST']))		{$MESTOTEST = $_POST['MESTOTEST']; 				if ($MESTOTEST == ''){unset($MESTOTEST);}}
if (isset($_POST['MESTOKURS']))		{$MESTOKURS = $_POST['MESTOKURS']; 				if ($MESTOKURS == ''){unset($MESTOKURS);}}
if (isset($_POST['TEMAKURS']))		{$TEMAKURS = $_POST['TEMAKURS']; 				if ($TEMAKURS == ''){unset($TEMAKURS);}}
if (isset($_POST['PREPPREDM']))		{$PREPPREDM = $_POST['PREPPREDM']; 				if ($PREPPREDM == ''){unset($PREPPREDM);}}
if (isset($_POST['VTOROEOBR']))		{$VTOROEOBR = $_POST['VTOROEOBR']; 				if ($VTOROEOBR == ''){unset($VTOROEOBR);}}
if (isset($_POST['PPOVIBOR']))		{$PPOVIBOR = $_POST['PPOVIBOR']; 				if ($PPOVIBOR == ''){unset($PPOVIBOR);}}
if (isset($_POST['PPOTEMA']))		{$PPOTEMA = $_POST['PPOTEMA']; 				if ($PPOTEMA == ''){unset($PPOTEMA);}}
if (isset($_POST['PPOGOD']))		{$PPOGOD = $_POST['PPOGOD']; 				if ($PPOGOD == ''){unset($PPOGOD);}}
if (isset($_POST['PPOUROVEN']))		{$PPOUROVEN = $_POST['PPOUROVEN']; 				if ($PPOUROVEN == ''){unset($PPOUROVEN);}}
if (isset($_POST['IZDANMETOD']))		{$IZDANMETOD = $_POST['IZDANMETOD']; 				if ($IZDANMETOD == ''){unset($IZDANMETOD);}}
if (isset($_POST['IZDANRESPU']))		{$IZDANRESPU = $_POST['IZDANRESPU']; 				if ($IZDANRESPU == ''){unset($IZDANRESPU);}}
if (isset($_POST['RNN']))		{$RNN = $_POST['RNN']; 				if ($RNN == ''){unset($RNN);}}
if (isset($_POST['SIK']))		{$SIK = $_POST['SIK']; 				if ($SIK == ''){unset($SIK);}}
if (isset($_POST['IIN']))		{$IIN = $_POST['IIN']; 				if ($IIN == ''){unset($IIN);}}


if (isset($_POST['jaz'])) {$jaz = $_POST['jaz'];  		if ($jaz == '') {unset($jaz);}}

 $title='сохранение записи  учителя'.''.$FAM.''.$IMA.''.$OTCH.' БД "учителя"';

?>

<title>Кадры </title>

<table width="690" border="2" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF" class="main_border">
 <tr>
  <td><
 
 
 </td>  <td>
  <?
/* 	$ZAVEDENIE=$myrow[ZAVEDENIE]; $TIP=$myrow[TIP]; $FAM=$myrow[FAM]; $IMA=$myrow[IMA]; $OTCH=$myrow[OTCH]; $SPECIALN=$myrow[SPECIALN]; $DATAROG=$myrow[DATAROG]; $NACION=$myrow[NACION]; $IAZOBUCH=$myrow[IAZOBUCH]; $KATEGOR=$myrow[KATEGOR]; $GODATTES=$myrow[GODATTES]; $OBRAZ=$myrow[OBRAZ]; 				$UCHZAVOKON=$myrow[UCHZAVOKON]; $STAG=$myrow[STAG];				$PREDMET=$myrow[PREDMET]; $KURSI=$myrow[KURSI]; $PLANKURS=$myrow[PLANKURS]; 				$METTEMA=$myrow[METTEMA]; $POLNLET=$myrow[POLNLET]; $NAGRUZ=$myrow[NAGRUZ]; 				$DOLG=$myrow[DOLG];	$ZAOCHOBUCH=$myrow[ZAOCHOBUCH];	$NAGRADI=$myrow[NAGRADI];				$NOMUDOSTOV=$myrow[NOMUDOSTOV];	$NOMTELEF=$myrow[NOMTELEF];	$OBCHRAB=$myrow[OBCHRAB];			$POL=$myrow[POL];	$UVLECHENIE=$myrow[UVLECHENIE];	$GODTESTIR=$myrow[GODTESTIR];				$MESTOTEST=$myrow[MESTOTEST];	$MESTOKURS=$myrow[MESTOKURS];	$TEMAKURS=$myrow[TEMAKURS];					$PREPPREDM=$myrow[PREPPREDM];	$VTOROEOBR=$myrow[VTOROEOBR]; 	$PPOVIBOR=$myrow[PPOVIBOR];					$PPOTEMA=$myrow[PPOTEMA];	$PPOGOD=$myrow[PPOGOD]; 	$PPOUROVEN=$myrow[PPOUROVEN];		$IZDANMETOD=$myrow[IZDANMETOD];	$IZDANRESPU=$myrow[IZDANRESPU]; 	$RNN=$myrow[RNN];				 	$SIK=$myrow[SIK];	$IIN=$myrow[IIN];	$COD=$myrow[COD]; 	 */
/* Здесь пишем что можно заносить информацию в базу predmet*/
		$today = date("d.m.y, H:i:s"); //п
		$TIP='NEW';
//	echo $sh, $ZAVEDENIE , $TIP , $FAM , $OTCH , $SPECIALN , $DATAROG , 	 $NACION ,	 $IAZOBUCH ,	 $KATEGOR ,	 $GODATTES ,	 $OBRAZ ,	 $UCHZAVOKON ,	 $STAG ,	 $PREDMET ,	 $KURSI ,	 $PLANKURS ,	 $METTEMA ,	 $POLNLET ,	 $NAGRUZ ,	 $DOLG ,	 $ZAOCHOBUCH ,	 $NAGRADI ,	 $NOMUDOSTOV ,	 $NOMTELEF ,	 $OBCHRAB ,	 $POL ,	 $UVLECHENIE ,	 $GODTESTIR ,	 $MESTOTEST ,	 $MESTOKURS ,	 $TEMAKURS ,	 $PREPPREDM ,	 $VTOROEOBR ,	 $PPOVIBOR ,	 $PPOTEMA ,	 $PPOGOD ,	 $PPOUROVEN ,	 $IZDANMETOD ,	 $IZDANRESPU ,	 $RNN ,	 $SIK ,	 $IIN ;
// &&	isset($SPECIALN) &&	isset($DATAROG) &&	isset($NACION) &&	isset($IAZOBUCH) &&	isset($KATEGOR) &&	isset($GODATTES) &&	isset($OBRAZ) &&	isset($UCHZAVOKON) &&	isset($STAG) &&	isset($PREDMET) &&	isset($KURSI) &&	isset($PLANKURS)&&	isset($METTEMA)&&	isset($POLNLET) &&	isset($NAGRUZ) &&	isset($DOLG) &&	isset($ZAOCHOBUCH) &&	isset($NAGRADI) &&	isset($NOMUDOSTOV) &&	isset($NOMTELEF)&&	isset($OBCHRAB)&&	isset($POL) &&	isset($UVLECHENIE)&&	isset($GODTESTIR)&&	isset($MESTOTEST)&&	isset($MESTOKURS) &&	isset($TEMAKURS)&&	isset($PREPPREDM)&&	isset($VTOROEOBR)&&	isset($PPOVIBOR)&&	isset($PPOTEMA) &&	isset($PPOGOD) &&	isset($PPOUROVEN) &&	isset($IZDANMETOD) &&	isset($IZDANRESPU) &&	isset($RNN) &&	isset($SIK) &&	isset($IIN)
		
	// удал проб
		$FAM = str_replace(" ", "", $FAM);
		$IMA = str_replace(" ", "", $IMA);
		$OTCH = str_replace(" ", "", $OTCH);
				
		$today = date("d.m.y");
		$tod = date("H:i:s");
		$DATAOBNOV=$today.' '.$tod;

		
		if 	( 	isset($ZAVEDENIE) &&	isset($FAM) &&	isset($IMA) &&	isset($OTCH) && (strlen($FAM)>1 ) && (strlen($IMA)>1 ) )

		{	$result = mysql_query ("INSERT INTO AA (ZAVEDENIE, raion, oblast, TIP, FAM, IMA, OTCH, SPECIALN, DATAROG, NACION, IAZOBUCH, KATEGOR, GODATTES,	 OBRAZOV, UCHZAVOKON, STAG,	PREDMET, KURSI, PLANKURS, METTEMA, POLNLET, NAGRUZ, DOLG, ZAOCHOBUCH, NAGRADI, NOMUDOSTOV, NOMTELEF, OBCHRAB, POL, UVLECHENIE, GODTESTIR, MESTOTEST, MESTOKURS,	TEMAKURS, PREPPREDM, VTOROEOBR, PPOVIBOR, PPOTEMA, PPOGOD, PPOUROVEN, IZDANMETOD, IZDANRESPU, RNN, SIK, IIN, DATAOBNOV) 
		VALUES ('$ZAVEDENIE', '$raion', '$oblast', '$TIP', '$FAM', '$IMA', '$OTCH', '$SPECIALN', '$DATAROG', '$NACION',	'$IAZOBUCH', '$KATEGOR', '$GODATTES', '$OBRAZ',	'$UCHZAVOKON',	'$STAG',	'$PREDMET',	'$KURSI',	'$PLANKURS',	'$METTEMA',	'$POLNLET',	'$NAGRUZ',	'$DOLG', '$ZAOCHOBUCH',	'$NAGRADI',	'$NOMUDOSTOV',	'$NOMTELEF',	'$OBCHRAB',	'$POL',	'$UVLECHENIE',	'$GODTESTIR',	'$MESTOTEST',	'$MESTOKURS',	'$TEMAKURS',	'$PREPPREDM',	'$VTOROEOBR',	'$PPOVIBOR',	'$PPOTEMA',	'$PPOGOD',	'$PPOUROVEN',	'$IZDANMETOD',	'$IZDANRESPU',	'$RNN',	'$SIK',	'$IIN', '$DATAOBNOV')");
		if ($result == 'true') {echo "<p>  успешно добавлено!</p>"; echo "<a href='kadr_obr.php'>Продолжить  </a>";}	
		else {echo "<p>Ваша информация не добавлена Ошибка базы данных!</p>"; echo "<a href='kadr_obr.php'>Продолжить  </a>";}	}
	 else 	{echo "<p><strong>Вы ввели не всю информацию, поэтому данные в базу не могут быть сохранены.  </strong></p>";}	

			
?>

 
  
  </td>
 </tr>
</table>


		

		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<? include ("blocks/footer.php");?> 
</body>
</html>


