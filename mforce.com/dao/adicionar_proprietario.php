<?php

    include '../entidade/Proprietario.php';
    session_start(); 

    //$id = $_POST['id'];
    $nome = $_POST['nome'];
    $contacto = $_POST['contacto'];
    $nif = $_POST['nif'];


    $proprietarionovo = new Proprietario();
    $proprietarionovo->setnome($nome);
    $proprietarionovo->setcontacto($contacto);
    $proprietarionovo->setnif($nif);


	include 'config.php';

	$connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);
	$engine = $connection->prepare("INSERT INTO proprietario (nome,nif,contacto) VALUES (?,?,?)");

	$engine->bindParam(1, $nome, PDO::PARAM_STR);
	$engine->bindParam(2, $nif, PDO::PARAM_STR);
	$engine->bindParam(3, $contacto, PDO::PARAM_STR);
	$engine->execute();


	$connection = null;

	header('Location: ../movimentacao_proprietario.php');

    exit;


?>