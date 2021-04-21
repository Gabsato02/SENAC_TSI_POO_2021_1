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
                                  WHERE id = :id'); 
      
      if ($statement->execute([':cpf' => $this->cpf, 
                                'nome' => $this->nome, 
                                'id' => $this->id])) return true;

      return false;
    }

    public function delete():bool {

      if ($this->id) {
        $statement = $this->prepare('DELETE FROM usuarios
                                    WHERE id = :id');

        if ($statement->execute(['id' => $this->id])) return true;

      } else {
        return false;
      }

    }

    public function getDados(int $id_usuario):array {
        
    }

    public function getAll() {
      $statement = $this->prepare('SELECT * FROM usuarios');

      $statement->execute();

      return $statement->fetchAll();
    }
  }