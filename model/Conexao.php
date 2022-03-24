<?php 
class Conexao{
public static $instance;

public static function getConn(){
	if(!isset(self::$instance)){
		self::$instance=new \PDO('mysql:host=localhost;dbname=locadoraphp','root','');
	}
	return self::$instance;
}
}
 ?>