<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		




<?
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
/* ���� ���������� � ���������� ������� $_POST['title'] ���. ������, �� �� ������� ������� ���������� �� ��. ���� ���������� ������, �� ���������� ����������.   */
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

?> 


<title>���������� �������</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

		<form action="kadr_add_teach.php" method="post" enctype="multipart/form-data" name="form1">


<label> ������� ������</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>������������ ����������</legend>
			<?
				echo "�������� ����� <input name='ZAVEDENIE'  type='text'  value='$scool' disabled >     <br>";
				echo "<input name='ZAVEDENIE'  type='hidden'  value='$user' >     <br>";
				
			?>	
				������� <input name="FAM"  type="text"  value="" >     <br>
				��� <input name="IMA"  type="text"  value="" >         <br>
				�������� <input name="OTCH"  type="text"  value="">    <br>
<!--					���     <input name="POL"  type="text" size="3" value="">    
				���� ��������  <input name="DATAROG"  type="text" size="10" value="">    <br>
				��������������   <input name="NACION"  type="text"  value="">     <br>
-->				
			</fieldset>
<!--			
			<fieldset class="fieldset1">
			<legend>����� ������ </legend>
				���     <input name="RNN"  type="text"  value="">   <br>           
				���     <input name="SIK"  type="text"  value="">     <br>         
				���     <input name="IIN"  type="text"  value="">     <br>         
				����� ������������� ��������"     <input name="NOMUDOSTOV"  type="text"  value="" maxlength="12">   <br>           
				�������     <input name="POLNLET"  type="text" size="3" value="">   <br>
				����� ��������     <input name="NOMTELEF"  type="text"  value="" maxlength="12">  <br> 
                �����������     <input name="OBRAZ"  type="text"  value="" maxlength="12">  <br> 
				�������������     <input name="SPECIALN"  type="text"  value="">      <br>
				������� ���������    <input name="UCHZAVOKON"  type="text"  value="">      <br>
			    ������������� �������    <input name="PREDMET"  type="text"  value="">      <br>
			    ��������    <input name="NAGRUZ"  type="text"  value="">      <br>
				���������     <input name="DOLG"  type="text"  value="">      <br>
				����     <input name="STAG"  type="text" size="3"  value="">    <br>  
				���� ��������    <input name="IAZOBUCH"  type="text"  value="">  <br>
				���������    <input name="KATEGOR"  type="text"  value="">   <br>
				��� ����������    <input name="GODATTES"  type="text" size="4" value="">  <br>
				��� ���� ������     <input name="KURSI"  type="text" size="4"  value="">  <br>
				����� ����������� ������ <input name="MESTOKURS"  type="text"   value=""><br>
				���� ������     <br><textarea name="TEMAKURS" cols="40"></textarea><br>
				������������� �������     <input name="PREPPREDM"  type="text"  value=""> <br>
				����������� ��� ������������ ������     <input name="PLANKURS"  type="text" size="4" value="">   <br>
			</fieldset>
			</div>
<div id="b">
			<fieldset class="fieldset1">
				<legend>����� ������ </legend>
				����������� ���� <br> <textarea name="METTEMA" cols="53"></textarea><br>
				������� ��������     <input name="ZAOCHOBUCH"  type="text"  value=""> <br>
				�������           <br><textarea name="NAGRADI" cols="53"></textarea><br>
				������������ ������     <input name="OBCHRAB"  type="text"  value=""> <br>
				���������     <input name="UVLECHENIE"  type="text"  value=""> <br>
				��� ������������     <input name="GODTESTIR"  type="text" size="4" value=""> <br>
				����� ������������  <input name="MESTOTEST"  type="text"  value=""> <br>
			</fieldset>
			<fieldset class="fieldset1">
				<legend>����� ������ </legend>
				������ �����������     <input name="VTOROEOBR"  type="text"  value=""> <br>
				����� ������� ���������� �����     <input name="PPOVIBOR"  type="text"  value="">  <br>
				���������� ����            <br><textarea name="PPOTEMA" cols="53"></textarea><br>
				��� �������� ���������� ����� <input name="PPOGOD"  type="text" size="4" value="">  <br>
				�������     <input name="PPOUROVEN"  type="text"  value="">  <br>
				�������� ������������ ������� 	  <br><textarea name="IZDANMETOD" cols="53"></textarea><br>
				���������������� ������       <br><textarea name="IZDANRESPU" cols="53"></textarea><br>
				ID     <input name="COD"  type="text"  value="">              <br>
			</fieldset>
-->			
            <input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
			</div>		  


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
