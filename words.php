<?php
/**
 * @package Hello_Words
 * @version 1.0.0
 */
/*
Plugin Name: Hello Words
Plugin URI: http://wordpress.org/plugins/hello-words/
Description: Esto no es solo un plugin, esto simboliza la esperanza y entusiasmo de una generacion entera resumida en dos palabras.
Author: Lucia Balsa
Version: 1.0.0
Author URI: http://lucia.balsa/
*/



function renym_wordpress_typo_fix( $text ) {
    return str_replace( 'WordPress', 'WordPressDAM', $text );
}

add_filter( 'the_content', 'renym_wordpress_typo_fix' );


function renym_words_replace( $text ) {
    $array = array("colibri", "periquito", "paloma", "gaviota", "aguila");
    $array2 = array("bacalao","salmon","lubina","trucha","atun");
    return str_replace( $array, $array2, $text );
}

add_filter( 'the_content', 'renym_words_replace' );