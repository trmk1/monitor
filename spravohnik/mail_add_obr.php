<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
		
		
		
 <?php
// if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
scool==$scool;

if (isset($_POST['ZAVEDENIE']))		{$ZAVEDENIE = $_POST['ZAVEDENIE']; 				if ($ZAVEDENIE == ''){unset($ZAVEDENIE);}}
if (isset($_POST['mail']))			{$mail = $_POST['mail']; 							if ($mail == ''){unset($mail);}}

?>




<title>���������� </title>
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
		
		$email=$mail;
		if(!eregi("^[a-zA-Z0-9\-\.\_]+@[a-z0-9]+\.[a-z]+$",$email))
		{
		echo("�� ������� ������������ email");	unset($mail);
		}
		else
		{
		
		echo("�� ������� ���������� email");
	
		
		} 
		
		$today = date("d.m.y, H:i:s"); //�
		$TIP='NEW'; 
		
		// /// idn 	tel 	ZAVEDENIE 	TIP 	ISPRAVNOS 	GODisset($ISPRAVNOS)tel &&
		$ZAVEDENIE=$user; 

		if 	( 		isset($mail)  )
			
		{	$result = mysql_query ("INSERT INTO mail (idn, 	TIP, 	ZAVEDENIE, raion, oblast,	mail, DATAOBNOV ) 
							               VALUES ('$idn', '$TIP', '$ZAVEDENIE', '$raion', '$oblast', '$mail', '$today'  )");
		if ($result == 'true') {echo "<p>  ������� ���������!</p>"; echo "<a href='mail.php'>����������  </a>";}	
		else {echo "<p>���� ���������� �� ��������� ������ ���� ������!</p>"; echo "<a href='mail.php'>����������  </a>";}	}
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
