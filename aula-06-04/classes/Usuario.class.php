<?php
    require(__DIR__.'/../interfaces/usuario.interface.php');
    require_once(__DIR__.'/abstratas/TipoPessoa.class.php');

    Class Usuario extends TipoPessoa implements iUsuario {

        protected $id;
        protected $cpf;
        protected $nome;

        public function __construct() {

            parent::__construct();
        }

        public function setDados(array $dados):bool {
            $this->id = $dados['id'] ?? '';
            $this->cpf = $dados['cpf'] ?? '';
            $this->nome = $dados['nome'] ?? '';

            return true;
        }

        public function gravarDados():bool {
            return (empty($this->id)) ? $this->insert() : $this->update();
        }

        public function insert():bool {
            $statement = $this->prepare('INSERT INTO usuarios 
                                            (cpf, nome) 
                                        VALUES 
                                            (:cpf, :nome)');
            
            if ($statement->execute([':cpf' => $this->cpf, 'nome' => $this->nome])) return true;

            return false;
        }

        public function update():bool {
            $statement = $this->prepare('UPDATE usuarios 
                                        SET cpf = :cpf, nome = :nome 
                                        where id = :id'); 
            
            if ($statement->execute([':cpf' => $this->cpf, 
                                     'nome' => $this->nome, 
                                     'id' => $this->id])) return true;

            return false;
        }

        public function getDados(int $id_usuario):array {
            
        }
    }