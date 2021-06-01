<?php
/* SOLID - Dependency Inversion - módulos de alto nível não devem
depender de módulos de baixo nível. Ambos devem depender de abstrações. 
As abstrações não devem depender de detalhes, os detalhes é que devem depender
de abstrações. */

// EXEMPLO 1 - FORMA INCORRETA

interface Usuario {
  function login();
}

class Administrador implements Usuario {

  function login() {

    echo 'Bem vindo administrador!';

  }

}

class Assinante implements Usuario {

  function login() {

    echo 'Bem vindo assinante!';

  }
  
}

// EXEMPLO 1 - FORMA CORRETA

static function criarUsuario($tipo) {
  switch($tipo) {
    case 'Administrador':
      return new Administrador;
      break;
  }
}

$administrador = FactoryUsuario::criarUsuario("Administrador");