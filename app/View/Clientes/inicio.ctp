<?php $this->set( 'title_for_layout', "Sus datos" ); ?>
<script>
 $( function() {
 	$("#acordeon").accordion();
 	$("a", "#servicios").button();
 	$("a", "#cuentas").button();
 	$("a", "#salir").button();
 });
</script>
<h2>Panel de Control del cliente</h2>
<div id="acordeon">
	<h3><a href="#">Mis datos</a></h3>
	<div id="datos">
		Aquí encontrar&aacute; los datos que poseemos de usted:<br />
		<dl>
			<dt>N&uacute;mero de cliente:</dt>
			<dd><?php echo $datos['Usuario']['id_usuario']; ?>&nbsp;</dd>
			
			<dt>C&oacute;digo de ingreso:</dt>
			<dd><!--<?php echo $datos['Cliente']['codigo']; ?>-->Oculto por seguridad.&nbsp;</dd>
			
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
	<h3><a href="#">Mis servicios</a></h3>
	<div id="servicios">
		<?php if( count( $datos['ServiciosCliente'] ) > 0 ) {
			echo "		Estos son los servicios que posee habilitados en nuestros sistemas web:<br />";
		 		 foreach( $datos['ServiciosCliente'] as $servicio ) { ?>
		 			<?php echo $this->Html->link( $servicios[$servicio['id_servicio']],
		 										 array( 'controller' => 'ServicioBackup',
		 										 		'action' => 'inicio', 
		 										 		$datos['Usuario']['id_usuario'],
		 										 		$servicio['id_servicio'] ) ); ?>
		<?php 	 }
			  } else { ?>
			No posee ning&uacute;n servicio activado todav&iacute;a<br />
		<?php }  ?>
	</div>
	<h3><a href="#">Mis cuentas</a></h3>
	<div id="cuentas">
		<?php if( $datos['Ctacte']['suspendida'] == true ) : ?>
			<div class="warning">Su cuenta corriente se encuentra suspendida!</div>
		<?php endif; ?>
		El estado de su cuenta se refleja a continuaci&oacute;n:<br />
		<ul>
			<li><b>Saldo actual:</b>&nbsp;<?php echo $this->Number->currency( $datos['Ctacte']['saldo'], "USD", array( 'before' => "$", 'thousands' => ".", 'decimals' => ',' ) ); ?></li>
			<li><b>Vencimiento Pr&oacute;xima factura:</b>&nbsp;</li>
			<li><b>Monto de pr&oacute;xima factura:</b>&nbsp;</li>
		</ul>
		<?php echo $this->Html->link( 'Ver resumen de cuenta', array( 'controller' => 'Ctactes', 'action' => 'verCtaCte') ); ?>&nbsp;&nbsp;
		<?php echo $this->Html->link( 'Informar pago', '#' ); ?>&nbsp;&nbsp;
		<?php echo $this->Html->link( '¿Problemas contables?', array( 'controller' => 'Contacto', 'action' => 'formulario' ) ); ?>&nbsp;
	</div>
</div>
<br />
<div style="text-align: right;" id="salir">
	<?php echo $this->Html->link( 'Salir', array( 'controller' => 'usuarios', 'action' => 'logout' ) ); ?>
</div>
<?php //pr( $datos ); ?>
