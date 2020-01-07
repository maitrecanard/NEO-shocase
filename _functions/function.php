<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo'<pre>';
    var_dump($var);
    echo '</pre>';
}

// Ajouter des class pairs et impairs

/**
 * pair et impair css Works Home cSs1
 * @param $classes
 */ 
function wpln_oddeven_css_posts_class( $classes ) {
    global $current_class;
    $classes[] = $current_class;
    $current_class = ( $current_class == 'col-md-7' ) ? 'col-md-7 order-md-2' : 'col-md-7';
    return $classes;
}


/**
 * pair et impair css Works Home css2
 * @param $classes2
 */
function wpln_oddeven_css_posts_class2 ( $classes2 ) {
    global $current_class2;
    $classes2[] = $current_class2;
    $current_class2 = ( $current_class2 == 'col-md-5' ) ? 'col-md-5 order-md-1' : 'col-md-5';
    return $classes2;
}

/**
 * Slug url
 * @param $clean
 */

function slugify($string, $delimiter = '-') {
	$oldLocale = setlocale(LC_ALL, '0');
	setlocale(LC_ALL, 'en_US.UTF-8');
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower($clean);
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	$clean = trim($clean, $delimiter);
	setlocale(LC_ALL, $oldLocale);
	return $clean;
}

function addUrlParam($params=array()){
	$p = array_merge($_GET, $params);
	$qs = http_build_query($p);
	return basename($_SERVER['PHP_SELF']).'?'.$qs;
}

