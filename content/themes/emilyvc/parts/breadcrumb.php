<p class="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <a href="/" typeof="v:Breadcrumb">Home</a> &gt; 
    <?php
    if ( is_singular( 'chalets' ) ) { ?>
        <a href="/chalets" typeof="v:Breadcrumb" rel="v:url" property="v:title">Luxury Chalets</a> &gt; 

        <?php
        if($post->post_parent > 0) { ?>
            <a href="<?php echo get_the_permalink( $post->post_parent ); ?>" typeof="v:Breadcrumb" rel="v:url" property="v:title"><?php echo get_the_title($post->post_parent); ?></a> &gt; 
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php
        } else { ?>
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php
        }
    } elseif ( is_singular( 'apartments' ) ) { ?>
        <a href="/apartments" typeof="v:Breadcrumb" rel="v:url" property="v:title">Self Catered Apartments</a> &gt; 

        <?php
        if($post->post_parent > 0) { ?>
            <a href="<?php echo get_the_permalink( $post->post_parent ); ?>" typeof="v:Breadcrumb" rel="v:url" property="v:title"><?php echo get_the_title($post->post_parent); ?></a> &gt; 
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php
        } else { ?>
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php
        }
    } elseif( is_home() ) { ?>
        <span typeof="v:Breadcrumb" property="v:title">Blog</span>
    <?php
    } elseif( is_singular('post') ) {
        $cats = wp_get_post_categories( $post->ID );
        $cat = get_category( $cats[0] );
        ?>
        <a href="/blog" typeof="v:Breadcrumb" rel="v:url" property="v:title">Blog</a> &gt; 
        <a href="/blog/<?php echo $cat->slug; ?>" typeof="v:Breadcrumb" rel="v:url" property="v:title"><?php echo $cat->name; ?></a> &gt; 
        <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
    <?php
    } elseif( is_category() ) { ?>
        <a href="/blog" typeof="v:Breadcrumb" rel="v:url" property="v:title">Blog</a> &gt; 
        <span typeof="v:Breadcrumb" property="v:title">Category: <?php single_cat_title(); ?></span>
    <?php
    } elseif( is_date() ) { ?>
        <a href="/blog" typeof="v:Breadcrumb" rel="v:url" property="v:title">Blog</a> &gt; 
        <span typeof="v:Breadcrumb" property="v:title">Archive: <?php single_month_title(' '); ?></span>
    <?php
    } else { ?>
        <?php if($post->post_parent > 0) {
            $page_url = '/';
            $post_parents = array_reverse(get_post_ancestors($post->ID));

            foreach($post_parents as $parent_id) { ?>
            <a href="<?php echo get_the_permalink( $parent_id ); ?>" typeof="v:Breadcrumb" rel="v:url" property="v:title"><?php echo get_the_title($parent_id); ?></a> &gt; 
            <?php } ?>
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php } else { ?>
            <span typeof="v:Breadcrumb" property="v:title"><?php echo $post->post_title; ?></span>
        <?php } ?>
    <?php } ?>
</p>