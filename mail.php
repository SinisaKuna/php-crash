<?php

//Include required PHPMailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "beta.studio.fakturiranje@gmail.com";
$mail->Password = "paglsnvyixbkbqci";
$mail->Subject = "Pismo dobrodošlice";
$mail->setFrom('beta.studio.fakturiranje@gmail.com', 'beta Studio');
$mail->isHTML(true);
// ovdje se upisuje attachment ako ga ima:
// $mail->addAttachment('img/attachment.png');
$mail->Body = "<h1>Dobro došli</h1></br><p>Poštovani, ... šđčžŠĐČŽ</p>";
$address = "sinisa.kuna@yahoo.com";
$mail->AddAddress($address, "sinisa.kuna@yahoo.com");
if ($mail->send()) {
  echo "Mail je uspješno poslan..";
} else {
  echo "Message could not be sent. Mailer Error: ";
}
$mail->smtpClose();
