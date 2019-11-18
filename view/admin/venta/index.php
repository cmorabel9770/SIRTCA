<!DOCTYPE html>
<html lang="en">
<head>
	<?php include VISTA_RUTA . "admininclude/head.php"?>
</head>
<body>
	<div id="wrapper">
		<?php include VISTA_RUTA . "admininclude/menu.php"?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Asignación de Rutas | <a href="<?php url('venta/nuevo')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nueva Asignación</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Ruta</th>
						<th>Vehiculo</th>
						<th>Conductor</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>

			<!--TERMINO CONTENIDO -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include VISTA_RUTA . "admininclude/scripts.php"?>
</body>

</html>