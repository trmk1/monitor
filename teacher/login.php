<p align="center">  

</p>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Анкета педагога</title>
<link href="style.css" rel="stylesheet" type="text/css">
		
<div>
  <?
  	if (isset($_POST['login']))  {$login = $_POST['login'];   		if ($login == '') 	{unset($login);}}

	if (isset($_POST['password']))  {$password = $_POST['password'];   		if ($password == '') 	{unset($password);}}
		
		// echo "login-".$login." pass - ".  $password;
		
		include ("blocks/bd.php");
		
		$result = mysql_query("SELECT * FROM AA  WHERE  idn='$login' "); // WHERE ZAVEDENIE='$user' AND TIP='NEW' ORDER BY `FAM` ASC
			
			
		//	 $number = mysql_fetch_row($result);
		//	 echo $number;
		//		{
			 
			$myrow =mysql_fetch_array($result);
            $fm=$myrow[IMA];
              
          //   if ($fam == '')   // {  echo "нет такой записи, проверьте номер"; }
              
          //        else
     
             //{
			echo "Добро пожаловать! <br>".$fm." ".$myrow[OTCH];
			$pass=$myrow[pass];
			if  ( $pass == $password) 
			
						{
							echo "<br>";
							echo "пароль верный";
							$idn=$login;   // echo  "номер записи №".$id;
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

				// преоразовани  ад в имя школы
				
				$re = mysql_query("SELECT * FROM userlist WHERE login=$ZAVEDENIE  ");
				$myre= mysql_fetch_array($re);
				$scool=$myre[scool];
				
				
				
				// сохранение в журнале
				$today = date("d.m.y"); //п
				$time = date("H:i:s"); //п
				$oper='Персональное редактирование портфолио_'.$FAM.'_'.$IMA.'_'.$OTCH;
				$resjur = mysql_query ("INSERT INTO jurnal_vhodov (scool, date, time, oper) VALUES ('$scool',	'$today', '$time', '$oper')");


				
				
							include ("kadr_blank.php");
						}
			
							else	echo "<br>"."пароль неверный"; 
			//}
				//else echo "нет такой записи, проверьте номер";
			
				?>
  

</div>
    
