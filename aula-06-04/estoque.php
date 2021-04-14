<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

class Main {
    public function __construct() {
        echo "\n\n --- COMEÇO DO PROGRAMA --- \n\n";

        $objUsuario = new Usuario;

        $objFabricante = new Fabricante;
        $objEstoque = new Estoque;
        $objMovimentacao = new Movimentacao;

        switch($_SERVER['argv']['1']) {
            case 'gravarUsuario':
                $this->gravarUsuario($objUsuario);
                break;
            case 'editarUsuario':
                $this->editarUsuario($objUsuario);
                break;
            default:
            echo "\nErro: Não existe a funcionalidade {$_SERVER['argv'][1]}\n";
        }
    }

    public function gravarUsuario($objUsuario) {
        $dados = $this->tratarDados();
        $objUsuario->setDados($dados);
        if ($objUsuario->gravarDados()) {
            echo "\nUsuário gravado com sucesso!\n";
        }
    }

    public function editarUsuario($objUsuario) {
        $dados = $this->tratarDados();
        $objUsuario->setDados($dados);
        if ($objUsuario->gravarDados()) {
            echo "\nUsuário editado com sucesso!\n";
        }
    }

    public function tratarDados():array {
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