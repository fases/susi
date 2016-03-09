<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="relatorios.html" class="diretorios">Relatórios</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->

  <div class="row">
    <div class="col-lg-5">

      <?php echo $this->Form->create('CampusItem', array(
      'class' => 'form-validate form-horizontal',
      'id' => 'feedback_form',
      'action' => 'search'
      )); ?>

      <section class="panel">
        <header class="panel-heading">
          Gerador de relatórios por campus
        </header>

        <div class="panel-body">
          <span class="form">


            <label class="control-label espacamento" for="">Campus:</label>
            <span class="form-group">
              <span class="col-lg-8">
                <select class="form-control espacamento" name="data[CampusItem][campus]"> 
                  <option>Escolha um campus</option>
                  <option value="1">Apodi</option>
                  <option value="2">Caicó</option>
                  <option value="3">Canguaretama</option>
                  <option value="4">Ceará-Mirim</option>
                  <option value="5">Currais Novos</option>
                  <option value="6">Ipanguaçu</option>
                  <option value="7">João Câmara</option>
                  <option value="8">Lajes</option>
                  <option value="9">Macau</option>
                  <option value="10">Mossoró</option>
                  <option value="11">Natal - Central</option>
                  <option value="12">Natal - Cidade Alta</option>
                  <option value="13">Natal - Zona Norte</option>
                  <option value="14">Nova Cruz</option>
                  <option value="15">Parelhas</option>
                  <option value="16">Pau dos Ferros</option>
                  <option value="17">Santa Cruz</option>
                  <option value="18">São Gonçalo do Amarante</option>
                  <option value="19">São Paulo do Potengi</option>
                </select>
              </span>
            </span>
          </span>
        </div>
      </section>
    </div>

    <div class="col-lg-7">
      <section class="panel">
        <header class="panel-heading">
          Gerador de relatórios por período
        </header>
        <div class="panel-body">
            <label class="control-label espacamento" for="">Data inicial:</label>
            <div class="form-group espacamento">
              <input id="data_inicial" type="text" placeholder="ex.: 20-12-2015" size="14" class="form-control">
            </div>

            <label class="control-label espacamento" for="">Data Final:</label>
            <div class="form-group espacamento">
              <input id="data_final" type="text" placeholder="ex.: 23-01-2016" size="14" class="form-control">
            </div>  

            <button type="submit" class="btn btn-primary espacamento">Gerar</button>
            <?php echo $this->Form->end(); ?>
        </div>
      </section>
    </div>

  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Itens da busca</h1>
      </header>
      <table class="table col-sm-12">
        <thead>
          <tr>
            <th>#</th>
            <th>Item</th>
            <th>Validade</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($campusItems as $campusItem): ?>

          <tr class="danger">
            <td><?php echo h($campusItem['CampusItem']['id']); ?>&nbsp;</td>
            <td><?php echo h($campusItem['Item']['name']); ?>&nbsp;</td>
            <td><?php echo h($campusItem['CampusItem']['validity']); ?>&nbsp;</td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
  </div>
  </div>

  <!-- page end-->
</section>
