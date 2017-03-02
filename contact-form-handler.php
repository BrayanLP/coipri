<?php

function sendMail() {
    $to = 'brayansystemlp@gmail.com';
    $subject = 'Contacto de COIPRI';
    $message = 'Contacto de COIPRI' . "\r\n" .
            "\r\n" .
            'nombres: ' . $_POST['nombres'] . "\r\n" .
            'correo: ' . $_POST['correo'] . "\r\n" .
            'telefono: ' . $_POST['telefono'] . "\r\n" . 
            "\r\n" .
            'celular: ' . $_POST['celular'] . "\r\n" . 
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n";

    $headers = 'From: noreply@coipri.com' . "\r\n" .
            'Reply-To: noreply@coipri.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r = mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
}
function sendMail2() {
    $to = 'coipri@coipri.pe';
    $subject = 'Contacto de COIPRI';
    $message = 'Contacto de COIPRI' . "\r\n" .
            "\r\n" .
            'nombres: ' . $_POST['nombres'] . "\r\n" .
            'correo: ' . $_POST['correo'] . "\r\n" .
            'telefono: ' . $_POST['telefono'] . "\r\n" . 
            "\r\n" .
            'celular: ' . $_POST['celular'] . "\r\n" . 
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n";

    $headers = 'From: noreply@coipri.com' . "\r\n" .
            'Reply-To: noreply@coipri.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r = mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
}


function sendMailToClient() {
    $to = '';
    $subject = 'Gracias por Contactarnos';
    
    $message = file_get_contents(dirname(__FILE__) .'/email-template.php');
    $message = str_replace('[Name]', $_POST['Name'], $message);

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
    $headers .= 'To: '.$_POST['nombres'].' <'.$_POST['email'].'>' . "\r\n";
    $headers .= 'From: info<noreply@coipri.com>' . "\r\n";

// Mail it
    mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
}

sendMail();
sendMail2();
//sendMailToClient();

header("Location: http://coipri.pe/agradecimiento.html");