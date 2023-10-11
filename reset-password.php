<?php
require('inc/auth.php');

$username = "fconiglione@thetonio.com";
$current = $_POST['currentPassword'];
$password = $_POST['newPassword'];
$confirm = $_POST['confirmPassword'];
$ok = true;

if (empty($current)) {
    echo 'Current password is required.<br />';
    $ok = false;
}
if (empty($password)) {
    echo 'Password is required.<br />';
    $ok = false;
}
if ($password != $confirm) {
    echo 'Passwords do not match.<br />';
    $ok = false;
}

if($ok) {
    require('inc/db.php');

    $sql = "SELECT * FROM users WHERE username = :username";
    $cmd = $db->prepare($sql);

    $cmd->bindParam(':username', $username, PDO::PARAM_STR, 250);
    $cmd->execute();
    $user = $cmd->fetch();

    if (password_verify($current, $user['password'])) {
        $newPasswordHash = password_hash($password, PASSWORD_DEFAULT);
        $updateSql = "UPDATE users SET password = :newPassword WHERE username = :username";
        $updateCmd = $db->prepare($updateSql);
        $updateCmd->bindParam(':newPassword', $newPasswordHash,PDO::PARAM_STR, 255);
        $updateCmd->bindParam(':username', $username,PDO::PARAM_STR, 255);
        $updateCmd->execute();
    }
    $db = null;
    require('log-out.php');
}
?>