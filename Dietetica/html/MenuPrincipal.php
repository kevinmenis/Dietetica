<?php 

	require '../html/Partials/Header.php' ;

?>
		<header>
			<nav class="menu">
				<ul>					
					<li><a href="../controllers/menu-ventas.php">Ventas <span class="icon-down-open"></span></a>
						<ul>
							<li><a href="../controllers/nueva-venta.php">Nueva venta</a></li>
							<li><a href="../controllers/lista-ventas-del-dia.php">Ventas del dia</a></li>
							<li><a href="../controllers/lista-ventas-del-mes.php">Ventas diaraias del mes</a></li>
							<li><a href="../controllers/lista-ventas-del-año.php">Ventas mensuales del año</a></li>
						</ul>												
					</li>
					<li><a href="../controllers/menu-estadisticas.php">Estadísticas<span class="icon-down-open"></span></a>
						<ul>
							<li><a href="../controllers/estadistica-mes.php">Estadistica del mes</a></li>
							<li><a href="../controllers/estadistica-año.php">Estadistica del año</a></li>
						</ul>
					</li>
				</ul>				
			</nav>	
		</header>   

<?php 

	require '../html/Partials/Footer.php' ;

?>