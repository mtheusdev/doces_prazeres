<?php

    require_once '../login/classes/usuarios.php';
    $u = new Usuario();
    $u->conectar("finalodaw", "localhost", "root", "");

    if(isset($_POST['btnsave']))
    {
        $bolo = $_POST['bolo'];
        $qtdbol = $_POST['qtdbol'];
        $doces = $_POST['doces'];
        $qtddoce = $_POST['qtddoce'];
        $status = $_POST['status'];

        $u->atualizaBolo($bolo, $qtdbol, $doces,$qtddoce,$status, $_GET['id']); 
        header('Refresh:0 , index.php');
    }

    if(isset($_GET['edited'])){

        $user = $u->mostrarPedido( $_GET['id'] );
        $bolo = $user['bolo'];
        $qtdbol = $user['qtd_bolo'];
        $doces = $user['nomeTopo'];
        $qtddoce = $user['qtd_topo'];
        $status = $user['status'];
    }

    if(isset($_GET['deleted'])){
        $u->deleteBolo($_GET['id']);
        header('Refresh:0 , index.php');
     
    }

?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Bolo</td>
            <td><input type="text" name="bolo" value=<?php echo $bolo ?>></td>
        </tr>
        <tr>
            <td>Quantidade Bolo (Kg)</td>
            <td><input type="text" name="qtdbol" value=<?php echo $qtdbol ?>></td>
        </tr>
        <tr>
            <td>Doces</td>
            <td><input type="text" name="doces" value=<?php echo $doces ?>></td>
            </td>
        </tr>
        <tr>
            <td>Quantidade Doces (Und) </td>
            <td><input type="text" name="qtddoce" value=<?php echo $qtddoce ?>></td>
            </td>
        </tr>
            <td>Status</td>
            <td><input type="text" name="status" value=<?php echo $status ?>></td>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Salvar" name="btnsave"></td>
        </tr>
    </table>
</form>