<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Imprimir Fichas Odontológicas
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-md-12">
                        <button class="btn btn-info btn-flat print-link no-print" onclick="jQuery('#ele1').print()">
                            <i class="fa fa-print" aria-hidden="true"></i> Clique aqui para imprimir
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <h3 class="text-center">Um total de <?php echo $total ?> pessoas cadastradas</h3>
                    <table class="table table-hover" id="ele1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome completo</th>
                            <th>Número de ficha</th>
                            <th>Data de Nascimento</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($fichasodontologicas as $fichasodontologica): ?>
                            <tr>
                                <td><?= $this->Number->format($fichasodontologica->id) ?></td>
                                <td><?= h($fichasodontologica->nome) ?></td>
                                <td><?= h($fichasodontologica->numero) ?></td>
                                <td><?= h($fichasodontologica->data) ?></td>
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
<script type='text/javascript'>
    //<![CDATA[
    jQuery(function ($) {
        'use strict';
        $("#ele2").find('.print-link').on('click', function () {
            //Print ele2 with default options
            $.print("#ele2");
        });
        $("#ele4").find('button').on('click', function () {
            //Print ele4 with custom options
            $("#ele4").print({
                //Use Global styles
                globalStyles: false,
                //Add link with attrbute media=print
                mediaPrint: false,
                //Custom stylesheet
                stylesheet: "http://fonts.googleapis.com/css?family=Inconsolata",
                //Print in a hidden iframe
                iframe: false,
                //Don't print this
                noPrintSelector: ".avoid-this",
                //Add this at top
                prepend: "Hello World!!!<br/>",
                //Add this on bottom
                append: "<br/>Buh Bye!",
                //Log to console when printing is done via a deffered callback
                deferred: $.Deferred().done(function () {
                    console.log('Printing done', arguments);
                })
            });
        });
        // Fork https://github.com/sathvikp/jQuery.print for the full list of options
    });
    //]]>
</script>