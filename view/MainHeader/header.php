<header class="site-header">
	<div class="container-fluid">
	    <a href="..\Home\" class="site-logo">
	        <img class="hidden-md-down" src="<?php $help->publicUrl(); ?>img/logoMacro.png" alt="">
	        <img class="hidden-lg-up" src="<?php $help->publicUrl(); ?>img/logoMacro.png" alt="">
	    </a>
	    <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	        <span>toggle menu</span>
	    </button>
	    <button class="hamburger hamburger--htla">
	        <span>toggle menu</span>
	    </button>
	    <div class="site-header-content">
	        <div class="site-header-content-in">
	            <div class="site-header-shown">
	                <div class="dropdown dropdown-notification notif">
						<!-- Notificaiones -->
	                    <a href="#" class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                    </a>
	                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                        <div class="dropdown-menu-notif-header">
	                            Notificaciones
	                            <span class="label label-pill label-danger">4</span>
	                        </div>
	                        <div class="dropdown-menu-notif-list">
								<!-- Despliegue en el menú de las nptoficaciones -->
	                            <div class="dropdown-menu-notif-item">
	                                <div class="photo">
	                                    <img src="<?php $help->publicURL(); ?>img/photo-64-1.jpg" alt="">
	                                </div>
	                                <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                <div class="color-blue-grey-lighter">7 hours ago</div>
	                            </div>
								<!-- Fin Despliegue en el menú de las nptoficaciones  -->
	                        </div>
	                        <div class="dropdown-menu-notif-more">
	                            <a href="#">Ver más</a>
	                        </div>
	                    </div>
	                </div>
					<!-- Mensajes -->
	                <div class="dropdown dropdown-notification messages">
						<!-- Ícono mensaje-->
	                    <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                    </a>
						<!-- Estructura del menú de mensajes -->
	                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                        <div class="dropdown-menu-messages-header">
	                            <ul class="nav" role="tablist">
	                                <li class="nav-item">
	                                    <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Mensajes
	                                            <span class="label label-pill label-danger">8</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="tab-content">
	                        	<div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                <div class="dropdown-menu-messages-list">
										<!-- Estrucuta de mensaje -->
	                                    <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="<?php $help->publicURL(); ?>img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">quien mabnda</span>
	                                            <span class="mess-item-txt">info</span>
	                                    </a>
	                            </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">Ver más</a>
	                        </div>
	                    </div>
	                </div>
						<!-- Perfil -->
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <?php if($usuarios->getFoto()){ ?>
										<img src="<?php $help->publicURL(); ?>img/<?php echo $usuarios->getFoto(); ?>" alt="">
									<?php }else{ ?>
										<img src="<?php $help->publicURL(); ?>img/avatar-2-64.png" alt="">
									<?php } ?>
								
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="..\Perfil\"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Configuraciones</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="../Logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesión</a>
	                        </div>
	                    </div>
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	            </div>
				<!-- Parte de a lado del menú -->
	            <div class="mobile-menu-right-overlay"></div>
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	</div><!--.container-fluid-->
</header><!--.site-header-->