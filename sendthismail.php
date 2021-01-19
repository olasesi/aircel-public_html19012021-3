<?php


require 'class.phpmailer.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.obejor.com';
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
//$mail->Host = 'smtp.gmail.com';

//$mail->SMTPSecure = "ssl";                           
//Set TCP port to connect to 
$mail->Port = 465;        
//$mail->Port = 465;
$mail->Username = 'sales@obejor.com';
$mail->Password = 'Google22.@';
$mail->setFrom('sales@obejor.com');
$mail->addAddress('icisystemng@gmail.com');
$mail->Subject = 'Hello from ICI';
$mail->Body = '.';
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}

?>