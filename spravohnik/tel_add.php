<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



		
		
		<form action="tel_add_obr.php" method="post" enctype="multipart/form-data" name="form1">		
	
<label> �� "��������"</label>

<div id="a">
			<fieldset class="fieldset1">
			<legend>������� ������</legend>
<!--
$matplata ����������� �����
 <style>
#a, #b { position: absolute; }
#a, #b { width: 30em; }
#a { left: 0; }
#b { left: 30em; }

</style>
-->			
			
			<?
	
print<<<HERE

		����� �������� (��������: 33548)  <input name="tel"  size="5" type="text"  value="$tel">   <br> 
		����� ���������  (��������: ���. ���������)   <input name="mestoust"  type="text"  value="$mestoust">  <br> 
		������������ ��� ������ � ���� �������� 
		<select name="inter" id="inter"   >
		<option value="$inter">$inter</option>
		<option value="��">��</option>
		<option value="���">���</option>
		</select>
		<br>
		��� ���������� �������� 
		<select name="vidinter" id="vidinter"   >
		<option value="$vidinter">$vidinter</option>
		<option value="dialap">dialap</option>
		<option value="Okynet">Okynet</option>
		<option value="Megaline">Megaline</option>		
		</select>
		  <br> 
		��� ��������������  <input name="fio"  type="text"  value="$fio">  <br> 
		��������� <input name="dolg"  type="text"  value="$dolg">  <br> 		
			
		
HERE;
				

			?>	
   




			</fieldset>

            <input type="submit" name="submit" id="submit" value="�������� � ���������  ������.">
			</div>			
		
		
		
		
		
		
		
		
		
 
 
 
 
		<!--���� �������� ����� --> 
	</td> 
</table>
<!--���������� ������ ����������� �������-->
<? include ("blocks/footer.php");?> 
</body>
</html>
