<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

function DateGet(){
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
};

$fecha = '<strong>Fecha: </strong>' . DateGet() . "\n";
$subject = "Contacto IBConstruye Formulario Contacto";


$nombres = $_POST['nombresIndex'];
$email = $_POST['emailIndex'];
$message = $_POST['messageIndex'];

if(isset($nombres) && isset($email) && isset($message)){
    
    $mail = new PHPMailer(true);
    
    try {
    
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rimverse@gmail.com';                     //SMTP username
        $mail->Password   = 'lheommxnanditvlj';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('rimverse@gmail.com', 'Mailer');
        $mail->addAddress('rimverse@gmail.com');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "$fecha <br>
            <strong>From: </strong>CORPORACION IBGROUP <ibconstruye@corpibgroup.com>" . "\n"
                . "<br>" . "<br>" .
                "<strong>Nombres :</strong> $nombres  <br>
            <strong>Email :</strong> $email <br>
            <strong>Celular :</strong> $message <br>";
    
        $mail->send();

        $successMessage = 'Mensaje enviado con exito!';
        echo $successMessage;
    } catch (Exception $e) {
        echo 'error';
    };
};

?>