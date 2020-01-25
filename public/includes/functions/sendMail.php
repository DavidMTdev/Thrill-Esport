<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpMailler/Exception.php';
require 'phpMailler/PHPMailer.php';
require 'phpMailler/SMTP.php';

// Instantiation and passing `true` enables exceptions
$phpMail = new PHPMailer(true);
extract($_POST);

$visible = false;

if (isset($submit)) {
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $phpMail->isSMTP();                                            // Send using SMTP
        $phpMail->Host       = 'smtp.ionos.fr';                    // Set the SMTP server to send through
        $phpMail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $phpMail->Username   = 'contact@thrillesportclub.fr';                     // SMTP username
        $phpMail->Password   = '$*FG7tp2al#jGkv45%4sEn';                               // SMTP password
        $phpMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $phpMail->Port       = 465;                                    // TCP port to connect to

        if ($name == "") {
            $msg =  "Veulliez mettre votre nom.";
            $success = false;
        }

        //Recipients
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", strtolower($email))) {

            $phpMail->setFrom(strtolower($email), $name);
            $phpMail->addAddress('contact@thrillesportclub.fr', 'Contact');     // Add a recipient

        } else {
            $msg =  "Votre email n'est pas correcte.";
            $success = false;
        }


        // Content
        $phpMail->isHTML(true);                                  // Set ephpMail format to HTML

        if ($subject == "") {
            $phpMail->Subject = $name . " a contactez via le site";
        } else {
            $phpMail->Subject = $name . " - " . $subject;
        }

        if ($message != "") {
            $phpMail->Body    = $message;
        } else {
            $msg =  "Veulliez écrire un méssage.";
            $success = false;
        }
        // $phpMail->AltBody = 'This is the body in plain text for non-HTML phpMail clients';
        if ($name != "" && $email != "" && $message != "") {
            $msg = "Votre méssage a été envoyer.";
            $phpMail->send();
            $success = true;
        }

        $visible = true;
    } catch (Exception $e) {
        $visible = true;
        $msg =  "Message could not be sent. phpMailer Error: {$phpMail->ErrorInfo}";
        $success = false;
    }
}




// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject'])) {
//     extract($_POST);

//     if ($name != "") {

//         if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", strtolower($email))) {

//             $to = "contact@thrillesportclub.fr";

//             if ($subject == "") {
//                 $sujet = $name . " a contactez via le site";
//             } else {
//                 $sujet = $name . " - " . $subject;
//             }

//             $header = "From:" . strtolower($email);

//             if ($message != "") {
//                 mail($to, $sujet, $message, $header);
//                 $msg = "Votre méssage a été envoyer.";
//                 $success = true;
//             } else {
//                 $msg =  "Veulliez écrire un méssage.";
//                 $success = false;
//             }
//         } else {
//             $msg =  "Votre email n'est pas correcte.";
//             $success = false;
//         }
//     } else {
//         $msg =  "Veulliez mettre votre nom.";
//         $success = false;
//     }

//     $visible = true;
// }
