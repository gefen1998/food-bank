php_check_syntax

<!-- // Hi there! these two php files are some try-ups codes I wrote for the registration part ("join us")  -->
<!-- // if any of you succeed to make it ACRUALLY work, i'll eb really happy.
of course you shall install PHP to work this code up!! INSTALLATION DOWN BELOW
https://secure.php.net/manual/en/function.mail.php 
https://secure.php.net/downloads.php   -->

<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>