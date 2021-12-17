<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro professor</title>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>
    
<?php

include('conexões/conexaol.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
    
        echo"<p style='
            text-align:center;
            font-weight:bold;
            margin-top:140px;
            margin-bottom:-150px;
            color:rgba(248, 31, 31, 0.781);
            font-family:Arial;
        '>Preencha o seu email!</p>";
    }else if(strlen($_POST['senha']) == 0){
        echo"<p style='
        text-align:center;
        margin-top:140px;
        margin-bottom:-150px;
        font-weight:bold;
        color:rgba(248, 31, 31, 0.781);
        font-family:Arial;
    '>Preencha a sua senha!</p>";
    }else{

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);


        $sql_code = "SELECT * FROM usuarios WHERE email ='$email' AND senha='$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL". $mysql->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome']  = $usuario['nome'];

            header("Location: painel.php");

        }else{
            echo"<p style='
            text-align:center;
            margin-top:140px;
            margin-bottom:-150px;
            font-weight:bold;
            color:rgba(248, 31, 31, 0.781);
            font-family:Arial;
        '>Falha ao logar! Email ou senha incorretos</p>";
        }

    }
}

?>
    <fieldset id="caixa">
    <h1>Login</h1>
    <hr>

        <form action="" method="post"> 
            <br>
            <label for="idemail">Email: </label>
            <br>
            <input type="text" id="idemail" name="email" placeholder="Digite o seu email!" maxlength="40"/>
            <hr class="linhas">
            <br>
            <br>
            <label for="idsenha">Senha: </label>
            <br>
            <input type="password" id="idsenha" name="senha" placeholder="Digite a sua senha!" maxlength="16"/>   
            <hr class="linhas">

            <input type="submit" value="Logar" id="idbutton"/>

            <p id="cadastro">Não fez seu cadastro?<a href="cadastro.php">Faça aqui!</a></p>

        </form> 
    </fieldset>   
</body>

</html>