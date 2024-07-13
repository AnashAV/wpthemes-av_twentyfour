<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div id="content" class="col-md-8">
            <header class="page-header">
                <h1 class="page-title"><?php _e('Oops! That page can’t be found.', 'av_twentyfour'); ?></h1>
            </header>
            <div class="page-content">
                <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'av_twentyfour'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
