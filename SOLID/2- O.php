<?php
/* SOLID - Open Closed Principle - (software devem ser abertas para extensão, mas fechadas para modificação)
Aberto para extensão significa que, ao receber um novo requerimento, é possível adicionar um novo comportamento. 
Fechado para modificação significa que, para introduzir um novo comportamento (extensão), 
não é necessário modificar o código existente.
*/

// EXEMPLO 1 - FORMA INCORRETA //

class Frete {

  private $empresa;

  public function __construct(string $empresa) {

      $this->empresa = $empresa;

  }

  /* O método abaixo fere o princípio OCP, pois não é fechado para modificação. 
  Seria necessário adicionar uma nova condição para cada nova empresa transportadora,
  e isso poderia quebrar o restante da classe. */
  public calcular() {

    if ( $this->empresa === 'Correios') {}
    elseif ($this->empresa === 'Jadlog') {}
    elseif ($this->empresa === 'DHL') {}
    else { return false; }
  }

}

// EXEMPLO 1 - FORMA CORRETA //

interface EmpresaDeLogistica {
  public function setPeso();
  public function setDestino();
  public function setOrigem();
  public function setTamanho();
  public function calcular();
}

class Correios implements EmpresaDeLogistica {}

class Jadlog implements EmpresaDeLogistica {}

class DHL implements EmpresaDeLogistica {}

class Frete {

  private $empresa;

  public function __construct(EmpresaDeLogistica $empresa ) {

    $this->empresa = $empresa;

  }

  public function calcular() {}

}

// EXEMPLO 2 - FORMA INCORRETA //

class Negativacao {

  private $devedor;

  public function __construct(Devedor $devedor) {

    $this->devedor = $devedor;

  }

  public function enviar(string $orgaoNegativador) {

    if ($orgaoNegativador === 'Serasa') {}
    elseif ($orgaoNegativador === 'SPC Brasil') {}
    else { return 'Erro, órgão não encontrado!'; };

  }

}

// EXEMPLO 2 - FORMA CORRETA //

interface OrgaoNegativador {

  public function enviarRemessaInclusao();
  public function enviarRemessaExclusao();
  public function receberRetorno();

}

class Serasa implements OrgaoNegativador {

  public function enviarRemessaInclusao() {}

}

class Negativacao {

  private $devedor;

  public function __construct(Devedor $devedor) {

    $this->devedor = $devedor;

  }

  public function enviar(OrgaoNegativador $orgaoNegativador) {}

}
