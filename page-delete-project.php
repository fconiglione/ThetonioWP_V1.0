<?php
/*
Template Name: Delete Project
*/
require('inc/auth.php');

$projectId = $_GET['id'];

require('inc/db.php');

$sql = "DELETE FROM projects WHERE id = :id";
$cmd = $db->prepare($sql);
$cmd->bindParam(':id', $projectId, PDO::PARAM_INT);

$cmd->execute();

$db = null;

header('Location: https://thetonio.com/admin-portfolio/');
?>