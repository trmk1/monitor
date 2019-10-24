<?php
require("phpmailer/class.phpmailer.php"); // укажите путь к файлу class.phpmailer.php
require("phpmailer/class.smtp.php"); // укажите путь к файлу class.phpmailer.php

$mail = new PHPMailer();
$mail->IsSMTP();// отсылать использу€ SMTP
$mail->SMTPDebug  = 2;       
$mail->Host     = "93.158.134.38"; // SMTP сервер
$mail->Port       =  20;     
$mail->SMTPAuth = true;     // включить SMTP аутентификацию
$mail->Username = "alibaev.tal@yandex.kz";  // SMTP username
$mail->Password = "qwertya1"; // SMTP password
$mail->From     = "talgat1@mail.ru"; // укажите от кого письмо
$mail->FromName = "Mailer"; // им€ отправител€
$mail->AddAddress("alibaev.tal@yandex.kz","Name"); // е-мэил кому отправл€ть
$mail->AddReplyTo("alibaev.tal@yandex.kz","Info"); // е-мэил того кому прейдет ответ на ваше письмо
$mail->WordWrap = 50;// set word wrap
$mail->IsHTML(true);// отправить в html формате

$mail->Subject  =  "Here is the subject"; // тема письма
$mail->Body     =  "This is the HTML body"; // тело письма в html формате

$mail->AltBody  =  "This is the text-only body"; // тело письма текстовое
if(!$mail->Send())
{
   echo "ѕисьмо не отправлено ";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo "ѕисьмо отправлено";

?> 