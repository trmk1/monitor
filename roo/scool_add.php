<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



 
 
 

<?

if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}

/* ���� ���������� � ���������� ������� $_POST['title'] ���. ������, �� �� ������� ������� ���������� �� ��. ���� ���������� ������, �� ���������� ����������.   */

if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

?> 




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>���������� �����</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

		<form action="scool_add_obr.php" method="post" enctype="multipart/form-data" name="form1">

���������� �����</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>������� ������</legend>
	
			
			<?
	
print<<<HERE
		�������� �����   <input name="scool1"  size="50" type="text"  value="$scool1">   <br> 

		

		��� �����   <select name="vid1" id="vid1"   >
		<option value="$vid1">$vid1</option>
		<option value="�������">�������</option>
		<option value="��������">��������</option>
		<option value="���������">���������</option>		
		</select>
		

		���� ��������   <select name="tip1" id="tip1"   >
		<option value="$tip1">$tip1</option>
		<option value="���������">���������</option>
		<option value="�������">�������</option>
		<option value="���������">���������</option>		
		</select>
		<br>		
		
		

HERE;
				

			?>	
   




	</fieldset>
	<br>
	<center>
	<input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
	</center>
	</div>		  

 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
