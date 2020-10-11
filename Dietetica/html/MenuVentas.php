<?php 

	require '../html/Partials/Header.php' ;

?>				
		<header>
			<nav class="menu">
				<ul>	
					<li><a href="../controllers/menu-principal.php"><span class="icon-home"></span> Inicio</a></li>

					<li><a href="../controllers/nueva-venta.php">Nueva venta</a></li>

					<li><a href="../controllers/lista-ventas-del-dia.php">Ventas del dia</a></li>

					<li><a href="../controllers/lista-ventas-del-mes.php">Ventas del mes</a></li>	

					<li><a href="../controllers/lista-ventas-del-año.php">Ventas mensuales del año</a></li>
				</ul>				
			</nav>	
		</header>

<?php 
	
	require '../html/Partials/Footer.php' ;

?>