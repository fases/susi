<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="estoque.html" class="diretorios">Estoque</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->
  <div class="row">
    <div class="col-lg-7">
      <section class="panel">
        <header class="panel-heading">
          Tabela de itens
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> Item</th>
              <th><i class="icon_calendar"></i> Vencimento</th>
              <th><i class="fa fa-list-alt"></i> Tipo</th>
              <th><i class="fa fa-archive"></i> Quantidade</th>
              <th><i class="icon_cogs"></i> Remover</th>
            </tr>

            <?php foreach ($items as $item): ?>

            <tr>
              <td>
                <?php echo $this->Html->link($item['Item']['name'], array('controller' => 'items', 'action' => 'view', $item['Item']['id'])); ?>
              </td>
              <td><?php echo h($item['CampusItem']['validity']); ?>&nbsp;</td>
              <td><?php echo h($item['ItemType']['name']); ?>&nbsp;</td>
              <td><?php echo h($item['CampusItem']['amount']); ?>&nbsp;</td>
              <td>
                <spam class="btn-group">

                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon_close_alt2 fa fa-pencil')),
                array('action' => 'edit', $item['CampusItem']['id']),
                array('escape' => false, 'class' => 'btn btn-primary')); ?>

                <?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'icon_close_alt2')),
                array('action' => 'remove', $item['CampusItem']['id']),
                array('escape' => false, 'class' => 'btn btn-danger'),
                __('Deseja excluir o item %s?', $item['CampusItem']['id'])); ?>

                </spam>
              </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </section>
    </div>
  </div>
  <!-- page end-->
</section>
