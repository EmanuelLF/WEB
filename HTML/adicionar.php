<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Document</title>

</head>
<body background="../img/museums-victoria-luY-V0x5b_4-unsplash-2.png" class="fundo">
<!-- <?php
    require_once '..\model\Conexao.php';
    require_once '..\model\filme.php';
	require_once '..\model\filmeDAO.php';

if(isset($_POST['btn-add'])):
    $filmeDAO = new filmeDAO();
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $dataLancamento = $_POST["dataLancamento"];
    $classificacao = $_POST["classificacao"];
    $genero = $_POST["genero"];
    $produtora = $_POST["produtora"];
    $idioma = $_POST["idioma"];

    $sql = "INSERT INTO `filme`(`id`, `nome`, `dataLancamento`, `classificacao`, `genero`, `produtora`, `idioma`) VALUES ('?,?,?,?,?,?,?')";
endif;
?> -->
	<?php 
		session_start();
		if(!isset($_SESSION['logado'])){
			header('location: ..\index.php');
		}

	 ?>
<div style="position: absolute;top: -50%; left: 125% ;opacity: 0.6">
    <a href="../index.php">
        <img src="..\img\sair.jpeg" style="border-radius: 10px;">
    </a>
    </div>

    <h1 id="cad" style="margin-top: -2%">Cadastro de obra</h1>    
        <h2 class="info" style="margin-top: -5%;">Dados da obra:</h2>
    <div>
        <form action="" method="POST">
        <table style="margin-top: -5%">
            <tr>
                <td>
                    Nome da Obra:
                </td>
                <td>
                    <input type="text" id="nome" name="nome" placeholder="Nome da Obra">
                </td>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <!--<tr>
                <td>
                    Id do filme:
                </td>
                <td>
                    <input type="number" name="id" id="número" placeholder="#123456789" required="required">
                </td>
            </tr>-->

            <tr>
                <td>
                    Data de Lançamento:
                </td>
                <td>
                    <input type="date" id="início" name="dataLancamento">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Selecione o Gênero do filme:</p>
                </td>
                <td>
                    <select id="Gênero" name="genero">
                        <option value="Selecione o Gênero" disabled="disabled" selected="selected">Selecione o Gênero</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Cinema de Arte">Cinema de arte</option>
                    <option value="Chanchada">Chanchada</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Comédia de Ação">Comédia de ação</option>
                    <option value="Comédia de Terror">Comédia de terror</option>
                    <option value="Comédia Dramática">Comédia dramática</option>
                    <option value="Comédia Romântica">Comédia romântica</option>
                    <option value="Dança">Dança</option>
                    <option value="Documentário">Documentário</option>
                    <option value="Docuficção">Docuficção</option>
                    <option value="Drama">Drama</option>
                    <option value="Espionagem">Espionagem</option>
                    <option value="Faroeste">Faroeste</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Fantasia Científica">Fantasia científica</option>
                    <option value="Ficção Científica">Ficção científica</option>
                    <option value="Filmes com Truques">Filmes com truques</option>
                    <option value="Filmes de Guerra">Filmes de guerra</option>
                    <option value="Mistério">Mistério</option>
                    <option value="Musical">Musical</option>
                    <option value="Filme Policial">Filme policial</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                    <option value="Thriller">Thriller</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   <label for="indicativa"> <p>Classificação Indicativa do Filme:</p></label>
                </td>
                <td>
                    <input type="text" name="classificacao" id="indicativa" placeholder="" value="">
                
                
                </td>
            </tr>

             <tr>
                <td>
                   <label for="produtora"> <p>Produtora do Filme:</p></label>
                </td>
                <td>
                    <input type="text" name="produtora" id="produtora" placeholder="Ex: Walt Disney Studios" value="">
                </td>
                
            </tr>

            <tr>
                <td>
                    Tipo Disponível: 
                </td>
                <td>
                    <select name="idioma">
                        <option value=""></option>
                        <option value="Dublado">Dublado</option>
                        <option value="Legendado">Legendado</option>
                        <option value="Nacional">Nacional</option>
                    </select>
                </td>
            </tr>
    <td></td>
                <td>
                    <input type="submit" name="add" value="Adicionar ao Acervo">
                </td>
            
        </table>
        </form>
    </div>

    <!--<h1 id="cad">Cadastro de obra</h1>    
        <h2 class="info">Dados da obra:</h2>
    <div>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Nome da Obra:
                </td>
                <td>
                    <input type="text" id="nome" id="nome" placeholder="Nome da Obra">
                </td>
            </tr><tr></tr>
            <tr>
                <td>
                    Id do filme:
                </td>
                <td>
                    <input type="number" name="Número" id="número" placeholder="#123456789" required="required">
                </td>
            </tr>
            <tr><tr></tr>
                <td>
                    Data de Lançamento:
                </td>
                <td>
                    <input type="date" id="início" id="início">
                </td>
            </tr>
            <tr><tr></tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <p>Tipo de filme:</p>
                </td>
                <td><label for="nacional">
                    <input type="radio" name="tipo" id="nacional" placeholder="" value="" class="font">Nacional
                </label></br>
                    <label for="inter">
                    <input type="radio" name="tipo" id="inter" placeholder="" value="" class="font">Internacional
                </label>
                
                </td>
                
            </tr>
            <tr>
                <td>
                    <p>Selecione o Gênero do filme:</p>
                </td>
                <td>
                    <select id="Gênero">
                        <option value="Selecione o Gênero" disabled="disabled" selected="selected">Selecione o Gênero</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Cinema de Arte">Cinema de arte</option>
                    <option value="Chanchada">Chanchada</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Comédia de Ação">Comédia de ação</option>
                    <option value="Comédia de Terror">Comédia de terror</option>
                    <option value="Comédia Dramática">Comédia dramática</option>
                    <option value="Comédia Romântica">Comédia romântica</option>
                    <option value="Dança">Dança</option>
                    <option value="Documentário">Documentário</option>
                    <option value="Docuficção">Docuficção</option>
                    <option value="Drama">Drama</option>
                    <option value="Espionagem">Espionagem</option>
                    <option value="Faroeste">Faroeste</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Fantasia Científica">Fantasia científica</option>
                    <option value="Ficção Científica">Ficção científica</option>
                    <option value="Filmes com Truques">Filmes com truques</option>
                    <option value="Filmes de Guerra">Filmes de guerra</option>
                    <option value="Mistério">Mistério</option>
                    <option value="Musical">Musical</option>
                    <option value="Filme Policial">Filme policial</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                    <option value="Thriller">Thriller</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="btn-add" id="btn-add" value="Adicionar ao Acervo">
                </td>
            </tr>
        </table>
    </form>
    </div>-->
    <div class="end"><a href="menu.php"><p class="ball"></p></a></div>

    <?php

    require_once '..\model\Conexao.php';
    require_once '..\model\filme.php';
	require_once '..\model\filmeDAO.php';

    if(isset($_POST['add'])){
    $nome = $_POST["nome"];
    $dataLancamento = $_POST["dataLancamento"];
    $classificacao = $_POST["classificacao"];
    $genero = $_POST["genero"];
    $produtora = $_POST["produtora"];
    $idioma = $_POST["idioma"];

    
    $sql = "INSERT INTO `filme`(`id`, `nome`, `dataLancamento`, `classificacao`, `genero`, `produtora`, `idioma`) VALUES ('?,?,?,?,?,?,?')";
    $stmt = Conexao::getConn()->prepare($sql);
    $id = 0;
    $confirma = true;
    while ($confirma == true) {
    $id = mt_rand(100000001,999999999);
    
    $sql='SELECT * FROM filme WHERE id=?';
        $stmt=Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        if($stmt->rowCount()>0):
            $confirma = true;
        else:
            //echo('Sala criada!');
            echo "<script type='text/javascript'>alert('Filme ".$_POST['nome']." adicionado com sucesso!');</script>";   
            $confirma = false;
        endif;
    }
        
        $filme = new filme();
        
        $filme->setId($id);
        $filme->setNome($nome);
        $filme->setDataLancamento($dataLancamento);
        $filme->setClassificacao($classificacao);
        $filme->setGenero($genero);
        $filme->setProdutora($produtora);
        $filme->setIdioma($idioma);
        $filmeDAO = new filmeDAO();
        $filmeDAO->adicionaFilme($filme);
}
?>

</body>
</html>

