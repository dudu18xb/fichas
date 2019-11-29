<?php
use Cake\Core\Configure;
use Cake\Routing\Router;
?>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">

    <div class="navbar-header">
      <a href="<?php echo Router::url(['controller' => 'Pages', 'action' => 'paginainicial']); ?>" class="navbar-brand"><?php echo Configure::read('Theme.logo.large') ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

  <?php else: ?>

    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

  <?php endif; ?>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/files/Users/photo/<?php echo $this->request->session()->read('Auth.User.photo') ?>" class="user-image" alt="<?php echo $this->request->session()->read('Auth.User.nome') ?>">
          <span class="hidden-xs"><?php echo $this->request->session()->read('Auth.User.nome') ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
              <img src="/files/Users/photo/<?php echo $this->request->session()->read('Auth.User.photo') ?>" class="img-circle" alt="<?php echo $this->request->session()->read('Auth.User.nome') ?>">

            <p><?php echo $this->request->session()->read('Auth.User.nome') ?></p>
          </li>
          <li class="user-footer">
            <div class="pull-right">
              <a href="<?php echo Router::url(['controller' => 'Users', 'action' => 'logout']); ?>" class="btn btn-default btn-flat" title="Sair"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</nav>
