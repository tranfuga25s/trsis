<?php
$this->pageTitle = 'Gestotux 0.5'; 
?>
<script>
	$( function() { 
		$("#general").accordion( { autoHeight: false, navigation: true } );
		$("a", "#botones" ).button();
		$("a", "#ref" ).button(); 
	});
</script>
<td id="general">
	<h3><a href="#">&iquest;Que es gestotux?</a></h3>
	<div>
	    <div style="float: right; position:relative;"><?php echo $this->Html->image( 'galeria/pantalla_inicial.png', array( 'border' => 0, 'width' => 250, 'alt' => 'Pantalla inicial' ) ); ?></div>
		Gestotux es un programa de gesti&oacute;n desarrollado pensando en un simple emprendedor o una persona que administra un negocio peque&ntilde;o.<br />
		El programa le permitir&aacute; realizar todas las operaci&oacute;nes b&aacute;sicas para su negocio de una manera r&aacute;pida y c&oacute;moda.<br />
		Adem&aacute;s le permitir&aacute; realizar las modificaci&oacute;nes para que se ajuste a sus necesidades espec&iacute;ficas.
 
	</div>
	<h3><a href="#">Caracter&iacute;sticas</a></h3>
	<div id="ref">
		Gestotux se compone de un programa base al cual se le agregan m&oacute;dulos que le agregan las funcionalidades que necesita seg&uacute;n sus necesidades. Adem&aacute;s:
		<ul>
			<li>Un solo programa básico para todos nuestros clientes permite que cada modificación que se solicite sobre alguna caracteristica del programa, pueda ser compartida automaticamente con las demas personas que utilizan el programa.</li>
			<li>Funciona tanto en Microsoft Windows&copy;, Mac OS&copy; y las distintas versiones de Linux; y se comporta de la misma manera sin importar en que sistema operativo se encuentre.</li>
			<li>Esta liberado bajo software libre, permitiendole total libertad sobre el c&oacute;digo fuente del programa.</li>
			<li>Posee un sistema de servicios integrados en la nube que le da acceso a sus datos desde cualquier lugar.</li>
			<li>Su estructura modular lo hace ideal para ajustarlo a las necesidades específicas que usted tenga.</li>
			<li>Multiples módulos disponibles sin necesidad de reinstalar el programa por cada cambio.</li>
		</ul>
		<h4>&iquest;Cuales son las partes del programa que puedo utilizar?</h4>
		<?php
			echo $this->Html->link(
				 	$this->Html->image( 'componentes.png', array( 'border' => 0, 'alt' => "Ver partes disponibles" ) ),
				 array( 'controller' => 'pages', 'action' => 'modulos' ),
				 array( 'escape' => false ) );
			?>
	</div>
	<h3><a href="#">M&aacute;s de Gestotux</a></h3>
	<div id="botones">
		<table width="100%">
		 <tbody>
		  <tr>
		   <td>
			<?php echo $this->Html->link(  
							 $this->Html->image( 'descargar.png', array( 'border' => 0, 'alt' => "Ver partes disponibles" ) ),
							 array( 'controller' => 'pages', 'action' => 'descargar' ),
							  array( 'escape' => false ) ); ?>
		   </td>
		   <td>
			<?php
			echo $this->Html->link(
				 $this->Html->image( 'componentes.png', array( 'border' => 0, 'alt' => "Ver partes disponibles" ) ),
				 array( 'controller' => 'pages', 'action' => 'modulos' ),
				 array( 'escape' => false ) );
			?>
		   </td>
		   <td>
			<?php
			echo $this->Html->link(
				 $this->Html->image( 'nubes.png', array( 'border' => 0, 'alt' => "Servicios en la nube" ) ),
				 array( 'controller' => 'pages', 'action' => 'view', 'servicios' ),
				 array( 'escape' => false ) );
			?>	
		   </td>
		  </tr>
		 </tbody>
		</table>
	</div>
	<h3><a href="#">Ver el programa</a></h3>
	<div>
		Aqu&iacute; podrá ver algunas de las pantallas que podr&aacute; utilizar en el programa:<br />
		<table cellspacing="2">
		 <tbody>
		  <tr>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/pantalla_inicial.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/pantalla_inicial.png',
										array( 'escape' => false ) ); ?><br>
				<br />Pantalla Principal
			</td>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image67.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image67.png',
										array( 'escape' => false ) ); ?>
				<br />Listado de clientes
			</td>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image70.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image70.png',
										array( 'escape' => false ) ); ?>
				<br />Resumen de cuenta corriente
			</td>
		  </tr>
		  <tr>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image86.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image86.png',
										array( 'escape' => false ) ); ?>
				<br />Visor de recibos
			</td>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image62.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image62.png',
										array( 'escape' => false ) ); ?>
				<br />Agregar recibo
			</td>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image19.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image19.png',
										array( 'escape' => false ) ); ?>
				<br />Agregar Factura
			</td>
		  </tr>
		  <tr>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image15.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image62.png',
										array( 'escape' => false ) ); ?>
				<br />Agregar presupuesto
			</td>
			<td class="bordeada" style="text-align: center; font-size: 10px; vertical-align: middle;">
				<?php echo $this->Html->link(
								$this->Html->image( 'galeria/image33.png',
										array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
										, '/img/galeria/image33.png',
										array( 'escape' => false ) ); ?>
				<br />Datos de clientes
			</td>
		  </tr>
		 </tbody>
		</table>
	</div>
</div>