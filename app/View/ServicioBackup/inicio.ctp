<?php
$this->set( 'title_for_layout', "Servicio de Backup :: Inicio" );
?>
<script>
	$(function() {
		$("#resumen").accordion({ autoHeight: false });
		$("a", "#historial").button();
		$("a", "#codigos").button();
	});
</script>
<h2><?php echo $datos['Servicio']['nombre']; ?></h2>
<div id="resumen">
	<h3><a href="#">Historial</a></h3>
	<div id="historial">
		<?php
		  $usado_espacio = $datos['ServicioBackupUsuario']['espacio'];
		  $usado_cantidad = $datos['ServicioBackupUsuario']['cantidad'];
		  $disponible = $datos['ServicioBackup']['limite_espacio'] - $usado_espacio;
		  $unidad = "Kb";
		  $pespacio = ($usado_espacio*100)/$datos['ServicioBackup']['limite_espacio'];
		  $pcantidad = round( ($usado_cantidad*100)/$datos['ServicioBackup']['limite_cantidad'], 2 );
		  if( $disponible > 1023 ) {
		  		$unidad = "Mb";
			  	$disponible = $disponible/1024;
		  }
		  if( $disponible > 1023 ) {
		  		$unidad = "Gb";
			  	$disponible = $disponible/1024;
		  }
		  $disponible = round( $disponible, 3 );		  
		?>
		<?php if( $datos['ServicioBackup']['limite_cantidad'] > 1000 ) { ?>
			<b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de ilimitados disponibles- <?php echo $pcantidad; ?>% usado<br />
		<?php } else { ?>
			<b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de <?php echo $datos['ServicioBackup']['limite_cantidad']; ?> disponibles- <?php echo $pcantidad; ?>% usado<br />
		<?php } ?>
		<div id="uso-cantidad"></div><br />
		<script>$(function(){ $( "#uso-cantidad" ).progressbar({ value: <?php echo intval( $pcantidad ); ?> } ); });</script>
		<b>Cantidad de espacio disponible:</b>&nbsp;<?php echo number_format( $disponible )." ".$unidad; ?> de <?php echo $datos['ServicioBackup']['limite_espacio']/1024/1024; ?> Gb disponibles - <?php echo number_format( $pespacio ); ?>% usado<br />
		<div id="uso-disco"></div><br />
		<script>$(function(){ $( "#uso-disco" ).progressbar({ value: <?php echo intval( $pespacio ); ?> } ); });</script>
		<?php echo $this->Html->tag( 'a', 'Conseguir mas espacio', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });' ) ); ?>
		<?php echo $this->Html->link( 'Ver Historico', array( 'controller' => 'backups', 'action' => 'historial', $datos['ServicioBackup']['id_servicio_backup'], $datos['ServicioBackup']['id_cliente'] ) ); ?>
	</div>
	<h3><a href="#">Datos del servicio</a></h3>
	<div id="#datoservicio">
		<b>Nombre:</b>&nbsp;<?php echo $datos['Servicio']['nombre']; ?><br />
		<b>Descripcion:</b>&nbsp;<?php if( $datos['Servicio']['descripcion'] != 'NULL' ) { echo $datos['Servicio']['descripcion']; } ?><br />
		<b>Precio de base:</b>&nbsp;$&nbsp;<?php echo $datos['Servicio']['precio_base']; ?><br />
	</div>
	<h3><a href="#">Configuraci&oacute;n del servicio</a></h3>
	<div id="codigos">
		Utilice los siguientes codigos en la configuración del programa para configurar el backup remoto.<br />
		<?php echo $this->Html->tag( 'a', 'Ayuda', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });' ) ); ?><br /><br />
		<b>N&uacute;mero de cliente:</b>&nbsp;<?php echo $datos['ServicioBackup']['id_cliente']; ?><br />
		<b>C&oacute;digo:</b>&nbsp;<?php echo $datos['ServicioBackupUsuario']['codigo']; ?><br />
	</div>
</div>
<br />
<div>
	<b>Ayuda:</b>&nbsp; ¿Como realizo un backup?<br />
	<?php echo $this->Html->tag( 'a', 'Haga click aqui para obtener el plugin necesario', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });' ) ); ?>
</div>
<div style="display: none;" title="No implementado" id="dialogo">Esta caracteristica todavía no se encuentra implementada</div>
