<?php get_header(); ?>
    <main>
        <section class="masthead" id="masthead">
            <div class="masthead-text">
                <div>
                    <h1>Software Engineer.</h1>
                </div>
                <div>
                    <p>In pursuing a computer science degree, I've already started exploring the multifaceted landscape of software engineering, including captivating realms like <span class="bold" >big data</span>, <span class="bold" >AI</span> and <span class="bold" >network security.</span></p>
                </div>
                <div class="masthead-nav">
                    <div class="download-btn">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/files/FConiglioneResume.docx" download>Download CV &boxh;&boxh;&boxh;</a>
                    </div>
                    <div class="portfolio-btn">
                        <div>
                            <a href="https://thetonio.com/#portfolio">See My Work     <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="masthead-photo">
                <a href="https://thetonio.com/#about">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/FrancescoConiglionePortrait.png" alt="Francesco Coniglione Portrait.">
                </a>
            </div>
        </section>
        <section class="about" id="about">
            <div>
                <h2>A Little Bit About Me...</h2>
            </div>
            <div class="about-slideshow">
                <div class="slide-btns">
                    <a class="prev-btn" onclick="plusSlides(-1)"><</a>
                    <a class="next-btn" onclick="plusSlides(1)">></a>
                </div>
                <div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-slideshow-1.png" alt="Francesco Coniglione and his brother (Vincenzo Coniglione) at Disney World.">
                        </div>
                        <div class="slide-text">
                            <div>
                                <h1>2004</h1>
                            </div>
                            <div>
                                <p>Born on February 29, my parents instilled in me the importance of hard work and resilience. These lessons have been my guiding principles throughout my life, helping me to not only succeed but to exceed expectations at every opportunity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-slideshow-2.png" alt="A patients' gift of cookies to the staff members at Whitfield-Guardian Pharmacy during the COVID-19 pandemic.">
                        </div>
                        <div class="slide-text">
                            <div>
                                <h1>2019</h1>
                            </div>
                            <div>
                                <p>Shortly after beginning high school, I embraced a part-time role as a front shop clerk at a neighborhood drug store. Within just a year, I advanced within the company, assuming the responsibilities of a pharmacy assistant.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-slideshow-3.png" alt="Francesco Coniglione with his family at his high school graduation in June 2021.">
                        </div>
                        <div class="slide-text">
                            <div>
                                <h1>2021</h1>
                            </div>
                            <div>
                                <p>In June 2021, I fast-tracked high school and obtained my Ontario Secondary School Diploma (OSSD). Immediately, with the intent of becoming a physician-scientist, I went on to pursue a Bachelor of Science at the University of Toronto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-slideshow-4.png" alt="A photograph outside of Canadian Blood Services located in Heartland Town Centre in Missisauga, Ontario.">
                        </div>
                        <div class="slide-text">
                            <div>
                                <h1>2022</h1>
                            </div>
                            <div>
                                <p>After volunteering at Canadian Blood Services and Etobicoke General Hospital, I quickly realized that medicine was not my true calling. In September 2022, I transferred to Lakehead University and changed my major to computer science.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-slideshow-5.png" alt="TD Credit Card Refresh 2022 staff cookies.">
                        </div>
                        <div class="slide-text">
                            <div>
                                <h1>Present</h1>
                            </div>
                            <div>
                                <p>Today, I am pursuing my education while simultaneously employed at Toronto-Dominion Bank. Additionally, I engage in freelance web design while honing my Python and Java proficiency through self-initiated software development projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
            </div>
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides((slideIndex += n));
                }

                function currentSlide(n) {
                    showSlides((slideIndex = n));
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("slide");
                    let progressFill = document.querySelector(".progress-fill");

                    if (n > slides.length) {
                        slideIndex = 1;
                    }

                    if (n < 1) {
                        slideIndex = slides.length;
                    }

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    slides[slideIndex - 1].style.display = "flex";

                    // Calculate the width for the progress bar
                    const widthPercentage = ((slideIndex - 1) / (slides.length - 1)) * 100;
                    progressFill.style.width = widthPercentage + "%";
                }
            </script>
        </section>
        <section class="skills">
            <div class="skills-text">
                <div>
                    <h3>Skills & Technologies</h3>
                </div>
                <div>
                    <p>Below are the skills, tools, and technologies that I use to craft <span class="bold">cutting-edge solutions</span>, <span class="bold">drive innovation</span>, and <span class="bold">bring projects to life</span>.</p>
                </div>
            </div>
            <div class="skills-icons">
                <div class="icon">
                    <i class="devicon-html5-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-css3-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-bootstrap-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-javascript-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-python-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-java-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-php-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-git-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-github-original"></i>
                </div>
                <div class="icon">
                    <i class="devicon-c-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-cplusplus-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-csharp-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-jquery-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-dot-net-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-mysql-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-microsoftsqlserver-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-wordpress-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-vscode-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-visualstudio-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-filezilla-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-phpstorm-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-intellij-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-pycharm-plain"></i>
                </div>
                <div class="icon">
                    <i class="devicon-webstorm-plain"></i>
                </div>
            </div>
        </section>
        <section class="projects" id="portfolio">
            <div>
                <h2>Check Out Some Of My <span class="highlight">Favorite</span> Coding Projects</h2>
            </div>
            <div class="projects-list">
            <?php
            require('inc/db.php');

            $sql = "SELECT * FROM projects;";
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

                    if ($displayedProjects >= 4) {
                        break;
                    } $displayedProjects++;
            ?>
                <div class="projects-item">
                    <div class="project-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $preview; ?>" alt="<?php echo $previewAlt; ?>">
                    </div>
                    <div>
                        <div><h3><?php echo $projectTitle; ?></h3></div>
                        <div><p><?php echo $projectDescription; ?></p></div>
                        <div><a href="<?php echo $projectLink; ?>">Read More     <i class="fa-solid fa-arrow-right-long"></i></a></div>
                    </div>
                </div>
            <?php
				}
			} else {
				echo "<p>No projects currently available. Please visit my GitHub by clicking <a href='https://github.com/fconiglione/'>here</a>.</p>";
			}
			$db = null;
			?>
            </div>
        </section>
        <section class="blog" id="blog">
            <div>
                <h2>Delving Deep Into The World Of Technology</h2>
            </div>
            <div class="blog-layout">
                <div class="blog-featured">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1
                    );
                    $articles_query = new WP_Query($args);
                    if ($articles_query->have_posts()) :
                        while ($articles_query->have_posts()) : $articles_query->the_post();
                            ?>
                            <div class="blog-featured-item">
                                <div>
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                </div>
                                <div class="blog-featured-item-info">
                                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo mb_substr(get_the_excerpt(), 0, 250) . '...'; ?></p>
                                    <a href="<?php echo get_permalink(); ?>" class="blog-featured-item-btn">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <p>No featured post currently available. Please visit the blog by clicking <a href="http://thetonio.com/blog/">here</a>.</p>
                    <?php
                    endif;
                    ?>
                </div>
                <div class="blog-list">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'offset' => 1
                    );
                    $articles_query = new WP_Query($args);

                    if ($articles_query->have_posts()) :
                        while ($articles_query->have_posts()) : $articles_query->the_post();
                            ?>
                            <div class="blog-item">
                                <div>
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                </div>
                                <div class="blog-item-info">
                                    <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <?php
                                    $temp_date = get_the_date();
                                    ?>
                                    <div class="blog-meta"><?php echo $temp_date; ?></div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <p>No posts currently available. Please visit the blog by clicking <a href="http://thetonio.com/blog/">here</a>.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="blog-layout-nav">
                <a href="http://thetonio.com/blog/">View All <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </section>
        <section class="contact" id="contact">
            <div>
                <h2>Contact Me</h2>
            </div>
            <div>
                <form action="/wp-content/themes/ThetonioWP_V1.0/contact-form.php" method="POST" onsubmit="return validateAndSubmit(this);">
                    <div class="contact-form-column">
                        <fieldset>
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </fieldset>
                        <fieldset>
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </fieldset>
                        <div class="g-recaptcha" data-sitekey="6LdCOWIoAAAAAJzPBX0oyQrf9IbmKiUWSCFew8oA"></div>
                        <input type="submit" name="submit" value="Get In Touch &boxh;&boxh;&boxh;" class="submit-btn-1">
                    </div>
                    <div class="contact-form-column">
                        <fieldset>
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                        </fieldset>
                        <div class="contact-form-socials">
                            <a target="_blank" href="https://www.linkedin.com/in/francescoconiglione/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://www.instagram.com/f.coniglione/"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="https://github.com/fconiglione/"><i class="fa-brands fa-github"></i></a>
                            <a target="_blank" href="mailto:fconiglione@protonmail.com"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                        <input type="submit" name="submit" value="Get In Touch &boxh;&boxh;&boxh;" class="submit-btn-2">
                    </div>
                    <script>
                        var recaptcha1;
                        var minWidth = 767;
                        function validateAndSubmit(form) {
                            if (window.innerWidth >= minWidth) {
                                var recaptchaValue1 = grecaptcha.getResponse(recaptcha1);
                                if (!recaptchaValue1) {
                                    alert("Please complete the reCAPTCHA verification.");
                                    return false;
                                }
                                return true;
                            }
                            else {
                                return true;
                            }
                        }
                        grecaptcha.ready(function () {
                            recaptcha1 = grecaptcha.render('g-recaptcha', {
                                'sitekey': '6LdCOWIoAAAAAJzPBX0oyQrf9IbmKiUWSCFew8oA'
                            });
                        });
                    </script>
                </form>
            </div>
        </section>
    </main>
<?php get_footer(); ?>