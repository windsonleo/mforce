<?php
 include '../entidade/Proprietario.php';
 session_start(); 


	$id = $_GET['idproprietario'];



	include ('dao/config.php');

	$connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);
	$engine = $connection->prepare("DELETE FROM proprietario WHERE id = ?");

	$engine->bindParam(1, $id, PDO::PARAM_INT);
	
	$engine->execute();

	$connection = null;


	header('Location: movimentacao_proprietario.php');

    exit;

?>