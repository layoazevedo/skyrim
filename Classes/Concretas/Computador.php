<?php

namespace Classes\Concretas;

use Interfaces\iPlaca;
use Interfaces\iProcessador;

class Computador {

	protected $placaMae;
	protected $processador;
	protected $memoria;

	// COMPOSICAO -> SE TIRAR A PLACA MAE NAO EH MAIS UM COMPUTADOR
	// AGREGACAO -> TIRANDO ALGUM OBJETO ELE CONTINUA EXISTINDO
	public function __construct(iPlaca $placaMae, iProcessador $processador) {
		$this->placaMae = $placaMae;
		$this->processador = $processador;
	}
}