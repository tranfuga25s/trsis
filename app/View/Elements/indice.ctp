<?php
/*!
 * Elemento para mostrar el menu de la ayuda
 */
 ?>
 <script>
 	var datos = [
 		{ label: "Inicio",
 			children: [
 				{ label: "Base  de datos" },
 				{ label: "Actualizar" },
 				{ label: "Backups" },
 				{ label: "Preferencias" },
 				{ label: "Salir" },
 				{ label: "Manejo" }
 			] },
 		{ label: "Plugins",
 		    children: [
 		    	{ label: "Clientes" },
 		    	{ label: "Proveedores" },
 		    	{ label: "Compras" },
 		    	{ label: "Presupuestos" },
 		    	{ label: "Ventas" },
 		    	{ label: "Recibos" },
 		    	{ label: "Servicios" },
 		    	{ label: "Caja" },
 		    	{ label: "Productos" },
 		    	{ label: "Gastos" },
 		    	{ label: "Cta Cte" }
 	        ] },
 		{ label: "Especificos",
 			children: [
 				{ label: "HiComp" },
 				{ label: "Digifauno" },
 				{ label: "BSComputacion" }
 		 	] } 		
 	];
 	$( function() {
 		$("#menu").tree({ data: datos });
 	});
 </script>
<div id="menu"></div>