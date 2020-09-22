<?php
require_once 'classes/usuarios.php';
    $u = new Usuario();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id = "corpo-form">
        <h1>Entrar</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="Usuário">
            <input type="password"name="senha" placeholder="Senha">
            <input type="submit" value="Acessar">
            <a href="cadastrar.php">Ainda não é inscrito <strong>Cadastre-se</strong></a>
        </form>
    </div>
<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if($senha == 'admin' && $email == 'admin@admin'){
        header("location: ../menuadmin/index.php");
    }else{
        if(!empty($email) && !empty($senha)){
            $u->conectar("finalodaw", "localhost", "root", "");
            if($u->msgErro == ""){
                if($u->logar($email, $senha)){
                    header("location: ../principal/");
                }else{
                    echo "Email e/ou Senha estao incorretos";
                }
            }else{
               echo "Erro: ".$u->msgErro; 
            }
            
    
        }else{
            echo "Preencha todos os campos";
        }
    }
    
}
?>

</body>

</html>