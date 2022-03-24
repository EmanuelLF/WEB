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
    <h1 id="cad">Consultar acervo</h1>    
        <h2 class="info">Dados da obra:</h2>
    <div>
        <table>
            <tr>
                <td>
                    Pesquisar pelo nome:
                </td>
                <td>
                    <input type="text" id="nome" id="nome" placeholder="Nome da Obra">
                </td>
            </tr><tr></tr>
            <tr>
                <td>
                    Pesquisar pelo Id:
                </td>
                <td>
                    <input type="number" name="Número" id="número" placeholder="#123456789">
                </td>
            </tr>
            <tr><tr></tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <p>Filtrar pelo Gênero:</p>
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
                    <input type="submit" value="Pesquisar">
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
    <title>Acervo Ciné-Kodak</title>
    
     <style type="text/css">
.divtabela{

}
</style>

     <script type="text/javascript">
            function HideNSeek(campo){
                if(campo.value=='nome'){
                    document.getElementById("tr-nome").hidden='';
                    document.getElementById("tr-genero").hidden='true';
                    document.getElementById("tr-id").hidden='true';
                    document.getElementByTagName("input-nome").focus();
                    document.getElementByTagName("sub").disabled='false';
                }else{
                    document.getElementById("tr-nome").hidden='true';
                }

                if(campo.value=='id'){
                    document.getElementById("tr-id").hidden='';
                    document.getElementById("tr-genero").hidden='true';
                    document.getElementById("tr-nome").hidden='true';
                    document.getElementByTagName("input-Número").focus();7
                    document.getElementByTagName("sub").hidden='';

                }else{
                    document.getElementById("tr-id").hidden='true';
                }

                if(campo.value=='genero'){
                    document.getElementById("tr-genero").hidden='';
                    document.getElementByTagName("select-genero").focus();
                    document.getElementByTagName("sub").hidden='';
                }else{
                    document.getElementById("tr-genero").hidden='true';
                }

                }
            function hide(){
                document.getElementByTagName("select-genero").hidden='hidden';
                document.getElementByTagName("input-nome").hidden='true';
                document.getElementByTagName("select-Número").hidden='true';
                   
            }

            function autoReset(campo){
                document.getElementByTagName("select-genero").value='';
                document.getElementByTagName("input-nome").value='';
                document.getElementByTagName("select-Número").value='';
            }

            
        </script>
            

</head>
<body background="../img/museums-victoria-luY-V0x5b_4-unsplash-3.png" class="fundo" onload="hide()">

<div style="position: absolute;top: -40%; left: 130% ;opacity: 0.6">
    <a href="../index.php">
        <img src="..\img\sair.jpeg" style="border-radius: 10px;">
    </a>
    </div>

    <h1 id="cad">Consultar acervo</h1>    
        <h2 class="info">Dados da obra:</h2>


<div style="
width: 400px;
height: 280px; 
margin-left: -213%; 
margin-top: -15%; 
margin-bottom: 50%; 
overflow-y: scroll; 
overflow-x: hidden; 
background-color: white;" >
    <!--<nav style="background-color: #433833; height: 50px; text-align: center;border-radius: 25px 25px 0px 0;margin-top: -25px;">
        <h1 align="center">FILMES DISPONÍVEIS</h1>
    </nav>-->
<?php
    require_once '..\model\filmeDAO.php';

    $filmeDAO = new filmeDAO();


        if(@$_GET['select-genero'] != null){
        foreach($filmeDAO->listarPeloGenero("%".trim($_GET['select-genero'])."%") as $filme):
            echo '<div>'.$filme['nome'].'<br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
        endforeach;
        }

        else if(@$_GET['input-nome'] != null){
        foreach($filmeDAO->listarPeloNome("%".trim($_GET['input-nome'])."%") as $filme):
            echo '<div>'.$filme['nome'].'<br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
        endforeach;
        }else if(@$_GET['input-Número'] != null){
            foreach($filmeDAO->listarPeloId($_GET['input-Número']) as $filme):
            echo '<div>'.$filme['nome'].'<br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
        endforeach;
        }


        else{
            foreach($filmeDAO->listarFilmes() as $filme):
        echo '<div>'.$filme['nome'].'<br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
    endforeach;
        }

        
        
?>
</div>
    <div class="end"><a href="menu.php"><p class="ball"></p></a></div>

    <!--
    foreach($filmeDAO->listarFilmes() as $filme):
        echo '<div>'.$filme['nome'].'<br>'.$filme['genero'].'/'.$filme['idioma'].'<br>Data de Estreia: '.$filme['dataLancamento'].'<br>'.$filme['produtora'].'<br>Classificação Indicativa: ['.$filme['classificacao'].']</div><hr>';
    endforeach;-->

<div style="margin-top: -100%">
        Como você quer consultar o acervo?<br>
        <input type="radio" value='nome' name="consultar" onchange="HideNSeek(this)">Pelo Nome da Obra<br>
        <input type="radio" value='id' name="consultar" onchange="HideNSeek(this)" >Pelo Id da Obra<br>
        <input type="radio" value='genero' name="consultar" onchange="HideNSeek(this)">Pelo Gênero da Obra

       

    <div>
        <form action="tabela.php" method="GET" onsubmit="autoReset()">
        <table>
            <tr id="tr-nome" hidden="true">
                <td>
                    Pesquisar pelo nome:
                </td>
                <td>
                    <input type="text" name="input-nome" placeholder="Nome da Obra">
                </td>
            </tr><tr></tr>
            <tr id="tr-id" hidden="true">
                <td>
                    Pesquisar pelo Id:
                </td>
                <td>
                    <input type="number"  name="input-Número" id="número" placeholder="#123456789">
                </td>
            </tr>
            <tr><tr></tr>
                <td>

                </td>
            </tr>
            <tr id="tr-genero" hidden="true">
                <td>
                    <p>Filtrar pelo Gênero:</p>
                </td>
                <td>
                    <select id="Gênero" name="select-genero">
                        <option value="" selected="selected"> </option>
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
            </tr></table>
            
            

                    <input type="submit" name='sub' value="Pesquisar">        
        </form>
    </div>
</div>
</body>
</html>