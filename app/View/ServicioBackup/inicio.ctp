<?php
$this->set( 'title_for_layout', "Servicio de Backup :: Inicio" );
$this->Html->addCrumb( 'Servicios' );
$this->Html->addCrumb( $datos['Servicio']['nombre'] );
?>
<h2><?php echo $datos['Servicio']['nombre']; ?></h2>
<div class="row">

    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Datos del servicio</h4></div>
            <ul class="list-group">
                <li class="list-group-item"><b>Nombre:</b>&nbsp;<?php echo $datos['Servicio']['nombre']; ?></li>
                <li class="list-group-item"><b>Descripcion:</b>&nbsp;<?php if( $datos['Servicio']['descripcion'] != 'NULL' ) { echo $datos['Servicio']['descripcion']; } ?></li>
                <li class="list-group-item"><b>Precio de base:</b>&nbsp;$&nbsp;<?php echo $datos['Servicio']['precio_base']; ?></li>
            </ul>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Configuracion del servicio</h4></div>
            <div class="panel-body">Utilice los siguientes c&oacute;digos en la configuración del programa para configurar el backup remoto.</div>
            <ul class="list-group">
                <li class="list-group-item"><b>N&uacute;mero de cliente:</b>&nbsp;<?php echo $datos['ServicioBackup']['id_cliente']; ?></li>
                <li class="list-group-item"><b>C&oacute;digo:</b>&nbsp;<?php echo $datos['ServicioBackupUsuario']['codigo']; ?></li>
            </ul>
        </div>
    </div>
    
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Historial</h3></div>
            
            <?php
              $usado_espacio = $datos['ServicioBackupUsuario']['espacio'];
              $usado_cantidad = $datos['ServicioBackupUsuario']['cantidad'];
              $disponible = $datos['ServicioBackup']['limite_espacio'] - $usado_espacio;
              $pespacio = ($usado_espacio*100)/$datos['ServicioBackup']['limite_espacio'];
              $pcantidad = round( ($usado_cantidad*100)/$datos['ServicioBackup']['limite_cantidad'], 2 );
            ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <?php if( $datos['ServicioBackup']['limite_cantidad'] > 1000 ) { ?>
                        <b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de ilimitados disponibles- <?php echo $pcantidad; ?>% usado<br />
                    <?php } else { ?>
                        <b>Cantidad de backups realizados:</b>&nbsp;<?php echo $usado_cantidad; ?> de <?php echo $datos['ServicioBackup']['limite_cantidad']; ?> disponibles- <?php echo $pcantidad; ?>% usado<br />
                    <?php } ?>
                </li>
                <li class="list-group-item">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo intval( $pcantidad ); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo intval( $pcantidad ); ?>%;"></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <b>Cantidad de espacio disponible:</b>&nbsp;<?php echo $this->Number->toReadableSize( $disponible ); ?> de <?php echo $this->Number->toReadableSize( $datos['ServicioBackup']['limite_espacio'] ); ?> disponibles - <?php echo number_format( $pespacio ); ?>% usado
                </li>
                <li class="list-group-item">                    
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo intval( $pespacio ); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo intval( $pespacio ); ?>%;"></div>
                    </div>
                </li>
            </ul>
            <div class="panel-footer text-right">
                <?php //echo $this->Html->tag( 'a', 'Conseguir más espacio', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });',  'class' => 'btn btn-primary' ) ); ?>
                <?php echo $this->Html->link( 'Ver Histórico', array( 'controller' => 'backups', 'action' => 'historial', $datos['ServicioBackup']['id_servicio_backup'], $datos['ServicioBackup']['id_cliente'], $datos['ServicioBackup']['id_servicio'] ), array( 'class' => 'btn btn-success') ); ?>
            </div>
        </div>

    </div>

</div>
<!--
<div>
	<b>Ayuda:</b>&nbsp; ¿Como realizo un backup?<br />
	<?php echo $this->Html->tag( 'a', 'Haga click aqui para obtener el plugin necesario', array( 'onclick' => '$("#dialogo").dialog({ modal: true, buttons: { "Cerrar": function() { $(this).dialog("close"); } } });' ) ); ?>
</div>
<div style="display: none;" title="No implementado" id="dialogo">Esta caracteristica todavía no se encuentra implementada</div> -->
