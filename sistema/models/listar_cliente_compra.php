<?php
require_once('connect_db_pdo.php');
$id_cliente = (int) $_GET['id_cliente'];

$select_cliente = $pdo->query("
select * from tbl_clientes where id_cliente = '".$id_cliente."'");

$result = $select_cliente->fetch(PDO::FETCH_OBJ);
$nome_cliente = $result->nome_cliente;

$identificacao_cliente = $result->identificacao_cliente;

 ?>
