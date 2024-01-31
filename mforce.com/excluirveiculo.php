<?php
 include '../entidade/Veiculo.php';
 session_start(); 


$id = $_GET['idveiculo'];



	include ('dao/config.php');

	$connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);
	$engine = $connection->prepare("DELETE FROM veiculo WHERE id = ?");

	$engine->bindParam(1, $id, PDO::PARAM_INT);
	
	$engine->execute();

	$connection = null;


	header('Location: movimentacao_veiculo.php');

    exit;

?>