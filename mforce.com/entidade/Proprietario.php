<?php

/*include "Consulta.php";
include "Psicologo.php";

require_once("Psicologo.php");*/

class Proprietario{

	private $id;
	private $nome;
	private $contacto;
	private $nif;
	private  $arr_veiculos = array();


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

	public function getnome(){
		return $this->nome;

	}

	public function setnome($valor){
		$this->nome = $valor;

	}

	public function getcontacto(){
		return $this->contacto;

	}

	public function setcontacto($valor){
		$this->contacto = $valor;

	}

	public function getnif(){
		return $this->nif;

	}

	public function setnif($valor){
		$this->nif = $valor;

	}


	public function getDetalhes(){

		return "<h2> Proprietario </h2> <br /> 
		Id :{$this->id} <br /> 
		Nome :{$this->nome} <br /> 
		Contacto : {$this->contacto} <br />, 
		Nif :{$this->nif} <br />
		 <hr> <br />";
	}

	public function RetornarValoresArrays($valores){

		$valor = '';

		foreach ($valores as $val) {
    		
    		echo  $val;

    		$valor = $valor + $val;
		}

		return $valor;
	}


}

