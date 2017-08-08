<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title"><h3>Cadastro de Fichas - Pacientes Médicos</h3></div>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <input type="text" required id="nome"
                                   name="nome" class="form-control"
                                   data-validation-required-message="Preencha o nome do Cliente"
                                   placeholder="Preenche o Nome Completo do Cliente ex: João da Silva">
                        </div>

                        <div class="form-group">
                            <input type="text" required id="nome"
                                   name="nome" class="form-control"
                                   data-validation-required-message="Preencha o Número de Ficha"
                                   placeholder="Preencha o Número de Ficha">
                        </div>

                        <div class="form-group">
                            <input name="data" required
                                   data-validation-required-message="Preencha a Data de Nascimento"

                                   class="form-control"
                                   data-mask="99/99/9999" placeholder="Somente Números">
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>