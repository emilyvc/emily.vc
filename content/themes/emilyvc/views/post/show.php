<?php

/**
 ***************************************************************************
 * Partial: Posts Show
 ***************************************************************************
 *
 * Display the Post's single.php information.
 *
 */



/**
 * Gain access to $post data
 */
global $post, $article;


$article_image = get_field('featured_image' , $post->ID );

$image = false;
if( $article_image ):
    $image = $article_image['sizes']['post'];
endif;

$type = ra_term_links($post->ID, 'category' , false );

?>


<div class="article article--small article--grey | u-bordered-blue">
    <?php if ( $image ) : ?>
        <img src="<?php echo $image; ?>" alt="" class="article__img">
    <?php endif; ?>
    <div class="article__body">
        <p class="zeta | meta | u-push-bottom">Posted <?php echo get_the_date('jS F Y'); ?> in <?php echo $type; ?></p>
        <h1 class="gamma"><a class="box__text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="u-weight-normal">
            <?php if ( $post->post_excerpt ): ?>
                <?php echo get_the_excerpt(); ?>
            <?php endif; ?>
        </p>
    </div>
    <div class="article__meta">
        <?php get_template_part('views/post/tagged'); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="article__btn | icon icon--medium icon--arrow-right-blue"></a>
</div>
