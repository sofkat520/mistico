<?php
require_once "clases/Conexion.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$db = new conexion();
// Realizamos la consulta para obtener el tour según el ID
$resultado_tour = $db->queryselect("SELECT * FROM tour WHERE id_tour='$id' AND estado='1'");
$db->close();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title><?php echo $resultado_tour ? htmlspecialchars($resultado_tour['titulo']) . " - Cusco Mistico Travel" : "Tour no encontrado"; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
        <!-- Medipro CSS & Custom Style -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
	
		<!-- Header Area (Exactamente el mismo de tu Home) -->
		<header class="header">
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<ul class="top-link">
								<li><i class="fa fa-map-marker"></i><a href="#"> Calle Nueva Alta Nro. 733</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<ul class="top-contact">
								<li><i class="fa fa-mobile fa-lg"></i>+51 942974361 | +51 939170633</li>
								<li><i class="fa fa-envelope"></i><a href="#">cuscomisticotravel@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#"></a>
								</div>
								<div class="mobile-nav"></div>
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="index.php">Inicio</a></li>
											<li><a href="cusco-mistico-travel.html">Nosotros </a></li>
											<li><a href="paquetes-turisticos-cusco-peru.html">Paquetes </a></li>
											<li><a href="#">Tours <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="tours-lima.html">Lima</a></li>
													<li><a href="tours-paracas-ica-nazca.html">Paracas Ica Nazca</a></li>
													<li><a href="tours-arequipa.html">Arequipa</a></li>
													<li><a href="tours-puno.html">Puno</a></li>
													<li><a href="tours-cusco.html">Cusco</a></li>
													<li><a href="tours-manu.html">Manu</a></li>
													<li><a href="tours-puerto-tambopata.html">Tambopata</a></li>
													<li><a href="tours-iquitos.html">Iquitos</a></li>
													<li><a href="tours-trujillo-chiclayo.html">Trujillo Chiclayo</a></li>
													<li><a href="tours-internacionales.html">Destinos Internacionales</a></li>
												</ul>
											</li>
											<li><a href="contactos.html">Contactos</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a target="_blank" href="https://api.whatsapp.com/send?phone=51942974361&text=Hola%20necesito%20informacion%20de%20tours" class="btn">Consultas <i class="fa fa-whatsapp fa-lg"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->

        <!-- Contenido Principal del Tour -->
        <div class="container" style="padding-top:50px; padding-bottom:70px;">
            <a href="index.php" class="btn" style="margin-bottom: 20px;"><i class="fa fa-arrow-left"></i> Volver al inicio</a>

            <?php if (!$resultado_tour): ?>
                <div style="text-align:center; padding: 50px 0;">
                    <h2>Tour no encontrado</h2>
                    <p>El paquete que buscas no está disponible o no existe.</p>
                    <a href='index.php' class='btn' style='margin-top:15px;'>Ir al inicio</a>
                </div>
            <?php else: ?>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-6">
                        <img src="img/<?php echo htmlspecialchars($resultado_tour['imagen']); ?>" 
                             alt="<?php echo htmlspecialchars($resultado_tour['titulo']); ?>" 
                             style="width:100%; border-radius:8px; box-shadow: 0px 0px 15px rgba(0,0,0,0.1);">
                    </div>

                    <div class="col-md-6">
                        <h1 style="font-weight: 700; margin-bottom: 20px;"><?php echo htmlspecialchars($resultado_tour['titulo']); ?></h1>

                        <?php if (!empty($resultado_tour['duracion'])): ?>
                            <p style="font-size: 16px;"><i class="fa fa-clock-o" style="color: #28a745;"></i> <strong>Duración:</strong> <?php echo htmlspecialchars($resultado_tour['duracion']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($resultado_tour['precio'])): ?>
                            <p style="font-size: 18px; color: #333;"><i class="fa fa-money" style="color: #28a745;"></i> <strong>Precio:</strong> $<?php echo number_format($resultado_tour['precio'], 2); ?></p>
                        <?php endif; ?>

                        <p style="margin-top: 15px; line-height: 1.6;"><?php echo nl2br(htmlspecialchars($resultado_tour['descripcion'])); ?></p>

                        <?php if (!empty($resultado_tour['incluye'])): ?>
                            <h4 style="margin-top: 20px;">¿Qué incluye?</h4>
                            <ul style="list-style: none; padding-left: 0;">
                                <?php 
                                // Separa los elementos usando el corchete '[' tal como viene en tus datos de ejemplo
                                $items = explode('[', $resultado_tour['incluye']);
                                foreach ($items as $item): 
                                    if (trim($item) !== ''): 
                                ?>
                                    <li style="margin-bottom: 8px;"><i class="fa fa-check" style="color: #28a745; margin-right: 8px;"></i> <?php echo htmlspecialchars(trim($item)); ?></li>
                                <?php 
                                    endif; 
                                endforeach; 
                                ?>
                            </ul>
                        <?php endif; ?>

                        <div style="margin-top: 30px;">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=51942974361&text=Hola%20quiero%20reservar%20el%20tour%20<?php echo urlencode($resultado_tour['titulo']); ?>" class="btn" style="background: #28a745; color: #fff; padding: 12px 25px; border-radius: 4px; text-decoration: none;">
                                Reservar por WhatsApp <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

		<!-- Footer Area (Exactamente el mismo de tu Home) -->
		<footer id="footer" class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Nosotros</h2>
								<p>Nuestra experiencia y trayectoria en turismo receptivo nos hace una de las empresas peruanas y Cusqueñas líderes en nuestro campo.</p>
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Importante</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="políticas.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Políticas de Reservas</a></li>
											<li><a href="ficha.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Ficha Técnica</a></li>
											<li><a href="asistencia_medica.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Asistencia Médica</a></li>
											<li><a href="transporte.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Transporte </a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="datos.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Protección de Datos</a></li>
											<li><a href="mapa-ubicacion.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Mapa de Ubicación</a></li>
											<li><a href="recomendaciones.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Recomendaciones de Viaje</a></li>
											<li><a href="esnna.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Compromiso ESNNA</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>Cusco Mistico Travel</h2>
								<p>Calle Nueva Alta Nro. 733 | Cusco Perú.</p>
								<ul class="time-sidual">
									<li class="day"><i class="fa fa-mobile fa-lg"></i> Celular <span>+51 942974361 | 939170633</span></li>
									<li class="day"><i class="fa fa-envelope"></i> eMail <span>cuscomisticotravel@gmail.com</span></li>
									<li class="day"><i class="fa fa-envelope"></i> eMail <span>gerencia@cuscomisticotravel.com</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by <a href="#" target="_blank">WebSolutions</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ End Footer Area -->

        <!-- Scripts JS de la plantilla -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>