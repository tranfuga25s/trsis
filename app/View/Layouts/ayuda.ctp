<?php
/**
 * Layout de ayuda del TRSis
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('trsis');
		echo $this->Html->css('start/jquery-ui');
		echo $this->Html->script( 'jquery-1.7.2.min' );
		echo $this->Html->script( 'jquery-ui-1.8.20.custom.min');
		echo $this->Html->script( 'tree.jquery' );
		echo $this->Html->css( 'jqtree' );
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="cabecera">
			<?php echo $this->Html->image( 'cabecera.png', array( 'id' => 'cabecera' ) ); ?>
			<h1>gestotux</h1>
			<h2>Programa de Gestion Simplificada</h2>
			<div class="menu">
					<?php echo $this->Html->link( 'Inicio'         , '/' ); ?>  &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Servicios'      , array( 'controller' => 'pages'   , 'servicios' ) ); ?>  &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Gestotux'       , array( 'controller' => 'pages'   , 'gestotux' ) ); ?>  &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Clientes'       , array( 'controller' => 'pages'   , 'clientes' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Acceso Clientes', array( 'controller' => 'clientes', 'action' => 'ingreso' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Ayuda'          , array( 'controller' => 'pages'   , 'ayuda', 'index' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Nosotros'       , array( 'controller' => 'pages'   , 'nosotros' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Contacto'       , array( 'controller' => 'contacto', 'action' => 'formulario' ) ); ?> 
			</div>
			<div id="tituloGeneral"><?php echo $title_for_layout; ?></div>
		</div>
		<div id="content">
		<table class="invisible">
		 <tbody>
		   <tr>
		    <td class="costado">
		    	<?php echo $this->element( 'indice' ); ?>
		    </td>
			&nbsp;
		    <td id="contenido">
				<?php echo $this->Session->flash(); ?>
				<?php echo $content_for_layout; ?>
		   </td>
		  </tr>
		 </tbody>
		</table>
		</div>
		<div id="footer">
			<small>Gestotux es licenciado bajo licencia GPL. Creado y mantenido por Tranfuga y asociados.</small>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array( 'alt' => "Creado con CakePHP", 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
				echo $this->Html->link( 
					$this->Html->image( 'tr.logo.png', array( 'alt' => 'TRSistemas Informaticos Integrales', 'border' => 0 ) ),
					'emailto:esteban.zeller@gmail.com',
					array('target' => '_blank', 'escape' => false ) );
			      
			?>
			<small>Dev</small>
		</div>
	</div>
	<div class="publicidad">
		<script type="text/javascript"><!--
			google_ad_client = "ca-pub-1880233918301202";
			/* Desarrollo */
			google_ad_slot = "0058508055";
			google_ad_width = 468;
			google_ad_height = 60;
			//-->
		</script>
		<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>