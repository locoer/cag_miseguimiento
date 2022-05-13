<?php
$asesor = $GLOBALS["sitio"]->usuario_activo();
$reportes = new Reportes ($asesor);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2"><?php echo $this->titulo; ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button class="btn btn-sm btn-outline-secondary">Share</button>
			<button class="btn btn-sm btn-outline-secondary">Export</button>
		</div>
		<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
			<i class="fa fa-calendar"></i> This week
		</button>
	</div>
</div>
<div class="col-xs-12">
	<h2>Prima Pagada</h2>
	<p>Desde <?php echo strftime("%e de %B de %G", strtotime($reportes->desde())); ?> - Hasta <?php echo strftime("%e de %B de %G", strtotime($reportes->hasta())); ?></p>
	<div class="row">
		<div class="col">
			<h4>Datos Vida</h4>
			<ul>
				<?php if ( $prima_nueva_ingresada = $reportes->prima_nueva_ingresada("vida_crm") ) { ?>
				<li><b>Prima Nueva Ingresada: </b><?php echo money_format("%.2n", $prima_nueva_ingresada); ?> </li>
				<?php } ?>
				<?php if ( $prima_nueva_emitida = $reportes->prima_nueva_emitida("vida_crm") ) { ?>
				<li><b>Prima Nueva Emitida: </b><?php echo money_format("%.2n", $prima_nueva_emitida); ?> </li>
				<?php } ?>
				<?php if ( $prima_nueva_anualizada = $reportes->prima_nueva_anualizada("vida") ) { ?>
				<li><b>Prima Nueva Anualizada: </b><?php echo money_format("%.2n", $prima_nueva_anualizada); ?> </li>
				<?php } ?>
				<?php if ( $prima_pagada_nueva = $reportes->prima_pagada_nueva("vida") ) { ?>
				<li><b>Prima Pagada 1er Año: </b><?php echo money_format("%.2n", $prima_pagada_nueva); ?> </li>
				<?php } ?>
				<?php if ( $prima_pagada_renovacion = $reportes->prima_pagada_renovacion("vida") ) { ?>
				<li><b>Prima Pagada Renovación: </b><?php echo money_format("%.2n", $prima_pagada_renovacion); ?> </li>
				<?php } ?>
			</ul>
		</div>
		<div class="col">
			<h4>Datos GMM</h4>
			<ul>
				<?php if ( $prima_nueva_ingresada = $reportes->prima_nueva_ingresada("gmm_crm") ) { ?>
				<li><b>Prima Nueva Ingresada: </b><?php echo money_format("%.2n", $prima_nueva_ingresada); ?> </li>
				<?php } ?>
				<?php if ( $prima_nueva_emitida = $reportes->prima_nueva_emitida("gmm_crm") ) { ?>
				<li><b>Prima Nueva Emitida: </b><?php echo money_format("%.2n", $prima_nueva_emitida); ?> </li>
				<?php } ?>
				<?php if ( $prima_nueva_anualizada = $reportes->prima_nueva_anualizada("gmm") ) { ?>
				<li><b>Prima Nueva Anualizada: </b><?php echo money_format("%.2n", $prima_nueva_anualizada); ?> </li>
				<?php } ?>
				<?php if ( $prima_pagada_nueva = $reportes->prima_pagada_nueva("gmm") ) { ?>
				<li><b>Prima Pagada 1er Año: </b><?php echo money_format("%.2n", $prima_pagada_nueva); ?> </li>
				<?php } ?>
				<?php if ( $prima_pagada_renovacion = $reportes->prima_pagada_renovacion("gmm") ) { ?>
				<li><b>Prima Pagada Renovación: </b><?php echo money_format("%.2n", $prima_pagada_renovacion); ?> </li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div>
		<?php 
		/*
		if ( $polizas_activas = $reportes->polizas_activas("vida") ) {
			foreach( $polizas_activas as $fila => $datos ) {
				echo "<p>";
				print_r($datos);
				echo "</p>";
			}
			$prima_nueva_ingresada = $reportes->prima_nueva_anualizada("vida");
			echo "<h1>$prima_nueva_ingresada</h1>";
		} 
		*/	
		?>
	</div>
</div>