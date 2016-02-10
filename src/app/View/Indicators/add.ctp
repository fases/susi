<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="meus_indicadores.html" class="diretorios">Adicionar indicador</a></li>
      </ol>
    </div>
  </div>


  <!-- page start-->
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          <h1>Adicionar indicador</h1>
        </header>
        <div class="panel-body">
          <div class="form">

            <?php echo $this->Form->create('Indicator', array(
            'class' => 'form-validate form-horizontal',
            'id' => 'feedback_form'
            )); ?>

            <div class="form-group">
              <label for="cname" class="control-label col-lg-2">Nome <span class="required">*</span></label>
              <div class="col-lg-4">

                <?php echo $this->Form->input('item_id', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cname',
                'required' => 'true'
                )); ?>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Tipo</label>
              <div class="col-lg-2">

                <?php echo $this->Form->input('indicator_type_id', array(
                'label' => false,
                'class' => 'form-control m-bot15'
                )); ?>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Câmpus</label>
              <div class="col-lg-4">

                <?php echo $this->Form->input('campus_id', array(
                'label' => false,
                'class' => 'form-control m-bot15'
                )); ?>

              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">

                <?php $options = array(
                'label' => 'Adicionar',
                'class' => 'btn btn-primary'
                );
                echo $this->Form->end($options);
                ?>

              </div>
            </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
