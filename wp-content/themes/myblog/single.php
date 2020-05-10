<?php
    get_header();
?>
<div class="container">
    <?php
    while (have_posts()) {
        the_post();
        ?>
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mt-4"><?php the_title()?></h1>
                <p class="lead">
                    by <?php the_author()?>
                </p>
                <hr>
                <p>Posted on <?php the_date()?></p>
                <hr>
                <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">-->
                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                <hr>
                <?php the_content();?>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
    get_footer();
?>
