<?php 

require_once 'filme.php';
require_once 'Conexao.php';

class filmeDAO{
	public function listarFilmes(){
		$sql='SELECT * FROM filme';
		$stmt=Conexao::getConn()->prepare($sql);
		$stmt->execute();
		if($stmt->rowCount()>0){
			$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}else{
			return [];
		}
		
	}

	public function listarPeloNome($nome){
		$sql = 'select * from filme where nome like ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $nome);
		$stmt->execute();

		if($stmt->rowCount()>0):
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		else:
			return [];
		endif;

	}



public function listarPeloId($id){
		$sql = 'select * from filme where id=?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();
		if($stmt->rowCount()>0):
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		else:
			return [];
		endif;

	}


public function listarPeloGenero($genero){
		$sql = 'select * from filme where genero like ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $genero);
		$stmt->execute();

		if($stmt->rowCount()>0):
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		else:
			return [];
		endif;

	}


public function atualizaFilme(filme $filme){
		$sql = 'UPDATE `filme` SET `nome`=?,`dataLancamento`=?,`classificacao`=?,`genero`=?,`produtora`=?,`idioma`=? WHERE id=?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $filme->getNome());
		$stmt->bindValue(2, $filme->getDataLancamento());
		$stmt->bindValue(3, $filme->getClassificacao());
		$stmt->bindValue(4, $filme->getGenero());
		$stmt->bindValue(5, $filme->getProdutora());
		$stmt->bindValue(6, $filme->getIdioma());
		$stmt->bindValue(7, $filme->getId());
		$stmt->execute();
	}

public function adicionaFilme(filme $filme){
		$sql = "INSERT INTO `filme`(`id`, `nome`, `dataLancamento`, `classificacao`, `genero`, `produtora`, `idioma`) VALUES (?,?,?,?,?,?,?)";
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $filme->getId());
		$stmt->bindValue(2, $filme->getNome());
		$stmt->bindValue(3, $filme->getDataLancamento());
		$stmt->bindValue(4, $filme->getClassificacao());
		$stmt->bindValue(5, $filme->getGenero());
		$stmt->bindValue(6, $filme->getProdutora());
		$stmt->bindValue(7, $filme->getIdioma());
		$stmt->execute();
	}	
}



 ?>