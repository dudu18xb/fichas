<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Fichas Médicas
    <div class="pull-right"><?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
          <div class="box-header">
              <?php echo $this->Form->create(null, ['valueSources' => 'fichasmedicas']); ?>
              <div class="input-group input-group-sm" style="width: 100%;float: left;display: flex;flex-wrap: nowrap;">
                  <?php echo $this->Form->control('q', ['label' => 'Buscar Pelo Nome']); ?>
                  <?php echo $this->Form->button('Buscar', ['type' => 'submit', ['class' => 'btn btn-info btn-flat']]); ?>
                  <?php echo $this->Form->button('Resetar', ['action' => 'index', ['class' => 'btn btn-sucess btn-flat']]); ?>
              </div>
              <?php echo $this->Form->end(); ?>
          </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
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
            <?php foreach ($fichasmedicas as $fichasmedica): ?>
              <tr>
                <td><?= $this->Number->format($fichasmedica->id) ?></td>
                <td><?= h($fichasmedica->nome) ?></td>
                <td><?= h($fichasmedica->numero) ?></td>
                <td><?= h($fichasmedica->data) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $fichasmedica->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fichasmedica->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $fichasmedica->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
