<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $object = $_POST["object"];
    $message = $_POST["message"];

    // Perform data validation
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // If there are no validation errors
    if (empty($errors)) {
        // Perform desired actions here (e.g., send email, store data)
        
        // Example: Send an email
        $to = "beatrizdsantos1250@gmail.com";
        $subject = "Contact Form Submission";
        $messageBody = "Name: $name\nEmail: $email\nObject: $object\nMessage: $message";

    } else {
        // Display validation errors to the user
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
