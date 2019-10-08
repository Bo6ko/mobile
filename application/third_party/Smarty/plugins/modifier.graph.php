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
function smarty_modifier_graph( $value = false , $id , $key , $dimensions , $path )
{
	$data_origine = $_SERVER['REQUEST_URI'];
	
	if( isset($value) && !empty($value) ) {
		
		$img = '<img src="'.WEB_PATH.$value.'?'.time().'" /><div class="clear"></div><a href="'.WEB_PATH.$value.'" target="_blank">'.WEB_PATH.$value.'</a>';
		
	}else{
		$img = '';
	}
	
	return '<li>
				<label for="icon_main">
					Photo <em>'.$key.'</em>
					<span>dimensions: <strong>'.$dimensions.'</strong></span>
					<span><a class="graph clicker" data-title="Ajouter photo" data-origine="'.$data_origine.'" href="'.$path.'/graph/'.$key.'/'.$id.'">+photo</a></span>
					<span><a class="graph-delete" data-title="Supprimer" href="'.$path.'/graph/'.$key.'/'.$id.'?delete">supprimer</a></span>
				</label>
				<div class="holder image slide-desktop">'.$img.'</div>
				<div class="clear"></div>
			</li>';
} 

?>