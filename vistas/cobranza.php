<?php
/*
Algoritmo:
- Traer pólizas activas (al menos 1 pago, que no estén canceladas o completadas)
- Ubicar la fecha mmínima de inicio de las pólizas, para armar el grid
- Hacer una tabla con la póliza, el RFC, el nombre del contratante y los meses desde la fecha mínima hasta el día de hoy
- Armar la tabla con los datos de las pólizas, sumar los pagos del mes y contar la cantidad de pagos por mes
- Identificar las pólizas a las que les faltan pagos y ponerlas al inicio
*/
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h2 class="h2">Cobranza</h2>
	<div class="btn-toolbar mb-2 mb-md-0">
		<!--
		<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
			<i class="fa fa-calendar"></i> Filtrar
		</button>
		-->
	</div>
</div>