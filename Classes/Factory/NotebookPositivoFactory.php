<?php

namespace Classes\Factory;

use Classes\Abstracts\Computador;
use Interfaces\iPreco;
use Interfaces\iDesconto;
use Exception;

class NotebookPositivoFactory extends Computador implements iPreco, iDesconto {

	private $preco;

	public function ComputadorPronto($placa, $processador, $memoriaRam, $valor) {
		$this->setPlaca($placa);
		$this->setProcessador($processador);
		$this->setMemoriaRam($memoriaRam);
		$this->setValor($valor);
		$this->getComputador();
	}

	// VALOR DA INTERFACE iPreco
	public function setValor($valor) {
		$this->preco = $valor;
	}

	public function getValor() {
		
		try {

			if($this->preco <= 100) {
   				 throw new Exception("Valor incorreto abaixo de 100.00");
  			} else {
  				return $this->preco;
  			}

		} catch (Exception $e) {
    		return $e->getMessage();
		}
	}

	// VALOR DA INTERFACE iDesconto
	public static function descontoParaCliente() {
		if($this->getValor() >= 5000) {
  			return $this->getValor() - 250;
  		}
	}

	// SETTERS
	protected function setPlaca($placa) {
		$this->placaMae = $placa;
	}

	protected function setProcessador($processador) {
		$this->processador = $processador;
	}

	protected function setMemoriaRam($memoriaRam) {
		$this->memoriaRam = $memoriaRam;
	}

	// GETTERS
	protected function getPlaca() {
		return $this->placaMae;
	}

	protected function getProcessador() {
		return $this->processador;
	}

	protected function getMemoriaRam() {
		return $this->memoriaRam;
	}

	private final function getComputador() {
		echo "
			Nome do computador: Notebook positivo<br />
			Placa mae: ".$this->getPlaca()."<br />
			processador: ".$this->getProcessador()."<br />
			Memoria Ram: ".$this->getMemoriaRam()."<br />
			Preco: ".$this->getValor()."<hr />
		";
	}
}