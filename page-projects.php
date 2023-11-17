<?php
/*
Template Name: Projects
*/
get_header();
?>
<section class="projects-display">
    <div class="projects-display-container">
        <div class="projects-list">
            <?php
            require('inc/db.php');

            $sql = "SELECT * FROM projects ORDER BY id DESC";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $projects = $cmd->fetchAll();

            $displayedProjects = 0;

            if (count($projects) > 0) {
                foreach ($projects as $project) {
                $preview = $project['preview'];
                $previewAlt = $project['previewAlt'];
                $projectTitle = $project['projectTitle'];
                $projectDescription = $project['projectDescription'];
                $projectLink = $project['projectLink'];
                $gitHubLink = $project['githubLink'];

                if ($displayedProjects >= 20) {
                    break;
            } $displayedProjects++;
            ?>
            <article class="projects-item">
                <div class="project-img">
                    <a href="<?php echo $projectLink; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $preview; ?>" alt="<?php echo $previewAlt; ?>">
                    </a>
                </div>
                <div>
                    <div><h3><?php echo $projectTitle; ?></h3></div>
                    <div><p><?php echo $projectDescription; ?></p></div>
                    <div class="project-nav">
                        <div><a target="_blank" href="<?php echo $projectLink; ?>">Visit Project &boxh;&boxh;&boxh;</a></div>
                        <div><a target="_blank" href="<?php echo $gitHubLink ?>"><i class="fa-brands fa-github"></i> Access Repository</a></div>
                    </div>
                </div>
            </article>
            <?php
                }
            } else {
                ?>
                <p>No projects currently available. Please visit GitHub by clicking <a href="https://github.com/fconiglione">here</a>.</p>
            <?php }
                ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>