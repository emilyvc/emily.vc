<?php 
    $children = ra_get_pages($post->ID);

    if(is_page_template('tpl-section-a.php')) {
        $box_style = 'box--blue u-bordered-light';
        $icon_style = 'icon--arrow-right';
    } else {
        $box_style = 'box--grey u-bordered-blue';
        $icon_style = 'icon--arrow-right-blue';
    }
?>

<section class="section section--large">
    <div class="grid grid--compact">
        <?php if ( $children->have_posts() ): ?>
            <?php while ( $children->have_posts() ): ?>
                <div class="grid__item grid__item--6-12-bp2 grid__item--4-12-bp3">
                    <?php $children->the_post(); ?> <?php setup_postdata($children); ?>
                    <a class="box box--small <?php echo $box_style; ?> | match-height" href="<?php echo get_permalink(); ?>">
                        <h1 class="box__text | gamma"><?php the_title(); ?></h1>
                        <?php if(is_page_template('tpl-section-b.php')) { ?>
                            <p class="box__excerpt"><?php echo get_the_excerpt(); ?></p>  
                        <?php } ?>
                        <span class="box__btn | icon icon--medium <?php echo $icon_style; ?> "></span>
                    </a>
                </div>
            <?php endwhile; 
        endif; wp_reset_postdata(); ?>
    </div>
</section>
