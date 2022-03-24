<?php 
	
require_once 'Conexao.php';
require_once 'Usuario.php';
class UsuarioDAO{

	public function cadastrarUsuario(Usuario $user){
		$sql='INSERT INTO `usuariosautenticados`(`idUsuario`, `senha` ) VALUES (?,?)';
		$stmt=Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1,$user->getIdUsuario());
		$stmt->bindValue(2,$user->getSenha());
		$stmt->execute();
	}
}
 ?>