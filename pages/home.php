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
                    <div class="col-md-5">
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
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="../controller/sair.php" class="dropdown-toggle"><h5>Bem Vindo <?php echo $_SESSION["nome"]; ?> </h5>
                                            <button  class="btn btn-danger btn-lg btn-block"><i class="icon_close_alt2"></i> Sair</button>
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
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href="home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                            <li class="current"><a href="home.php"><i class="glyphicon glyphicon-user"></i> Cadastro Usuario Admin</a></li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list"></i> Cadastros Fichas
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=cadmpacientes">Pacientes Medicos</a></li>
                                    <li><a href="home.php?pg=cadopacientes">Pacientes Odontologicos</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list"></i> Buscar Fichas
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="home.php?pg=listpacmedic">Medicos</a></li>
                                    <li><a href="home.php?pg=listpacodon">Odontologicos</a></li>
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