<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



 
  
 

  <?
if (isset($_POST['scool1']))	{$scool1 = $_POST['scool1'];			if ($scool1 == ''){unset($scool1);}}
if (isset($_POST['tip1']))		{$tip1 = $_POST['tip1']; 				if ($tip1 == ''){unset($tip1);}}
if (isset($_POST['vid1']))		{$vid1 = $_POST['vid1']; 				if ($vid1 == ''){unset($vid1);}}

	
		
		
		
		$today = date("d.m.y, H:i:s"); //�
		$TIP='NEW'; 
		



		$result1 = mysql_query("SELECT * FROM userlist  ORDER BY `login` DESC LIMIT 1 "); // WHERE  vid='��������' AND TIPZAP='NEW'ZAVEDENIE='$user' AND WHERE  TIP='NEW' ORDER BY `FAM` ASC
		$myrow1 = mysql_fetch_array($result1);
		$max=$myrow1[login];
		
		// echo 'max-'.$max;
		
		$max=$max+1;
		
		
		
		$genpass=rand(1, 9999);
		
		//		echo '$scool1',$scool1, '$max', $max, '$vid1', $vid1, '$tip1', $tip1, '$genpass', $genpass, '$raion', $raion, '$raion1', $raion1, '$prawa', $prawa, '$today', $today;

		if 	( 		isset($scool1) )
			
		{	$result = mysql_query ("INSERT INTO userlist (scool, login, vid, tip, password, raion, raion1, oblast, prawa, iazfase,  TIPZAP, DATAOBNOV ) 
							        VALUES ('$scool1', '$max', '$vid1', '$tip1', '$genpass', '$raion', '$raion1', '$oblast', '1', '�������', 'NEW', '$today')");
		if ($result == 'true') {echo "<p>  ������� ���������!</p>"; echo "<a href='scool.php'>����������  </a>";}	
		else {echo "<p>���� ���������� �� ��������� ������ ���� ������!</p>"; echo "<a href='lmk.php'>����������  </a>";}	}
	 else 	{echo "<p><strong>�� ����� �� ��� ����������, ������� ������ � ���� �� ����� ���� ���������. <a href='javascript:history.back(1)'>�����</a>  </strong></p>";}	

			
?>

 
  
  </td>
 </tr>
</table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
