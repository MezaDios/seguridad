<?php 

class Conexion{
	
	static public function conect(){

		$link = new PDO("mysql:host=localhost; dbname=bdssg", "root", "");

		$link->exec("set names utf8");

		return $link;

	}

}
