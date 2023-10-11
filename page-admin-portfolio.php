<?php
/*
Template Name: Admin Portfolio
*/
get_header('admin');
require('inc/auth.php');
?>
        <section class="admin-portfolio">
            <div class="admin-portfolio-container">
                <div class="new-project">
                    <div class="new-project-title">
                        <h3>Create A New Project</h3>
                    </div>
                    <div>
                        <form action="/wp-content/themes/ThetonioWP_V1.0/create-project.php" method="POST">
                            <fieldset>
                                <label for="preview">Preview File Path</label>
                                <input type="text" id="preview" name="preview" placeholder="Enter preview file path" required>
                            </fieldset>
                            <fieldset>
                                <label for="previewAlt">Preview Alt Text</label>
                                <input type="text" id="previewAlt" name="previewAlt" placeholder="Enter preview alt text" required>
                            </fieldset>
                            <fieldset>
                                <label for="projectTitle">Project Title</label>
                                <input type="text" id="projectTitle" name="projectTitle" placeholder="Enter project title" required>
                            </fieldset>
                            <fieldset>
                                <label for="projectDescription">Project Description</label>
                                <textarea id="projectDescription" name="projectDescription" placeholder="Enter project description" required></textarea>
                            </fieldset>
                            <fieldset>
                                <label for="projectLink">Project Link</label>
                                <input type="text" id="projectLink" name="projectLink" placeholder="Enter project link" required>
                            </fieldset>
                            <input type="submit" name="submit" value="Create Project &boxh;&boxh;&boxh;" class="project-submit-btn">
                        </form>
                    </div>
                </div>
                <div class="admin-project-list">
                    <div class="project-list-title">
                        <h3>Active Projects</h3>
                    </div>
                    <div class="project-list-table" id="active-projects">
                        <?php
                        require('inc/db.php');
                        $sql = "SELECT * FROM projects";
                        $cmd = $db->prepare($sql);
                        $cmd->execute();
                        $projects = $cmd->fetchAll();
                        ?>
                        <table class="sortable">
                            <tr>
                                <th>Project Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach ($projects as $project) { ?>
                            <tr>
                                <td><?php echo $project['projectTitle'] ?></td>
                                <td><?php echo $project['projectDescription'] ?></td>
                                <td class="actions">
                                    <a href="https://thetonio.com/admin-edit-project?id=<?php echo $project['id']; ?>" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="https://thetonio.com/admin-delete-project?id=<?php echo $project['id']; ?>" title="Delete" onclick="return confirmDelete();"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php $db = null; ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
