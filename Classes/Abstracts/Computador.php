<?php

namespace Classes\Abstracts;

abstract class Computador {

	protected $placaMae;
	protected $processador;
	protected $memoriaRam;

	protected abstract function setPlaca($placa);

	protected abstract function setProcessador($processador);

	protected abstract function setMemoriaRam($memoriaRam);

	protected abstract function getPlaca();

	protected abstract function getProcessador();

	protected abstract function getMemoriaRam();

}