<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $object = $_POST["object"];
    $message = $_POST["message"];

    // Your processing logic here...

    // For debugging, you can use var_dump or print_r to check the received data
    var_dump($_POST);
}
?>
