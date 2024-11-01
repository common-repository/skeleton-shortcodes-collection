<?php
/**
 * @package Skeleton Shortcodes Collection
 * @version 1.0.0
 */
/*
Plugin Name:       	Skeleton Shortcodes Collection
Plugin URI: 
Description: 		    This is a free WordPress plugin and is a collection of column and wonderful button.
Author: 			      The Demoify
Version: 			      1.0.0
Author URI: 		    http://www.demoify.com
License:           	GPL-2.0+
License URI:        http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       	skeleton-shortcodes-collection
Domain Path:       	/languages
*/

 
 function shortcodes_collection_scripts() 
   {
/* wp_register_style() */
wp_register_style('shortcodes-collection', plugins_url( 'css/style.css', __FILE__ ) );
wp_enqueue_style('shortcodes-collection');
}

add_action( 'wp_enqueue_scripts', 'shortcodes_collection_scripts' );

/* functions for buttons shortcodes */
 
function shortcodes_collection_button($atts, $content = null) {
 extract( shortcode_atts( array(
          'url' => '#',
          'color' => ''
), $atts ) );
return '<a href="'.$url.'" class="black-button '.$color.'-button">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'shortcodes_collection_button');

/*functions for column and rows*/
    function shortcodes_collection_one_third( $atts, $content = null ) {
       return '<div class="one_third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('one_third', 'shortcodes_collection_one_third');
     
    function shortcodes_collection_one_third_last( $atts, $content = null ) {
       return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('one_third_last', 'shortcodes_collection_one_third_last');
     
    function shortcodes_collection_two_third( $atts, $content = null ) {
       return '<div class="two_third">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('two_third', 'shortcodes_collection_two_third');
     
    function shortcodes_collection_two_third_last( $atts, $content = null ) {
       return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('two_third_last', 'shortcodes_collection_two_third_last');
     
    function shortcodes_collection_one_half( $atts, $content = null ) {
       return '<div class="one_half">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('one_half', 'shortcodes_collection_one_half');
     
    function shortcodes_collection_one_half_last( $atts, $content = null ) {
       return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('one_half_last', 'shortcodes_collection_one_half_last');
     
    function shortcodes_collection_one_fourth( $atts, $content = null ) {
       return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('one_fourth', 'shortcodes_collection_one_fourth');
     
    function shortcodes_collection_one_fourth_last( $atts, $content = null ) {
       return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('one_fourth_last', 'shortcodes_collection_one_fourth_last');
     
    function shortcodes_collection_three_fourth( $atts, $content = null ) {
       return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('three_fourth', 'shortcodes_collection_three_fourth');
     
    function shortcodes_collection_three_fourth_last( $atts, $content = null ) {
       return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('three_fourth_last', 'shortcodes_collection_three_fourth_last');
     
    function shortcodes_collection_one_fifth( $atts, $content = null ) {
       return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('one_fifth', 'shortcodes_collection_one_fifth');
     
    function shortcodes_collection_one_fifth_last( $atts, $content = null ) {
       return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('one_fifth_last', 'shortcodes_collection_one_fifth_last');
     
    function shortcodes_collection_two_fifth( $atts, $content = null ) {
       return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('two_fifth', 'shortcodes_collection_two_fifth');
     
    function shortcodes_collection_two_fifth_last( $atts, $content = null ) {
       return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('two_fifth_last', 'shortcodes_collection_two_fifth_last');
     
    function shortcodes_collection_three_fifth( $atts, $content = null ) {
       return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('three_fifth', 'shortcodes_collection_three_fifth');
     
    function shortcodes_collection_three_fifth_last( $atts, $content = null ) {
       return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('three_fifth_last', 'shortcodes_collection_three_fifth_last');
     
    function shortcodes_collection_four_fifth( $atts, $content = null ) {
       return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('four_fifth', 'shortcodes_collection_four_fifth');
     
    function shortcodes_collection_four_fifth_last( $atts, $content = null ) {
       return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('four_fifth_last', 'shortcodes_collection_four_fifth_last');
     
    function shortcodes_collection_one_sixth( $atts, $content = null ) {
       return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('one_sixth', 'shortcodes_collection_one_sixth');
     
    function shortcodes_collection_one_sixth_last( $atts, $content = null ) {
       return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('one_sixth_last', 'shortcodes_collection_one_sixth_last');
     
    function shortcodes_collection_five_sixth( $atts, $content = null ) {
       return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
    }
    add_shortcode('five_sixth', 'shortcodes_collection_five_sixth');
     
    function shortcodes_collection_five_sixth_last( $atts, $content = null ) {
       return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    }
    add_shortcode('five_sixth_last', 'shortcodes_collection_five_sixth_last');

/* adding function */
        function shortcodes_collection_formatter($content) {
      $new_content = '';
      
      /* Matches the contents and the open and closing tags */
      $pattern_full = '{(\[raw\].*?\[/raw\])}is';
      
      /* Matches just the contents */
      $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
      
      /* Divide content into pieces */
      $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
      
      /* Loop over pieces */
      foreach ($pieces as $piece) {
        /* Look for presence of the shortcode */
        if (preg_match($pattern_contents, $piece, $matches)) {
          
          /* Append to content (no formatting) */
          $new_content .= $matches[1];
        } else {
          
          /* Format and append to content */
          $new_content .= wptexturize(wpautop($piece));   
        }
      }
      
      return $new_content;
    }
     
    /* Remove the 2 main auto-formatters */
    remove_filter('the_content', 'wpautop');
    remove_filter('the_content', 'wptexturize');
     
    /* Before displaying for viewing, apply this function */
    add_filter('the_content', 'shortcodes_collection_formatter', 99);
    add_filter('widget_text', 'shortcodes_collection_formatter', 99);