<?php
$filename = 'test.txt';
$somecontent = "--������������������������������������������������������-------- \n".$_POST['name']."\n".$_POST['mail']."\n".$_POST['text']."---------- \n";
 
// ������� ������� ��������, ��� ���� ���������� � �������� ��� ������.
if (is_writable($filename)) {
 
    // � ����� ������� �� ��������� $filename � ������ "�������� � �����".
    // ����� �������, �������� ����������� � ����� ����� �
    // ��� $somecontent ��������� � ����� ��� ������������� fwrite().
    if (!$handle = fopen($filename, 'a')) {
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
?>