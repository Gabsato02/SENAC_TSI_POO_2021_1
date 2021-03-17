<?php

// A interface define o que um Objeto deve ter obrigatoriamente quando instanciar uma Classe (mas não quando extender)
interface iJogador {
    public function setNome(string $nome);
    public function getNome();
}

class Jogador implements iJogador{

    public $nome;
    public $time = 'Los Angeles Lakers';
    static public $esporte = 'basquete';
    private $posicao;
    protected $salario;
    
    public function setNome(string $nome) : bool {
        // Atributos estáticos são acessados com self::
        $this->nome = $nome;
        return true;
    }

    public function getNome(): string {
        return $this->nome;
    }

    static public function getEsporte(): string {
        return self::$esporte;
    }
}

class Tecnico extends Jogador {
    public $idade;

    // O método construtor é usado para tudo que necessita ser inicializado/executado assim que houver a instância da classe
    public function __construct($idade) {
        $this->idade = $idade;
        echo "Construtor executado!<br><br>";
    }

    // A classe que extende pode acessar tudo, com exceção a atributos e métodos private
    public static function darInstrucoes($jogador): string {
        // Abaixo, uma instância da classe Jogador, passada como parâmetro, pode acessar o método getNome()
        return "O $jogador vai jogar.";
    }

    /* O método destrutor é usado para destruir a classe após a execução do script. Ele acontece, assim como o construtor, 
    mesmo sem ser chamado */
    public function __destruct() {
        echo "<br><br>Destrutor executado!";
    }
}

$jogador = new Jogador();
$jogador->setNome('Anthony Davis');
$nomeJogador = $jogador->getNome();

/* No exemplo abaixo, a variável $tecnico é uma instância da classe Técnico, que herda características da classe Jogador,
como por exemplo os métodos setNome e getNome. Além disso, ela recebe como parâmetro a idade do treinador, que está sendo usada
no método construtor */
$tecnico = new Tecnico(48);
$tecnico->setNome('Frank Voggel');
$nomeTecnico = $tecnico->getNome();
$esporte = $tecnico::getEsporte();
// Atributos não-estáticos podem ser acessados e manipulados apenas através de uma instância da classe
$time = $tecnico->time;
$idadeTreinador = $tecnico->idade;

$instrucoes = Tecnico::darInstrucoes($nomeJogador);

echo "As instruções do técnico $nomeTecnico, de $idadeTreinador anos, para o jogo de $esporte dos $time, foram:<br> '$instrucoes'";

// O método unset destrói o objeto que foi criado, mas apenas ele. 
// unset($jogador);


// A classe abaixo possui uma associação com a classe Jogador, mas não possui dependência
class AuxiliarTecnico {
    private $nome = "Jorginho do Treino";

    public function exerciciosFisicos ($jogador) {
        echo "<br><br>Jogador " . $jogador->getNome() . " treinado pelo $this->nome.";
    }
}

$preparadorFisico = new AuxiliarTecnico();
$preparadorFisico->exerciciosFisicos($jogador);