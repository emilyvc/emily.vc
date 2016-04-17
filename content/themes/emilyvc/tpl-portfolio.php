<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) : the_post(); ?>
 
    <div class="container container--main">
        <div class="grid">
            <div class="block">
                <div class="grid__cell unit-12-12--bp3">
                    <a href="http://www.wearespoke.co.uk/"><h1 class="block__title beta">Spoke</h1></a>
                    <p>Spoke are a communications agency based in London, I worked with Spoke as they started to build their new business, they wanted an engaging site that would drive. This was my first site I designed and developed single handley.</p>
                </div>
            </div>
            <div class="block">
                <div class="grid__cell unit-12-12--bp3">
                    <a href="http://www.derwenthill.co.uk/"><h1 class="block__title beta">Derwent Hill</h1></a>
                    <p>Derwent Hill are an outdoor learning company based in Keswick in the Lake District, they wanted to re-design their existing website. I was tasked with designing and developing this new build.</p>
                </div>
            </div>
            <div class="block">
            <div class="grid__cell unit-12-12--bp3">
                    <a href="https://www.ulh.nhs.uk/"><h1 class="block__title beta">NHS United Lincolnshire Hospital</h1></a>
                    <p>At <a href="http://www.mixd.co.uk/">Mixd</a> we work with a large amount of public sectors ana handful of NHS sites such as ULH.  I’ve been lucky enough to be part of developing these sites as well as helping some the design process along the way.</p>
                </div>
                </div>
            <div class="block">
            <div class="grid__cell unit-12-12--bp3">
                    <a href=""><h1 class="block__title beta">FFCLM</h1></a>
                    <p>At Mixd we work with a large amount of public sectors ana handful of NHS sites such as ULH.  I’ve been lucky enough to be part of developing these sites as well as helping the design process along the way.</p>
                </div>
                </div>
        </div>
    </div>
        <?php endwhile; ?>
    <?php } else { ?>
        <?php get_template_part( 'parts/not-found' ); ?>
    <?php } ?>


<?php get_footer(); ?>