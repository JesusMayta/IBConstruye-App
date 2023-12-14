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

$empresa = $_POST['empresa'];
$rubro = $_POST['rubro'];
$ruc = $_POST['ruc'];
$cargo = $_POST['cargo'];
$correoEmpresa = $_POST['emailEmpresa'];
$tipoServicio = $_POST['tipoServicio'];
$celularEmpresa = $_POST['celularEmpresa'];
$mensajeEmpresa = $_POST['mensajeEmpresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];

if(isset($cargo) && isset($empresa) && isset($rubro) && isset($ruc) && isset($correoEmpresa) && isset($tipoServicio) && isset($celularEmpresa) && isset($mensajeEmpresa) ){
    
    $body = "$fecha <br>
            <strong>From: </strong>CORPORACION IBGROUP <ibconstruye@corpibgroup.com>" . "\n"
                . "<br>" . "<br>" .
            "<strong>Empresa :</strong> $empresa  <br>
            <strong>Rubro :</strong> $rubro <br>
            <strong>RUC :</strong> $ruc <br>
            <strong>Cargo :</strong> $cargo <br>
            <strong>Email :</strong> $correoEmpresa <br>
            <strong>Tipo de servicio :</strong> $tipoServicio <br>
            <strong>Celular :</strong> $celularEmpresa <br>
            <strong>Mensaje :</strong> $mensajeEmpresa <br>";

    if($telefonoEmpresa != ''){
        $body = "$body <strong>Telefono : </strong>$telefonoEmpresa <br>";
    };
  

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
        $mail->addAddress($correoEmpresa);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
    
        $mail->send();

        $successMessage = 'Mensaje enviado con exito!';
        echo $successMessage;

    } catch (Exception $e) {
        echo 'error';
    };
};

?>