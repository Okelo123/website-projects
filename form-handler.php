<?php
// Sanitize user inputs
$name = htmlspecialchars($_POST['name']);
$visitor_email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$email_from = 'info@mywebsite.com'; // email of your website

$email_subject = 'New Form Submission'; // write any text

// Create email body
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n"; 

$to = 'jumabrian3583@gmail.com'; // recipient email

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n"; // Corrected closing quotation mark and added missing line break

// Send email
mail($to, $email_subject, $email_body, $headers);

// Redirect to contact page after submission
header("Location: contact.html");
exit(); // Ensure the script stops executing after redirection
?>
