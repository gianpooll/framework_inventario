<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-4 m-auto">
				<div class="card">
					<div class="text-center card-header bg-black text-white">
						<h3>Editar Usuario</h3>
					</div>
					<div class="card-body">
						<form action="<?php echo URL_HOST . 'usuarios/editUsuario' ?>" method="post">
						<input type="text" name="id" id="id" class="form-control form-control-sm" value="<?php echo $datos['usuario_id'] ?>" autofocus autocomplete="off" hidden>
							<div class="mb-2">
								<label for="nombre" class="form-label">Nombre:</label>
								<input type="text" name="nombre" id="nombre" class="form-control form-control-sm" value="<?php echo $datos['nombre'] ?>" autofocus autocomplete="off">
							</div>
							<div class="mb-2">
								<label for="documento" class="form-label">Documento:</label>
								<input type="text" name="documento" id="documento" class="form-control form-control-sm" value="<?php echo $datos['documento'] ?>" autocomplete="off">
							</div>
							<div class="mb-2">
								<label for="usuario" class="form-label">Usuario:</label>
								<input type="text" name="usuario" id="usuario" class="form-control form-control-sm" value="<?php echo $datos['usuario'] ?>" autocomplete="off">
							</div>
							<div class="mb-3">
								<label for="estado" class="form-label">Estado Usuario:</label>
								<select id="estado" name="estado" class="form-select form-select-sm">
									<option selected value="<?php echo $datos['estado'] ?>"><?php echo $datos['estado'] ?></option>
									<option value="Activo">Activo</option>
									<option value="Inactivo">Inactivo</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="tipo" class="form-label">Tipo de Usuario:</label>
								<select id="tipo" name="tipo" class="form-select form-select-sm">
									<option selected value="<?php echo $datos['tipo'] ?>"><?php echo $datos['tipo'] ?></option>
									<option value="Administrador">Administrador</option>
									<option value="Supervisor">Supervisor</option>
									<option value="Analista">Analista</option>
								</select>
							</div>
							<div class="mb-2">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="<?php echo URL_HOST . 'usuarios' ?>" type="button" class="btn btn-secondary">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once URL_APP . "/views/inc/footer.php"; ?>