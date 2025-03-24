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
    <title>Registrar usuarios | Soporte Técnico</title>
</head>
<body class="with-side-menu">
    <div class="mobile-menu-left-overlay"></div>
    <?php include_once("../MainHeader/header.php") ?>
	<?php include_once("../MainNav/nav.php"); ?>
    <!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
            <div class="">
                <h3>Dar de alta al usuario o cliente</h3> <!-- Podríamos ver de anmimar la entrada -->
                <div class="">
                <div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tipoUsuario">Rol de usuario:</label>
							<select name="rolUsuarios" id="rolUsuarios" class="form-control">
                                <option value="">Selecciona un usuario</option>
                                <option value="Administrador">Admin</option>
                                <option value="Trabajador">Trabajador</option>
                                <option value="Cliente">Usuario</option>
                            </select>
						</fieldset>
					</div>
                    <div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="nombresRegistrp">Nombre(s)</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="Ingresa el nombre">
						</fieldset>
					</div>
                    <div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="nombresRegistrp">Apellido Paterno</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="Ingresa el nombre">
						</fieldset>
					</div>
                    <div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="nombresRegistrp">Apellido Materno</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="Ingresa el nombre">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="mail@mail.com">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</fieldset>
					</div>
				</div>
                </div>
                Tipo{
                    trabajador
                    usuario
                }
                nombreCompleto
                empresa
                correo
                pass
                teléfono
                <!-- En bd fecha de alta
                fecha de baja-->
            </div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <!-- Contenido -->
    <?php include_once("../MainJs/js.php"); ?>
    <script src="home.js"></script>

</body>
</html>
<?php } ?>