<?php

/*include "Consulta.php";
include "Psicologo.php";*/

require_once("Proprietario.php");

class Veiculo{

	private $id;
	private $matricula;
	private $marca;
	private $modelo;
	private Proprietario $proprietario;





	/*public function __construct($nome,$datanascimento,$foto){

		$this->nome = $nome;
		$this->datanascimento = $datanascimento;
		$this->foto = $foto;

	}

		public function Paciente(){

	}

	*/

	public function getid(){
		return $this->id;

	}

	public function setid($valor){
		$this->id = $valor;

	}

	public function getmatricula(){
		return $this->matricula;

	}

	public function setmatricula($valor){
		$this->matricula = $valor;

	}

	public function getmarca(){
		return $this->marca;

	}

	public function setmarca($valor){
		$this->marca = $valor;

	}

	public function getmodelo(){
		return $this->modelo;

	}

	public function setmodelo($valor){
		$this->modelo = $valor;

	}

	public function getproprietario(){
	return $this->proprietario;

	}

	public function setproprietario($valor){
		$this->proprietario = $valor;

	}


	public function getDetalhes(){

		return "<h2> Veiculo </h2> <br /> 
			Id :{$this->id} <br /> 
			Matricula :{$this->matricula} <br /> 
			Marca : {$this->marca} <br />, 
			Modelo :{$this->modelo} <br />,
			Proprietario :{$this->proprietario} <br />
		 <hr> <br />";
	}



}
