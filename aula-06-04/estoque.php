<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

class Main {

  private $objUsuario;
  private $objFabricante;
  private $objEstoque;
  private $objMovimentacao;

  public function __construct() {

    echo "\n\n --- COMEÇO DO PROGRAMA --- \n\n";

    $this->objUsuario = new Usuario;
    $this->objFabricante = new Fabricante;
    $this->objEstoque = new Estoque;
    $this->objMovimentacao = new Movimentacao;

    $this->verificaArg(1);
    $this->executarOperacao($_SERVER['argv'][1]);
  }

  private function executarOperacao (string $operacao) {

    switch($operacao) {
      case 'gravarUsuario':
        $this->gravarUsuario();
        break;
      case 'editarUsuario':
        $this->editarUsuario();
        break;
      case 'listarUsuarios':
        $this->listarUsuarios();
        break;
      case 'apagarUsuario':
        $this->apagarUsuario();
        break;
      default:
      echo "\nErro: Não existe a funcionalidade $operacao\n";
    }

  }

  private function listarUsuarios() {

    $lista = $this->objUsuario->getAll();

    foreach($lista as $usuario) {

      echo "{$usuario['id']}\tCPF: {$usuario['cpf']}\t{$usuario['nome']}\n";

    }
  }

  private function gravarUsuario() {

    $dados = $this->tratarDados();

    $this->objUsuario->setDados($dados);

    if ($this->objUsuario->gravarDados()) {

      echo "\nUsuário gravado com sucesso!\n";

    }

  }

  private function editarUsuario() {

    $dados = $this->tratarDados();

    $this->objUsuario->setDados($dados);

    if ($this->objUsuario->gravarDados()) {

      echo "\nUsuário editado com sucesso!\n";

    }

  }

  private function apagarUsuario() {

    $dados = $this->tratarDados();

    $this->objUsuario->setDados($dados);

    if ($this->objUsuario->delete()) {

      echo "\nUsuário apagado com sucesso!\n";

    } else {

      return "\nErro ao tentar apagar o usuário!\n";

    }

  }

  private function verificaArg(int $numArg) {

    if (!isset($_SERVER['argv'][$numArg])) {

      switch($numArg) {
        case 1:
          echo "Erro: digite a operação a ser executada\n\n";
          break;
        case 2:
          echo "Erro: esperado o objeto com nome e CPF\n\n";
          break;
        default:
          break;
      }
      exit();  
    } 
  }

  private function tratarDados():array {

    $this->verificaArg(2);

    $args = explode(',', $_SERVER['argv'][2]);
                    
    foreach ($args as $valor) {
      $arg = explode('=', $valor);
      $dados[$arg[0]] = $arg[1];
    }

    return $dados;
  }

  public function __destruct() {
      echo "\n\n --- FIM DO PROGRAMA --- \n\n";
  }
}

new Main;

/* 
TABELAS:

Usuários
+-------+---------------------+------+-----+---------+----------------+
| Field | Type                | Null | Key | Default | Extra          |
+-------+---------------------+------+-----+---------+----------------+
| id    | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| nome  | char(255)           | YES  |     | NULL    |                |
| cpf   | bigint(20)          | YES  |     | NULL    |                |
+-------+---------------------+------+-----+---------+----------------+

Fabricantes
+-------+---------------------+------+-----+---------+----------------+
| Field | Type                | Null | Key | Default | Extra          |
+-------+---------------------+------+-----+---------+----------------+
| id    | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| cnpj  | bigint(20)          | YES  |     | NULL    |                |
| nome  | char(255)           | YES  |     | NULL    |                |
+-------+---------------------+------+-----+---------+----------------+

Estoque
+-------+---------------------+------+-----+---------+----------------+
| Field | Type                | Null | Key | Default | Extra          |
+-------+---------------------+------+-----+---------+----------------+
| id    | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| nome  | char(255)           | YES  |     | NULL    |                |
+-------+---------------------+------+-----+---------+----------------+

Movimentações
+------------------+-------------------------+------+-----+---------+-------+
| Field            | Type                    | Null | Key | Default | Extra |
+------------------+-------------------------+------+-----+---------+-------+
| id_item          | bigint(20) unsigned     | NO   |     | NULL    |       |
| id_estoque       | bigint(20) unsigned     | NO   |     | NULL    |       |
| qtd_movimentacao | bigint(20)              | YES  |     | NULL    |       |
| tipo             | enum('entrada','saida') | NO   | PRI | NULL    |       |
| datahora         | datetime                | NO   | PRI | NULL    |       |
| id_usuario       | bigint(20) unsigned     | NO   | PRI | NULL    |       |
+------------------+-------------------------+------+-----+---------+-------+

Itens
+---------------+---------------------+------+-----+---------+----------------+
| Field         | Type                | Null | Key | Default | Extra          |
+---------------+---------------------+------+-----+---------+----------------+
| id            | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| nome          | char(255)           | NO   |     | NULL    |                |
| descricao     | char(255)           | YES  |     | NULL    |                |
| preco         | double(12,2)        | YES  |     | NULL    |                |
| id_fabricante | bigint(20) unsigned | YES  |     | NULL    |                |
+---------------+---------------------+------+-----+---------+----------------+

*/