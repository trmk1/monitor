<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



 
 
 
 <?php
include ("blocks/bd.php");

if (isset($_POST['scool1']))		{$scool1 = $_POST['scool1']; 				if ($scool1 == ''){unset($scool1);}}
if (isset($_POST['tip1']))		{$tip1 = $_POST['tip1']; 				if ($tip1 == ''){unset($tip1);}}
if (isset($_POST['nom']))		{$nom = $_POST['nom']; 				if ($nom == ''){unset($nom);}}

if (isset($_POST['vid1']))		{$vid1 = $_POST['vid1']; 				if ($vid1 == ''){unset($vid1);}}
if (isset($_POST['pass']))		{$pass = $_POST['pass']; 				if ($pass == ''){unset($pass);}}



?>

<center><h2>
<?
//echo '������ -'.$nom;
$today = date("d.m.y, H:i:s"); //�
$TIP='NEW'; 

if 	( 	isset($scool1) &&	isset($pass  ))
// id 	login  	password 	 	 ��� �� ����� ��������	 	iazfase 	TIPZAP
{	
$result = mysql_query ("UPDATE userlist SET scool='$scool1', vid='$vid1' , tip='$tip1', password='$pass', TIPZAP='NEW', DATAOBNOV='$today' WHERE  id='$nom' ");
if ($result == 'true')
{echo "<p>  ������� ��������!</p>"; echo "<a href='scool.php'>����������  </a>";}	
else 
{echo "<p>���� ����������  �� ��������� ������ ���� ������!</p>"; 
echo "<a href='scool.php'>����������  </a>";}	}
else 	
{echo "<p><strong>�� ����� �� ��� ����������, ������� ������ � ���� �� ����� ���� ���������.  </strong></p>";}	
?>

</h2>
</center>
 

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
