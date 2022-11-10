<?php 

class P{

	public $nome; 
		public function falar(){

		return"meu nome é ".$this->nome;


	}

}
$glaucio = new p();
$glaucio->nome = "glaucio oo";
echo $glaucio->falar();

?>