<?php get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) { ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="grid">
                <div class="grid__cell unit-3-4--bp4">
                    <div class="content">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="grid__cell unit-1-4--bp4">
                    <?php get_sidebar(); ?> 
                </div>
            </div>
        <?php endwhile; ?>
    <?php } else { ?>
        <?php get_template_part( 'parts/not-found' ); ?>
    <?php } ?>
</div>

<?php get_footer(); ?>