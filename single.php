<?php get_header(); ?>

    <section class="post">
        <div class="post-masthead">
            <div>
                <h2><?php the_title(); ?></h2>
                <hr>
            </div>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-content">
                <article>
                    <?php the_post_thumbnail('large'); ?>
                    <p><b><?php echo get_the_date(); ?> — </b><?php echo wpautop(get_the_content()); ?></p>
                </article>
            </div>
        <?php endwhile; endif; ?>
        <div class="sharing-section">
            <hr>
            <div class="sharing">
                <a href="https://www.linkedin.com/shareArticle?url=<?php echo urlencode(get_permalink()); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>"><i class="fa-brands fa-twitter"></i></a>
                <a target="_blank" href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?php echo urlencode(get_permalink()); ?>"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>