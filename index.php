<!DOCTYPE html>
<html>
    <head>
        <title>Painel Administrativo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body class="tela-login">
        <div class="container">

            <h2>Painel Administrativo de Fichas<small>Eduardo Rocha</small></h2>

            <form name="login" method="post" action="controller/verificar.php"> 
                <div class="group">      
                    <input type="text" name="login" required
                           data-validation-required-message="Digite o Login"
                            autofocus>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Login</label>
                </div>

                <div class="group">      
                     <input type="password" name="senha" required
                               data-validation-required-message="Digite sua senha" autofocus>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Senha</label>
                </div>     
                <div class="group">      
                    <button class="btn btn-primary">Entrar</button>
                </div>   
            </form>
        </div>


    </body>
</html>