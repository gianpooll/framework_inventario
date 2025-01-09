<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>
<div class="container mt-3 text-center">
	<h1>Bienvenidos</h1>
	<p>Este es un proyecto de ejemplo para mostrar como se puede trabajar con PHP y POO</p>
	<div class="row row-cols-1 row-cols-md-5 s-2">
		<div class="col">
			<div class="card">
				<img src="<?php echo URL_HOST ?>/public/img/img_config.png" class="imagen mx-auto" alt="Configuración">
				<div class="card-body">
					<h5 class="card-title">Configuración</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="<?php echo URL_HOST ?>/usuarios">Usuarios</a></li>
						<li class="list-group-item"><a href="<?php echo URL_HOST ?>/Empresas">Propietarios</a></li>
						<li class="list-group-item"><a href="<?php echo URL_HOST ?>/Ciudades">Ciudades</a></li>
						<li class="list-group-item"><a href="<?php echo URL_HOST ?>/Barrios">Barrios</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-center">
				<img src="<?php echo URL_HOST ?>/public/img/img_poste.png" class="imagen mx-auto" alt="Inventario Postes">
				<div class="card-body">
					<h5 class="card-title">Inventario Postes</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#">Agregar Poste</a></li>
						<li class="list-group-item"><a href="#">Ver Registros</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-center">
				<img src="<?php echo URL_HOST ?>/public/img/img_camaras.png" class="imagen mx-auto" alt="Inventario Camaras">
				<div class="card-body">
					<h5 class="card-title">Inventario Camaras</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#">Agregar Camara</a></li>
						<li class="list-group-item"><a href="#">Ver Registros</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-center">
				<img src="<?php echo URL_HOST ?>/public/img/img_predios.png" class="imagen mx-auto" alt="Inventario Predios">
				<div class="card-body">
					<h5 class="card-title">Censo de Predios</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#">Agregar Predio</a></li>
						<li class="list-group-item"><a href="#">Ver Registros</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-center">
				<img src="<?php echo URL_HOST ?>/public/img/img_reportes.png" class="imagen mx-auto" alt="Reportes">
				<div class="card-body">
					<h5 class="card-title">Reportes</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#">Reporte de Postes</a></li>
						<li class="list-group-item"><a href="#">Reportes de Camaras</a></li>
						<li class="list-group-item"><a href="#">Reportes de Predios</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php require_once URL_APP . "/views/inc/footer.php"; ?>