<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js ie lt-ie9 " lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js " lang="en"><!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '', true, 'right' ); ?><?php if ( ! is_front_page() ): ?>| <?php bloginfo( 'name' ); ?><?php endif; ?></title>
    <meta name="description" content="">
    <link rel="canonical" href="http://www.emily.vc" />

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png" />

    <!--[if IE 9]><!-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styles.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie.css" media="screen">
    <![endif]-->

    <!-- Grunticon fallback if no JS -->
    <noscript><link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/grunticon/icons.fallback.css" rel="stylesheet"></noscript>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/min/head.min.js"></script>

    <?php wp_head(); ?>
</head>
<body class="holder-bg debug">
    <div class="site-container">
        <div class="profile">
            <h1 class="profile__title">Emily Cressey</h1>
            <p class="profile__subtitle">Front-end Developer &amp; Designer</p>
            <div class="social">
                <ul class="social__list">
                    <a href="mailto:hi@emily.vc"><li><i class="icon icon--medium icon--mail"></i></li></a>
                    <a href="http://twitter.com/emilyvc_"><li><i class="icon icon--medium icon--twitter"></i></li></a>
                    <a href="http://dribbble.com/emilyvc_"><li><i class="icon icon--medium icon--dribbble"></i></li></a>
                </ul>
            </div>
        </div>
    </div>