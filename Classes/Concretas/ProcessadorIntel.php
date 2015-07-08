<?php

namespace Classes\Concretas;

use Classes\Abstracts\AbstractProcessador;

class ProcessadorIntel extends AbstractProcessador {
	
	public function processaFila() {
		parent::processaFila();
		print "pega cache intel";
		print "envia resultado intel";
	}

}