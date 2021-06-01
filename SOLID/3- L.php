<?php
/* SOLID - Princípio da substituição de Liskov -  Uma classe derivada deve ser 
substituível por sua classe base. Ou seja, um atributo de uma classe pai deve fazer sentido
para seus filhos. Um método que não é usado nas classes filhas, não deveriam existir nas classes
abstratas. Se houver algo na classe abstrata que não está sendo usado por suas herdeiras,
provavelmente não deveria estar lá. */

// EXEMPLO 1 - FORMA INCORRETA //

abstract class Passaro() {

  	public voar() {}

	public bicar() {}

}

class Albatroz extends Passaro () {

	public voar() {}

	public bicar() {}

}

class Galinha extends Passaro () {

	public bicar() {}

}

// EXEMPLO 1 - FORMA CORRETA //

abstract class Passaro() {

	public bicar() {}

}

class Albatroz extends Passaro () {

	public bicar() {}

	public voar() {}

}

class Galinha extends Passaro () {

	public bicar() {}

}