<?php 

class Conexion{
	
	static public function conectar(){

		$link = new PDO("mysql:host=localhost; dbname=bdssg", "root", "");

		$link->exec("set names utf8");

		// var_dump("CONECTADO");

		return $link;

	}

}

// $conectar = new Conexion();
// $conectar ->conectar();

