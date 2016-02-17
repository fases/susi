<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="#" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="relatorios.html" class="diretorios">Relatórios</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->
  <div class="row">
    <div class="col-lg-5">
      <section class="panel">
        <header class="panel-heading">
          Gerador de relatórios por campus
        </header>

        <div class="panel-body">
          <span class="form">
            <form class="form-inline" id="feedback_form" role="form">
              <label class="control-label espacamento" for="">Campus:</label>
              <span class="form-group">
                <span class="col-lg-8">
                  <select class="form-control espacamento"> 
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
                </span>
                <div>
                  <button type="submit" class="btn btn-primary espacamento">Gerar</button>
                </div>
              </span>
            </form>
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
          <form class="form-inline"  id="feedback_form" role="form">
            <label class="control-label espacamento" for="">Data inicial:</label>
            <div class="form-group espacamento">
              <input id="data_inicial" type="text" placeholder="ex.: 20-12-2015" size="14" class="form-control">
            </div>

            <label class="control-label espacamento" for="">Data Final:</label>
            <div class="form-group espacamento">
              <input id="data_final" type="text" placeholder="ex.: 23-01-2016" size="14" class="form-control">
            </div>  

            <button type="submit" class="btn btn-primary espacamento">Gerar</button>       
          </form>
        </div>
      </section>
    </div>
  </div>
  <!-- page end-->
</section>
