<?php
include "../controller/login.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Painel Administrativo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
        <link href="../css/styles.css" rel="stylesheet">
        <link href="../css/stats.css" rel="stylesheet">
        <link href="../css/forms.css" rel="stylesheet">
        <link href="../css/calendar.css" rel="stylesheet">
        <link href="../css/buttons.css" rel="stylesheet">

        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="../js/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="../js/custom.js"></script>

        <script type="text/javascript">
            $(function () {
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            });
        </script>
    </head>
    <body>
        <div class="header">
            <div class="container admin-central">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">Fichas - Xambrê</a></h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Buscar</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="../controller/sair.php" class="dropdown-toggle"><h5>Bem Vindo <br><i class="fa fa-user-circle"></i> <?php echo $_SESSION["nome"]; ?> </h5>
                                            <button  class="btn btn-danger btn-lg"><i class="fa fa-close"></i> Sair</button>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href="home.php"><i class="fa fa-home"></i> Inicio</a></li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-user"></i> Cadastros Usuario SI
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=cadusuario"><i class="fa fa-user"></i> Cadastrar Usuario</a></li>
                                    <li><a href="home.php?pg=listausuario"><i class="fa fa-list"></i> Listar Usuário</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-hospital-o"></i> Cadastros Fichas
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=cadmpacientes"> <i class="fa fa-user-md"></i> Pacientes Medicos</a></li>
                                    <li><a href="home.php?pg=cadopacientes"><i class="fa fa-user-md"></i> Pacientes Odontologicos</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-search-plus"></i> Buscar Fichas
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=listpacmedic"><i class="fa fa-search"></i> Medicos</a></li>
                                    <li><a href="home.php?pg=listpacodon"><i class="fa fa-search"></i> Odontologicos</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-ban"></i> Bloquear Pacientes
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=listpacmedic"><i class="fa fa-user"></i> Cadastrar Paciente</a></li>
                                    <li><a href="home.php?pg=listpacodon"><i class="fa fa-ban"></i> Bloquear Paciente</a></li>
                                    <li><a href="home.php?pg=listpacodon"><i class="fa fa-list"></i> Lista de Pacientes</a></li>
                                    <li><a href="home.php?pg=listpacodon"><i class="fa fa-list"></i> Lista de Pacientes Bloqueados</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- TODO CONTEUDO DE CENTRO FICARA NESTE BLOCO -->
                <main class="container centro-home">
                    <?php
                    //verificar a variavel pg
                    if (isset($_GET["pg"]))
                        $pg = trim($_GET["pg"]);
                    else
                        $pg = "inicio";

                    //incluir o .php no nome do arquivo
                    $pg = $pg . ".php";
                    //plataforma -> plataforma.php
                    //verificar se o arquivo existe
                    if (file_exists($pg))
                        include $pg;
                    else
                        include "erro.php";
                    ?>
                </main>
                <!-- TODO CONTEUDO DE CENTRO FICARA NESTE BLOCO -->


            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>