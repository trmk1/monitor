<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		


		
<form action="add_monitor.php" method="post"  onsubmit="return validate_form ( );">
 
<table width="700" border="1" align="center" cellpadding="0" cellspacing="0" >

<table width="600" border="0">
<div align="center">
	 
<?		
if (isset($_GET['predmet']))  {$predmet = $_GET['predmet'];   		if ($predmet == '') 	{unset($predmet);}}
if (isset($_GET['jaz']))      {$jaz = $_GET['jaz'];   		        if ($jaz == '') 	    {unset($jaz);}}
if (isset($_GET['chet']))      {$chet = $_GET['chet'];   		    if ($chet == '') 	    {unset($chet);}}
if (isset($_GET['klass']))      {$klass = $_GET['klass'];   		if ($klass == '') 	    {unset($klass);}}
if (isset($_GET['liter']))      {$liter = $_GET['liter'];   		if ($liter == '') 	    {unset($liter);}}	
include ("blocks/bd.php");
?>

<?		
			
// ������� ���-�� ������� � �������� ����
$request= mysql_query("SELECT SUM(kol) as sum FROM kol_uch WHERE ZAVEDENIE='$user' AND jaz='$jaz' AND klass='$klass' AND TIP='NEW'");    
$row=mysql_fetch_array($request);
$k0=$row['sum'];

$req= mysql_query("SELECT COUNT(kol) as sum FROM kol_uch WHERE ZAVEDENIE='$user' AND jaz='$jaz' AND klass='$klass' AND TIP='NEW'");    
$row=mysql_fetch_array($req);
$kl0=$row[0];	
echo "<br>";
echo $klass." - �����,"." ����� �������-".$kl0." ";
echo " ����� �������� � ��� -".$k0;

echo "<br><br>���������� -".$chet; 
echo " ���� �������� -".$jaz; 
echo " ������� -".$predmet; 


echo "<br> ����� - ".$klass.'"'.$liter.'"';
echo "<br>";
$rescool = mysql_query("SELECT * FROM kol_uch WHERE ZAVEDENIE='$user' AND jaz='$jaz' AND klass='$klass' AND TIP='NEW' AND liter='$liter' "); // ORDER BY `scool` ASC
$myrowscool = mysql_fetch_array($rescool);
$koluch=$myrowscool[kol];

// echo '<br>����������-'.$koluch, '���� ', $user , " ���� - ", $jaz, "�����", $klass ;

	
PRINT<<<HERE

<input name="predmet"  type="hidden" value="$predmet"  > 
<input name="jaz" type="hidden" value="$jaz"  > 
<input name="chetvert" type="hidden" value="$chet"  > 
<input name="klass" type="hidden" value="$klass"  > 
<input name="liter" type="hidden" value="$liter"  > 
<input name="kol" type="hidden" value="$koluch"   >

HERE;

?>	
<br>


	<table width="400" align="center" border="2"> 
<tr>
<td><div align="center">��� ������</div></td>
<td><div align="center">5</div></td>
<td><div align="center">4</div></td>
<td><div align="center">3</div></td>
<td><div align="center">2</div></td>
<td><div align="center">���-�� ��������</div></td>
</tr>	
 
 
 <script type="text/javascript">
<!--

function validate_form ( )
{
	valid = true;

        if ( document.contact_form.otli.value == "" )
        {
                alert ( "���������� ��������� ���� '���� ���'." );
                valid = false;
        }

        return valid;
}

//-->
</script>

	
<tr>
<td><div align="center">���-�� ������</div></td>
<td><div align="center"><input name="otli"  type="text"  onkeypress="return input_keypress(event)" SIZE="2"  > </div></td>
<td><div align="center"><input name="hori"   type="text"  onkeypress="return input_keypress(event)" SIZE="2" ></div></td>
<td><div align="center"><input name="trii"   type="text"  onkeypress="return input_keypress(event)"   SIZE="2" ></div></td>
<td><div align="center"><input name="dvai"  type="text"  onkeypress="return input_keypress(event)" SIZE="2" ></div></td>
<?
PRINT<<<HERE
<td><div align="center"><input name="hori" value="$koluch"  SIZE="2" type="text" disabled  ></div></td>

HERE;
?>


<script type=text/javascript>     function input_keypress(e) {        var code = e.charCode ? e.charCode : e.keyCode;        if (! e.shiftKey && ! e.ctrlKey && ! e.altKey && ! e.metaKey && code != 46 && (code > 31 && (code < 48 || code > 57))) return false;         return true;} </script>

	
</table>	 
<br><br>
<p align="center" >
������� ������� ������������ �������	 
<?
							// ����� �� ���� ������ ��� �������
							$rescodteach = mysql_query("SELECT * FROM teacher_predmet WHERE ( scool='$scool' AND	predmet='$predmet' AND klass='$klass' AND jaz_obuch='$jaz_obuch' ) ");	//				
							$myrowte = mysql_fetch_array($rescodteach);
							$codteach=$myrowte[cod_teach];
							// echo $codteach;
							// �� ���� ����� ������� ��� �������� �������
							$resteach = mysql_query("SELECT * FROM AA WHERE idn='$codteach' ");	//				
							$myrowtech = mysql_fetch_array($resteach);
							$FAM=$myrowtech[FAM]; $IM=$myrowtech["IMA"]; $OTC=$myrowtech["OTCH"]; 	$IM=substr( $IM, 0, 1 ); $OTC=substr( $OTC, 0, 1 ); 
							$teacher=$FAM." ".$IM." ".$OTC." ";
							// echo $teacher;
							
							// ������� � ������  ��� � ���
							$result = mysql_query("SELECT * FROM AA WHERE ( ZAVEDENIE='$user' AND	TIP='NEW') ORDER BY FAM ASC ");	//				

							echo "<select name='codteach' id='codteach' >";	
							echo "<option value=", $codteach  ,">", $teacher, "</option>";
							do 		{	
							$IM=$myrow["IMA"]; $OTC=$myrow["OTCH"];
							$IM=substr( $IM, 0, 1 ); $OTC=substr( $OTC, 0, 1 ); 
							$k=$myrow["FAM"]." ".$IM." ".$OTC;	$c=$myrow["idn"];	
							echo "<option value=",  $c,">", $k, "</option>";}
							while ($myrow = mysql_fetch_array($result));
							echo "</select>"; 

?>	 


<br><br>
���������� �������������� <input name="neattest"  type="text"  value='0' onkeypress="return input_keypress(event)" SIZE="2" > 
<br>
���������� (������� ������ �� ����������)<input name="primech"  type="text" > 
<br>

<br> <input type="submit" name="send" id="submit" value="<<<<<<<<<<<<<<  �������� � ���������  ������. >>>>>>>>>>>>>>>">
</p>
</table>
 
 </form>
 
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
