<?php
$to      = 'sohamsahare123@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: soham.sahare@vit.edu.in' . "\r\n" .
    'Reply-To: soham.sahare@vit.edu.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
?> 