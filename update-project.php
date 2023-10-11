<?php
require('inc/auth.php');

$preview = $_POST['preview'];;
$previewAlt = $_POST['previewAlt'];
$projectTitle = $_POST['projectTitle'];
$projectDescription = $_POST['projectDescription'];
$projectLink = $_POST['projectLink'];
$projectId = $_POST['id'];
$ok = true;

if (empty($projectId)) {
    echo '<p>Project id is required.</p>';
    $ok = false;
}
if (empty($preview)) {
    echo '<p>File path is required.</p>';
    $ok = false;
}
if (empty($previewAlt)) {
    echo '<p>Alt text is required.</p>';
    $ok = false;
}
if (empty($projectTitle)) {
    echo '<p>Project title is required.</p>';
    $ok = false;
}
if (empty($projectDescription)) {
    echo '<p>Project description is required.</p>';
    $ok = false;
}
if (empty($projectLink)) {
    echo '<p>Project link is required.</p>';
    $ok = false;
}

if ($ok) {
    require('inc/db.php');
    $sql = "UPDATE projects SET preview = :preview, previewAlt = :previewAlt, projectTitle = :projectTitle, projectDescription = :projectDescription, projectLink = :projectLink WHERE id = :id";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(':preview', $preview, PDO::PARAM_STR, 255);
    $cmd->bindParam(':previewAlt', $previewAlt, PDO::PARAM_STR, 255);
    $cmd->bindParam(':projectTitle', $projectTitle, PDO::PARAM_STR, 255);
    $cmd->bindParam(':projectDescription', $projectDescription, PDO::PARAM_STR);
    $cmd->bindParam(':projectLink', $projectLink, PDO::PARAM_STR, 255);
    $cmd->bindParam(':id', $projectId, PDO::PARAM_INT);

    $cmd->execute();
    $db = null;

    header('Location: https://thetonio.com/admin-portfolio/');
    exit();
}
?>