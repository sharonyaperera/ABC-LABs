<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'moshankavishka12@gmail.com';
    $mail->Password   = 'drhsgcnogixcmwrd';
    $mail->SMTPSecure = 'tls'; // Use TLS instead of SSL
    $mail->Port       = 587;   // TLS port

    // Recipients
    $mail->setFrom($_POST["email"], $_POST["fname"]);
    $mail->addAddress('moshankavishka12@gmail.com');
    $mail->addReplyTo($_POST["email"], $_POST["fname"]);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["body"];

    // Attempt to send the email
    if ($mail->send()) {
        echo "
            <script>
                alert('Email was sent successfully!');
                window.location.href = 'test-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Mailer Error: ' . $mail->ErrorInfo);
                window.location.href = 'test-admin.php';
            </script>
        ";
    }
}
?>
