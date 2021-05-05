<?php
// SOLID - Single Responsibility

// EXEMPLO 1 - FORMA INCORRETA //

class Usuario {

  private $nome;

  public function setNome() {}

  public function getNome() {}

  /* Os métodos abaixo ferem o princípio de responsabilidade única, 
  pois não tem nada a ver com a classe */
  public function enviarEmail() {}

  public function exportarPlanilha() {}
    
}

// EXEMPLO 1 - FORMA CORRETA //

class Usuario {

  private $nome;

  public function setNome() {}

  public function getNome() {}

}

class Email {
  public function enviarEmail() {}
}

class ExportarDados {}

class ExportarPlanilha extends ExportarDados{}

// EXEMPLO 2 - FORMA INCORRETA //

class Relatorio {

  private $dados;

  public function setDados(array $dados) {}

  /* Os métodos abaixo ferem o princípio de responsabilidade única, pois pode haver a necessidade de exportar
  outras coisas que não relatórios */
  public function exportarParaPDF() {}

  public function exportarParaCSV() {}

}

// EXEMPLO 2 - FORMA CORRETA //

class Relatorio {

  private $dados;

  public function setDados(array $dados) {}

}

class ExportaDados {

  public function exportar(array $data, string $format) {}

}

// EXEMPLO 3 - FORMA INCORRETA //

class Post {
  
  private $titulo;

  public function setTitulo(string $titulo) {}

  /* Os métodos abaixo ferem o princípio de responsabilidade única, pois não estão relacionados
  a um post em questão */
  public function gerarUrlAmigavel() {}

  public function buscarPostSemelhante() {}

}

// EXEMPLO 3 - FORMA CORRETA //

class Post {
  
  private $titulo;

  public function setTitulo(string $titulo) {}

}

class URL {

  public function gerarUrlAmigavel() {}

}

class Busca {}

class BuscaPorSemelhanca extends Busca {

    public function buscar() {}

}