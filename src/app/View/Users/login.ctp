<?php echo $this->Html->css('elegant-icons-style'); ?>
<?php echo $this->Html->css('font-awesome'); ?>
<!-- Custom styles -->
<?php echo $this->Html->css('style'); ?>
<?php echo $this->Html->css('style-responsive'); ?>

<body style="background: #1abc9c;"> <!--gambi-->

  <?php echo $this->Flash->render('auth'); ?>
  <?php echo $this->Form->create('User', array(
  'class' => 'login-form',
  'style' => 'background: #ecf0f1;' //gambi
  )); ?>
  <div class="login-wrap">
    <p class="login-img"><i class="fa fa-user-md fa-2x"></i></p>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>

      <?php echo $this->Form->input('email', array(
      'type' => 'text',
      'label' => '',
      'class' => 'form-control',
      'placeholder' => 'Email',
      'autofocus' => 'true'
      )); ?>

    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_key_alt"></i></span>

      <?php echo $this->Form->input('password', array(
      'label' => '',
      'class' => 'form-control',
      'placeholder' => 'Senha'
      )); ?>

    </div>
    <?php echo $this->Form->button('Login', array(
    'type' => 'submit',
    'class' => 'btn btn-info btn-lg btn-block',
    'controller' => 'users',
    'action' => 'login'
    )); ?>

    <?php echo $this->Form->button('Acesso Livre', array(
    'type' => 'submit',
    'class' => 'btn btn-primary btn-lg btn-block',
    'action' => 'relatorios_susi.html'
    )); ?>

    <?php echo $this->Form->end(); ?> 

  </div>

</body>
