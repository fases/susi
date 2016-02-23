<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="estoque.html" class="diretorios">Usuários</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->
  <div class="row">
    <div class="col-lg-7">
      <section class="panel">
        <header class="panel-heading">
          Tabela de usuários
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> Nome</th>
              <th><i class="fa fa-credit-card"></i> CPF</th>
              <th><i class="fa fa-map-marker"></i> Campus</th>
              <th><i class="icon_cogs"></i> Editar/Remover</th>
            </tr>

            <?php foreach ($users as $user): ?>

            <tr>
              <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
              <td><?php echo h($user['User']['cpf']); ?>&nbsp;</td>
              <td><?php echo h($user['Campus']['name']); ?>&nbsp;</td>
              <td>
                <spam class="btn-group">

                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon_close_alt2 fa fa-pencil')),
                array('action' => 'edit', $user['User']['id']),
                array('escape' => false, 'class' => 'btn btn-primary')); ?>

                <?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'icon_close_alt2')),
                array('action' => 'remove', $user['User']['id']),
                array('escape' => false, 'class' => 'btn btn-danger'),
                __('Deseja excluir o usuário %s?', $user['User']['name'])); ?>

                </spam>
              </td>
            </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Editar usuário</h4>
              </div>
              <div class="modal-body">
                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nome completo <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="cname" name="nome" minlength="5" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="ccpf" class="control-label col-lg-2">CPF <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="ccpf" name="cpf" type="text" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cfone" class="control-label col-lg-2">Telefone <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="cfone" name="fone" type="text" placeholder="0000-0000" pattern="\d{4}\-\d{4}\" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-mail institucional <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" placeholder="seu_email@ifrn.edu.br" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cpassword" class="control-label col-lg-2">Senha <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cpassword" name="senha" type="password" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Câmpus</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15">
                        <option>Apodi</option>
                        <option>Caicó</option>
                        <option>Canguaretama</option>
                        <option>Ceará-Mirim</option>
                        <option>Currais Novos</option>
                        <option>Ipanguaçu</option>
                        <option>João Câmara</option>
                        <option>Lajes</option>
                        <option>Macau</option>
                        <option>Mossoró</option>
                        <option>Natal - Central</option>
                        <option>Natal - Cidade Alta</option>
                        <option>Natal - Zona Norte</option>
                        <option>Nova Cruz</option>
                        <option>Parelhas</option>
                        <option>Pau dos Ferros</option>
                        <option>Santa Cruz</option>
                        <option>São Gonçalo do Amarante</option>
                        <option>São Paulo do Potengi</option>
                      </select>
                    </div>
                  </div>

                  <div class="radios form-group">
                    <label for="radio-01 radio-02 radio-03" class="control-label col-lg-2">Tipo<span class="required">*</span></label>
                    <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Médico
                    <input name="sample-radio" id="radio-02" value="1" type="radio" /> Enfermeira
                    <input name="sample-radio" id="radio-03" value="1" type="radio" /> Administrador                    
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit">Editar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- page end-->
</section>
