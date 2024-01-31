<?php

    include '../entidade/Veiculo.php';
    session_start(); 

    //$id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $matricula = $_POST['matricula'];


    $veiculonovo = new Veiculo();
    $veiculonovo->setmarca($marca);
    $veiculonovo->setmodelo($modelo);
    $veiculonovo->setmatricula($matricula);


	include 'config.php';

	$connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);
	$engine = $connection->prepare("INSERT INTO veiculo (matricula, marca, modelo) VALUES (?,?,?)");

	$engine->bindParam(1, $matricula, PDO::PARAM_STR);
	$engine->bindParam(2, $marca, PDO::PARAM_STR);
	$engine->bindParam(3, $modelo, PDO::PARAM_STR);
	//$engine->bindParam(4, $contacto, PDO::PARAM_STR);
	$engine->execute();


	$connection = null;

	header('Location: ../movimentacao_veiculo.php');

    exit;


?>