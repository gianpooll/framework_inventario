<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-4 m-auto">
				<div class="card">
					<div class="text-center card-header bg-black text-white">
						<h3>Agregar Empresa</h3>
					</div>
					<div class="card-body">
						<form action="<?php echo URL_HOST . 'empresas/guardarEmpresa' ?>" method="post">
							<div class="mb-2">
								<label for="nombre" class="form-label">Nombre Empresa:</label>
								<input type="text" name="nombre" id="nombre" class="form-control form-control-sm" placeholder="Nombre:" autofocus autocomplete="off">
							</div>
							<div class="mb-2 text-center" style="margin-top: 20px;">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="<?php echo URL_HOST . 'empresas' ?>" type="button" class="btn btn-secondary">Cancelar</a>
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