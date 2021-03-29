<?php
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if(trim($email) == '')
  $error = 'Введите ваш E-Mail';
else if(trim($message) == '')
    $error = 'Введите ваше сообщение';
else if(strlen($message) < 10)
    $error = 'Сообщение должно быть менее 10 символов';
if($error != '') {
  echo $error;
  exit;
}

$subject = "=?utf-8?B?".base64_encode("Отзыв о сайте Поэты и Писатели XIX Века")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset = utf-8\r\n";
mail('alexcovalenko@outlook.com', $subject, $message, $headers);\
header('Location: /callback.html');
 ?>
