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
                <a href="mailto:hello@emily.vc" class='header__mail | icon icon--large icon--mail'></a>
                <a href="https://twitter.com/emilyvc_" class='header__mail | icon icon--large icon--twitter'></a>
                <a href="https://dribbble.com/emilyvc_" class='header__mail | icon icon--large icon--dribbble'></a>
            </div>
            <div class="section__hero">
                <div class="section__container">
                    <h1 class="section__heading">Hi, I'm a <span class="element"></span></h1>
                </div>
            </div>
        </div>
        <a href="" class='section__arrow | icon icon--large icon--arrow'></a>
    </div>
    <div class="container container--small">
        <div class="section section--center section--main">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/hey-talk.jpg" class="u-align-center  u-push-bottom@2 | u-rounded-circle" alt="">
            <p class="section__intro gamma">Hey there, I’m Emily a Designer and Front-end Developer currently working at <a href="http://www.mixd.co.uk/">Mixd</a>. I like to get my creative on with illustrations and icons while secretly wishing I was still living in the 90's. I’ve been working in the industry for three years and like to chat about my experiences in design both to students and the web community.</p>
        </div>
    </div>
    <div class="container container--small">
        <div class="section section--center section--large">
            <h1 class="u-weight-bold | u-push-bottom">I've worked on a few things...</h1>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2 class="u-weight-bold">Rossett Acre Primary School</h2>
                <p>A Mixd project and responsive Wordpress website for Harrogate based Primary School, Rossett Acre. The aim was to bring their school website up to date and create a mobile friendly experience, I also took this chance to brighten their brand by creating a fresher colour palette.</p>
                <a href="https://www.rossettacre.n-yorks.sch.uk/" class="btn btn--primary">View the site</a>
            </div>
            <span class="divider"></span>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2 class="u-weight-bold">Spoke Conversation</h2>
                <p>Spoke are a London based creative agency, when Spoke came to Mixd they were a start-up aiming to create a name for themselves. This was a great opportunity to work with like minded creatives who were as enthusiastic about design as I am.</p>
                <a href="http://www.wearespoke.co.uk/" class="btn btn--primary">View the site</a>
            </div>
            <span class="divider"></span>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Design | Development</span>
                <h2 class="u-weight-bold">SB Ski</h2>
                <p>SB Ski are a ski company based in the Alps, they specialise in catered ski holidays through Summer and Winter months. SB Ski wanted help to revitalise their brand and build one website that combined both their Winter and Summer website.</p>
                <a href="https://www.sbski.com/" class="btn btn--primary">View the site</a>
            </div>
            <h1 class="u-push-top@2 | u-weight-bold u-push-bottom">I've had some fun speaking opportunities...</h1>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Hey! - 7.01.17</span>
                <h2 class="u-weight-bold">Developer's of habit</h2>
                <p>I was lucky enough to be asked to speak at Hey!'s first event of 2017, I discussed my creative process and the bad habits I've replaced with good ones over the years.</p>
                <a href="https://heyst.ac/talks/developers-of-habit" class="btn btn--primary">View the slides and video</a>
            </div>
            <span class="divider"></span>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Leeds University</span>
                <h2 class="u-weight-bold">Team Roles lecture</h2>
                <p>At Mixd I've had the opportunity to give lectures at some of the UK's fantastic Universities, I've given this lecture to Undergraduate and Postgraduate students at Leeds and Teeside University.</p>
            </div>
            <span class="divider"></span>
            <div class="section__item">
                <span class="meta zeta u-push-bottom/2">Forefront Leeds - 18.02.16</span>
                <h2 class="u-weight-bold">Confessions of a first year web dev</h2>
                <p>My first speaking event saw me pretty much pouring my heart out to a room full of like minded creatives and tech heads. I touched on issues such as imposter syndrome and finding your place in a large pond.</p>
                <a href="https://speakerdeck.com/emilyvc/confessions-of-a-first-year-web-dev" class="btn btn--primary">View the slides</a>
            </div>
        </div>
    </div>
    <div class="section section--footer">
        <div class="container container--small">
            <p class="alpha u-weight-bold">I love meeting new people, <br> <a href="mailto:hello@emily.vc" class="">get in touch</a> and let’s get creative.</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
