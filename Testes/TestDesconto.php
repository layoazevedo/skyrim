<?php

namespace Testes;

use PHPUnit_Framework_TestCase;

class TestDesnconto extends PHPUnit_Framework_TestCase {

      /**
     * @dataProvider listaDeValores
     */
    public function testVerificaValoresParaDesconto($valor, $esperado)
    {
        $this->assertEquals($esperado, $valor);
    }

    public function listaDeValores()
    {
        return array(
          array(5000, 5000),
          array(100, 100)
        );
    }
}