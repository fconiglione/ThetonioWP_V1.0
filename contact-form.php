<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$ok = true;

if (empty($name)) {
    echo '<p>Name is required.</p>';
    $ok = false;
}
if (empty($email)) {
    echo '<p>Email is required.</p>';
    $ok = false;
}
if (empty($message)) {
    echo '<p>Message is required.</p>';
    $ok = false;
}

if ($ok) {
    // Save to db
    require('inc/db.php');
    $sql = "INSERT INTO contact_submissions (name, email, message) 
        VALUES (:name, :email, :message)";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 255);
    $cmd->bindParam(':email', $email, PDO::PARAM_STR, 255);
    $cmd->bindParam(':message', $message, PDO::PARAM_STR);

    $cmd->execute();
    $db = null;

    // Send an email
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "internal@thetonio.com";
    $to = "fconiglione@protonmail.com";
    $subject = 'Contact Form: ' . $name;
    $message = $message . ' - ' . $email;
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        header('Location: https://thetonio.com/#contact');
        exit;
    } else {
        echo "Email couldn't be sent.";
    }
}
?>
