<?php
// 
include ("blocks/bd.php");



// ���������������� ������ ����, ���� ���� �� ����� �����������
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

//����������� ���������, �������� ������ �������
    header('Content-Type: application/vnd.ms-excel; charset=windows-1251');
    header("Content-Disposition: attachment;filename=report_mon.xls");
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

// ������������ ���� �������. �������� ��� ����� ��������������.
   
   $title='������� � ������ ���� ������';
include ("lock.php");

$jazik='�������';
//$predmet='����������';

include ("mon_excel_in.php");

$jazik='���������';
// $predmet='����������';

include ("mon_excel_in.php"); 

echo '</table>';
echo '</body></html>';
// �� �������� ��������� �������, ���� � ��� ���� ��������

?>

