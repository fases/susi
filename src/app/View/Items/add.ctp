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
          Cadastro de nome de itens
        </header>
        <div class="alert alert-info fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
          </button>
          <p><i>Obs.: Essa área é voltada para cadastrar apenas itens que nunca foram cadastrado no sistema.</i></p>
        </div>

        <div class="panel-body">
          <div class="form">

            <?php echo $this->Form->create('Item', array(
            'class' => 'form-validate form-horizontal',
            'id' => 'feedback_form')); ?>

            <div class="form-group">
              <label for="cname" class="control-label col-lg-2">Nome<span class="required">*</span></label>
              <div class="col-lg-4">

                <?php echo $this->Form->input('name', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cname',
                'minlength' => '2',
                'required' => true)); ?>

              </div>
            </div>

            <div class="form-group">
              <label for="ccomment" class="control-label col-lg-2">Descrição<span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->textarea('description', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'ccomment',
                'required' => true)); ?>

              </div>
            </div>

            <div class="form-group">
              <label for="ctype" class="control-label col-lg-2">Tipo<span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('item_type_id', array(
                'label' => false,
                'class' => 'form-control m-bot15',
                'id' => 'ctype',
                'required' => true)); ?>

              </div>
            </div>


            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">

                <?php echo $this->Form->button('Cadastrar', array(
                'type' => 'submit',
                'class' => 'btn btn-primary')); ?>

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
