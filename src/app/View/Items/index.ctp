<style>
    a{
        color: black;
    }
</style>

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
                    <li><i class="fa fa-file-text"></i><a href="estoque.html" class="diretorios">Índice global</a></li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-7">
                <section class="panel">
                    <header class="panel-heading">
                        Lista de global itens
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="glyphicon glyphicon-file"></i> Item</th>
                                <th><i class="glyphicon glyphicon-info-sign"></i> Descrição</th>
                                <th><i class="glyphicon glyphicon-tag"></i> Tipo</th>
                            </tr>

                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php echo h($item['Item']['name']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
                                <td><?php echo h($item['ItemType']['name']); ?>&nbsp;</td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>

