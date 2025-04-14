<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // assure-toi d'avoir installé PHPMailer via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'senouablavigloria@gmail.com';
        $mail->Password = 'hkyr jfdf hsha kmib';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('senouablavigloria@gmail.com', 'Portfolio');
        $mail->addAddress('senouablavigloria@gmail.com','Gloryss');

        $mail->Subject = $sujet;
        $mail->Body = "Nom: $nom\nEmail: $email\n\n$message";

        $mail->send();
        header('Location: cont.php?success=1');
        exit;
    } catch (Exception $e) {
        echo "<script>alert('Erreur : " . $mail->ErrorInfo . "'); window.history.back();</script>";
    }
}