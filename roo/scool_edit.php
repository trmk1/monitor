<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



 
 
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--���������� ����� �����-->

<? include ("lock.php");
include ("blocks/bd.php");
// include("blocks/header.php");   ?>




<?
if (isset($_GET['compdel']))  {$compdel = $_GET['compdel'];   		if ($compdel == '') 	{unset($compdel);}}
//echo "nomer- ".$compdel;
if (isset($_POST['scool']))		{$scool = $_POST['scool']; 				if ($scool == ''){unset($scool);}}
if (isset($_POST['ID']))  {$ID = $_POST['ID'];   		if ($ID == '') 	{unset($ID);}}

$res=mysql_query("SELECT * FROM userlist WHERE  id=$compdel  ");
$myrow3 = mysql_fetch_array($res);
$password=$myrow3[password]; $tip1=$myrow3[tip]; $vid1=$myrow3[vid]; $scool1=$myrow3[scool];
//echo "�����".$password.$tip1. $vid1.$scool1;
?> 









<body>

<form action="scool_edit_obr.php" method="post" enctype="multipart/form-data" name="form1">

<label>�������������� �����</label>

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
		
		������   <input name="pass"  type="text"  value="$password">    
		   <input name="nom"  type="text" hidden value="$compdel">   <br> 
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
<br><br>
 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
