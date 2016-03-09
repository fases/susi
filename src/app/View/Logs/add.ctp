<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
                <li><i class="fa fa-file-text"></i><a href="relatorios_user.html" class="diretorios">Estoque</a></li>
                <li><i class="fa fa-file-text"></i><a href="relatorios_user.html" class="diretorios">Entrada/Saída</a></li>
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
                    <p><i>Aqui você informa qualquer fluxo do estoque.</i></p>
                </div>

                <div class="panel-body">

                    <div class="logs form">

                        <?php echo $this->Form->create('Log'); ?>

                        <span>Nome do item: </span>
                        <input type="text" class="form-control" value="<?php echo $campusItem['Item']['name'];?>" readonly>
                        <br/>
                        <span>Quantidade atual: </span>
                        <input type="number" class="form-control" value="<?php echo $campusItem['CampusItem']['amount']; ?>" readonly>



                        <br/>
                        Movimentação:<br/>
                        <span>Realizando </span>
                        <select name="data[Log][deal_type_id]">
                            <option value="2">Subtração</option>
                            <option value="1">Adição</option>
                        </select>
                        <span> de </span>
                        <input type="number" name="data[Log][amount]" min="1" required/>
                        <span> itens.</span><br/>

                        <br/>
                        <span>Alguma observação sobre essa movimentação?</span>

                        <?php 
                        echo $this->Form->textarea('comment', array(
                            'label' => 'de',
                            'class' => 'form-control',
                            'id' => 'comment',
                            'required' => false));
                        ?>

                        <br/>
                        <?php echo $this->Form->button('Cadastrar', array(
    'type' => 'submit',
    'class' => 'btn btn-primary')); ?>
                        
                        <?php echo $this->Form->end(); ?>


                    </div>
                </div>
            </section>
        </div>
    </div>
</section>