<?php
class Alumno {
	private $id;
	private $nombre;
	private $apellido;
	private $fechaNac;
	private $carnet;
	private $dir;
	private $seccion;
}

public function getId() {
	return $this->id;
}

public function setId($id){
	$this->id =$id;
}