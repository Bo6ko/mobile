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
function smarty_modifier_has( $input , $type = false )
{
	switch ($type) {
		
		case 'newsletter':{
			if ( $input > 0 ) {
				return '<span class="has green">Oui</span>';
			}else{
				return '<span class="has orange">Non</span>';
			}
		}break;
		
		case 'choice':{
			if ( $input > 0 ) {
				return '<span class="has green">Active</span>';
			}else{
				return '<span class="has orange">Inactive</span>';
			}
		}break;
		
		default:{
				return '<span class="has red">Missing type</span>';
		}break;
	}
} 

?>