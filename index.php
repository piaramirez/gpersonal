<?php
require_once("config/conn.php");
if(isset($_POST['btnEnviar'])){
    //var_dump($_POST);
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}

?>

<!DOCTYPE html>
<html>
<head lang="esp">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Soporte técnico | MacroVoice</title>
	<link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="public/img/favicon.png" rel="icon" type="image/png">
	<link href="public/img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="POST" id="login_from">
                    <div class="sign-avatar">
                        <img src="public/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Acceso:</header>
                    <?php
                        if(isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1"; ?>
                                <div class="alert alert-danger alert-fill alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    El correo o la contraseña es incorrecta
						        </div><?php
                                break;
                                case "2"; ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
		        					<i class="font-icon font-icon-warning"></i>
                                    El correo y contraseña son obligatorios
					        	</div> <?php
                            }
                        }
                    ?>
                    <div class="form-group">
                        <input type="text" id="emailLogin" name="emailLogin" class="form-control" placeholder="Ingresa tu correo"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="passLogin" name="passLogin" class="form-control" placeholder="Ingresa tu password:"/>
                    </div>
                    <input type="hidden" name="enviar" value="si">
                    <button type="submit" class="btn btn-rounded" id="btnEnviar" name="btnEnviar">Login</button>
                </form>
            </div>
        </div>
    </div>
<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="js/app.js"></script>
</body>
</html>