<?php
    require_once("../../helpers/helpers.php");
    require_once("../../config/conn.php");
    $help = new helpers();
    if (!conn::usuarioAutenticado()) {
        header("Location: " . conn::ruta() . "index.php");
        exit();
    }else{ ?>
<html>
    <?php require_once("../MainHead/head.php"); ?>
    <title>Consultar tickets | Soporte Técnico</title>
</head>
<body class="with-side-menu">
    <div class="mobile-menu-left-overlay"></div>
    <?php include_once("../MainHeader/header.php") ?>
	<?php include_once("../MainNav/nav.php"); ?>
    <!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			perro
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <!-- Contenido -->
    <?php include_once("../MainJs/js.php"); ?>
    <script src="consultarticket.js"></script>

</body>
</html>
<?php } ?>