
<?php
use Cake\Routing\Router;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fichas Odontológicas
        <div class="pull-right"><?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?php echo $this->Form->create(null, ['valueSources' => 'fichasodontologicas']); ?>
                    <div class="input-group input-group-sm">
                        <div class="col-md-12">
                        <?php echo $this->Form->control('q', ['label' => 'Buscar Pelo Nome']); ?>
                        </div>
                        <div class="col-md-12">
                        <?php echo $this->Form->button('Buscar', ['type' => 'submit', ['class' => 'btn btn-info btn-flat']]); ?>
                        <?php echo $this->Form->button('Resetar', ['action' => 'index', ['class' => 'btn btn-sucess btn-flat']]); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <div class="box-header">
                    <div class="input-group input-group-sm">
                        <div class="col-md-12">
                            <a class="btn btn-info btn-xs" href="<?php echo Router::url(['controller' => 'Impressaoodontologica','action' => 'index']); ?>" title="Imprimir"><i class="fa fa-print"></i> Imprimir Todos os Pacientes</a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <div class="col-md-12">
                        <p class="text-center" style="font-size: 16px;">Um Total de <span style="color: #b51c1c;font-weight: 800;"><?php echo $total ?></span> pessoas cadastradas.</p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('numero') ?></th>
                                <th><?= $this->Paginator->sort('data') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($fichasodontologicas as $fichasodontologica): ?>
                                <tr>
                                    <td><?= $this->Number->format($fichasodontologica->id) ?></td>
                                    <td><?= h($fichasodontologica->nome) ?></td>
                                    <td><?= h($fichasodontologica->numero) ?></td>
                                    <td><?= h($fichasodontologica->data) ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $fichasodontologica->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fichasodontologica->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $fichasodontologica->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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
