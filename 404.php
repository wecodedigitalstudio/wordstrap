<?php get_header(); ?>

<section class="not-found d-flex align-items-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <?php $not_found = wp_get_attachment_image_src(8, 'full'); ?> 
                <img class="img-fluid" src="<?php echo $not_found[0] ?>" />
                <h2 class="text-monospace mt-3">404 NOT FOUND</h2>
            </div>
        </div>
    </div>
</section>

<?php  get_footer(); ?>