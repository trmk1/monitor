<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
		
		






<?php
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;
/* ���� ���������� � ���������� ������� $_POST['title'] ���. ������, �� �� ������� ������� ���������� �� ��. ���� ���������� ������, �� ���������� ����������.  */
if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['adres']))			{$adres = $_POST['adres']; 							if ($adres == ''){unset($adres);}}
if (isset($_POST['mestoust']))		{$mestoust = $_POST['mestoust']; 				if ($mestoust == ''){unset($mestoust);}}
if (isset($_POST['sost']))			{$sost = $_POST['sost']; 							if ($sost == ''){unset($sost);}}
if (isset($_POST['adresadmin']))			{$adresadmin = $_POST['adresadmin']; 						if ($adresadmin == ''){unset($adresadmin);}}
?>


<title>�� "����� ���� </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
<!--���������� ����� �����-->

</div>
<table width="690" border="2" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF" class="main_border">
<tr>
<td>


</td>  <td>
<?
$today = date("d.m.y, H:i:s"); //�
$TIP='NEW'; 

// /// idn 	tel 	ZAVEDENIE 	TIP 	ISPRAVNOS 	GODisset($ISPRAVNOS)tel &&
$ZAVEDENIE=$user;    


if 	( 		isset($adres) &&  isset($sost) &&isset($adresadmin) )

{	$result = mysql_query ("INSERT INTO sait (idn, 	TIP, 	ZAVEDENIE, raion, oblast,	adres,  sost, adresadmin, DATAOBNOV ) 
VALUES ('$idn', '$TIP', '$ZAVEDENIE',  '$raion', '$oblast',  '$adres', '$sost',  '$adresadmin', '$today' )");
if ($result == 'true') {echo "<p>  ������� ���������!</p>"; echo "<a href='sait.php'>����������  </a>";}	
else {echo "<p>���� ���������� �� ��������� ������ ���� ������!</p>"; echo "<a href='sait.php'>����������  </a>";}	}
else 	{echo "<p><strong>�� ����� �� ��� ����������, ������� ������ � ���� �� ����� ���� ���������. <a href='javascript:history.back(1)'>�����</a>  </strong></p>";}	

?>


</td>
</tr>
</table>










		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
