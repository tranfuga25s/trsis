<?php
$this->set( 'title_for_layout', "Historial de backups" );
$this->Html->addCrumb( 'Servicios' );
$this->Html->addCrumb( 'Historico de Backups' );
?>
<h2>Historicos de backups realizados</h2>
<div class="row-fluid">
    <div class="span12 btn-group">
        <?php echo $this->Html->link( 'Volver', array( 'controller' => 'ServicioBackup', 'action' => 'inicio', $id_usuario, $id_servicio ), array( 'class' => 'btn btn-primary') ); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php
        if( count( $historial ) <= 0 ) {
            echo "Usted todavía no realizó ningún backup";
        } else {
            $numero = 1;
        ?>
        <p><b>Cantidad de items actualmente:</b> <?php echo count( $historial ); ?></p>
        <table class="table table-bordered table-hover table-striped">
            <tbody>
                <th>Número</th>
                <th>Fecha y hora</th>
                <th>Tama&ntilde;o</th>
                <th>Acciones</th>
                <?php foreach( $historial as $b ) : ?>
                <tr>
                    <td>#<?php echo $numero; ?></td>
                    <td><?php echo $this->Time->nice( $b['Backup']['fecha'] ); ?></td>
                    <td><?php echo $this->Number->toReadableSize( $b['Backup']['tamano'] ); ?></td>
                    <td>
                        <div class="btn-group">
                        <?php echo $this->Html->link( 'Descargar', array( 'action' => 'descargar', $b['Backup']['id_backup'], $id_servicio_backup, $id_usuario ), array( 'class' => 'btn btn-primary' ) ); ?>
                        <?php echo $this->Html->link( 'Eliminar', array( 'action' => 'delete', $b['Backup']['id_backup'], $id_servicio_backup, $id_usuario ), array( 'class' => 'btn btn-danger' )  ); ?>
                        </div>
                    </td>
                </tr>
                <?php $numero+=1; endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>