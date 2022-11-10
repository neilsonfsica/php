<?php 

/**
 * 
 */
class carro {

	private $modelo;
	private $motor;
	private $ano;
	

	public function getModelo()
	{
		return $this->modelo;
	}
	public function setModelo($mod){

		$this ->modelo = $mod;

	} /* get pegou o $modelo que estava privado 
	set mudando o atributo  */

	public function getMotor(){


			return $this->motor;
		}
	public function setMotor($motor){


			return $this ->motor = $motor;
		}

	public function getAno(){


			return $this ->ano;
		}
	public function setAno($ano){


			return $this -> ano = $ano;
		}
		
		public function exibir(){


			return array( 
				"modelo"=> $this -> getModelo(),
				"motor"=> $this -> getMotor(),
				"ano"=> $this -> getAno()
			);
		}
		
}

$gol = new carro();

$gol -> setModelo("gol bolota"); 
$gol -> setMotor("1.6"); 
$gol -> setAno("2017"); 
print_r($gol-> exibir());






?>