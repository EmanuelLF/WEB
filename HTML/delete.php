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
    <h1 id="cad">Deletar de obra</h1>    
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
                    <input type="number" name="Número" id="número" placeholder="#123456789">
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
<body background="../img/museums-victoria-luY-V0x5b_4-unsplash-2.png" class="fundo">
	<?php 
		session_start();
		if(!isset($_SESSION['logado'])){
			header('location: ..\index.php');
		}
	 ?>
     <div style="position: absolute;top: -100%; left: 170% ;opacity: 0.6">
    <a href="../index.php">
        <img src="..\img\sair.jpeg" style="border-radius: 10px;">
    </a>
    </div>
    <h1 id="cad">Deletar de obra</h1>    
        <h2 class="info">Dados da obra:</h2>
    <div>
        <table>
            <tr>
                <td>
                    <form action="" method="post">
                    Nome da Obra:
                </td>
                <td>
                    <input type="text" name="film" id="film" placeholder="Nome da Obra">
                </td>
            </tr><tr></tr>
            <tr>
                <td>
                    Id do filme:
                </td>
                <td>
                    <input type="number" name="numero" id="numero" placeholder="#123456789">
                </td>
            </tr>
            <tr><tr></tr>
                <td>

                </td>
            </tr>
            <!--<tr>
                <td>
                    <p>Selecione o Gênero do filme:</p>
                </td>
                <td>
                    <select id="Genero">
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
            </tr>-->
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="deletar" value="Remover do Acervo">
                </form>
                </td>
            </tr>
        </table>

    </div>
    <div class="end"><a href="menu.php"><p class="ball"></p></a></div>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'locadoraphp');

if(isset($_POST['deletar']))
{
    $id = $_POST['numero'];
    
    $query = "DELETE FROM `filme` WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data excluida!")</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Erro")</script>';
    }
}
?>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'locadoraphp');

if(isset($_POST['deletar']))
{
    $id = $_POST['film'];
    
    $query = "DELETE FROM `filme` WHERE nome='$id'";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data excluida!")</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Erro")</script>';
    }
}
?>