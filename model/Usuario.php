<?php 

class Usuario{
	private $idUsuario, $senha;

	public function setUsuario($valor){
		$this->idUsuario=$valor;
	}

	public function getUsuario(){
		return $this->idUsuario;
	}
//	
	public function setSenha($valor){
		$this->senha=$valor;
	}

	public function getSenha(){
		return $this->senha;
	}
	
}
?>
