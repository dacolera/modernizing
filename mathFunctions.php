<?php


class Matematica {

	function somar($n1, $n2) {
		return $n1 + $n2;
	}

	function subtrair($n1, $n2) {
		return $n1 - $n2;
	}

	function multiplicar($n1, $n2) {
		return $n1 * $n2;
	}

	function dividir($n1, $n2) {
		return $n1 / $n2;
	}

	function media() {
		return array_sum(func_get_args())/func_num_args();
	}

	function raizQuadrada($n1) {
		return sqrt($n1);
	}
}
