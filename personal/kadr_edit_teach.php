<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



 
 <?php
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
/* ���� ���������� � ���������� ������� $_POST['title'] ���. ������, �� �� ������� ������� ���������� �� ��. ���� ���������� ������, �� ���������� ����������.  */
if (isset($_POST['idn']))			{$idn = $_POST['idn']; 							if ($idn == ''){unset($idn);}}
// echo $idn;
if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['TIP']))		{$TIP = $_POST['TIP']; 				if ($TIP == ''){unset($TIP);}}
if (isset($_POST['FAM']))		{$FAM = $_POST['FAM']; 				if ($FAM == ''){unset($FAM);}}
if (isset($_POST['IMA']))		{$IMA = $_POST['IMA']; 				if ($IMA == ''){unset($IMA);}}
if (isset($_POST['OTCH']))		{$OTCH = $_POST['OTCH']; 				if ($OTCH == ''){unset($OTCH);}}

if (isset($_POST['GODZAKONBUZ']))		{$GODZAKONBUZ = $_POST['GODZAKONBUZ']; 				if ($GODZAKONBUZ == ''){unset($GODZAKONBUZ);}}


if (isset($_POST['SPECIALN']))		{$SPECIALN = $_POST['SPECIALN']; 			if ($SPECIALN == ''){unset($SPECIALN);}}
if (isset($_POST['denrod']))		{$denrod = $_POST['denrod']; 				if ($denrod == ''){unset($denrod);}}
if (isset($_POST['mesrod']))		{$mesrod = $_POST['mesrod']; 				if ($mesrod == ''){unset($mesrod);}}
if (isset($_POST['godrod']))		{$godrod = $_POST['godrod']; 				if ($godrod == ''){unset($godrod);}}
// if (isset($_POST['DATAROG']))		{$DATAROG = $_POST['DATAROG']; 				if ($DATAROG == ''){unset($DATAROG);}}
if (isset($_POST['NACION']))		{$NACION = $_POST['NACION']; 				if ($NACION == ''){unset($NACION);}}
if (isset($_POST['IAZOBUCH']))		{$IAZOBUCH = $_POST['IAZOBUCH']; 			if ($IAZOBUCH == ''){unset($IAZOBUCH);}}
if (isset($_POST['KATEGOR']))		{$KATEGOR = $_POST['KATEGOR']; 				if ($KATEGOR == ''){unset($KATEGOR);}}if (isset($_POST['IAZOBUCH']))		{$IAZOBUCH = $_POST['IAZOBUCH']; 				if ($IAZOBUCH == ''){unset($IAZOBUCH);}}
if (isset($_POST['GODATTES']))		{$GODATTES = $_POST['GODATTES']; 			if ($GODATTES == ''){unset($GODATTES);}}
if (isset($_POST['OBRAZOV']))		{$OBRAZOV = $_POST['OBRAZOV']; 			if ($OBRAZOV == ''){unset($OBRAZOV);}}
if (isset($_POST['UCHZAVOKON']))	{$UCHZAVOKON = $_POST['UCHZAVOKON']; 		if ($UCHZAVOKON == ''){unset($UCHZAVOKON);}}
if (isset($_POST['STAG']))		  {$STAG = $_POST['STAG']; 				  if ($STAG == ''){unset($STAG);}}
if (isset($_POST['PREDMET']))		{$PREDMET = $_POST['PREDMET']; 				if ($PREDMET == ''){unset($PREDMET);}}
if (isset($_POST['KURSI']))		  {$KURSI = $_POST['KURSI']; 				  if ($KURSI == ''){unset($KURSI);}}
if (isset($_POST['PLANKURS']))		{$PLANKURS = $_POST['PLANKURS']; 				if ($PLANKURS == ''){unset($PLANKURS);}}
// if (isset($_POST['POLNLET']))		{$POLNLET = $_POST['POLNLET']; 				if ($POLNLET == ''){unset($POLNLET);}}
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
if (isset($_POST['COD']))		{$COD= $_POST['COD']; 				if ($COD == ''){unset($COD);}}

if (isset($_POST['jaz'])) {$jaz = $_POST['jaz'];  		if ($jaz == '') {unset($jaz);}}

if (isset($_POST['OBRAZOV2']))		{$OBRAZOV2 = $_POST['OBRAZOV2']; 			if ($OBRAZOV2 == ''){unset($OBRAZOV2);}}
if (isset($_POST['SPECIALN2']))		{$SPECIALN2 = $_POST['SPECIALN2']; 			if ($SPECIALN2 == ''){unset($SPECIALN2);}}
if (isset($_POST['UCHZAVOKON2']))	{$UCHZAVOKON2 = $_POST['UCHZAVOKON2']; 		if ($UCHZAVOKON2 == ''){unset($UCHZAVOKON2);}}
if (isset($_POST['GODZAKONBUZ2']))		{$GODZAKONBUZ2 = $_POST['GODZAKONBUZ2']; 				if ($GODZAKONBUZ2 == ''){unset($GODZAKONBUZ2);}}
if (isset($_POST['PREDMET2']))		{$PREDMET2 = $_POST['PREDMET2']; 				if ($PREDMET2 == ''){unset($PREDMET2);}}

if (isset($_POST['RABNOMTELEF']))		{$RABNOMTELEF = $_POST['RABNOMTELEF']; 				if ($RABNOMTELEF == ''){unset($RABNOMTELEF);}}
if (isset($_POST['COTNOMTELEF']))		{$COTNOMTELEF = $_POST['COTNOMTELEF']; 				if ($COTNOMTELEF == ''){unset($COTNOMTELEF);}}
if (isset($_POST['WEB']))			{$WEB = $_POST['WEB']; 				if ($WEB == ''){unset($WEB);}}
if (isset($_POST['CODOPER']))		{$CODOPER = $_POST['CODOPER']; 				if ($CODOPER == ''){unset($CODOPER);}}
if (isset($_POST['KOMP']))		{$KOMP = $_POST['KOMP']; 				if ($KOMP == ''){unset($KOMP);}}
if (isset($_POST['INTERNETDOMA']))		{$INTERNETDOMA = $_POST['INTERNETDOMA']; 				if ($INTERNETDOMA == ''){unset($INTERNETDOMA);}}

?>



<?
if ($mesrod == '������')  $mes='01';
if ($mesrod == '�������')  $mes='02';
if ($mesrod == '����')  $mes='03';
if ($mesrod == '������')  $mes='04';
if ($mesrod == '���')  $mes='05';
if ($mesrod == '����')  $mes='6'; 
if ($mesrod == '����')  $mes='7'; 
if ($mesrod == '������')  $mes='8'; 
if ($mesrod == '��������')  $mes='9'; 
if ($mesrod == '�������')  $mes='10'; 
if ($mesrod == '������')  $mes='11'; 
if ($mesrod == '�������')  $mes='12'; 

$DATAROG=$denrod.".".$mes.".".$godrod;

$POLNLET=date('Y') - $godrod;


?>

 <tr>
  <td><?  // include ("blocks/lefttd.php"); ?> &nbsp;
 
 
 
  <?
		$today = date("d.m.y, H:i:s"); //� isset($TIP) &&&&	isset($DATAROG) &&	isset($NACION) &&	isset($IAZOBUCH) &&	isset($KATEGOR) &&	isset($GODATTES) &&	isset($OBRAZ) &&	isset($UCHZAVOKON) &&	isset($STAG) &&	isset($PREDMET) &&	isset($KURSI) &&	isset($PLANKURS)&&	isset($METTEMA)&&	isset($POLNLET) &&	isset($NAGRUZ) &&	isset($DOLG) &&	isset($ZAOCHOBUCH) &&	isset($NAGRADI) &&	isset($NOMUDOSTOV) &&	isset($NOMTELEF)&&	isset($OBCHRAB)&&	isset($POL) &&	isset($UVLECHENIE)&&	isset($GODTESTIR)&&	isset($MESTOTEST)&&	isset($MESTOKURS) &&	isset($TEMAKURS)&&	isset($PREPPREDM)&&	isset($VTOROEOBR)&&	isset($PPOVIBOR)&&	isset($PPOTEMA) &&	isset($PPOGOD) &&	isset($PPOUROVEN) &&	isset($IZDANMETOD) &&	isset($IZDANRESPU) &&	isset($RNN) &&	isset($SIK) &&	isset($IIN)
		$DATAOBNOV=$today;
		// echo $today; echo $idn;
      
		
				 if 	( 	isset($ZAVEDENIE) &&	isset($FAM) &&	isset($IMA) &&	isset($OTCH)  )
						{ 	$result = mysql_query ("UPDATE AA SET ZAVEDENIE='$ZAVEDENIE', TIP='$TIP', FAM='$FAM', RABNOMTELEF='$RABNOMTELEF', CODOPER='$CODOPER', COTNOMTELEF='$COTNOMTELEF', WEB='$WEB', IMA='$IMA', OTCH='$OTCH', SPECIALN='$SPECIALN', SPECIALN2='$SPECIALN2',   denrod='$denrod', mesrod='$mesrod', godrod='$godrod', DATAROG='$DATAROG', NACION='$NACION', IAZOBUCH='$IAZOBUCH', KATEGOR='$KATEGOR', GODATTES='$GODATTES',	 OBRAZOV='$OBRAZOV',  OBRAZOV2='$OBRAZOV2',  UCHZAVOKON='$UCHZAVOKON', UCHZAVOKON2='$UCHZAVOKON2',  STAG='$STAG',	PREDMET='$PREDMET', KURSI='$KURSI', PLANKURS='$PLANKURS', METTEMA='$METTEMA', POLNLET='$POLNLET', NAGRUZ='$NAGRUZ', DOLG='$DOLG', ZAOCHOBUCH='$ZAOCHOBUCH', NAGRADI='$NAGRADI', NOMUDOSTOV='$NOMUDOSTOV', NOMTELEF='$NOMTELEF', OBCHRAB='$OBCHRAB', POL='$POL', UVLECHENIE='$UVLECHENIE', GODTESTIR='$GODTESTIR', MESTOTEST='$MESTOTEST', MESTOKURS='$MESTOKURS',	TEMAKURS='$TEMAKURS', PREPPREDM='$PREPPREDM', VTOROEOBR='$VTOROEOBR', PPOVIBOR='$PPOVIBOR', PPOTEMA='$PPOTEMA', PPOGOD='$PPOGOD', PPOUROVEN='$PPOUROVEN', IZDANMETOD='$IZDANMETOD', IZDANRESPU='$IZDANRESPU', RNN='$RNN', SIK='$SIK',
												IIN='$IIN', COD='$COD', DATAOBNOV='$DATAOBNOV', KOMP='$KOMP',  INTERNETDOMA='$INTERNETDOMA', GODZAKONBUZ='$GODZAKONBUZ', GODZAKONBUZ2='$GODZAKONBUZ2' WHERE  idn='$idn' ") ;	}
				
				
				
/* 					
					
					
		
print<<<HERE

				
		<form action="kadr_edit_teach.php" method="post" enctype="multipart/form-data" name="form1">
 <style>
#a, #b { position: absolute; }
#a, #b { width: 30em; }
#a { left: 0; }
#b { left: 30em; }

</style>
<title> $FAM $IMA $OTCH</title>

<div id="a">
			<fieldset class="fieldset1">
			<legend>������������ ����������</legend>
				�������� ����� <input name="ZAVEDENIE"  type="text"  value="$ZAVEDENIE" disabled >     <br>
											<input name="ZAVEDENIE"  type="hidden"  value="$ZAVEDENIE" >    
				��� ������     <input name="TIP"  type="text"  value="$TIP" disabled>      <br>
									<input name="TIP"  type="hidden"  value="$TIP" >      
				������� <input name="FAM"  type="text"  value="$FAM" disabled >     <br>
								<input name="FAM"  type="hidden"  value="$FAM"  >  
				��� <input name="IMA"  type="text"  value="$IMA" disabled >         <br>
						<input name="IMA"  type="hidden"  value="$IMA"  > 
				�������� <input name="OTCH"  type="text"  value="$OTCH" disabled >    <br>
				<input name="OTCH"  type="hidden"  value="$OTCH"  >
								
								
				��� <select name="POL" id="POL"   >
                <option value=""></option>
                <option value="���">���</option>
				<option value="���">���</option>
				</select>
				

				
				
				���� ��������  <input name="DATAROG"  type="text" size="10" value="$DATAROG" >    <br>
				��������������   <input name="NACION"  type="text"  value="$NACION"  >     <br>
				���     <input name="RNN"  type="text"  value="$RNN">   <br>           
				���     <input name="SIK"  type="text"  value="$SIK">     <br>         
				���     <input name="IIN"  type="text"  value="$IIN">     <br>         
				����� ������������� ��������"     <input name="NOMUDOSTOV"  type="text"  value="$NOMUDOSTOV" maxlength="12">   <br>  
			</fieldset>
			<fieldset class="fieldset1">
			<legend>����� ������ </legend>
				
				�������     <input name="POLNLET"  type="text" size="3" value="$POLNLET">   <br>
				����� ��������     <input name="NOMTELEF"  type="text"  value="$NOMTELEF" maxlength="12">  <br> 
                �����������     <input name="OBRAZ"  type="text"  value="$OBRAZ" maxlength="12">  <br> 
				�������������     <input name="SPECIALN"  type="text"  value="$SPECIALN">      <br>
				������� ���������    <input name="UCHZAVOKON"  type="text"  value="$UCHZAVOKON">      <br>
			    ������������� �������    <input name="PREDMET"  type="text"  value="$PREDMET">      <br>
			    ��������    <input name="NAGRUZ"  type="text"  value="$NAGRUZ">      <br>
				���������     <input name="DOLG"  type="text"  value="$DOLG">      <br>
				����     <input name="STAG"  type="text" size="3"  value="$STAG">    <br>  
				���� ��������    <input name="IAZOBUCH"  type="text"  value="$IAZOBUCH">  <br>
				���������    <input name="KATEGOR"  type="text"  value="$KATEGOR">   <br>
				��� ����������    <input name="GODATTES"  type="text" size="4" value="$GODATTES">  <br>
				��� ���� ������     <input name="KURSI"  type="text" size="4"  value="$KURSI">  <br>
				����� ����������� ������ <input name="MESTOKURS"  type="text"   value="$MESTOKURS"><br>
				���� ������     <br><textarea name="TEMAKURS" cols="40">$TEMAKURS</textarea><br>
				������������� �������     <input name="PREPPREDM"  type="text"  value="$PREPPREDM"> <br>
				����������� ��� ������������ ������     <input name="PLANKURS"  type="text" size="4" value="$PLANKURS">   <br>
			</fieldset>
			</div>
<div id="b">
			<fieldset class="fieldset1">
				<legend>����� ������ </legend>
				����������� ���� <br> <textarea name="METTEMA" cols="53">$METTEMA</textarea><br>
				������� ��������     <input name="ZAOCHOBUCH"  type="text"  value="$ZAOCHOBUCH"> <br>
				�������           <br><textarea name="NAGRADI" cols="53">$NAGRADI</textarea><br>
				������������ ������     <input name="OBCHRAB"  type="text"  value="$OBCHRAB"> <br>
				���������     <input name="UVLECHENIE"  type="text"  value="$UVLECHENIE"> <br>
				��� ������������     <input name="GODTESTIR"  type="text" size="4" value="$GODTESTIR"> <br>
				����� ������������  <input name="MESTOTEST"  type="text"  value="$MESTOTEST"> <br>
			</fieldset>
			<fieldset class="fieldset1">
				<legend>����� ������ </legend>
				������ �����������     <input name="VTOROEOBR"  type="text"  value="$VTOROEOBR"> <br>
				����� ������� ���������� �����     <input name="PPOVIBOR"  type="text"  value="$PPOVIBOR">  <br>
				���������� ����            <br><textarea name="PPOTEMA" cols="53">$PPOTEMA</textarea><br>
				��� �������� ���������� ����� <input name="PPOGOD"  type="text" size="4" value="$PPOGOD">  <br>
				�������     <input name="PPOUROVEN"  type="text"  value="$PPOUROVEN">  <br>
				�������� ������������ ������� 	  <br><textarea name="IZDANMETOD" cols="53">$IZDANMETOD</textarea><br>
				���������������� ������       <br><textarea name="IZDANRESPU" cols="53">$IZDANRESPU</textarea><br>
				�-mail     <input name="COD"  type="text"  value="$COD">              <br>
			</fieldset>
            <input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
HERE;
		

		 */
		
		
		
		
			// ������������  �� � ��� �����
				
				$re = mysql_query("SELECT * FROM userlist WHERE login=$ZAVEDENIE  ");
				$myre= mysql_fetch_array($re);
				$scool=$myre[scool];
				
				
				
				// ���������� � �������
				$today = date("d.m.y"); //�
				$time = date("H:i:s"); //�
				$oper='������������ �������������� ���������_ ������ ����������'.$FAM.'_'.$IMA.'_'.$OTCH;
				$resjur = mysql_query ("INSERT INTO jurnal_vhodov (scool, date, time, oper) VALUES ('$scool',	'$today', '$time', '$oper')");

		
		
	echo '</td> <td>������� ���� ������ ���������</td>';
	
	
        
	

?>

 
  
  </td>
 </tr>
</table>



		
</body>
</html>






 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
		<!--���� �������� ����� --> 
		
		</td> 


</table>
<br><br>
 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
