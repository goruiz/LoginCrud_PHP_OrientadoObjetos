<?php
	require_once("Model/ProductosModel.php");

	$ProductosModel= new ProductosModel();
	$ProductosModel->setID(1);
	echo $ProductosModel->BuscarID();


?>