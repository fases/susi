<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="meus_indicadores.html" class="diretorios">Meus indicadores</a></li>
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


  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Carência</h1>
      </header>
      <table class="table col-sm-12">
        <thead>
          <tr>
            <th>#</th>
            <th>Item</th>
            <th>Campus</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($carencia as $carente): ?>

          <tr class="danger">
            <td><?php echo h($carente['Indicator']['id']); ?>&nbsp;</td>
            <td><?php echo h($carente['Item']['name']); ?>&nbsp;</td>
            <td><?php echo h($carente['Campus']['name']); ?>&nbsp;</td>
            <td>

              <?php echo $this->Form->postLink('Remover',
              array('action' => 'delete', $carente['Indicator']['id']),
              array('class' => 'btn btn-danger remover'),
              __('Deseja excluir o indicador # %s?', $carente['Indicator']['id'])); ?>

            </td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
  </div>

  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Excedência</h1>
      </header>
      <table class="table col-sm-12">
        <thead>
          <tr>
            <th>#</th>
            <th>Item</th>
            <th>Campus</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($excedencia as $excedente): ?>

          <tr class="warning">
            <td><?php echo h($excedente['Indicator']['id']); ?>&nbsp;</td>
            <td><?php echo h($excedente['Item']['name']); ?>&nbsp;</td>
            <td><?php echo h($excedente['Campus']['name']); ?>&nbsp;</td>
            <td>

              <?php echo $this->Form->postLink('Remover',
              array('action' => 'delete', $excedente['Indicator']['id']),
              array('class' => 'btn btn-danger remover'),
              __('Deseja excluir o indicador # %s?', $excedente['Indicator']['id'])); ?>

            </td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
  </div>
  <!-- page end-->
</section>
