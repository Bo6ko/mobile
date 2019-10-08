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
function smarty_modifier_date($datetime)
{
	if(!isset($datetime) || empty($datetime) || $datetime == '0000-00-00 00:00:00')
	{
		return "";
	}
	
	//	get unixtime
	$time = strtotime( $datetime );
		
	//	get day number
	$d = (int)date('w', $time);
	
	//	get month number
	$m = (int)date('m', $time);
	
	$days		= array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
	$months		= array( 1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
	return date("Y",$time).' '.$months[$m].', '.$days[$d].' -'.date("H:i:s",$time);
	
} 

?>