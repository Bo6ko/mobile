<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty french day
 */
function smarty_modifier_debug( $string ){
	
	$debug = '<em class="debug">';
	
	if ( isset($string) && !empty($string) ) {
		$items = explode('.', $string);
		if ( is_array($items) && count($items) > 0 ) {
			foreach ( $items as $item ) {
				$debug .= '[<b>'.$item.'</b>]';
			}
		}
	}else{
		$debug .= '[debug smarty_modifier_debug]';
	}
	
	$debug .= '</em>';
	return $debug;
} 

?>