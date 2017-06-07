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
                <a href="" class='header__mail | icon icon--large icon--twitter'></a>
                <a href="" class='header__mail | icon icon--large icon--dribbble'></a>
            </div>
            <div class="section__intro">
                <div class="section__container">
                    <h1 class="section__heading">Hi, I'm a <span class="element"></span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container container--small">
        <div class="section section--large section--main">
            <p class="gamma">Nice to meet you I’m Emily, I currently working at Mixd in Harrogate, UK. I specialise in web design and development but also like to get creative with illustrations and icons. I’ve been in the industry for two years after graduating from Leeds Metropolitan Beckett University.</p>
            <h1 class="u-push-top@2 | u-push-bottom">I've worked on a few things...</h1>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2>Rossett Acre Primary School</h2>
                <p>A Mixd project and responsive Wordpress website for Harrogate based Primary School, Rossett Acre. The aim was to bring their school website up to date and mobile friendly, I also took this chance to brighten their brand by injecting some colour and a fresher design.</p>
                <a href="" class="btn btn--primary">View the site</a>
            </div>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2>Derwent Hill</h2>
                <p>Derwent Hill are an outdoor education company based in the Lake District, Mixd were tasked on refreshing their current site and building them a new brand. I was part of the creative and development team.</p>
                <a href="" class="btn btn--primary">View the site</a>
            </div>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2>Spoke Conversation</h2>
                <p>Spoke are a London based creative agency, when Spoke came to Mixd they were a start up aiming to create a brand for themselves. This was a great opportunity to work with like minded creatives who were as enthusiastic about design as we are.</p>
                <a href="" class="btn btn--primary">View the site</a>
            </div>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2>JF Drum Tuition</h2>
                <p>I'm lucky enough to have an amazingly talented musician for a partner, Jake wanted a site that would promote his new buisness of teaching drums to those interested. I designed the website, logo and built the whole site in Wordpress.</p>
                <a href="" class="btn btn--primary">View the site</a>
            </div>
            <h1 class="u-push-top@2 | u-push-bottom">I've had some amazing speaking opportunities...</h1>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Hey! - 7.01.17</span>
                <h2>Developer's of habit</h2>
                <p>I was lucky enough to be asked to speak at Hey!'s first event of 2017, I discussed my creative process and the bad habits I've replaced with good ones over the years.</p>
                <a href="" class="btn btn--primary">View the slides</a>
            </div>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Leeds University</span>
                <h2>Team Roles lecture</h2>
                <p>At Mixd I've had the opportunity to give lectures at some of the UK's fantastic univerisities, I've given this lecture to undergraduate and postgraduate students at both Leeds and Teeside University.</p>
            </div>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Forefront Leeds - 18.02.16</span>
                <h2>Confessions of a first year web dev</h2>
                <p>For my first speaking event saw me pretty much pouring my heart out to a room full of like minded creatives and tech heads. I touched on issues such as imposter syndrome and findind your place in a large pond.</p>
                <a href="" class="btn btn--primary">View the slides</a>
            </div>
        </div>
    </div>
    <div class="section section--footer">
        <div class="container container--small">
            <p class="alpha">I love meeting new people, <br> <a href="">get in touch</a> and let’s get creative.</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
