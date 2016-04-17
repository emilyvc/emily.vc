<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) : the_post(); ?>
 
    <div class="container container--main">
        <h1 class="u-align-left"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
<?php } else { ?>
    <?php get_template_part( 'parts/not-found' ); ?>
<?php } ?>

<?php get_footer(); ?>