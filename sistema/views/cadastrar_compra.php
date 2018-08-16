<?php require_once('models/listar_cliente_compra.php'); ?>
<script type="text/javascript">
$(document).ready(function () {

  $('#parcelas').change(function () {

      var es = document.getElementById('parcelas');

      valor_parcela = es.options[es.selectedIndex].value;



      if (valor_parcela == "1") {
        $('#parcela2').hide();
        $('#contact_parcela').hide();
        $('#parcela1').show();
      }else if(valor_parcela == "2") {
        $('#parcela2').show();
        $('#contact_parcela').show();
        $('#parcela1').show();
      }else{
        $('#parcela2').hide();
        $('#contact_parcela').hide();
        $('#parcela1').hide();
      }


  });

});

</script>

<script type="text/javascript">
$(document).ready(function(){
  var campos_max  = 10;   //max de 10 campos
          var x = 1; // campos iniciais
          $('#add_field').click (function(e) {
                  e.preventDefault();     //prevenir novos clicks
                  if (x < campos_max) {
                          $('#produtos_all').append("<div><div><div class='form-group col-md-6'><label for='inputAddress'>Produto</label><input name='produto[]' type='text' class='form-control' placeholder='Produto'></div></div><div class='form-group col-md-3'><label >Valor Unitário</label><input min='0' step='0.01' data-number-to-fixed='2' data-number-stepfactor='100' name='valor[]' type='number' class='form-control'  placeholder='Produto'></div><div class='form-group col-md-1'><label >Quantidade</label><input name='qtde[]' type='number' class='form-control'  placeholder='1'></div><a href='#' class='remover_campo' class='btn btn-success'>Remover - </a></div></div>");


                          x++;
                  }
          });

          // Remover o div anterior
          $('#produtos_all').on("click",".remover_campo",function(e) {
                  e.preventDefault();
                  $(this).parent('div').remove();
                  x--;
          });

});

</script>
<script type="text/javascript">
$(document).ready(function(){
  $( ".soma" ).blur(function(){
   calcular();
});

function calcular() {
   var soma = 0;
   $( ".soma" ).each(function( indice, item ){
       var valor = parseFloat($(item).val());
       console.log(valor);
       if ( !isNaN( valor ) ) {
           soma += valor;
       }
   });
   $( "#resultado" ).val( soma );
}

});

</script>
<br /><br />
<div class="container">
  <div class="container box">
      <h2 align="center">Cadastrar compra</h2>

      <div class="table-responsive">

        <br /><br />
  <form action="models/inserir_compra.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Cliente</label>
        <input disabled name="cliente" type="text" class="form-control"  placeholder="" value="<?php echo ($nome_cliente. " - " .$identificacao_cliente); ?>">
      </div>

      <div class="form-group col-md-2">
        <label for="inputPassword4">Parcelar em:</label>

        <select class="form-control form-control-sm" name="parcelar_em">
        <option value="1">1x</option>
        <option value="2">2x</option>
        <option value="3">3x</option>
        <option value="4">4x</option>
        <option value="5">5x</option>
        <option value="6">6x</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputPassword4">Parcelas por mês:</label>

        <select class="form-control form-control-sm" id="parcelas" name="parcelas">
        <option value="0">Selecione...</option>
        <option value="1">Uma parcela</option>
        <option value="2">Duas parcelas</option>

        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputPassword4">Vencimento:</label>

      <input name="parcela1" style="width:40%; display:none;" type="text" class="form-control" id="parcela1" placeholder="Dia 5">
      <p id="contact_parcela" style="float:right; display:none;margin-left:80px; position:absolute; margin-top:-19px;">E</p>
      <input name="parcela2" style="width:40%;display:none; float:right; margin-top:-34px;" type="text" class="form-control" id="parcela2" placeholder="Dia 20">
      </div>
    </div>
    <div class="produto_unico1">


    <div class="form-group col-md-6">
      <label for="inputAddress">Produto</label>
      <input name="produto[]" type="text" class="form-control" id="inputAddress" placeholder="Produto">

    </div>
    <div class="form-group col-md-3">

      <label for="inputAddress">Valor Unitário</label>
      <input min='0' step='0.01' data-number-to-fixed='2' data-number-stepfactor='100' name="valor[]" type="number" class="form-control" id="inputAddress" placeholder="Valor">

    </div>
    <div class="form-group col-md-1">

      <label for="inputAddress">Quantidade</label>
      <input name="qtde[]" type="number" class="form-control" id="inputAddress" placeholder="1">

    </div>
    </div>
    <div class="produtos_all" id="produtos_all">



    </div>

    </div>

    <button type="submit" class="btn btn-primary btn-lg" align="center" style="margin-left:1%;">Finalizar Cadastro</button>
  </form>
  <button id="add_field" type="submit" class="btn btn-success" align="center" style="margin-left:1%;">Adicionar produto +</button>

      </div>
    </div>
</div>
