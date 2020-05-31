<?php
session_start();


require_once('db.class.php');



$nome_produto   = $_POST['nome_produto'];
$cd_barras  	= $_POST['cd_barras'];
$medida   		= $_POST['medida'];
$unidad_medida 	= $_POST['unidad_medida'];
$categoria 		= $_POST['categoria'];
$sub_categoria 	= $_POST['sub_categoria'];

$usuario_ativo 	= $_SESSION['nome_usuario'];


$objDb = new db();
$link = $objDb-> conecta_mysql();



$sql = " insert into produto(nome_produto, cd_barras, medida,unidade,categoria, sub_categoria, usuario_registro) values(upper('$nome_produto'), '$cd_barras', '$medida', '$unidad_medida', '$categoria', '$sub_categoria', upper('$usuario_ativo')); " ;

mysqli_query($link, $sql);

header('Location: home.php?');









?>