<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('bootstrap-theme');

    //font icon
    echo $this->Html->css('elegant-icons-style.css');
    echo $this->Html->css('font-awesome');

    //Custom styles
    echo $this->Html->css('style');
    echo $this->Html->css('style-responsive');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
  </head>

  <body>
    <!-- container section start -->
    <section id="container" class="">
      <!--header start-->

      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">SUSI</a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">                    
            <li>
              <form class="navbar-form">
                <input class="form-control" placeholder="Search" type="text">
              </form>
            </li>                    
          </ul>
          <!--  search form end -->                
        </div>

        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">

            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            <li id="mail_notificatoin_bar" class="dropdown" >
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-envelope-l"></i>
                <!--<span class="badge bg-important">1</span>-->
              </a>
              <ul class="dropdown-menu extended inbox">
                <!--<div class="notify-arrow notify-arrow-blue"></div>
                  <li>
                  <p class="blue">Você tem novas mensagens</p>
                  </li>
                  <li>
                  <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                  <span class="subject">
                  <span class="from">IFRN - SGA</span>
                  <span class="time">1 dia</span>
                  </span>
                  <span>
                  Preciso de dipirona.
                  </span>
                  </a>
                  </li>-->
                  <li>
                    <a href="#">Ver todas as mensagens</a>
                  </li>
              </ul>
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                  <img alt="" src="" id="foto_perfil">
                </span>
                <span class="username"></span> <!--nome do usuário-->
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="#"><i class="icon_profile"></i> Perfil</a>
                </li>
                <li class="eborder-top">

                  <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon_key_alt')) . 'Sair',
                  array( 'controller' => 'users',
                  'action' => 'logout'),
                  array('escape' => false)); ?> 

                </li>
              </ul>
            </li>
            <!-- user login dropdown end -->
          </ul>
          <!-- notificatoin dropdown end-->
        </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse" style="background: #2c3e50;">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon_house_alt')) . '<span>Início</span>',
              array('controller' => 'campusItems', 'action' => 'index'),
              array('escape' => false)); ?>

            </li>

            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-archive')) . '<span>Estoque</span>',
              array('controller' => 'campusItems', 'action' => 'estoque'),
              array('escape' => false)); ?>

            </li>
              
              
            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . '<span>Índice global de itens </span>',
              array('controller' => 'items', 'action' => 'index'),
              array('escape' => false)); ?>

            </li>

            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus-square-o')) . '<span>Inserir no estoque</span>',
              array('controller' => 'campusItems', 'action' => 'add'),
              array('escape' => false)); ?>

            </li>
              
            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus-square-o')) . '<span>Cadastrar item global </span>',
              array('controller' => 'items', 'action' => 'add'),
              array('escape' => false)); ?>

            </li>

            <li class="sidebar-menu">
              <a href="../user/relatorios_user.html" class="">
                <i class="fa fa-file-text-o"></i>
                <span>Relatórios</span>
              </a>

            </li>

            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye')) . '<span>Meus Indicadores</span>',
              array('controller' => 'indicators', 'action' => 'meus_indicadores'),
              array('escape' => false)); ?>

            </li>

            <li class="sidebar-menu">

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-rss')) . '<span>Ver Indicadores</span>',
              array('controller' => 'indicators', 'action' => 'index'),
              array('escape' => false)); ?>

            </li>

            <li class="sidebar-menu">
              <a class="" href="chart-chartjs.html">
                <i class="fa fa-question"></i>
                <span>Sobre</span>
              </a>
            </li>
          </ul>
          <!--<img src="img/ifrn_logo.png" id="logo_ifrn"/>-->
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
      </section>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <?php echo $this->Html->script('jquery') ?>
    <?php echo $this->Html->script('bootstrap.min.js') ?>
    <!-- nice scroll -->
    <?php echo $this->Html->script('jquery.scrollTo.min') ?>
    <?php echo $this->Html->script('jquery.nicescroll') ?>
    <?php echo $this->Html->script('scripts') ?>
  </body>
</html>
