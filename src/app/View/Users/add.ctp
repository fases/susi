<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="#" class="diretorios">Início</a></li>
        <li><i class="fa fa-file-text"></i><a href="cadastrar_usuarios.html" class="diretorios">Cadastrar Usuários</a></li>
      </ol>
    </div>
  </div>
  <!-- page start-->

  <!-- page end-->
  <!-- page start-->
  <!-- Form validations -->              
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Cadastrar usuário
        </header>
        <div class="panel-body">
          <div class="form">

            <?php echo $this->Form->create('User', array(
            'class' => 'form-validate form-horizontal',
            'id' => 'feedback_form')); ?>

            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Nome completo <span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('name', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cname',
                'minlength' => '5',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="form-group ">
              <label for="ccpf" class="control-label col-lg-2">CPF <span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('cpf', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'ccpf',
                'maxlength' => '14',
                'placeholder' => '000.000.000-00',
                'pattern' => '\d{3}\.\d{3}\.\d{3}-\d{2}',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="form-group ">
              <label for="cfone" class="control-label col-lg-2">Telefone <span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('phone', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cfone',
                'placeholder' => '0000-0000',
                'pattern' => '\d{4}\-\d{4}',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="form-group">
              <label for="cemail" class="control-label col-lg-2">E-mail institucional <span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('email', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cemail',
                'placeholder' => 'seu_email@ifrn.edu.br',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="form-group ">
              <label for="cpassword" class="control-label col-lg-2">Senha <span class="required">*</span></label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('password', array(
                'label' => false,
                'class' => 'form-control',
                'id' => 'cpassword',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Câmpus</label>
              <div class="col-lg-10">

                <?php echo $this->Form->input('campus_id', array(
                'label' => false,
                'class' => 'form-control m-bot15',
                'id' => 'cpassword',
                'required' => true)); ?> 

              </div>
            </div>

            <div class="radios form-group">
              <label for="radio-01 radio-02 radio-03" class="control-label col-lg-2">Tipo<span class="required">*</span></label>

              <?php
              $options = array('1' => 'Médico', '2' => 'Enfermeira', '3' => 'Administrador');
              $attributes = array('legend' => false, 'label' => false);
              echo $this->Form->radio('user_type_id', $options, $attributes);
              ?>

            </div>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">

                <?php echo $this->Form->button('Cadastrar', array(
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'controller' => 'users',
                'action' => 'login')); ?>

                <button class="btn btn-default" type="button">Cancelar</button>

                <?php echo $this->Form->end(); ?> 

              </div>
            </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- page end-->
</section>
