<?php
require_once('connect_db_pdo.php');
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$qtde = $_POST['qtde'];
$tipo_parcela = $_POST['parcelas'];
$parcelar_em = $_POST['parcelar_em'];
$parcela1 = $_POST['parcela1'];

$valor_final = 0;

//echo $tipo_parcela;

foreach (array_combine($valor, $qtde ) as $v => $q) {

$valor_final += (float)$v * $q;

}
//echo $valor_final;

if($tipo_parcela == '1'){

  //echo "string";

  $parcelar_em_inteiro = intval($parcelar_em);

  $valor_parcela = $valor_final / $parcelar_em_inteiro;
  $parcela1_int = intval($parcela1);
  $mes = date('m') + 1;
  $ano = date('Y');

  //echo $parcela1_int;
  //echo $parcelar_em_inteiro;
  while (1 <= $parcelar_em_inteiro) {

    $data_pagamento_br = $parcela1_int."-".$mes."-".$ano;
    $data_pagamento_br_barras = $parcela1_int."/".$mes."/".$ano;
    //echo $data_pagamento_br_barras;
    $data_pagamento_banco = date('Y-m-d', strtotime($data_pagamento_br));

    echo "Primeira parcela em: ".$data_pagamento_banco. "Valor da parcela:".$valor_parcela. "<br />";

    if ($mes == '12'){
      $mes-=12;
      $ano+=1;
    }


    $mes+=1;
    $parcelar_em_inteiro -=1;


  }

}elseif ($tipo_parcela == '2') {

}


$c = array_map("inserir_produtos", $produto, $valor, $qtde);

//echo $valor_compra;

function inserir_produtos($pro, $val, $qt)
{
    $valor_produto_final = $val * $qt;
    $valor_compra = $valor_produto_final + $valor_produto_final;
    return "O produto $pro custa $val e tem $qt que custa $valor_produto_final e valor compra: $valor_compra";



}




  ?>
