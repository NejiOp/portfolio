<?php
// Get data from form
$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email'];
$Subject = $_POST['Subject'];
$message = $_POST['message'];
$to = "anuragmishra2102@gmail.com";
$subject = "Mail From portfolio website";
$txt = "Name = " . $name . "\r\nNumber = " . $phone . "\r\nEmail = " . $email . "\r\nEvent = " . $event . "\r\nMessage =" . $message;
$headers = "From: $email" . "\r\n" .
    "CC: anuragmishra2102@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Thank you message
$message = "Thank you for your submission! We will get back to you shortly.";
echo "<script>alert('$message'); window.location.href = 'contact.html';</script>";
?>