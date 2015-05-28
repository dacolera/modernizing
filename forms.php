<?php

class Formulario {

	var $formulario;
	var $inputs = array();

	function formulario() {
		$this->setInicio();
	}

	function setInicio() {
		$this->formulario .= "<form>\n";
	}

	function setFinal() {
		$this->formulario .= "\n</form>";
	}

	function add($input) {
		$this->inputs[] = $input;
	}

	function render() {

		if(!empty($this->inputs)){
			foreach($this->inputs as $input){
				$this->formulario .= "{$input}\n";
			}
		}
		$this->setFinal();
	}
}