<?php 

	class Funcionario {

		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

			function __get($atributo) {
			return $this->$atributo;
		}

	/*	
		//getters setters
		function setNome($nome) {
			$this->nome = $nome;
		}

			function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

			function getNome() {
			return $this->nome;
		}

			function getNumFilhos() {
			return $this->numFilhos;
		}

	*/
		function resumirCadFunc(){
			return $this->__get('nome'). ' possui '. $this->__get('numFilhos').' filhos.';
		}


		function modificarNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

	}
	
	$y = new Funcionario();

	$y->__set('nome', 'José');
	$y->__set('numFilhos', 5);

	//echo $y->__get('nome'). ' possui ' . $y->__get('numFilhos'). ' filhos.<br/>';

	 echo $y->resumirCadFunc();

	 echo "<br/>";

	 $x = new Funcionario();

	$x->__set('nome', 'Maria');
	$x->__set('numFilhos', 3);

	//echo $y->__get('nome'). ' possui ' . $y->__get('numFilhos'). ' filhos.<br/>';

	 echo $x->resumirCadFunc();


 ?>