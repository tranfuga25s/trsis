<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?> : Gestotux</title>
	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
        echo $this->Html->css('trsis');
		echo $this->Html->script( 'jquery-1.7.2.min' );
        echo $this->Html->script( 'bootstrap.min' );
		echo $scripts_for_layout;
	?>
</head>
<body>

    <!-- Cabecera -->
  <div class="row">
    <div class="span6">
      <h1>Gestotux</h1>
      <p class="lead">Programa de Gestion Simplificada</p>
    </div>
    <div class="span9">
      <div class="pull-right"><?php echo $this->Html->image( 'cabecera.png', array( 'id' => 'cabecera' ) ); ?></div>
    </div>
  </div>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <div class="nav-collapse">
          <ul class="nav">
            <li><?php echo $this->Html->link( 'Inicio', '/' ); ?></li>
            <li><?php echo $this->Html->link( 'Servicios'      , array( 'controller' => 'pages', 'action' => 'servicios' ) ); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestotux <i class="caret"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link( 'Gestotux', array( 'controller' => 'pages', 'action' => 'display', 'gestotux' ) ); ?></li>
                <li><?php echo $this->Html->link( 'Modulos', array( 'controller' => 'pages', 'action' => 'display', 'modulos' ) ); ?></li>
                <li><?php echo $this->Html->link( 'Ver pantallas', array( 'controller' => 'pages', 'action' => 'display', 'pantallas' ) ); ?></li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link( 'Descargar', array( 'controller' => 'pages', 'action' => 'display', 'descargar' ) ); ?></li>
              </ul>
            </li>
            <li><?php echo $this->Html->link( 'Clientes'       , array( 'controller' => 'pages', 'action' => 'clientes' ) ); ?></li>
            <li><?php echo $this->Html->link( 'Acceso Clientes', array( 'controller' => 'usuarios', 'action' => 'ingresar' ) ); ?></li>
            <li><?php echo $this->Html->link( 'Nosotros'       , array( 'controller' => 'pages', 'action' => 'nosotros' ) ); ?></li>
            <li><?php echo $this->Html->link( 'Contacto'       , array( 'controller' => 'contacto', 'action' => 'formulario' ) ); ?></li>
          </ul>
          <ul class="nav pull-right">
            <li><?php echo $this->Html->link( 'Ayuda', '/' ); ?></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>

    <div class="row-fluid">

       <div class="span2 well pull-center">
            <h4 class="text-center">Versiones</h4>
            <?php echo $this->Html->link( $this->Html->image( 'autonomo.png', array( 'alt' => "Autonomo" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
            <?php echo $this->Html->link( $this->Html->image( 'multiple.png', array( 'alt' => "Multiple" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
            <?php echo $this->Html->link( $this->Html->image( 'portatil.png', array( 'alt' => "Portatil" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
            <?php echo $this->Html->link( $this->Html->image( 'internet.png', array( 'alt' => "Internet" ) ), '/pages/servicios', array( 'escape' => false ) ); ?><br />
       </div>

        <div class="span10">
                <ul class="breadcrumb pull-right"><?php echo $this->Html->getCrumbs( ' / ', 'Gestotux' ); ?></ul>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash( 'auth' ); ?>
                <?php echo $content_for_layout; ?>
        </div>

    </div>

    <hr />
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image( 'tr.logo.png', array( 'alt' => 'TRSistemas Informaticos Integrales', 'border' => 0 ) ),
					'mailto:esteban.zeller@gmail.com',
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