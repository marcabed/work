<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'marcabed@yahoo.fr'; 
    $subject = 'New Message from CV';

    $body = "From: $name <br> E-Mail: $email <br> Message: <br> $message";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $email. "\r\n";
    $headers .= 'Cc:' . $email. "\r\n";

    mail ($to, $subject, $body, $headers);
?>