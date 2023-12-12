<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

function DateGet()
{
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
};

$fecha = '<strong>Fecha: </strong>' . DateGet() . "\n";
$subject = "Contacto IBConstruye Formulario Contacto";
$body = '';
$emailFormulario = '';




    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['email'];
    $tipoServicio = $_POST['tipoServicio'];

    if (isset($nombres) && isset($telefono) && isset($celular)  && isset($correo) && isset($tipoServicio)) {
        $emailFormulario = $correo;
        $body = "$fecha <br>
        <strong>From: </strong>CORPORACION IBGROUP <ibconstruye@corpibgroup.com>" . "\n"
            . "<br>" . "<br>" .
            "<strong>Nombres :</strong> $nombres  <br>
        <strong>Telefono :</strong> $telefono <br>
        <strong>Celular :</strong> $celular <br>
        <strong>Email :</strong> $correo<br>
        <strong>Servicio solicitado :</strong> $tipoServicio<br>";
        // <strong>Mensaje :</strong> $mensajePersona";
    };


$mensajePersona = $_POST['mensajePersona'];

try {

    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'agustinjr.2606@gmail.com';                     //SMTP username
    $mail->Password   = 'aadg navp cyqg uqro';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ibconstruye@corpibgroup.com', 'CORPORACION IBGROUP');
    $mail->addAddress('agustinjr.2606@gmail.com');   //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "$body <br>
    <strong>Mensaje :</strong> $mensajePersona <br>";

    $mail->send();
    echo 'exito';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
