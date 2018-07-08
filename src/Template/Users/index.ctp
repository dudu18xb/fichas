<style type="text/css">

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Usuários
        <div class="pull-right"><?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de Usuários') ?></h3>
                </div>
                <div class="box-header">
                    <?php echo $this->Form->create(null, ['valueSources' => 'users']); ?>
                    <div class="input-group input-group-sm">
                        <div class="col-lg-12">
                            <?php echo $this->Form->control('q', ['label' => 'Buscar Pelo Nome']); ?>
                        </div>
                        <div class="col-lg-12">
                            <?php echo $this->Form->button('Buscar', ['type' => 'submit', ['class' => 'btn btn-info btn-flat']]); ?>
                            <?php echo $this->Form->button('Resetar', ['action' => 'index', ['class' => 'btn btn-sucess btn-flat']]); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('login') ?></th>
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('role') ?></th>
                            <th class="hidden"><?= $this->Paginator->sort('password') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->login) ?></td>
                                <td><?= h($user->nome) ?></td>
                                <td><?= h($user->role) ?></td>
                                <td class="hidden"><?= h($user->password) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-xs']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
