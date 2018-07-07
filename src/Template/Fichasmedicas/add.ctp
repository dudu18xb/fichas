<section class="content-header">
    <h1>
        Fichas Médicas
        <small><?= __('Página de Cadastro') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
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
                <?= $this->Form->create($fichasmedica, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('nome',['label' => 'Nome']);
                    echo $this->Form->input('numero',['label' => 'Número']);
                    echo $this->Form->input('data', ['label' => 'Data de Nascimento','empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

<?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
],
    ['block' => 'css']);
$this->Html->script([
    'AdminLTE./plugins/input-mask/jquery.inputmask',
    'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
    'AdminLTE./plugins/datepicker/bootstrap-datepicker',
    'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
],
    ['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        //Datemask mm/dd/yyyy
        $(".datepicker")
            .inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"})
            .datepicker({
                language:'pt-BR',
                format: 'dd/mm/yyyy'
            });
    });
</script>
<?php $this->end(); ?>