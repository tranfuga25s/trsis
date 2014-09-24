<?php
$this->set('title_for_layout', "Sus datos");
$this->Html->addCrumb('Panel de cliente');
?>
<h2>Panel de Control del cliente</h2>
<div class="row">

    
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Mis servicios</h4>
            </div>
            <div class="panel-body">
                <?php if (count($datos['ServiciosCliente']) > 0) { ?>
                    <p>Estos son los servicios que posee habilitados en nuestros sistemas web:</p>
                <?php } else { ?>
                    No posee ning&uacute;n servicio activado todav&iacute;a<br />
                <?php } ?>
            </div>
            <?php if( count( $datos['ServiciosCliente'] ) > 0 ) : ?>
            <ul class="list-group">
                <?php foreach ($datos['ServiciosCliente'] as $servicio) : ?>
                <li class="list-group-item">
                    <?php echo $this->Html->link( $servicios[$servicio['id_servicio']], array('controller' => 'ServicioBackup', 'action' => 'inicio', $datos['Usuario']['id_usuario'], $servicio['id_servicio']) );?>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <div class="panel-footer text-right">
                <?php echo $this->Html->link( 'Mas servicios', '#', array( 'class' => 'btn btn-default' ) ); ?>
            </div>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Mis cuentas</h4></div>
            <div class="panel-body">
                <?php if ($datos['Ctacte']['suspendida'] == true) : ?>
                    <div class="alert">Su cuenta corriente se encuentra suspendida!</div>
                <?php endif; ?>
                El estado de su cuenta se refleja a continuaci&oacute;n:
            </div>
            <ul class="list-group">
                <li class="list-group-item"><b>Saldo actual:</b>&nbsp;<?php echo $this->Number->currency($datos['Ctacte']['saldo'], "USD", array('before' => "$", 'thousands' => ".", 'decimals' => ',')); ?></li>
                <li class="list-group-item"><b>Vencimiento Pr&oacute;xima factura:</b>&nbsp;</li>
                <li class="list-group-item"><b>Monto de pr&oacute;xima factura:</b>&nbsp;</li>
            </ul>
            <div class="panel-footer">
                <div class="btn-group btn-group-justified">
                    <?php
                    echo $this->Html->link('Ver resumen de cuenta', array('controller' => 'Ctactes', 'action' => 'verCtaCte'), array('class' => 'btn btn-primary'));
                    echo $this->Html->link('Informar pago', '#', array('class' => 'btn btn-default'));
                    echo $this->Html->link('¿Problemas contables?', array('controller' => 'Contacto', 'action' => 'formulario'), array('class' => 'btn btn-info'));
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Mis datos</h3></div>
            <div class="panel-body">
                Aquí encontrara los datos que poseemos de usted:<br />
                <dl>
                    <dt>N&uacute;mero de cliente:</dt>
                    <dd><?php echo $datos['Usuario']['id_usuario']; ?>&nbsp;</dd>

                    <dt>Direcci&oacute;n de contacto:</dt>
                    <dd><?php echo $datos['Cliente']['calle'] . ' ' . $datos['Cliente']['numero'] . ' ' . $datos['Cliente']['piso'] . $datos['Cliente']['depto'] . ' - ' . $datos['Cliente']['ciudad']; ?>&nbsp;</dd>

                    <dt>Email:</dt>
                    <dd><?php echo h($datos['Cliente']['email']); ?>&nbsp;</dd>
                    <?php if (!empty($datos['Cliente']['tel_fijo']) && !empty($datos['Cliente']['tel_celular'])) : ?>
                        <dt>Tel&eacute;fonos:</dt>
                        <dd><?php echo h($datos['Cliente']['tel_fijo'] . ' ' . $datos['Cliente']['tel_celular']); ?>&nbsp;</dd>
                    <?php endif; ?>
                </dl>
            </div>
            <div class="panel-footer text-right"><?php echo $this->Html->link('Salir', array('controller' => 'usuarios', 'action' => 'logout'), array('class' => 'btn btn-warning')); ?></div>
        </div>
    </div>    
        
        
    </div>
</div>
