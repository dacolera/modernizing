<?php


class Strings {

	function limpaEspacos($str) {
		return trim($str);
	}

	function reverteString($str) {
		return strrev($str);
	}
    
    function removeUltimoCaractere($str) {
    	return substr($str, 0, (strlen($str)-1));
	}

	function contaNumeroDeCaracteres($str) {
		return strlen($str);
	}

}