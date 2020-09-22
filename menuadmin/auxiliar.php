<?php

    require_once '../login/classes/usuarios.php';
    $u = new Usuario();
    $u->conectar("finalodaw", "localhost", "root", "");

    if(isset($_POST['btnsave']))
    {
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $name =  $_POST['name'];
        $u->atualizaUser($name, $email, $telefone, $_GET['id']); 
        header('Refresh:0 , index.php');
    }

    if(isset($_GET['edited'])){
        $user = $u->mostrar( $_GET['id'] );
        $nome = $user['nome'];
        $email = $user['email'];
        $telefone = $user['telefone'];

    }

    if(isset($_GET['deleted'])){
        $u->deleteUser($_GET['id']);
        header('Refresh:0 , index.php');
     
    }

?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="name" value=<?php echo $nome ?>></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="mail" name="email" value=<?php echo $email ?>></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input type="text" name="telefone" value=<?php echo $telefone ?>></td>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Salvar" name="btnsave"></td>
        </tr>
    </table>
</form>