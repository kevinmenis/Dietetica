<!--  ../html/NuevaVenta.php  -->

<?php 

	require '../html/MenuVentas.php' ;
	require '../html/Partials/Header.php' ;
 
?>

		<?php 
			$dia = ( date('d') ) ;
			$mes = ( date('m') ) ;
			$anio = ( date('Y') ) ;
		?>

		<br/>
		<div class="d-flex justify-content-center"> 
			<div class="card text-center" style="width: 45rem;">
				<h4 class="card-header">Nueva venta</h4>
				<div class="card-body">
					<form action="" method="post" onsubmit="return ValidarVenta();">
						<div class="form-group row">
							<label for="inputFecha" class="col-sm-2 col-form-label h6">Fecha</label>
							<div class="col-sm-7">
								<input type="date" name="fecha" value="<?= $anio ?>-<?= $mes ?>-<?= $dia ?>" class="form-control" id="inputFecha">
							</div>
						</div>
						<div class="form-group row">
							<label for="venta" class="col-sm-2 col-form-label h6">Venta</label>
							<div class="col-sm-7">
								<input type="number" name="venta" autofocus="" class="form-control" id="venta">
							</div>
						</div>
						<br/>			
						<input type="submit" name="ingresar" value="Ingresar" class="btn btn-success" style="padding: 10px 80px;">
					</form>
				</div>
			</div>
		</div>

		<br/><br/>		
		
		<!--  SI VENTAS NO ES NULO MOSTRAR TABLA  -->
		<?php if ( $this->ventas ): ?>
			<div class="d-flex justify-content-center"> 
				<div class="card" style="width: 45rem;">	
				<h4 class="card-header text-center">Ventas del <?= $dia ?>/<?= $mes ?>/<?= $anio ?></h4>	
					<div class="card-body">	
						<div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">	
							<div class="p-2 bd-highlight">
								<table class="table table-bordered table-sm tabe-hover text-center" style="width: 17rem;">
									<thead class="thead-light">
										<tr>
											<th colspan="2">Ventas</th>
										</tr>
									</thead>
									<?php foreach ( $this->ventas as $v ): ?>
										<tbody>
											<tr>  
												<td>$<?= $v['precio'] ?></td> 
												<td><a href="../controllers/eliminar-venta.php?id=<?= $v['id_venta'] ?>"><span class="icon-trash" style="color: #D84323;"></span></a></td>
											</tr>
										</tbody>
									<?php endforeach ?>	
								</table>
							</div>	
							<div class="p-2 bd-highlight">
								<table class="table table-sm table-bordered text-center" style="width: 17rem;">
									<tr>
										<thead class="thead-light">
											<th>Total</th>
										</thead>
										<tbody>
											<td><?= $this->total['precio'] ?></td>
										</tbody>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>	


<?php 

	require '../html/Partials/Footer.php' ;
 
?>