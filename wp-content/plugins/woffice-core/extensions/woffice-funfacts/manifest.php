<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Woffice FunFacts', 'woffice' );
$manifest['description'] = __( 'Enables the possibility to add a funfacts widget in Woffice. (See documentation for detailed informations).', 'woffice' );
$manifest['version'] = '1.0.0';
$manifest['display'] = true;
$manifest['standalone'] = true;
$manifest['thumbnail'] = plugin_dir_url( __FILE__ ) .'/static/img/thumbnails/funfacts.jpg';
