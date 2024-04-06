<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send email
        $to = "souhaylaelmeftahi@gmail.com"; // Replace with your email address
        $subject = "New message from website contact form";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $subject, $body)) {
            echo "Email sent successfully";
        } else {
            echo "Failed to send email";
        }
    } else {
        echo "Please fill in all fields";
    }
}
?>
