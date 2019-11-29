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
        //Datemask dd/mm/yyyy
        $(".datepicker")
            .inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"})
            .datepicker({
                language: 'br',
                format: 'dd/mm/yyyy'
            });
    });
</script>
<?php $this->end(); ?>
