<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="relatorios_user.html" class="diretorios">Cadastrar Itens</a></li>
      </ol>
    </div>
  </div>

  <!-- page start-->
  <!-- Form validations -->
    <script type="text/javascript">
        
        function isValidadeOk(){    
            var dia = document.getElementById('dataDay').value;
            var mes = document.getElementById('dataMonth').value - 1; // em js, janeiro=0
            var ano = document.getElementById('dataYear').value;
            
            var dataDigitada = new Date(ano, mes, dia);
            var dataHoje = new Date();
            
            var validadeNaoExpirou = (dataHoje < dataDigitada);
            
            if (dataHoje < dataDigitada){
                // validade digitada não expirou, está válida.
                return true;
            } // else:
            document.getElementById('aviso-data-validade').setAttribute('style', '');
            return false;
        }
        
    </script>
    
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Cadastro de itens
        </header>
        <div class="alert alert-info fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
          </button>
          <p><i>Obs.: Essa área é voltada para cadastrar apenas os produtos que já tem o seu nome no sistema.</i></p>
        </div>
        
        <div class="alert alert-danger fade in" id="aviso-data-validade" style="display: none">
          <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
          </button>
          <p><i>Por favor, insira uma data de validade que já não tenha expirado e depois clique novamente em 'Cadastrar'.</i></p>
        </div>
          
        <div class="panel-body">
          <div class="form">

            <?php echo $this->Form->create('CampusItem', array(
            'class' => 'form-validate form-horizontal',
            'id' => 'feedback_form')); ?>

            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Nome</label>
              <div class="col-lg-4">

                <?php echo $this->Form->input('item_id', array(
                'label' => false,
                'class' => 'form-control m-bot15')); ?>

              </div>
            </div>

            <div class="form-group">
              <label for="cnumber" class="control-label col-lg-2">Lote<span class="required">*</span></label>
              <div class="col-lg-2">

                <?php echo $this->Form->input('lot', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cnumber',
                'min' => '1',
                'required' => true)); ?>

              </div>
            </div>

            <div class="form-group ">
              <label class="control-label col-lg-2" for="data">Data de validade<br/>
                <small>Se o material não tiver validade, apenas ignore os campos de data abaixo.</small></label>
              <div class="col-sm-2">

                <?php echo $this->Form->input('validity', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'data',
                'size' => '1',
                'placeholder' => 'DD-MM-AAAA')); ?>

              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  
                <button class="btn btn-primary" type="submit" onclick="return isValidadeOk()">Cadastrar</button>
                <button class="btn btn-default" type="button">Cancelar</button>
              </div>
            </div>
            <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </section>
    </div>
  </div> 
  <!-- page end-->
</section>
