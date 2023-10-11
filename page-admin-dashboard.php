<?php
/*
Template Name: Dashboard
*/
get_header('admin');
require('inc/auth.php');
?>
        <section class="dashboard">
            <div class="dashboard-container">
                <div class="dashboard-title">
                    <h3>Dashboard</h3>
                </div>
                <div class="dashboard-content">
                    <div class="rundown">
                        <?php
                        function isWebsiteOnline($url) {
                            $headers = @get_headers($url);
                            return $headers && strpos($headers[0], '200 OK') !== false;
                        }
                        $websiteUrl = 'https://thetonio.com';
                        $isOnline = isWebsiteOnline($websiteUrl);

                        if ($isOnline) {
                        ?>
                        <div class="status" style="background-color: <?php echo $isOnline ? '#3cb371' : '#b74844'; ?>">
                                <div onclick="window.location.href='https://hpanel.hostinger.com/hosting/thetonio.com';">
                                    <p>Status</p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    <p>Online</p>
                                </div>
                            <?php }
                            else {
                            ?>
                                <div onclick="window.location.href='https://hpanel.hostinger.com/hosting/thetonio.com';">
                                    <p>Status</p>
                                    <i class="fa-regular fa-circle-xmark"></i>
                                    <p>Offline</p>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <div class="post-count" onclick="window.location.href='https://thetonio.com/wp-admin/edit.php';">
                            <?php
                            $count_posts = wp_count_posts();
                            $published_posts = $count_posts->publish;
                            ?>
                            <div>
                                <p>Posts</p>
                                <h3><?php echo  $published_posts ?></h3>
                                <p>Count</p>
                            </div>
                        </div>
                        <div class="project-count" onclick="window.location.href='https://thetonio.com/admin-portfolio/';">
                            <div>
                                <?php
                                require('inc/db.php');

                                $sql = "SELECT COUNT(*) as record_count FROM projects";
                                $cmd = $db->prepare($sql);
                                $cmd->execute();
                                $result = $cmd->fetch(PDO::FETCH_ASSOC);
                                $recordCount = $result['record_count'];
                                ?>
                                <p>Projects</p>
                                <h3><?php echo $recordCount ?></h3>
                                <p>Count</p>
                            </div>
                        </div>
                        <div class="form-count" onclick="window.location.href='https://thetonio.com/admin-contact/';">
                            <div>
                                <?php
                                require('inc/db.php');

                                $sql = "SELECT COUNT(*) as record_count FROM contact_submissions";
                                $cmd = $db->prepare($sql);
                                $cmd->execute();
                                $result = $cmd->fetch(PDO::FETCH_ASSOC);
                                $recordCount = $result['record_count'];
                                ?>
                                <p>Forms</p>
                                <h3><?php echo $recordCount ?></h3>
                                <p>Count</p>
                            </div>
                        </div>
                    </div>
                    <div class="two-columns-preview">
                        <div class="content-preview">
                            <div class="posts-preview">
                                <div>
                                    <p>Recent Posts</p>
                                </div>
                                <div>
                                    <?php
                                    require_once('wp-load.php');

                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 10,
                                        'order' => 'DESC',
                                        'orderby' => 'date',
                                    );

                                    $recent_posts = new WP_Query($args);

                                    if ($recent_posts->have_posts()) {
                                        ?>
                                        <table class="sortable">
                                            <tr>
                                                <th>Post Title</th>
                                            </tr>
                                            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                                <tr>
                                                    <td><?php echo '<a href="' . esc_url(get_permalink()) . '" target="_blank">' . esc_html(get_the_title()) . '</a>'; ?></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </table>
                                        <?php
                                    } else {
                                        echo '<p>No recent posts found.</p>';
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <div class="content-preview-nav">
                                    <a href="https://thetonio.com/wp-admin/edit.php">View More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="projects-preview">
                                <div>
                                    <p>Recent Projects</p>
                                </div>
                                <div>
                                    <?php
                                    require('inc/db.php');
                                    $sql = "SELECT * FROM projects ORDER BY id ASC LIMIT 10";
                                    $cmd = $db->prepare($sql);
                                    $cmd->execute();
                                    $projects = $cmd->fetchAll();
                                    ?>
                                    <table class="sortable">
                                        <tr>
                                            <th>Title</th>
                                        </tr>
                                        <?php foreach ($projects as $project) { ?>
                                            <tr>
                                                <td><?php echo "<a href=https://thetonio.com/admin-view-contact?id=" . $project['id'] . ">" . $project['projectTitle'] . "</a>"?></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                    <?php $db = null; ?>
                                </div>
                                <div class="content-preview-nav">
                                    <a href="https://thetonio.com/admin-portfolio/#active-projects">View More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-preview">
                        <div>
                            <p>Recent Contacts</p>
                        </div>
                        <div>
                            <?php
                            require('inc/db.php');
                            $sql = "SELECT * FROM contact_submissions ORDER BY id ASC LIMIT 10";
                            $cmd = $db->prepare($sql);
                            $cmd->execute();
                            $submissions = $cmd->fetchAll();
                            ?>
                            <table class="sortable">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                                <?php foreach ($submissions as $submission) { ?>
                                    <tr>
                                        <td><?php echo "<a href=https://thetonio.com/admin-view-contact?id=" . $submission['id'] . ">" . $submission['name'] . "</a>"?></td>
                                        <td><?php echo "<a href=https://thetonio.com/admin-view-contact?id=" . $submission['id'] . ">" . $submission['email'] . "</a>"?></td>
                                        <td><?php echo "<a href=https://thetonio.com/admin-view-contact?id=" . $submission['id'] . ">" . $submission['message'] . "</a>"?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <?php $db = null; ?>
                        </div>
                        <div class="content-preview-nav">
                            <a href="https://thetonio.com/admin-contact/">View More <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="extras">
                        <div class="github-extra extra-item">
                            <a target="_blank" href="https://github.com/fconiglione/ThetonioWP">
                                <div>
                                <i class="fa-brands fa-github"></i>
                                <p>Access GitHub Repository</p>
                                </div>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="yoast-extra extra-item">
                            <a target="_blank" href="https://thetonio.com/wp-admin/admin.php?page=wpseo_page_settings#/site-features">
                                <div>
                                <i class="fa-brands fa-yoast"></i>
                                <p>Access Yoast SEO Settings</p>
                                </div>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="analytics-extra extra-item">
                            <a target="_blank" href="https://analytics.google.com/analytics/web/#/p410292155/reports/intelligenthome">
                                <div>
                                <i class="fa-brands fa-google"></i>
                                <p>Access Google Analytics Dashboard</p>
                                </div>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="console-extra extra-item">
                            <a target="_blank" href="https://search.google.com/search-console?resource_id=https://thetonio.com/">
                                <div>
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>Access Google Search Console</p>
                                </div>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
