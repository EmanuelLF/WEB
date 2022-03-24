<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Document</title>
</head>
<body background="../img/museums-victoria-luY-V0x5b_4-unsplash-2.png" class="fundo">
    <h1 id="cad">Atualizar obra</h1>    
        <h2 class="info">Dados da obra:</h2>
    <div>
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
                    <input type="submit" value="Remover do Acervo">
                </td>
            </tr>
        </table>
        <table class="descrição">
            <tr>
                <td>
                    <label for="desc">
                    Adicionar Descrição:</br>
                    <sub style="margin-left: 15px;">(Opcional)</sub>
                </td>
                <td>
                    <textarea name="descrição" id="desc" cols="30" rows="5" placeholder="Opicional"
                    style="border-radius: 10px; border: 2px solid #232">
                    </textarea>
                </label>
                </td>
            </tr>
        </table>
    </div>
    <div class="end"><a href="menu.php"><p class="ball"></p></a></div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
   
    <title>Document</title>
</head>
    <style type="text/css">
        #id:focus{
    box-shadow: 0 0 0 0;
    outline: 0;
}
.divtabela{
width: 400px;
height: 280px; 
margin-left: -205%; 
margin-top: -91%; 
margin-bottom: 50%; 
overflow-y: scroll; 
overflow-x: hidden; 
background-color: white;
}
    </style>
<body background="../img/museums-victoria-luY-V0x5b_4-unsplash-3.png" class="fundo">

<div style="position: absolute;top: -38%; left: 125% ;opacity: 0.6">
    <a href="../index.php">
        <img src="..\img\sair.jpeg" style="border-radius: 10px;">
    </a>
    </div>

    <form action="" method="GET">
    <h1 id="cad">Atualizar obra</h1>    
        <h2 class="info">Dados da obra:</h2>
    <div style="margin-top: -8%;">
        <table>
            <tr>
                <td>
                    ID da Obra:
                </td>
                <td>
                    
                     <?php

                        if(isset($_GET['id'])){
                        echo '<link rel="stylesheet" href="../css/css.css">'; 
                        echo '<input type="text" value="'.@$_GET['id'].'" name="id" id="id" placeholder="Id" style="background-color: white;border-top: none;border-bottom: none;border-right: none;border-left: none;background: none;" readonly>';
                        }else{
                            echo '<link rel="stylesheet" href="../css/css.css">';
                            echo '<input type="text" value=" " name="id" id="id" placeholder="Id" style="background-color: white;" readonly>';
                        }
                    ?>
                    

                </td>
            </tr><tr></tr>

                <tr>
                <td>
                    Nome da obra: 
                </td>
                <td>
                    
                    <?php
                        if(isset($_GET['nome'])){ 
                        echo '<input type="text" value="'.$_GET['nome'].'" name="nome" id="nome" placeholder="Nome da Obra">';
                        }else{
                            echo '<input type="text" value="" name="nome" id="nome" placeholder="Nome da Obra">';
                        }

                     ?>
                    

                </td>
            </tr>

            <tr>
                <td>
                    Data de Publicação da Obra:
                </td>
                <td>
                    <?php  
                    if(isset($_GET['data'])){ 
                        echo '<input type="date" value="'.$_GET['data'].'" name="data" id="data" placeholder="Data de Publicação da Obra">';
                        }else{
                            echo '<input type="date" value="" name="data" id="data" placeholder="Data de Publicação da Obra">';
                        }
                    ?>
                </td>
            </tr>
            <tr><tr></tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <p>Selecione o Gênero do filme:</p>
                </td>
                <td>



                    <select id="Gênero" name="genero">
                    <option value="Selecione o Gênero" id="nd" disabled="disabled" selected="selected">Selecione o Gênero</option>
                    <option value="Ação" id="Ação">Ação</option>
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
                    <?php 
                        if(isset($_GET['genero'])){
                        echo '
                                <script type="text/javascript">
                            document.getElementById("Gênero").value="'.$_GET['genero'].'" 
                                </script>
                             ';
                         }
                     ?>
                     
                </td>
            </tr>

            <tr>
                <td>
                    Classificação Indicativa:
                </td>
                <td>
                    <?php  
                    if(isset($_GET['classificacao'])){ 
                        echo '<input type="text" value="'.$_GET['classificacao'].'" name="classificacao" id="classificacao" placeholder="Classificação Indicativa">';
                        }else{
                            echo '<input type="text" value="" name="classificacao" id="classificacao" placeholder="Classificação Indicativa">';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                   Produtora:  
                </td>
                <td>
                    <?php  
                    if(isset($_GET['produtora'])){ 
                        echo '<input type="text" value="'.$_GET['produtora'].'" name="produtora" id="produtora" placeholder="Produtora da Obra">';
                        }else{
                            echo '<input type="text" value="" name="produtora" id="produtora" placeholder="Produtora da Obra">';
                        }
                    ?>
                </td>
            </tr>


            <tr>
                <td>
                   Idioma Disponível:  
                </td>
                <td>
                    <?php  
                    if(isset($_GET['idioma'])){ 
                        echo '<input type="text" value="'.$_GET['idioma'].'" name="idioma" id="idioma" placeholder="idioma da obra">';
                        }else{
                            echo '<input type="text" value="" name="idioma" id="idioma" placeholder="idioma da obra">';                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="atualiza" value="Atualizar Filme">

                </td>
            </tr>
        </table>
        </form>
        <!--
        <table class="descrição">
            <tr>
                <td>
                    <label for="desc">
                    Adicionar Descrição:</br>
                    <sub style="margin-left: 15px;">(Opcional)</sub>
                </td>
                <td>
                    <textarea name="descrição" id="desc" cols="30" rows="5" placeholder="Opicional"
                    style="border-radius: 10px; border: 2px solid #232">
                    </textarea>
                </label>
                </td>
            </tr>
        </table>-->
    </div>
<div class="divtabela">
<!--style="width: 300px; height: 350px; margin-right: %; margin-left: -200%; margin-top: -60%; margin-bottom: 50%; overflow-y: scroll; overflow-x: hidden; background-color: white;"-->
<?php 
    require_once '..\model\Conexao.php';
    require_once '..\model\filme.php';
	require_once '..\model\filmeDAO.php';

    $filmeDAO = new filmeDAO();

    foreach($filmeDAO->listarFilmes() as $filme):
        echo '<link rel="stylesheet" href="../css/css.css">';
        echo '<div class="div-filme"><a style="text-decoration: none;color: black;" href="http://localhost/locadora/HTML/atualizar.php?id='.$filme['id'].'&nome='.$filme['nome'].'&data='.$filme['dataLancamento'].'&genero='.$filme['genero'].'&classificacao='.$filme['classificacao'].'&produtora='.$filme['produtora'].'&idioma='.$filme['idioma'].'">'.$filme['nome'].'</a><br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
        $idFilme=$filme['id'];
    endforeach;

    if(isset($_GET['atualiza'])){
        $filme = new filme();
        $filme->setId($_GET['id']);
        $filme->setNome($_GET['nome']);
        $filme->setDataLancamento($_GET['data']);
        $filme->setGenero($_GET['genero']);
        $filme->setClassificacao($_GET['classificacao']);
        $filme->setProdutora($_GET['produtora']);
        $filme->setIdioma($_GET['idioma']);
        $filmeDAO->atualizaFilme($filme);
        echo("<meta http-equiv='refresh' content='0;url=atualizar.php'");
    }
    


 ?>
</div>
    <div class="end"><a href="menu.php"><p class="ball"></p></a></div>
</body>
</html>