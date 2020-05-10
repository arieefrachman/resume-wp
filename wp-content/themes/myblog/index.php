<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="card mb-4">
                    <?php the_post_thumbnail('home-post-thumbnail');?>
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title()?></h2>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink();?>" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php echo get_the_date()?> by <?php echo get_the_author()?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>
