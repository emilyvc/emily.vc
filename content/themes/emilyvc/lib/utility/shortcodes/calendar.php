<?php
// Calendar 
// -------------------------------------------------------------
function wpst_shortcode_calendar( $atts, $content = null) {

    extract( shortcode_atts(
        array(
            'style' => 'small',
            'day' => '',
            'month' => '',
            'debug' => '',
        ), $atts )
    );

    if ($debug) {
        return '<pre><code class="html">[calendar style="small" day="13 Dec" month="13 Dec"] &lt;h3>This is a heading&lt;/h3>&lt;p>Lorem ipsum dolor sit amet, adipiscing elit.&lt;/p>[/calendar]</code></pre>';
    }

    $date = "<div class='media__img | calendar__date | match-height'><div class='calendar__wrapper'><div class='calendar__inner'>". $day ."<br>". $month ."</div></div></div>";

    if($style):
        switch($style):
            case 'small':
                $css = 'calendar--small';
            break;
            case 'featured':
                $css = 'calendar--featured';
            break;
        endswitch;
    endif;

    $output_string = '<div class="media | calendar ' . $css . '">' . $date . '<div class="media__body | calendar__body | match-height"><div class="calendar__wrapper"><div class="calendar__inner">' . $content . '</div></div></div></div>';
    return $output_string;
}

add_shortcode( 'calendar', 'wpst_shortcode_calendar' );
