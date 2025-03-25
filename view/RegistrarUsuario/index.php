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
                    <!-- Form niver privilegio usuario -->
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
                    </div>
                    <!-- Información general -->
                   <div class="row">      
                        <h4>Infomración del usuario</h4>
                        <!-- Form nombre -->
                        
                        <div class="col-lg-4">
                        <div id="erronombre"></div>
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="nombresRegistro">Nombre(s)</label>
                                <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro" placeholder="Ingresa el nombre" required>
                                
                            </fieldset>
                        </div>
                        <!-- Form apellidos -->
                        
                        <div class="col-lg-4">
                        
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="apellidopaRegistro">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidopaRegistro" name="apellidopaRegistro" placeholder="Ingresa apellido paterno" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="apellidomaRegistro">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidomaRegistro" name="apellidomaRegistro" placeholder="Ingresa el apellido materno" required>
                            </fieldset>
                        </div>
                        <!-- Form whats -->
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="whatsRegistro">Teléfono contacto:</label>
                                <input type="tel" class="form-control" id="whatsRegistro" name="whatsRegistro" placeholder="Whatsapp preferente">
                            </fieldset>
                        </div>
                        <!-- Form Email -->
                        <div class="col-lg-4">
                            <fieldset class="form-group ">
                                <label class="form-label semibold" for="emailRegistro">Correo electrónico</label>
                                <input type="email" class="form-control" id="emailRegistro" name="emailRegistro" placeholder="Ingresa el correo"  required>
                            </fieldset>
                        </div>
                        <!-- Empresa donde damos soporte -->
                        <div class="col-lg-4">
                            <fieldset class="form-group ">
                                <label class="form-label semibold" for="empresaRegistro">Empresa</label>
                                <input type="text" class="form-control" id="empresaRegistro" name="empresaRegistro" placeholder="Empresa soporte"  required>
                            </fieldset>
                        </div>
                        <!-- Form Pass -->
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="passRegistro">Password</label>
                                <input type="password" class="form-control" id="passRegistro" name="passRegistro" placeholder="Password">
                            </fieldset>
                        </div>
                        <!-- Enviar -->
                        <div class="col-lg-4 form-group">
 
                                <button type="button"  id="enviarRegistro" name="enviarRegistro" class="btn btn-rounded btn-inline">Enviar</button>
                        
                        </div>
                        
                   </div>
                    <!-- cierre Información general -->
                </div>
            </div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <!-- Contenido -->
    <?php include_once("../MainJs/js.php"); ?>
    <script type="module" src="RegistrarUsuarios.js"></script>
    
</body>
</html>
<?php } ?>