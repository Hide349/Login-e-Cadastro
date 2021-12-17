<?php

session_start();
include_once("conexões/conexao.php");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email=$_POST['email'];
$senha = $_POST['senha'];

$result_usuario= "INSERT INTO usuarios 
(codigo,nome,endereco,cidade,telefone,email,senha,created) 
VALUES 
('$codigo','$nome','$endereco','$cidade','$telefone','$email','$senha',NOW())";

$resultado_usuario= mysqli_query($conn,$result_usuario);


if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='
        color: rgb(11, 255, 11);
        font-weight: bold;
        text-align: center;
    '>Usuário cadastrado com sucesso!<p>";
    header("Location: Site principal/cadastro.php");
}else{
    $_SESSION['msg'] = "<p style='
    color: rgb(241, 0, 0);
    font-weight: bold;
    text-align: center;
'>Usuário cadastrado com sucesso!<p>";
    header("Location: Site principal/cadastro.php");
}

?>