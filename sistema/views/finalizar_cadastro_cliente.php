<?php
  $id_cliente = $_GET['id_cliente'];

 ?>
<div class="contanier">
  <h2 align="center" style="margin-top:50px;">Cliente cadastrado com sucesso!</h2>

  <div class="row" style="margin:auto;width:90%;margin-top:50px;">
  <div class="col-sm-6" style="margin:auto">
    <div class="card">
      <div class="card-body">
        <a href="cadastrar_compra.php?id_cliente=<?php echo ($id_cliente); ?>" class="btn btn-primary" style="text-align: center;font-size:30px;">Iniciar uma compra com este cliente</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin:auto">
    <div class="card">
      <div class="card-body">


        <a href="cadastro_clientes.php" class="btn btn-primary" style="text-align: center; font-size:30px;">Continuar utilizando o K-brum system</a>
      </div>
    </div>
  </div>
</div>

</div>
