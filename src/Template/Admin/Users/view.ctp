<section class="content-header">
    <h1>
        <?php echo __('Usuário'); ?>
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
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Informações'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Login') ?></dt>
                        <dd>
                            <?= h($user->login) ?>
                        </dd>
                        <dt><?= __('Nome') ?></dt>
                        <dd>
                            <?= h($user->nome) ?>
                        </dd>
                        <dt><?= __('Role') ?></dt>
                        <dd>
                            <?= h($user->role) ?>
                        </dd>


                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

</section>
<style>
    .img-thumb{
        width: 200px;
        height: 200px;
        object-fit: cover;
        object-position: center;
    }

</style>
