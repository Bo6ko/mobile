<?php

	function clean( $string ){
		$string	= trim($string);
		//$string	= mysqli_real_escape_string($string);
		return $string;
	}

?>