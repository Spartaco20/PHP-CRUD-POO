<?php

class TipoDocumento {

	private int $id;
	private String $codigo;
	private String $descripcion;

	public function setId($id){
		$this->id = $id;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getId(){
		return $this->id;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}
}

?>