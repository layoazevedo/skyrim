<?php

namespace Classes\Abstracts;

use Interfaces\iProcessador;

abstract class AbstractProcessador implements iProcessador {

	public function processaFila() {
		print "inicia processo";
		print "faz requisicao";
	}
}