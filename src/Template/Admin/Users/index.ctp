<style type="text/css">

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Usuários
        <div class="pull-right"><?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Novo'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success text-white']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de Usuários') ?></h3>
                    <div class="box-tools">
                        <?php echo $this->Form->create(null, ['valueSources' => 'users']); ?>
                            <div class="input-group input-group-sm" style="width: 320px;">
                                <?php echo $this->Form->control('q', ['label' => false,'placeholder' =>'Pesquisar por nome','class' => 'form-control']); ?>
                                <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="submit">Buscar</button>
                                    <?php echo $this->Form->button('Limpar', ['action' => 'index', ['class' => 'btn btn-sucess btn-flat']]); ?>

                                </span>
                                            </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
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
                            <th><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                            <th><?= $this->Paginator->sort('modified', ['label' => 'Modificado em']) ?></th>
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
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                                <td class="hidden"><?= h($user->password) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id], ['class' => 'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Deseja mesmo Excluir?'), 'class' => 'btn btn-danger']) ?>
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
