<? include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');?>
	<!--���� �������� ������ -->



<?php

$filename = "test.txt";
$somecontent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="author" content="zabey" />
        <title>Demo</title>
    </head>
    <body>';

   
$somecontent=$somecontent."������� � ������ ���� ������";
 
 $jazik="�������";
//$predmet="����������"; echo "<br> =========".$somecontent;







$result33 = mysql_query("SELECT * FROM predmetsp  "); // AND chetvert="$chet"  WHERE cod_pred<="$codpred"
$s=0;
// ��� ��� ������ ���������� ��������� �����, ��������� ����
while($myrow33 = mysql_fetch_array ($result33))
			{  	
			$prd=$myrow33[predmet];
			$predmet=$prd;
			
			if ($jazik==�������)  $jazik1="�������";
			if ($jazik==���������)  $jazik1="���������";

			// else $jazik1="���������";
			$somecontent=$somecontent."<br><table border='1' align='center' >";
			$result = mysql_query("SELECT * FROM promejutki ");
			
			    while ($myrow = mysql_fetch_array($result))	 
					{
							
					$predmet=$predmet;
								$result = mysql_query("SELECT * FROM promejutki ");	// WHERE ( ZAVEDENIE="$user" AND	TIP="NEW") ORDER BY FAM ASC				
								 while ($myrow = mysql_fetch_array($result))	
								{
					
								//include ("mon_excel_in1.php");

								
								
								
																
								
								
								
								$pro=$myrow["pro"];

$somecontent=$somecontent."<tr> <td rowspan='8' class='vertical'> $pro </td><td> <div align='center'>�����</div></td><td><div align='center'>1</div></td><td><div align='center'>2</div></td><td><div align='center'>3</div></td><td><div align='center'>4</div></td><td><div align='center'>5</div></td><td><div align='center'>6</div></td><td><div align='center'>7</div></td><td><div align='center'>8</div></td><td><div align='center'>9</div></td><td><div align='center'>10</div></td><td><div align='center'>11</div></td></tr>";	
 			// ������� 6
			$somecontent=$somecontent."<tr>";

			$somecontent=$somecontent."<td><div align='center'>'���������� ��������'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
	
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka="5"
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka="5"
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka="5"
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row["sum"];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka="5"
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row["sum"];
			
			$ocenk6[$pro]=($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro]);
			
			
			
			
/* 			$request= mysql_query("SELECT SUM(kol) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka="5"
			$row=mysql_fetch_array($request);
			$ocenk6[$pro]=$row["sum"]; */
			
			$somecontent=$somecontent. "<td><div align='center'>$ocenk6[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;
			
			
				// ������� 5
			$somecontent=$somecontent. "<tr>";

			$somecontent=$somecontent. "<td><div align='center'>'5'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row["sum"];
			$somecontent=$somecontent. "<td><div align='center'>$ocenk5[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;

				// ������� 4
			$somecontent=$somecontent. "<tr> ";

			$somecontent=$somecontent. "<td><div align='center'>'4'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row["sum"];
			$somecontent=$somecontent. "<td><div align='center'>$ocenk4[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;


				// ������� 3
			$somecontent=$somecontent. "<tr> ";

			$somecontent=$somecontent. "<td><div align='center'>'3'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row["sum"];
			$somecontent=$somecontent. "<td><div align='center'>$ocenk3[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;


				// ������� 2
			$somecontent=$somecontent. "<tr> ";

			$somecontent=$somecontent. "<td><div align='center'>'2'</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row["sum"];
			$somecontent=$somecontent. "<td><div align='center'>$ocenk2[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;



						
// ����� 
		$somecontent=$somecontent. "<tr> ";

			$somecontent=$somecontent. "<td><div align='center'>% ������������</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row["sum"];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row["sum"];

			
			$usp[$pro]=round(($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro])/($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro])*100);
			
			
			
			$somecontent=$somecontent. "<td><div align='center'>$usp[$pro]</div></td>"; 
			} 
			$somecontent=$somecontent. "</tr>" ;

						
// ����� 
		$somecontent=$somecontent. "<tr> ";

			$somecontent=$somecontent. "<td><div align='center'>% ��������</div></td>";

			for ( $i=1; $i<=11; $i++) 
			{ 
			$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk2[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk3[$pro]=$row["sum"];
			
			$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk4[$pro]=$row["sum"];

			$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND chetvert='$pro' AND   jaz='$jazik' AND   klass='$i'  AND raion='$raion' and oblast='$oblast' ");    //  AND  ocenka='5'
			$row=mysql_fetch_array($request);
			$ocenk5[$pro]=$row["sum"];

			
			$usp[$pro]=round(($ocenk5[$pro]+ $ocenk4[$pro])/($ocenk5[$pro]+ $ocenk4[$pro]+ $ocenk3[$pro]+$ocenk2[$pro])*100);
			
			
			
			$somecontent=$somecontent. "<td><div align='center'>$usp[$pro]</div></td>"; 
			} 
		
		$somecontent=$somecontent. "</tr>" ;
	
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								}
										
					 $s=$s+1;
					 $somecontent=$somecontent."</tr>";
					 	 
					 
					// $today = date("d.m.y, H:i:s");
					 // $somecontent=$somecontent. "<tr> ******* ����� �����������   ".$today."********* </td> ";					 
					 }
					 
					$somecontent=$somecontent."<p align='center'>������� ������� ����������� 
					��������  ������������, �������������� ��������  <br> � �������� ���������� 
					�������� �� ������ ".$raion1 ;
					$somecontent=$somecontent."<br>�� �������� - ".$predmet." (� ����� � ".$jazik1." ������  ��������)</p>";
					$somecontent=$somecontent.substr($predmet, 0, 15)."(".substr($jazik, 0, 3).")";
					
		$enn=strlen($somecontent);
		echo "<br> =========".$predmet." -- ".$jazik1;	
		echo "����� - ".$enn;
					 
			}




						
								echo "<br> ����������";








 
 
 
// ������� ������� ��������, ��� ���� ���������� � �������� ��� ������.
if (is_writable($filename)) {
 
    // � ����� ������� �� ��������� $filename � ������ "�������� � �����".
    // ����� �������, �������� ����������� � ����� ����� �
    // ��� $somecontent ��������� � ����� ��� ������������� fwrite().
    if (!$handle = fopen($filename, "a")) {
         echo "�� ���� ������� ���� ($filename)";
         exit;
    }
 
    // ���������� $somecontent � ��� �������� ����.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "�� ���� ���������� ������ � ���� ($filename)";
        exit;
    }
 
    echo "���! �������� ($somecontent) � ���� ($filename)";
 
    fclose($handle);
 
} else {
    echo "���� $filename ���������� ��� ������";
}








/* 

include_once ($_SERVER["DOCUMENT_ROOT"]."/1/blocks/lock.php");



$jazik="���������";
// $predmet="����������";

include ("mon_excel_in.php"); 

// ����

include ("mon_excel_in_s.php"); 



echo "</table>";
echo "</body></html>";
// �� �������� ��������� �������, ���� � ��� ���� ��������
 */
?>

