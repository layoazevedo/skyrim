<?php

namespace Classes\Concretas;

use Classes\Abstracts\AbstractProcessador;

class ProcessadorAMD extends AbstractProcessador {

	public function processaFila() {
		parent::processaFila();
		print "pega cache AMD";
		print "envia resultado AMD";
	}
}