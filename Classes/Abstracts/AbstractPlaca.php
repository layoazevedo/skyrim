<?php

namespace Classes\Abstracts;

use Interfaces\iPlaca;

abstract class AbstractPlaca implements iPlaca {

	public function ligar() {
		echo "ligar";
	}
    public function desligar() {
    	echo "desligar";
    }
}