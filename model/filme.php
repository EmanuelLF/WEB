<?php 

class Filme{
	private $id, $nome, $dataLancamento, $classificacao, $genero, $produtora, $idioma;

	public function setId($valor){
		$this->id=$valor;
	}

	public function getId(){
		return $this->id;
	}

	public function setNome($valor){
		$this->nome=$valor;
	}

	public function getNome(){
		return $this->nome;
	}


	public function setDataLancamento($valor){
		$this->dataLancamento=$valor;
	}

	public function getDataLancamento(){
		return $this->dataLancamento;
	}

	public function setClassificacao($valor){
		$this->classificacao=$valor;
	}

	public function getClassificacao(){
		return $this->classificacao;
	}


	public function setGenero($valor){
		$this->genero=$valor;
	}

	public function getGenero(){
		return $this->genero;
	}


	public function setProdutora($valor){
		$this->produtora=$valor;
	}

	public function getProdutora(){
		return $this->produtora;
	}


	public function setIdioma($valor){
		$this->idioma=$valor;
	}

	public function getIdioma(){
		return $this->idioma;
	}
}


 ?>