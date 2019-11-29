<section class="content-header">
    <h1>
        Usuário
        <small><?= __('Página de Edição') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-danger text-white']) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Formulário') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($user, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('status',['label' => 'Status', 'type' => 'checkbox']);
                    echo $this->Form->input('login',['label' => 'Login']);
                    echo $this->Form->input('nome',['Label' => 'Nome Completo']);
                    echo $this->Form->control('role',['label' => 'Tipo de Úsuario', 'value' => 'admin', 'disabled']);
                    echo $this->Form->input('password',['label' => 'Senha']);
                    echo $this->Form->control('photo',['label' => 'Foto','type' => 'file']);

                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

<style>
    .img-thumb{
        width: 200px;
        height: 200px;
        object-fit: cover;
        object-position: center;
    }

</style>
