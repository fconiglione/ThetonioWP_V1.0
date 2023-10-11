<?php
// Adding the variables
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
// Adding the boolean validation
$validate = true;
// Adding several if statements to confirm proper input
if (empty($username)) {
    echo 'Username is required.<br />';
    $validate = false;
}
if (empty($password)) {
    echo 'Password is required.<br />';
    $validate = false;
}
if ($password != $confirm) {
    echo 'Passwords do not match.<br />';
    $validate = false;
}
// If the validation is true, then run the code:
if ($validate) {
    // Include database connection
    require('inc/db.php');
    // Run the sql query
    $sql = "SELECT * FROM users WHERE username = :username";
    $cmd = $db->prepare($sql);
    // Using PDO
    $cmd->bindParam(':username', $username, PDO::PARAM_STR, 250);
    $cmd->execute();
    $user = $cmd->fetch();
    // If the user is empty, then:
    if (empty($user)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        // Run the sql query
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $cmd = $db->prepare($sql);
        // PDO parameters
        $cmd->bindParam(':username', $username, PDO::PARAM_STR, 255);
        $cmd->bindParam(':password', $password, PDO::PARAM_STR, 255);
        $cmd->execute();
    }
    // If not, then give a message:
    else {
        echo 'User already exists.<br />';
        exit();
    }
    // Disconnect database
    $db = null;
    // Redirecting to index.php
    header('location:https://thetonio.com');
}?>