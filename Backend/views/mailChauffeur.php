<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

function sendConfirmationChauffeur($destinataire)
{
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wael.fatah@esprit.tn';                     // SMTP username
    $mail->Password   = 'walloulti98';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Attachements
    //$mail->addAttachment('fichierpdf.pdf');

    //Recipients
    $mail->setFrom('wael.fatah@esprit.tn', 'CasaSport - Services');
    $mail->addAddress($destinataire,'Client');

    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recrutement Chauffeur';
    $mail->Body    = '<b>Vous avez ete accepte. Bienvenue ! </b>';
    $mail->AltBody = 'Vous avez ete accepte. Bienvenue !';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>