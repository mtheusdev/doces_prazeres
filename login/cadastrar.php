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
    <script language="Javascript">
        function validacaoEmail(field) {
            usuario = field.value.substring(0, field.value.indexOf("@"));
            dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);
            if ((usuario.length >= 1) &&
                (dominio.length >= 3) &&
                (usuario.search("@") == -1) &&
                (dominio.search("@") == -1) &&
                (usuario.search(" ") == -1) &&
                (dominio.search(" ") == -1) &&
                (dominio.search(".") != -1) &&
                (dominio.indexOf(".") >= 1) &&
                (dominio.lastIndexOf(".") < dominio.length - 1)) {
                document.getElementById("msgemail").innerHTML = "E-mail válido";
                alert("email valido");
            } else {
                document.getElementById("msgemail").innerHTML = "<font color='red'>Email inválido </font>";
                alert("E-mail invalido");
            }
        }
    </script>
</head>

<body>
    <div id="corpo-form">
        <h1>Cadastrar</h1>
        <form name="f1" method="POST">
            <input type="text" name="nome" placeholder="Nome completo" maxlength="30">
            <input type="text" name="telefone" placeholder="Telefone" maxlength="11">
            <input type="email" name="email" placeholder="Usuário" maxlength="50" onblur="validacaoEmail(f1.email)">
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
            <input type="password" name="confSenha" placeholder="Confirmar senha">
            <input type="text" name="address" placeholder="Endereço">
            <input type="submit" value="Cadastrar" placeholder="Acessar">

            <div id="msgemail"></div>
        </form>
    </div>

    <?php
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $address = addslashes($_POST['address']);
        $confirmarSenha = addslashes($_POST['confSenha']);
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("finalodaw", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($senha == $confirmarSenha) {
                    if ($u->cadastrar($nome, $telefone, $email, $senha, $address)) {
                        echo "Cadastrado com sucesso!";
                    } else {
                        echo "Email ja cadastrado!";
                    }
                } else {
                    echo "Senha e confirmar senha não correspondem!";
                }
            } // n deu erro{}
            else {
                echo "Erro: " . $u->msgErro;
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }


    ?>
</body>

</html>