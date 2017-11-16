<?php 

namespace kkoppenhaver\my_first_library;

class FirstClass {

	public function encodeString($string) {
		$src = 'abcdefghijklmnopqrstuvwxyz ';
		$dst = 'bcdefghijklmnopqrstuvwxyza ';

		$result = "";

		for( $i=0; $i<strlen($string); $i++ ){
			$pos = strpos($src, $string[$i]);
			$result .= $dst[$pos];
		}
		
		return $result;
	}

}

?>