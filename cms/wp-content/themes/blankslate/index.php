<?php get_header(); ?>
<main id="content" role="main">
    <div style="display: flex;">
        <div style="width:100%">
        </div>
        <div style="width:100%">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div style="box-shadow: 0px 0px 7px gray;max-width:300px;">
                <img src="<?php the_post_thumbnail_url() ?>" width="100%">
                <div style="padding:20px;">
                    <p style="font-weight:bold;"><?php the_title() ?></p>
                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>