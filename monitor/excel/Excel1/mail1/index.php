<?php
require("phpmailer/class.phpmailer.php"); // ������� ���� � ����� class.phpmailer.php
require("phpmailer/class.smtp.php"); // ������� ���� � ����� class.phpmailer.php

$mail = new PHPMailer();
$mail->IsSMTP();// �������� ��������� SMTP
$mail->SMTPDebug  = 2;       
$mail->Host     = "93.158.134.38"; // SMTP ������
$mail->Port       =  20;     
$mail->SMTPAuth = true;     // �������� SMTP ��������������
$mail->Username = "alibaev.tal@yandex.kz";  // SMTP username
$mail->Password = "qwertya1"; // SMTP password
$mail->From     = "talgat1@mail.ru"; // ������� �� ���� ������
$mail->FromName = "Mailer"; // ��� �����������
$mail->AddAddress("alibaev.tal@yandex.kz","Name"); // �-���� ���� ����������
$mail->AddReplyTo("alibaev.tal@yandex.kz","Info"); // �-���� ���� ���� ������� ����� �� ���� ������
$mail->WordWrap = 50;// set word wrap
$mail->IsHTML(true);// ��������� � html �������

$mail->Subject  =  "Here is the subject"; // ���� ������
$mail->Body     =  "This is the HTML body"; // ���� ������ � html �������

$mail->AltBody  =  "This is the text-only body"; // ���� ������ ���������
if(!$mail->Send())
{
   echo "������ �� ���������� ";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo "������ ����������";

?> 