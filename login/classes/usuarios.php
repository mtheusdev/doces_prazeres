<?php

class Usuario {
    public $pdo;
    public $msgErro = '';

    public function conectar( $nome, $host, $usuario, $senha ) {
        global $pdo;
        try {
            $pdo = new PDO( 'mysql:dbname='.$nome.';host='.$host, $usuario, $senha );
        } catch( PDOException $e ) {
            $msgErro = $e->getMessage();
        }

    }

    public function cadastrar( $nome, $telefone, $email, $senha, $address ) {
        global $pdo;
        //verificar se ja existe email cadastrado
        $sql = $pdo->prepare( 'select id from cliente where email = :e' );
        $sql->bindValue( ':e', $email );
        $sql->execute();
        if ( $sql->rowCount() > 0 ) {
            return false;
            // ja ta cadastrada
        } else {
            $sql = $pdo->prepare( 'insert into cliente (nome, telefone, senha, email, address) values(:n,:t,:s,:e,:end)' );
            $sql->bindValue( ':e', $email );
            $sql->bindValue( ':n', $nome );
            $sql->bindValue( ':end', $address );
            $sql->bindValue( ':t', $telefone );
            $sql->bindValue( ':s', md5( $senha ) );
            $sql->execute();
            return true;
        }
        //senao cadastra
    }

    public function cadastraPedido( $nomeTopo, $bolo, $qtd_bolo, $qtd_topo) {
        global $pdo;
        $sql = $pdo->prepare( 'insert into pedido (nomeTopo, bolo, qtd_bolo, qtd_topo) values(:n,:b,:qb,:qt)' );
        $sql->bindValue( ':n', $nomeTopo );
        $sql->bindValue( ':b', $bolo );
        $sql->bindValue( ':qb', $qtd_bolo );
        $sql->bindValue( ':qt', $qtd_topo );
        $sql->execute();
        return true;
    }

    public function mostrar( $id ) {
        global $pdo;
        $sql = $pdo->prepare( 'select * from cliente where id = :i' );
        $sql->bindValue( ':i', $id );
        $sql->execute();
        return $sql->fetch();
    }

    public function logar( $email, $senha ) {
        global $pdo;
        $sql = $pdo->prepare( 'select id from cliente where email = :e and senha = :s' );
        $sql->bindValue( ':s', md5( $senha ) );
        $sql->bindValue( ':e', $email );
        $sql->execute();
        if ( $sql->rowCount() > 0 ) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
            // logado com sucesso
        } else {
            return false;
            // nao consegiu logar
        }
    }

}

?>