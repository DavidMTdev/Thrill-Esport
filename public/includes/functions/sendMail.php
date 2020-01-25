<?php
$visible = false;

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject'])) {
    extract($_POST);

    if ($name != "") {

        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", strtolower($email))) {

            $to = "contact@thrillesportclub.fr";

            if ($subject == "") {
                $sujet = $name . " a contactez via le site";
            } else {
                $sujet = $name . " - " . $subject;
            }

            $header = "From:" . strtolower($email);

            if ($message != "") {
                mail($to, $sujet, $message, $header);
                $msg = "Votre méssage a été envoyer.";
                $success = true;
            } else {
                $msg =  "Veulliez écrire un méssage.";
                $success = false;
            }
        } else {
            $msg =  "Votre email n'est pas correcte.";
            $success = false;
        }
    } else {
        $msg =  "Veulliez mettre votre nom.";
        $success = false;
    }

    $visible = true;
}
