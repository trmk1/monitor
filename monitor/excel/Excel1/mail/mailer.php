<?php
//�������� ��������� �� ������.
$mail_to = 'alibaev.tal@yandex.kz'; //��� ����������� ������� ����� ��� ��������� �������� ����, ���� ������ ����� ������ ������.
$type = 'plain'; //����� �������� �� html; plain ��������: ����� ����������� ������ �����.
$charset = 'windows-1251';

include('smtp-func.php');
if ($_REQUEST['message'])
{
   $message = $_REQUEST['message'];
   $subject = $_REQUEST['subject'];
   $mail_from = $_REQUEST['mail_from'];
   $replyto = $_REQUEST['replyto'];
   $headers = "To: \"Administrator\" <$mail_to>\r\n".
              "From: \"$replyto\" <$mail_from>\r\n".
              "Reply-To: $replyto\r\n".
              "Content-Type: text/$type; charset=\"$charset\"\r\n";
   $sended = smtpmail($mail_to, $subject, $message, $headers);
   echo '<html>
        <head>
        <meta http-equiv="content-type" content="text/html; charset='.$charset.'">
        </head>
              <body>';
   if (!$sended) echo '����� �� ������� ���������. ���������� ��������� � ��������������� ����� �� ������: '.$mail_to;
   else echo '������ ���� ������� ����������. � ��������� �� �������� ����� �� ����.';
   echo '</body>';
   exit;
}
Header('Location: mailer.html');
?>