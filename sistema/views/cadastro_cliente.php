<br /><br />
<div class="container">
  <div class="container box">
      <h2 align="center">Cadastrar cliente</h2>

      <div class="table-responsive">

        <br /><br />
  <form action="models/inserir_cliente.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input name="nome" type="text" class="form-control" id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Apelido</label>
        <input name="apelido" type="text" class="form-control" id="inputPassword4" placeholder="Apelido">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Telefone</label>
      <input name="telefone" type="text" class="form-control" id="inputAddress" placeholder="Telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress2">Celular</label>
      <input name="celular" type="text" class="form-control" id="inputAddress2" placeholder="Celular">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress2">CPF/RG:</label>
      <input name="identificacao" type="text" class="form-control" id="inputAddress2" placeholder="CPF ou RG">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <input name="cidade" type="text" class="form-control" id="inputCity" value="Vargem Grande Paulista" placeholder="Cidade">
      </div>
      <div class="form-group col-md-5">
        <label for="inputCity">Rua</label>
        <input name="logradouro" type="text" class="form-control" id="inputCity" placeholder="Rua">
      </div>
      <div class="form-group col-md-5">
        <label for="inputCity">Bairro</label>
        <input name="bairro" type="text" class="form-control" id="inputCity" placeholder="Bairro">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Número</label>
        <input name="numero" type="number" class="form-control" id="inputZip" placeholder="Número">
      </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg" align="center" style="margin-left:1%;">Cadastrar Cliente</button>
  </form>

      </div>
    </div>
</div>
