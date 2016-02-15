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
              <label class="control-label col-lg-2" for="data">Data de validade<span class="required">*</span></label>
              <div class="col-sm-2">

                <?php echo $this->Form->input('validity', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'data',
                'size' => '1',
                'placeholder' => 'DD-MM-AAAA')); ?>

              </div>
            </div>

            <div class="radios form-group">
              <label for="radio-01 radio-02 radio-03" class="control-label col-lg-2">Tipo<span class="required">*</span></label>
              <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Medicamento
              <input name="sample-radio" id="radio-02" value="1" type="radio" /> Acessório
              <input name="sample-radio" id="radio-03" value="1" type="radio" /> Equipamento                    
            </div>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">

                <?php echo $this->Form->button('Cadastrar',
                array('type' => 'submit',
                'class' => 'btn btn-primary')); ?>

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
