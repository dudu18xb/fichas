<div class="user-panel">
    <div class="pull-left image">
        <img src="/files/Users/photo/<?php echo $this->request->session()->read('Auth.User.photo') ?>" class="img-circle" alt="<?php echo $this->request->session()->read('Auth.User.nome') ?>">
    </div>
    <div class="pull-left info">
        <p><?php echo $this->request->session()->read('Auth.User.nome') ?></p>
        <a href="javascript:;"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
