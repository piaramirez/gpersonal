<?php
    require_once("../../helpers/helpers.php");
    require_once("../../config/conn.php");
    require_once("../../models/Usuario.php");
    if (!conn::usuarioAutenticado()) {
        header("Location: " . conn::ruta() . "index.php");
        exit();
    }else{
        $help = new helpers();
        $usuarios = new Usuario(); 
        $usuarios->setDatos($_SESSION['usuario']); ?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php"); ?>
    <title>Inicio | Soporte Técnico</title>
</head>
<body class="with-side-menu">
    <div class="mobile-menu-left-overlay"></div>
    <?php include_once("../MainHeader/header.php") ?>
	<?php include_once("../MainNav/nav.php"); ?>
    <!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
            <?php echo $usuarios->nombreCompleto(); ?>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <!-- Contenido -->
    <?php include_once("../MainJs/js.php"); ?>
    <script src="home.js"></script>

</body>
</html>
<?php } ?>