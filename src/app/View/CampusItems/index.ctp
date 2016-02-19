<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->
  <div>
    <!--<div class="col-sm-3">
      <img src="img/danger_logo.jpg"/>
      <i class="fa fa-exclamation-triangle fa-5x"></i>-->
      <!--</div>-->
      <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading">
            <h1>Medicações vencidas</h1>
          </header>
          <table class="table col-sm-12">
            <thead>
              <tr>
                <th>#</th>
                <th>Medicamento</th>
                <th>Quantidade</th>
                <th>Data</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($expireds as $expired): ?>
              <tr class="danger">
                <td><?php echo h($expired['CampusItem']['id']); ?>&nbsp;</td>
                <td><?php echo h($expired['Item']['name']); ?>&nbsp;</td>
                <td><?php echo h($expired['CampusItem']['lot']); ?>&nbsp;</td>
                <td><?php echo h($expired['CampusItem']['validity']); ?>&nbsp;</td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </section>
      </div>
  </div>

  <div class="col-sm-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Medicações prestes a vencer</h1>
      </header>
      <table class="table col-sm-12">
        <thead>
          <tr>
            <th>#</th>
            <th>Medicamento</th>
            <th>Quantidade</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($almostExpireds as $almostExpired): ?>
          <tr class="danger">
            <td><?php echo h($almostExpired['CampusItem']['id']); ?>&nbsp;</td>
            <td>
              <?php echo $this->Html->link($almostExpired['Item']['name'], array('controller' => 'items', 'action' => 'view', $almostExpired['Item']['id'])); ?>
            </td>
            <td><?php echo h($almostExpired['CampusItem']['lot']); ?>&nbsp;</td>
            <td><?php echo h($almostExpired['CampusItem']['validity']); ?>&nbsp;</td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>
  <!-- page end-->
</section>
