<?php
ini_set('default_charset', 'UTF-8');
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$identificacao = $_POST['identificacao'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

require_once('connect_db_pdo.php');
try {

  $query = $pdo->prepare('insert into tbl_endereco(logradouro, numero, bairro, cidade, estado)
                          values(:logradouro, :numero, :bairro, :cidade, :estado);');

  $query->execute(array(
    ':logradouro' => $logradouro,
    ':numero' => $numero,
    ':bairro' => $bairro,
    ':cidade' => $cidade,
    ':estado' => 'SP'
  ));

  //echo $query->rowCount();
  //$this->db->lastInsertId();
  $ultimo_id_endereco = $pdo->lastInsertId();

  //echo 'Esse é o id do endereco: '.$ultimo_id_endereco;

  date_default_timezone_set('America/Sao_Paulo');
  $data_atual = date('Y-m-d H:i');


  $query_cliente = $pdo->prepare('insert into tbl_clientes(nome_cliente, identificacao_cliente, telefone_cliente, celular_cliente, apelido_cliente, data_cadastro_cliente)
                                  values(:nome, :identificacao, :telefone, :celular, :apelido, :data_cadastro_cliente);');

  $query_cliente->execute(array(
      ':nome' => $nome,
      ':identificacao' => $identificacao,
      ':telefone' => $telefone,
      ':celular' => $celular,
      ':apelido' => $apelido,
      ':data_cadastro_cliente' => $data_atual
  ));

  $ultimo_id_cliente = $pdo->lastInsertId();
  //echo 'Esse é o id do endereco: '.$ultimo_id_cliente;

  $query_endereco_cliente = $pdo->prepare('insert into tbl_endereco_cliente(id_endereco, id_cliente)
                                          values(:id_endereco, :id_cliente);');
  $query_endereco_cliente->execute(array(
    ':id_endereco' => $ultimo_id_endereco,
    ':id_cliente' => $ultimo_id_cliente
  ));


  header('location:../finalizar_cadastro_cliente.php?id_cliente='.$ultimo_id_cliente);


} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
  ?>
