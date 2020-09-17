<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header("location: index.php");
        exit;
    }
    // require_once 'classes/usuarios.php';
    // $u = new Usuario();
    // $u->conectar("provaodaw", "localhost", "root", "");
    // $array = $u->mostrar();
?>
Digite o seu id
<form method="POST"><input type="text" name="ids" placeholder="id">
<input type="submit" value="Enviar"></form>

<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario();
    $id = addslashes($_POST['ids']);
    $u->conectar("finalodaw", "localhost", "root", "");
    $array = $u->mostrar($id);
    //$a = json_encode($array);
    print $array['nome'] ."<br>";
    print $array['telefone'];
?>
