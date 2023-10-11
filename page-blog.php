<?php
/*
Template Name: Blog
*/
get_header(); ?>
<section class="blog-library">
    <div class="blog-library-container">
        <div class="blog-library-list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 12,
                'paged' => $paged,
            );

            $articles_query = new WP_Query($args);

            if ($articles_query->have_posts()) :
                while ($articles_query->have_posts()) : $articles_query->the_post();
                    ?>
                    <article class="blog-item">
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
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No posts currently available. Please visit the blog by clicking <a href="http://thetonio.com/blog/">here</a>.</p>
            <?php endif; ?>
        </div>
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $articles_query->max_num_pages,
            ));
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
