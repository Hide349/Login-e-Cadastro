    <?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8"/>
    <link rel="stylesheet"  href="css/pag1estilo.css"/>
</head>
<body>
    <div>
        <h1>Dados Cadastrais da ETE</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    <fieldset>
    <form action="processa.php" method="post">
        <label for="idcodigo">Código: </label>
        <br/>
        <input type="text" id="idcodigo" name="codigo" maxlength="3"/>
        <br/>
        <label for="idnome">Nome:</label>
        <br/>
        <input type="text" maxlength="40" placeholder="Digite seu nome!" id="idnome" name="nome"/>
        <br/>
        <label for="idendereco">Endereço:</label>
        <br/>
        <input type="text" maxlength="100" placeholder="Digite seu endereço!" id="idendereco" name="endereco"/>
        <br/>
        <label for="idcidade">Cidade:</label>
        <br/>
        <input type="text" maxlength="50" placeholder="Digite o nome da sua cidade!" id="idcidade" name="cidade"/>
        <br/>
        <label for="idtelefone">Telefone:</label>
        <br/>
        <input type="tel" maxlength="15" placeholder="Digite o seu telefone!" id="idtelefone" name="telefone"/>
        <br/>
        <label for="idemail">Email:</label>
        <br/>
        <input type="email" maxlength="40" placeholder="Digite o seu email!" id="idemail" name="email"/>
        <br>
        <label for="idsenha">Senha:</label>
        <br/>
        <input type="password" maxlength="16" placeholder="Digite a sua senha!" id="idsenha" name="senha"/>
        
        <p>Já tem cadastro?Faça seu login<a href="index.php">Aqui!</a></p>
        
        <input type="submit" value="Cadastrar-se" id="idbutton">
    </form>
    </fieldset>
    </div>
</body>
</html>