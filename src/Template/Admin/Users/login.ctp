<div class="login-box-body">
    <?php echo $this->Form->create() ?>
    <?php echo $this->Form->control('login',
        [
            'label' => 'Login',
        ]) ?>
    <?php echo $this->Form->control('password',
        [
            'type' => 'password',
            'label' => 'Senha'
        ]
    ) ?>
    <?php echo $this->Form->button('Login',
        [
            'class' => 'btn btn-primary btn-block btn-flat',
        ]) ?>
    <?php echo $this->Form->end() ?>
</div>
