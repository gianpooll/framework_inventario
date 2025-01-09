<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-4 m-auto">
				<div class="card">
					<div class="text-center card-header bg-black text-white">
						<h3>Agregar Usuario</h3>
					</div>
					<div class="card-body">
						<form action="<?php echo URL_HOST . 'usuarios/agregarUsuario' ?>" method="post">
							<div class="mb-2">
								<label for="nombre" class="form-label">Nombre:</label>
								<input type="text" name="nombre" id="nombre" class="form-control form-control-sm" placeholder="Nombre:" autofocus autocomplete="off">
							</div>
							<div class="mb-2">
								<label for="documento" class="form-label">Documento:</label>
								<input type="text" name="documento" id="documento" class="form-control form-control-sm" placeholder="Documento:" autocomplete="off">
							</div>
							<div class="mb-2">
								<label for="usuario" class="form-label">Usuario:</label>
								<input type="text" name="usuario" id="usuario" class="form-control form-control-sm" placeholder="Usuario:" autocomplete="off">
							</div>
							<div class="mb-2">
								<label for="pass" class="form-label">Contraseña:</label>
								<input type="password" name="pass" id="pass" class="form-control form-control-sm" placeholder="Contraseña:" autocomplete="off">
							</div>
							<div class="mb-3">
							<label for="pass" class="form-label">Tipo de Usuario:</label>
								<select id="tipo" name="tipo" class="form-select form-select-sm">
									<option selected>Escoja una opcion</option>
									<option value="Administrador">Administrador</option>
									<option value="Supervisor">Supervisor</option>
									<option value="Analista">Analista</option>
								</select>
							</div>
							<div class="mb-2 text-center">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="<?php echo URL_HOST . 'usuarios' ?>" type="button" class="btn btn-secondary">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
				<div class="text-center">
					<?php if ($datos != []) { ?>
						<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
							<strong>Hubo un error!</strong> <span><?php echo $datos['error'] ?></span>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php require_once URL_APP . "/views/inc/footer.php"; ?>