<?php

namespace Classes\Concretas;

use Classes\Factory\NotebookPositivoFactory;

class NotebookPositivo extends NotebookPositivoFactory {

	public function __construct() {
		
		(new NotebookPositivoFactory())->ComputadorPronto("ASUS", "i3", "4GB", 2000);

		$obj2 = new NotebookPositivoFactory();
		$obj2->ComputadorPronto("AMD", "i7", "8GB", 900);
		
		//$this->NotebookPositivoFactory()->ComputadorPronto("ASUS", "i3", "4GB", 2000);
	}
	
}