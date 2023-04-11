<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;
$mail -> isSMTP();
$mail -> SMTPDebug = 2;
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = '587';
$mail -> SMTPSecure = 'tls';
$mail -> Username = '$email';
$mail -> setFrom('$email','Customer Support');
$mail -> addAddress('patrickrobinson742@gmail.com','Patrick Robinson');
$mail -> Subject = '$mssg';

$mail -> send();
?>