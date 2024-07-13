<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div id="content" class="col-md-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <footer class="entry-footer">
                            <span class="posted-on"><?php the_time('F j, Y'); ?></span>
                            <span class="byline"> by <?php the_author(); ?></span>
                        </footer>
                    </article>
                    <?php
                endwhile;
                the_posts_navigation();
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
