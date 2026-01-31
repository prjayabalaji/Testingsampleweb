<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST['first_name'];
    $lastName  = $_POST['last_name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $company   = $_POST['company'];
    $subject   = $_POST['subject'];
    $message   = $_POST['message'];

    $to = "pr.jayabalaji@gmail.com"; // CHANGE THIS TO YOUR EMAIL
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "
    You have received a new message from your contact form.\n\n
    Name: $firstName $lastName\n
    Email: $email\n
    Phone: $phone\n
    Company: $company\n
    Subject: $subject\n
    Message:\n$message
    ";

    $headers = "From: $email";

    if(mail($to, $email_subject, $email_body, $headers)){
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
