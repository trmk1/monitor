<?php
// include ("$_SERVER['DOCUMENT_ROOT'].'/1/blocks/bd.php'");



// ���������������� ������ ����, ���� ���� �� ����� �����������
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

//����������� ���������, �������� ������ �������
    header('Content-Type: application/vnd.ms-excel; charset=windows-1251');
    header("Content-Disposition: attachment;filename=".date("d-m-Y")."-report_kadr.xls");
    header("Content-Transfer-Encoding: binary ");
// !! ����� ����
echo '
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="author" content="zabey" />
        <title>Demo</title>
    </head>
    <body>
';

{ // ������������ ���� �������. �������� ��� ����� ��������������.
   
   $title='������� � ������ ������������� ������';
//

include_once ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/lock.php');

		$jz = '���';
 $predmet = '������';
 $chetvert = '1_��������';	

			 $i=1;
			// echo $chetvert;
			// echo $predmet;
			 echo "<table border=1>";
			 



			 echo "<tr><td>"."<strong>�</strong>"."</td><td>"."<strong>�������</strong>"."</td><td>"."<strong>���</strong>"."</td><td>"."<strong>��������</strong>"."</td><td>"."<strong>���� ��������</strong>"."</td><td>"."<strong>��������������</strong>"."</td><td>"."<strong>�����������</strong>"."</td><td>"."<strong>�������������</strong>"."</td><td>"."<strong>������ �������������</strong>"."</td><td>"."<strong>����</strong>"."</td><td>"."<strong>���� ��������</strong>"."</td><td>"."<strong>���������</strong>"."</td><td>"."<strong>��� ����������� ������</strong>"."</td><td>"."<strong>����������� ���  ������</strong>"."</td><td>"."<strong>������������ ����</strong>"."</td><td>"."<strong>�������</strong>"."</td><td>"."<strong>��������</strong>"."</td><td>"."<strong>���������</strong>"."</td><td>"."<strong>������� ��������</strong>"."</td><td>"."<strong>�������</strong>"."</td><td>"."<strong>����� �������������</strong>"."</td><td>"."<strong>�������� ������� </strong>"."</td><td>"."<strong>������� ���</strong>"."</td><td>"."<strong>������� �������</strong>"."</td><td>"."<strong>��� ����</strong>"."</td><td>"."<strong>������������ ������</strong>"."</td><td>"."<strong>���</strong>"."</td><td>"."<strong>���������</strong>"."</td><td>"."<strong>��� ������������</strong>"."</td><td>"."<strong>����� ������������</strong>"."</td><td>"."<strong>����� ����������� ������</strong>"."</td><td>"."<strong>���� ������</strong>"."</td><td>"."<strong>������������� �������</strong>"."</td><td>"."<strong>������ �����������</strong>"."</td><td>"."<strong>����� ��������� ��</strong>"."</td><td>"."<strong>���������� ����</strong>"."</td><td>"."<strong>��� ��������� ��</strong>"."</td><td>"."<strong>�������������</strong>"."</td><td>"."<strong>�������������</strong>"."</td></tr>";
			$result = mysql_query("SELECT * FROM AA  WHERE ZAVEDENIE='$user' AND TIP='NEW' AND raion='$raion' and oblast='$oblast' ORDER BY `FAM` ASC  "); //  dva>'0'  ORDER BY `kachestvo`  DESC
			// ��� ��� ������ ���������� ��������� �����, ��������� ���� AND chetvert='4 ��������' AND chetvert='�������'  	 	
			while($myrow = mysql_fetch_array($result))
			{  
// ����������� ����������� ������ 	idn 	ZAVEDENIE 	TIP 	FAM 	IMA 	OTCH 	denrod 	mesrod 	godrod 	DATAROG 	NACION 	OBRAZOV 	UCHZAVOKON 	GODZAKONBUZ 	SPECIALN 	OBRAZOV2 	UCHZAVOKON2 	GODZAKONBUZ2 	SPECIALN2 	STAG 	PREDMET 																					IAZOBUCH 	KATEGOR 	GODATTES 	KURSI 														PLANKURS 						METTEMA 				POLNLET 	NAGRUZ 	DOLG 	ZAOCHOBUCH 																											NAGRADI 	NOMUDOSTOV 	NOMTELEF 	RABNOMTELEF 	CODOPER 	COTNOMTELEF 																																WEB 	OBCHRAB 										POL 	UVLECHENIE 	GODTESTIR 	MESTOTEST 	MESTOKURS 																										TEMAKURS 	PREPPREDM 	VTOROEOBR 	PPOVIBOR 	PPOTEMA 	PPOGOD 	PPOUROVEN 	IZDANMETOD 	IZDANRESPU 	RNN 	SIK 	IIN 	COD 	DATAOBNOV 	KOMP 	INTERNETDOMA 	pass
			echo    "<tr><td>", $i, "</td><td>", $myrow[FAM], "</td><td>", $myrow[IMA], "</td><td>", $myrow[OTCH], "</td><td>", $myrow[DATAROG], "</td><td>", $myrow[NACION], "</td><td>", $myrow[OBRAZOV],  "</td><td>", $myrow[SPECIALN], "</td><td>", $myrow[SPECIALN2], "</td><td>", $myrow[STAG], "</td><td>", $myrow[IAZOBUCH], "</td><td>",                                                                                                                                                       $myrow[KATEGOR], "</td><td>",                                      $myrow[KURSI], "</td><td>", $myrow[PLANKURS], "</td><td>",                          $myrow[METTEMA], "</td><td>",                            $myrow[POLNLET],                "</td><td>", $myrow[NAGRUZ],    "</td><td>", $myrow[DOLG],               "</td><td>", $myrow[ZAOCHOBUCH],  "</td><td>",              $myrow[NAGRADI],  "</td><td>", $myrow[NOMUDOSTOV],  "</td><td>", $myrow[NOMTELEF],  "</td><td>", $myrow[RABNOMTELEF],  "</td><td>",                                   $myrow[CODOPER], $myrow[COTNOMTELEF],  "</td><td>",             $myrow[WEB],  "</td><td>",            $myrow[OBCHRAB],  "</td><td>",                    $myrow[POL], "</td><td>",    $myrow[UVLECHENIE], "</td><td>",                  $myrow[GODTESTIR], "</td><td>",                      $myrow[MESTOTEST], "</td><td>",                   $myrow[MESTOKURS], "</td><td>",                          $myrow[TEMAKURS],  "</td><td>",    $myrow[PREPPREDM],  "</td><td>",                  $myrow[VTOROEOBR],  "</td><td>",                      $myrow[PPOVIBOR],  "</td><td>",                   $myrow[PPOTEMA],  "</td><td>",               $myrow[PPOGOD],  "</td></tr>"; $i=$i+1; 
			}
			echo '</table>';
			echo "������� ".mysql_num_rows($result)." �������";

}
echo '</table>';
echo '</body></html>';
// �� �������� ��������� �������, ���� � ��� ���� ��������






?>

