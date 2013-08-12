<?php
$this->set( 'title_for_layout', "Servicio de Backup :: Inicio" );
$this->Html->addCrumb( 'Servicios' );
$this->Html->addCrumb( $datos['Servicio']['nombre'] );
?>
    <h2><?php echo $datos['Servicio']['nombre']; ?></h2>
<div class="row-fluid">

    <div class="span6 well">
        <h3>Datos del servicio</h3>
        <b>Nombre:</b>&nbsp;<?php echo $datos['Servicio']['nombre']; ?><br />
        <b>Descripcion:</b>&nbsp;<?php if( $datos['Servicio']['descripcion'] != 'NULL' ) { echo $datos['Servicio']['descripcion']; } ?><br />
        <b>Precio de base:</b>&nbsp;$&nbsp;<?php echo $datos['Servicio']['precio_base']; ?><br />
    </div>

    <div class="span6 well">
        <h3>Configuraci&oacute;n del servicio</h3>
        Utilice los siguientes c&oacute;digos en la configuración del programa para configurar el backup remoto.<br />
        <br />
        <b>N&uacute;mero de cliente:</b>&nbsp;<?php echo $datos['ServicioBackup']['id_cliente']; ?><br />
        <b>C&oacute;digo:</b>&nbsp;<?php echo $datos['ServicioBackupUsuario']['codigo']; ?><br />
    </div>

</div>

<div class="row-fluid">

    <div class="span12">
        <div class="well">
            <h3>Historial</h3>
            <?php
              $usado_espacio = $datos['ServicioBackupUsuario']['espacio'];
              $usado_cantidad = $datos['ServicioBackupUsuario']['cantidad'];
              $disponible = $datos['ServicioBackup']['limite_espacio'] - $usado_espacio;
              $pespacio = ($usado_espacio*100)/$datos['ServicioBackup']['limite_espacio'];
              $pcantidad = round( ($usado_cantidad*100)/$datos['ServicioBackup']['limite_cantidad'], 2 );
            ?>
            <?php if( $datos['ServicioBackup']['limite_cantidad'] > 1000 ) { ?>
                <b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de ilimitados disponibles- <?php echo $pcantidad; ?>% usado<br />
            <?php } else { ?>
                <b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de <?php echo $datos['ServicioBackup']['limite_cantidad']; ?> disponibles- <?php echo $pcantidad; ?>% usado<br />
            <?php } ?>
            <div class="progress progress-primary progress-striped active">
                <div class="bar"  style="width: <?php echo intval( $pcantidad ); ?>%;"></div>
            </div>
            <br />
            <b>Cantidad de espacio disponible:</b>&nbsp;<?php echo $this->Number->toReadableSize( $disponible ); ?> de <?php echo $this->Number->toReadableSize( $datos['ServicioBackup']['limite_espacio'] ); ?> disponibles - <?php echo number_format( $pespacio ); ?>% usado<br />
            <div class="progress progress-info progress-striped active">
                <div class="bar" style="width: <?php echo intval( $pespacio ); ?>%;"></div>
            </div>
            <br />
            <div class="btn-group">
                <?php //echo $this->Html->tag( 'a', 'Conseguir más espacio', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });',  'class' => 'btn btn-primary' ) ); ?>
                <?php echo $this->Html->link( 'Ver Histórico', array( 'controller' => 'backups', 'action' => 'historial', $datos['ServicioBackup']['id_servicio_backup'], $datos['ServicioBackup']['id_cliente'], $datos['ServicioBackup']['id_servicio'] ), array( 'class' => 'btn btn-success') ); ?>
            </div>
        </div>

    </div>

</div>

<br />
<!--
<div>
	<b>Ayuda:</b>&nbsp; ¿Como realizo un backup?<br />
	<?php echo $this->Html->tag( 'a', 'Haga click aqui para obtener el plugin necesario', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });' ) ); ?>
</div>
<div style="display: none;" title="No implementado" id="dialogo">Esta caracteristica todavía no se encuentra implementada</div> -->
