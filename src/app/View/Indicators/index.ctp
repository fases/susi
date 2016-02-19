<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="meus_indicadores.html" class="diretorios">Ver indicadores</a></li>
      </ol>
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
          </tr>
        </thead>
        <tbody>

          <?php foreach ($carencia as $carente): ?>

          <tr class="danger">
            <td><?php echo h($carente['Indicator']['id']); ?>&nbsp;</td>
            <td><?php echo h($carente['Item']['name']); ?>&nbsp;</td>
            <td><?php echo h($carente['Campus']['name']); ?>&nbsp;</td>
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
          </tr>
        </thead>
        <tbody>

          <?php foreach ($excedencia as $excedente): ?>

          <tr class="warning">
            <td><?php echo h($excedente['Indicator']['id']); ?>&nbsp;</td>
            <td><?php echo h($excedente['Item']['name']); ?>&nbsp;</td>
            <td><?php echo h($excedente['Campus']['name']); ?>&nbsp;</td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
  </div>
  <!-- page end-->
</section>
