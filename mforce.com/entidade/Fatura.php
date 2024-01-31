<?php

/*include "Consulta.php";
include "Psicologo.php";*/

require_once("Proprietario.php");
require_once("Veiculo.php");

class Fatura{

	private $id;
	private $produto_nome;
	private $qtd;
	private $valor;
	private Proprietario $proprietario;
	private Veiculo $veiculo;

	/*private $email;
	private $telefone;
	public $arr_consultas = array();
	private  Psicologo $psicologo;
	private $dataregistro;*/




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

	public function getproduto_nome(){
		return $this->produto_nome;

	}

	public function setproduto_nome($valor){
		$this->produto_nome = $valor;

	}

	public function getqtd(){
		return $this->qtd;

	}

	public function setqtd($valor){
		$this->qtd = $valor;

	}

	public function getvalor(){
		return $this->valor;

	}

	public function setvalor($valor){
		$this->valor = $valor;

	}

	public function getproprietario(){
	return $this->proprietario;

	}

	public function setproprietario($valor){
		$this->proprietario = $valor;

	}

	public function getveiculo(){
	return $this->veiculo;

	}

	public function setveiculo($valor){
		$this->veiculo = $valor;

	}

	
	public function getDetalhes(){

		return "<h2> Fatura </h2> <br /> 
			Id :{$this->id} <br /> 
			Produto :{$this->produto_nome} <br /> 
			Qtd : {$this->qtd} <br />, 
			Valor :{$this->valor} <br />,
			Proprietario :{$this->proprietario} <br />,
			Veiculo :{$this->veiculo} <br />

		 <hr> <br />";
	}

	/*public function RetornarValoresArrays($valores){

		$valor = '';

		foreach ($valores as $val) {
    		
    		echo  $val;

    		$valor = $valor + $val;
		}

		return $valor;
	}*/


}

