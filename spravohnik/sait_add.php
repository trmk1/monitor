<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		
		
		<title> �� "����� ����" </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--���������� ����� �����-->


<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
?> 

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="sait_add_obr.php" method="post" enctype="multipart/form-data" name="form1">


<div id="a">
<fieldset class="fieldset1">
<legend>������� ������</legend>

<?
print<<<HERE
����� ����� � ���� �������� (��������: http://www.mysite.kz)  <br>  
<input name="adres"   size="90" type="text"  value="http://">   <br> 
��������� ����� 
<select name="sost" id="sost"   >
<option value="$sost">$sost</option>
<option value="���������">���������</option>
<option value="�� ���������">�� ���������</option>
<option value="���������">���������</option>		
</select>
<br>
����� ����������� ����� �������������� �����   <br>  
<input name="adresadmin"   size="10" type="text"  value="">   <br> 
HERE;
?>	

</fieldset>

<input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
</div>		  


		
		
	</td> 
</table>		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
