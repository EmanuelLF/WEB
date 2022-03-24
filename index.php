<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Prova2</title>
    <style type="text/css"> 
    body{
        margin-left:65%;
        margin-right:10%;
        margin-top:10%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
        box-sizing: border-box;
        display: inline-block;
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;


    
    }
    .fundo{
        position: absolute;
        background-size: cover;
    }
    #cad{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        border-bottom: 2px solid #555;
        color: aliceblue;
        -webkit-text-stroke-width: 1px; /* largura da borda */
        -webkit-text-stroke-color: #000; /* cor da borda */
    }
    .info{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-style: oblique;
        animation: none;
        color: aliceblue;
                -webkit-text-stroke-width: 1px; /* largura da borda */
                -webkit-text-stroke-color: #000; /* cor da borda */
    }
    /* .quadrado{
        position: absolute;
        margin-top: -2%;
        margin-left: -8%;
        border-radius:10%;
        width: 450px;
        height: 350px;
        background-color: rgba(255, 255, 255, 0.444);
        border: 2px solid rgba(0, 0, 0, 0.549);
        z-index: 0;
    } */
    .ball {
        position: absolute;
        margin-top: -55%;
        margin-left: -338%;
        border-radius:50%;
        width: 100px;
        height: 100px;
        background-color: rgb(255, 255, 255);
        border: 2px solid rgb(0, 0, 0);
        animation: bounce 1s infinite alternate;
        -webkit-animation: bounce 1s infinite alternate;
        }
        @keyframes bounce {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-15px);
        }
        }
        @-webkit-keyframes bounce {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-15px);
        }   
        }
    .end{
        margin-top: -100%;
        margin-left: -8%;
        margin-right: 0%;
    }
    p{
        font-size: 18px;
        color: #000;
        -webkit-text-stroke-width: 0.1px; /* largura da borda */
        -webkit-text-stroke-color: rgb(48, 37, 91); /* cor da borda */
    }
    input{
        border-radius: 10px;
        margin-left: 15px;
        
    }
    .otimi{
        margin-top: 3%;
        margin-left: 105px;
        padding-top: 3%;
    }
    .font{
        font-size: 18px;
        color: #000;
        -webkit-text-stroke-width: 0.1px; /* largura da borda */
        -webkit-text-stroke-color: rgb(48, 37, 91); /* cor da borda */
    }
    .crud{
        margin-left: 155%;
    }
    .table{
        margin-top:35%;
        margin-left:-15%;
    }
    .tb2{
        margin-top:10%;
    }
     </style>

    
</head>
<body background="img/museums-victoria-luY-V0x5b_4-unsplash-2.png" class="fundo">
    <?php
    require_once 'model\Conexao.php';
    session_start();
    session_unset();
    session_destroy();
    session_start();
    if (isset($_POST["login"])){
        $erros=array();
$sql ="select * from usuariosautenticados where usuario = ? and senha = ?";
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1,$_POST['usuario']);
	$stmt->bindValue(2,md5($_POST['senha']));
	$stmt->execute();
		
		if($stmt->rowCount()>0):
			$resultado=$stmt->fetch();
			$_SESSION['logado']=true;
			$_SESSION['usuario']=$resultado['usuario'];
			header('location: HTML/menu.php');
		else:
			$erros[]='Usuário ou senha não cadastrado.';
		endif;
}
?>
    <div>
        <h1 id="cad">Login</h1>    
        <h2 class="info">Dados Pessoais:</h2>
    </div>
    <div class="quadrado"></div>
    <div>
        <form action="" method="post" onsubmit="return conferesenha(this)">
            <table class="tb2">
                <tr>
                    <td>
                        <p>Usuário:</p>
                    </td>
                    <td>
                        <input type="text" name="usuario" id="user" placeholder="" value="" class="" onblur="transformaimausculo(this)">
                        <span id="validacor"></span>
                        <script>
                        function transformaimausculo(user){
                                user.value=user.value.toUpperCase();
                                if (user.value.length>3){
                                    document.getElementById('user').style.backgroundColor = "#66ff66";
                                }else{document.getElementById('validacor').innerHTML = "Usuário inválido."
                            }
                        }
                        </script>
                    </td>
                </tr>        
                <!--<tr>
                    <td>
                        <p>Email:</p>
                    </td>
                    <td>
                        <input type="email" name="" id="email" placeholder="" required="required">
                    </td>
                </tr>-->
                <tr>
                    <td>
                        <p>Senha:</p>
                    </td>
                    <td>
                        <input type="password" name="senha" id="senha" value="" placeholder="" onblur="arrobanasenha(this)">
                        <script>
                            function arrobanasenha(senha){
                            if (senha.value.lastIndexOf("@")==0){
                                alert('A senha não pode começar com "@"')
                            }
                        }
                        </script>
                    </td>
                </tr>
                <!--<tr>
                    <td>
                        <p>Confirme sua Senha:</p>
                    </td>
                    <td>
                        <input type="password" name="" id="senha2" placeholder="">

                    </td>
                </tr>-->
            </table>
                
            <!--<script>
                function conferesenha(fomulario){
                        senha = document.getElementsByName('senha').value;
                        senha2 = document.getElementsByName('senha2').value;
                    if (fomulario.senha.value!=fomulario.senha2.value){
                        alert('As senhas não conferem!');
                        return false;
                    }
                }
            </script>-->
            <table class="table">
                <tr>
                    <td>
                        <input type="submit" value="Enviar" name="login" id="">
                    </td>
                    <td>
                        <div class="crud"><a href="HTML/menu.php">
                            <input type="button" id="next" name="next" value="Próxima tela">
                        </a>
                        </div>
                    </td>
                </tr>

            </table>
            
    </form>
    </div>
    <div class="end"><a href="index.php"><p class="ball"></p></a></div>
    <div>
    <!--style="background-image: url('img/jeremy-yap-J39X2xX_8CQ-unsplash.jpg')"-->
        
    </div>
</body>
</html>