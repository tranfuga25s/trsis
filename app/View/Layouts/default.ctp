<?php
/**
 * Layout predeterminado del TRSis
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?> : Gestotux</title>
	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('trsis');
		echo $this->Html->css('start/jquery-ui');
		echo $this->Html->script( 'jquery-1.7.2.min' );
		echo $this->Html->script( 'jquery-ui-1.8.20.custom.min');
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
					<?php echo $this->Html->link( 'Inicio'         , '/' ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Servicios'      , array( 'controller' => 'pages', 'action' => 'servicios' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Gestotux'       , array( 'controller' => 'pages', 'action' => 'gestotux' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Clientes'       , array( 'controller' => 'pages', 'action' => 'clientes' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Acceso Clientes', array( 'controller' => 'usuarios', 'action' => 'ingresar' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Ayuda'          , '/' ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Nosotros'       , array( 'controller' => 'pages', 'action' => 'nosotros' ) ); ?> &nbsp;|&nbsp;
					<?php echo $this->Html->link( 'Contacto'       , array( 'controller' => 'contacto', 'action' => 'formulario' ) ); ?>
			</div>
			<div id="tituloGeneral"><?php echo $title_for_layout; ?></div>
		</div>
		<div id="content">
		<table class="invisible">
		 <tbody>
		   <tr>
		    <td class="costado">
			<h1>Versiones</h1>
			<?php echo $this->Html->link( $this->Html->image( 'autonomo.png', array( 'alt' => "Autonomo" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
			<?php echo $this->Html->link( $this->Html->image( 'multiple.png', array( 'alt' => "Multiple" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
			<?php echo $this->Html->link( $this->Html->image( 'portatil.png', array( 'alt' => "Portatil" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
			<?php echo $this->Html->link( $this->Html->image( 'internet.png', array( 'alt' => "Internet" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
		    </td>
		    <td id="contenido">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash( 'auth' ); ?>
				<?php echo $content_for_layout; ?>
		   </td>
		  </tr>
		 </tbody>
		</table>
		</div>
		<div id="footer">
			<h1>Usos posibles</h1>
			<div id="usos">
				<?php echo $this->Html->image( 'minipyme.png'     , array( 'alt' => "Mini PyME"               ) ); ?>
				<?php echo $this->Html->image( 'reventa.png'      , array( 'alt' => "Reventa de articulos"    ) ); ?>
				<?php echo $this->Html->image( 'pcanina.png'      , array( 'alt' => "Peluquería canina"       ) ); ?>
				<?php //echo $this->Html->image( 'servicios.png'    , array( 'alt' => "Servicio de Suscripcion" ) ); ?>
				<?php echo $this->Html->image( 'personalizado.png', array( 'alt' => "Personalizado"           ) ); ?>
			</div>
			<?php echo $this->Html->link( 
					$this->Html->image( 'tr.logo.png', array( 'alt' => 'TRSistemas Informaticos Integrales', 'border' => 0 ) ),
					'emailto:esteban.zeller@gmail.com',
					array('target' => '_blank', 'escape' => false ) );
			      
			?>
		</div>
	</div>
	<div>
			<?php echo $this->element('sql_dump'); ?>
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
</body>
</html>