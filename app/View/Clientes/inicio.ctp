<?php
$this->set( 'title_for_layout', "Sus datos" );
$this->Html->addCrumb( 'Panel de cliente' );
?>
<h2>Panel de Control del cliente</h2>


<div class="row-fluid">

	<div class="span6 well">
	    <h3>Mis servicios</h3>
		<?php if( count( $datos['ServiciosCliente'] ) > 0 ) { ?>
	    <p>Estos son los servicios que posee habilitados en nuestros sistemas web:</p>
	    <? foreach( $datos['ServiciosCliente'] as $servicio ) :  
		 			 echo $this->Html->link( $servicios[$servicio['id_servicio']],
		 										 array( 'controller' => 'ServicioBackup',
		 										 		'action' => 'inicio',
		 										 		$datos['Usuario']['id_usuario'],
		 										 		$servicio['id_servicio'] ),
		 										 array( 'class' => 'btn btn-primary') ); 
           endforeach;
			  } else { ?>
			No posee ning&uacute;n servicio activado todav&iacute;a<br />
		<?php }  ?>
	</div>


	<div class="span6 well">
	    <h3>Mis cuentas</h3>
		<?php if( $datos['Ctacte']['suspendida'] == true ) : ?>
			<div class="alert">Su cuenta corriente se encuentra suspendida!</div>
		<?php endif; ?>
		El estado de su cuenta se refleja a continuaci&oacute;n:<br />
		<ul>
			<li><b>Saldo actual:</b>&nbsp;<?php echo $this->Number->currency( $datos['Ctacte']['saldo'], "USD", array( 'before' => "$", 'thousands' => ".", 'decimals' => ',' ) ); ?></li>
			<li><b>Vencimiento Pr&oacute;xima factura:</b>&nbsp;</li>
			<li><b>Monto de pr&oacute;xima factura:</b>&nbsp;</li>
		</ul>
		<div class="btn-group">
    		<?php echo $this->Html->link( 'Ver resumen de cuenta', array( 'controller' => 'Ctactes', 'action' => 'verCtaCte' ), array( 'class' => 'btn btn-primary') );
                  echo $this->Html->link( 'Informar pago', '#', array( 'class' => 'btn btn-inverse' ) );
    		      echo $this->Html->link( '¿Problemas contables?', array( 'controller' => 'Contacto', 'action' => 'formulario' ), array( 'class' => 'btn btn-info') ); ?>
    		</div>
	</div>
</div>
<div class="row-fluid">

    <div class="span12 well">
        <h3>Mis datos</h3>
        Aquí encontrar&aacute; los datos que poseemos de usted:<br />
        <dl>
            <dt>N&uacute;mero de cliente:</dt>
            <dd><?php echo $datos['Usuario']['id_usuario']; ?>&nbsp;</dd>

            <dt>Direcci&oacute;n de contacto:</dt>
            <dd><?php echo $datos['Cliente']['calle'].' '.$datos['Cliente']['numero'].' '.$datos['Cliente']['piso']. $datos['Cliente']['depto']. ' - '. $datos['Cliente']['ciudad']; ?>&nbsp;</dd>

            <dt>Email:</dt>
            <dd><?php echo h( $datos['Cliente']['email'] ); ?>&nbsp;</dd>
            <?php if( !empty( $datos['Cliente']['tel_fijo'] ) && !empty( $datos['Cliente']['tel_celular'] ) ) : ?>
            <dt>Tel&eacute;fonos:</dt>
            <dd><?php echo h( $datos['Cliente']['tel_fijo'] . ' ' . $datos['Cliente']['tel_celular'] ); ?>&nbsp;</dd>
            <?php endif; ?>
        </dl>
    </div>
</div>
<br />
<div class="row-fluid">
    <div class="span12">
        <?php echo $this->Html->link( 'Salir', array( 'controller' => 'usuarios', 'action' => 'logout' ), array( 'class' => 'btn btn-warning pull-right') ); ?>
    </div>
</div>
<?php //pr( $datos ); ?>
