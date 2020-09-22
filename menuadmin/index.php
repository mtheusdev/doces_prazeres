<?php
require_once '../login/classes/usuarios.php';
    $u = new Usuario();
    $u->conectar("finalodaw", "localhost", "root", "");
?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='../login/'>Sair</a></li>
   <li class='active'><a href='#'>Pedidos</a>
      <ul>
         <li><a href='#Ag'>Aguardando aprovação</a>
         </li>
         <li><a href='#proc'>Em processamento</a>
         </li>
         <li><a href='#Entregues'>Entregues</a>
         </li>
         <li><a href='#todos'>Todos</a>
         </li>
      </ul>
   </li>
   <li><a href='#users'>Usuários Cadastrados</a></li>
</ul>
</div>




<h1>Usuários Cadastrados</h1>
<div class="users" id="Aguardando">
   
   <?php 
   $u->conectar("finalodaw", "localhost", "root", "");
   $a = $u->listUsers();
   foreach ($a as $user){
      echo "<ul>
      <li>Nome: {$user['nome']} <br> Email: {$user['email']} <br> Telefone: {$user['telefone']} <br><a href=auxiliar.php?edited=1&id={$user['id']}>Editar</a> <a href=auxiliar.php?deleted=1&id={$user['id']}>Excluir</a> </li>
      </ul>";
   }
   
   ?>
</div>

<h2>Todos os Pedidos</h2>
<div class="users" id="todos">

   <?php 
   $u->conectar("finalodaw", "localhost", "root", "");
   $a = $u->listPedidos();
   foreach ($a as $user){
      echo "<ul>
      <li>Bolo: {$user['bolo']} <br> Doces: {$user['nomeTopo']} <br> Quantidade Bolo (Kg): {$user['qtd_bolo']} <br>Quantidade Doces (Und): {$user['qtd_topo']}<br>Status: {$user['status']}<br><a href=auxiliarbolos.php?edited=1&id={$user['id']}>Editar</a> <a href=auxiliarbolos.php?deleted=1&id={$user['id']}>Excluir</a></li>
      </ul>";
   }
   
   ?>
</div>

<h2>Pedidos Entregues</h2>
<div class="users" id="Entregues">

   <?php 
   $u->conectar("finalodaw", "localhost", "root", "");
   $a = $u->listPedidosEnt();
   foreach ($a as $user){
      echo "<ul>
      <li>Bolo: {$user['bolo']} <br> Doces: {$user['nomeTopo']} <br> Quantidade Bolo (Kg): {$user['qtd_bolo']} <br>Quantidade Doces (Und): {$user['qtd_topo']}<br>Status: {$user['status']}<br><a href=auxiliarbolos.php?edited=1&id={$user['id']}>Editar</a> <a href=auxiliarbolos.php?deleted=1&id={$user['id']}>Excluir</a></li>
      </ul>";
   }
   
   ?>
</div>
<h2>Aguardando Aprovação Pagamento</h2>
<div class="users" id="Ag">

   <?php 
   $u->conectar("finalodaw", "localhost", "root", "");
   $a = $u->listPedidosAg();
   foreach ($a as $user){
      echo "<ul>
      <li>Bolo: {$user['bolo']} <br> Doces: {$user['nomeTopo']} <br> Quantidade Bolo (Kg): {$user['qtd_bolo']} <br>Quantidade Doces (Und): {$user['qtd_topo']}<br>Status: {$user['status']}<br><a href=auxiliarbolos.php?edited=1&id={$user['id']}>Editar</a> <a href=auxiliarbolos.php?deleted=1&id={$user['id']}>Excluir</a>  </li>
      </ul>";
   }
   
   ?>
</div>
<h2>Em processamento</h2>
<div class="users" id="proc">

   <?php 
   $u->conectar("finalodaw", "localhost", "root", "");
   $a = $u->listPedidosProc();
   foreach ($a as $user){
      echo "<ul>
      <li>Bolo: {$user['bolo']} <br> Doces: {$user['nomeTopo']} <br> Quantidade Bolo (Kg): {$user['qtd_bolo']} <br>Quantidade Doces (Und): {$user['qtd_topo']}<br>Status: {$user['status']} <br><a href=auxiliarbolos.php?edited=1&id={$user['id']}>Editar</a> <a href=auxiliarbolos.php?deleted=1&id={$user['id']}>Excluir</a>  </li>
      </ul>";
   }
   
   ?>
</div>

</body>
<html>
