<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div>
				<div class="text-center">
					<h1 class="text-primary">Listado de empresas</h1>
				</div>
				<br>
				<a class="btn btn-sm btn-success" style="margin-bottom: 10px;" href="<?php echo URL_HOST ?>empresas/nuevaEmpresa" role="button">Agregar Empresa <i class="bi bi-person-plus-fill"></i></a>
				<div class="table-responsive-sm">
					<table class="table table-hover text-center table-bordered table-sm">
						<thead>
							<tr class="table-dark">
							<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Estado</th>
								<th colspan="2" scope="col">Aciones</th>
							</tr>
						</thead>
						<tbody class="table-secondary">
							<?php foreach ($datos as $emp) : ?>
								<tr>
									<td><?php echo $emp->num; ?></td>
									<td><?php echo $emp->nombre_empresa; ?></td>
									<td>
										<?php if ($emp->estado_empresa == 'Activo') { ?>
											<a href=""><span class="badge bg-success"><?php echo $emp->estado_empresa; ?></span></a>
										<?php }else { ?>
											<h5><span class="badge bg-danger"><?php echo $emp->estado_empresa; ?></span></h5>
										<?php } ?>										
									</td>
									<td>
										<a class="btn btn-sm btn-warning" style="color: #052AA7"; href="<?php echo URL_HOST . 'empresas/editarEmpresa/' . $emp->id_empresa; ?>"><span>Editar <i class="bi bi-pencil-fill"></i></span></a>
									</td>
									<td>
											<a class="btn btn-sm btn-danger" href="<?php echo URL_HOST . 'empresas/eliminarEmpresa/' . $emp->id_empresa; ?>"><span>Eliminar <i class="bi bi-trash-fill"></i></span></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php require_once URL_APP . "/views/inc/footer.php"; ?>