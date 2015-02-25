<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php } else { ?>
    <?php get_template_part( 'parts/not-found' ); ?>
<?php } ?>

<?php get_footer(); ?>