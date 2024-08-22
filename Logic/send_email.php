<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Email tujuan
    $to = "henriprasetyo6@gmail.com";
    
    // Subjek email
    $subject = "New Contact Form Submission";

    // Isi email
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // Header email
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>