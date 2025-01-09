<?php require_once URL_APP . "/views/inc/header.php"; ?>
<?php require_once URL_APP . "/views/inc/navbar.php"; ?>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div>
				<div class="text-center ">
					<h1 class="text-primary">Usuarios</h1>
				</div>
				<br>
				<a name="" id="" class="btn btn-sm btn-success" style="margin-bottom: 10px;" href="<?php echo URL_HOST ?>usuarios/nuevo_usuario" role="button">Agregar Usuario <i class="bi bi-person-plus-fill"></i></a>
				<div class="table-responsive-sm">
					<table class="table table-hover text-center table-bordered table-sm">
						<thead>
							<tr class="table-dark">
							<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Documento</th>
								<th scope="col">Usuario</th>
								<th scope="col">Estado</th>
								<th scope="col">Tipo</th>
								<th colspan="2" scope="col">Aciones</th>
							</tr>
						</thead>
						<tbody class="table-secondary">
							<?php foreach ($datos as $usuario) : ?>
								<tr>
									<td><?php echo $usuario->num; ?></td>
									<td><?php echo $usuario->nombre; ?></td>
									<td><?php echo $usuario->documento; ?></td>
									<td><?php echo $usuario->usuario; ?></td>
									<td>
										<?php if ($usuario->estado == 'Activo') { ?>
											<a href="<?php echo URL_HOST . "usuarios/editarEstado/" . $usuario->usuario_id ?>"><h5><span class="badge bg-success"><?php echo $usuario->estado; ?></span></h5></a>
										<?php }else { ?>
											<a href="<?php echo URL_HOST . "usuarios/editarEstado/" . $usuario->usuario_id ?>"><h5><span class="badge bg-danger"><?php echo $usuario->estado; ?></span></h5></a>
										<?php } ?>
										
									</td>
									<td><?php echo $usuario->tipo; ?></td>
									<td>
										<a class="btn btn-sm btn-warning" style="color: #052AA7"; href="<?php echo URL_HOST . 'usuarios/editarUsuario/' . $usuario->usuario_id; ?>"><span>Editar <i class="bi bi-pencil-fill"></i></span></a>
									</td>
									<td>
											<a class="btn btn-sm btn-danger" href="<?php echo URL_HOST . 'usuarios/eliminarUsuario/' . $usuario->usuario_id; ?>"><span>Eliminar <i class="bi bi-trash-fill"></i></span></a>
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