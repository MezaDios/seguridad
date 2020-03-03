<?php 

class Conexion{
	
	static public function conect(){

		$link = new PDO("mysql:host=localhost; dbname=****", "root", "");

		$link->exec("set names utf8");

		return $link;

	}

}
