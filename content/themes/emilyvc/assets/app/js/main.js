/**
 * Title:
 *    Main Javascript
 * Description:
 *    The main Javascript file where you will write the bulk
 *    of your scripts. Make sure to include this just before
 *    the closing </body> tag.
 * Sections:
 *    $. Your Scripts
 *    $. Grunticon Loader
 */



/* $. Your Scripts - To go within the SIAF (Self invoking annonymous function)
\*----------------------------------------------------------------*/

(function($) {


$(".element").typed({
    strings: ["designer", "developer", "speaker", "creative", "northern lass", "burger lover", "bit of a geek"],
    contentType: 'text',
    typeSpeed: 60,
    backDelay: 1500,
    loop: true,
    backspace: function(curString, curStrPos){
        setTimeout(function() {
                // check string array position
                // on the first string, only delete one word
                // the stopNum actually represents the amount of chars to
                // keep in the current string. In my case it's 3.
                if (self.arrayPos == 1){
                    self.stopNum = 3;
                }
                //every other time, delete the whole typed string
                else{
                    self.stopNum = 0;
                }
        });
    }

});



var scrollLocation;
$('.section__arrow').on('click', function(e) {
    scrollLocation = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(scrollLocation).offset().top*.7
    }, 550);
    e.preventDefault();
});
                    
})(jQuery);



/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([ "/content/themes/emilyvc/assets/dist/grunticon/icons.data.svg.css", "/content/themes/emilyvc/assets/dist/grunticon/icons.data.png.css", "/content/themes/rossett/assets/dist/grunticon/icons.fallback.css" ]);
