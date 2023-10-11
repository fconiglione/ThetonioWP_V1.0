<?php
/*
Template Name: Delete Contact
*/
require('inc/auth.php');

$contactId = $_GET['id'];

require('inc/db.php');

$sql = "DELETE FROM contact_submissions WHERE id = :id";
$cmd = $db->prepare($sql);
$cmd->bindParam(':id', $contactId, PDO::PARAM_INT);

$cmd->execute();

$db = null;

header('Location: https://thetonio.com/admin-contact/');
?>