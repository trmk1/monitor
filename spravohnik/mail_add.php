<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		








<title> �� "����������� ������ ����" </title>





<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
/* ���� ���������� � ���������� ������� $_POST['title'] ���. ������, �� �� ������� ������� ���������� �� ��. ���� ���������� ������, �� ���������� ����������.   */
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}
?> 



<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="mail_add_obr.php" method="post" enctype="multipart/form-data" name="form1">


<label> �� "����������� ������ ����"</label>

<div id="a">
<fieldset class="fieldset1">
<legend>������� ������</legend>


<?

print<<<HERE

����������� ����� �����  (��������: user@mail.kz)  <br>  
<input name="mail"   size="100" type="text" >   <br> 





HERE;


?>	





</fieldset>

<input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
</div>		  

</body>
</html>



		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
