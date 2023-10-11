<?php
/*
Template Name: Edit Project
*/
require('inc/auth.php');
get_header('admin');

$projectId = $_GET['id'];

if (empty($projectId) || !is_numeric($projectId)) {
    header('Location: https://thetonio.com/404/');
    exit();
}

require('inc/db.php');

$sql = "SELECT * FROM projects WHERE id = :id";
$cmd = $db->prepare($sql);
$cmd->bindParam(':id', $projectId, PDO::PARAM_INT);
$cmd->execute();
$project = $cmd->fetch();

$preview = $project['preview'];
$previewAlt = $project['previewAlt'];
$projectTitle = $project['projectTitle'];
$projectDescription = $project['projectDescription'];
$projectLink = $project['projectLink'];

?>
        <section class="edit-project-section">
            <div class="admin-edit-project-container">
                <div class="edit-project">
                    <div class="edit-project-title">
                        <h3>Edit Existing Project</h3>
                    </div>
                    <div>
                        <form action="/wp-content/themes/ThetonioWP_V1.0/update-project.php" method="POST">
                            <fieldset>
                                <label for="preview">Preview File Path</label>
                                <input type="text" id="preview" name="preview" placeholder="Enter preview file path" value="<?php echo $preview; ?>" required>
                            </fieldset>
                            <fieldset>
                                <label for="previewAlt">Preview Alt Text</label>
                                <input type="text" id="previewAlt" name="previewAlt" placeholder="Enter preview alt text" value="<?php echo $previewAlt; ?>" required>
                            </fieldset>
                            <fieldset>
                                <label for="projectTitle">Project Title</label>
                                <input type="text" id="projectTitle" name="projectTitle" placeholder="Enter project title" value="<?php echo $projectTitle; ?>" required>
                            </fieldset>
                            <fieldset>
                                <label for="projectDescription">Project Description</label>
                                <textarea id="projectDescription" name="projectDescription" placeholder="Enter project description" required><?php echo $projectDescription; ?></textarea>
                            </fieldset>
                            <fieldset>
                                <label for="projectLink">Project Link</label>
                                <input type="text" id="projectLink" name="projectLink" placeholder="Enter project link" value="<?php echo $projectLink; ?>" required>
                            </fieldset>
                            <div>
                                <input name="id" id="id" value="<?php echo $projectId; ?>" type="hidden" />
                                <input type="submit" name="submit" value="Update Project &boxh;&boxh;&boxh;" class="project-update-btn">
                                <a href="https://thetonio.com/admin-delete-project?id=<?php echo $projectId; ?>" class="delete-project-btn" onclick="return confirmDelete();">Delete Project <i class="fa-solid fa-delete-left"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="project-disclaimer">
                    <p><i class="fa-solid fa-circle-exclamation"></i> Important Message</p>
                    <p>Any changes you make on this page will be reflected immediately. Please double-check any edits before saving to ensure accuracy. Note that all edits are permanent and cannot be undone.</p>
                </div>
            </div>
            <?php
            $db = null;
            ?>
        </section>
    </body>
</html>
