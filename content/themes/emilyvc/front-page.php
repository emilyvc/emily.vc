<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This template is used to show the front page of a WordPress website,
 * regardless of whether or not its a Static Page or Posts landing.
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */



// Get the header
get_header();

?>

<main>
    <div class="section section--head">
        <div class="container">
            <div class="header">
                <a href="" class='header__logo | icon icon--large icon--logo'></a>
                <a href="" class='header__mail | icon icon--large icon--mail'></a>
            </div>
            <div class="section__intro">
                <div class="section__container">
                
                    <h1 class="section__heading">Hi, I'm a <span class="element"></span></h1>
                    <ul class="list list--unset | section__list">
                         <li><a href="">Twitter</a></li>
                         <li><a href="">Dribbble</a></li>
                         <li><a href="">Instagram</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--large section--main">
        <div class="container container--small">
            <p class="intro">Nice to meet you I’m Emily, I currently working at Mixd in Harrogate, UK. I specialise in web design and development but also like to get creative with illustrations and icons. I’ve been in the industry for two years after graduating from Leeds Metropolitan Beckett University.</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
