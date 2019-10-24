<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--Тело страницы начало -->




		
		
		
		
		



<?

if (isset($_GET['teachedit']))  {$teachedit = $_GET['teachedit'];   		if ($teachedit == '') 	{unset($teachedit);}}

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */

// if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
// echo $teachedit;

 $title='просмотр БД "учителя"';
 $title=$title.' редактирование записи '.$teachedit;
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php'); 
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php');

?> 






<?
				$ocen='5'; 
				// Развернутое отображение данных 	id номер записи
				global $id;
				$result = mysql_query("SELECT * FROM AA WHERE idn='$teachedit' "); 
				$myrow = mysql_fetch_array ($result);
				$idn=$myrow[idn];
				// echo  "номер записи №".$id;
				$ZAVEDENIE=$myrow[ZAVEDENIE]; $TIP=$myrow[TIP]; $FAM=$myrow[FAM]; $IMA=$myrow[IMA]; $OTCH=$myrow[OTCH];  $SPECIALN=$myrow[SPECIALN]; 
				$DATAROG=$myrow[DATAROG]; $NACION=$myrow[NACION]; $IAZOBUCH=$myrow[IAZOBUCH]; $KATEGOR=$myrow[KATEGOR]; $GODATTES=$myrow[GODATTES]; 
				$OBRAZOV=$myrow[OBRAZOV]; 	$denrod=$myrow[denrod]; 	$mesrod=$myrow[mesrod]; 	$godrod=$myrow[godrod];			$UCHZAVOKON=$myrow[UCHZAVOKON]; 
				$SPECIALN=$myrow[SPECIALN]; $STAG=$myrow[STAG];			$PREDMET=$myrow[PREDMET]; $KURSI=$myrow[KURSI]; $PLANKURS=$myrow[PLANKURS]; 				
				$METTEMA=$myrow[METTEMA]; $POLNLET=$myrow[POLNLET]; $NAGRUZ=$myrow[NAGRUZ]; $DOLG=$myrow[DOLG];	$ZAOCHOBUCH=$myrow[ZAOCHOBUCH];	$NAGRADI=$myrow[NAGRADI];				
				$NOMUDOSTOV=$myrow[NOMUDOSTOV];	$NOMTELEF=$myrow[NOMTELEF];	$OBCHRAB=$myrow[OBCHRAB];			$POL=$myrow[POL];	
				$UVLECHENIE=$myrow[UVLECHENIE];	$GODTESTIR=$myrow[GODTESTIR];				$MESTOTEST=$myrow[MESTOTEST];	$MESTOKURS=$myrow[MESTOKURS];	
				$TEMAKURS=$myrow[TEMAKURS];		$PREPPREDM=$myrow[PREPPREDM];	$VTOROEOBR=$myrow[VTOROEOBR]; 	$PPOVIBOR=$myrow[PPOVIBOR];					
				$PPOTEMA=$myrow[PPOTEMA];	$PPOGOD=$myrow[PPOGOD]; 	$PPOUROVEN=$myrow[PPOUROVEN];		$IZDANMETOD=$myrow[IZDANMETOD];	$IZDANRESPU=$myrow[IZDANRESPU]; 	
				$RNN=$myrow[RNN];	$SIK=$myrow[SIK];	$IIN=$myrow[IIN];	$COD=$myrow[COD]; 	   $RABNOMTELEF=$myrow[RABNOMTELEF]; $CODOPER=$myrow[CODOPER];
				$COTNOMTELEF=$myrow[COTNOMTELEF]; $WEB=$myrow[WEB];  $DATAOBNOV=$myrow[DATAOBNOV];   $KOMP=$myrow[KOMP]; $INTERNETDOMA=$myrow[INTERNETDOMA];  $GODZAKONBUZ=$myrow[GODZAKONBUZ];  
				$OBRAZOV2=$myrow[OBRAZOV2]; $UCHZAVOKON2=$myrow[UCHZAVOKON2];  $SPECIALN2=$myrow[SPECIALN2]; $GODZAKONBUZ2=$myrow[GODZAKONBUZ2];  $PREDMET2=$myrow[PREDMET2]; 
				/* $=$myrow[];*/
			
			include ("kadr_blank.php");

?>


</td> 
</table>

		
		
		
		
		
		
		
		



		
		<!--Тело страницы конец --> 
	</td> 
</table>
<!--Подключаем нижний графический элемент-->
<?  include ("blocks/footer.php");?> 
</body>
</html>
