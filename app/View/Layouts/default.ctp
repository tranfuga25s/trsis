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
        echo $this->Html->css('bootstrap-responsive.min');
        echo $this->Html->css('trsis');
	echo $this->Html->script( 'jquery-1.10.2.min' );
        echo $this->Html->script( 'bootstrap.min' );
	echo $scripts_for_layout;
	?>
</head>
<body>
 <div class="content">
  <!-- Cabecera -->
  <div class="row">
    <div class="col-lg-10">
        <h1>Gestotux</h1>
        <p class="lead">
            Programa de Gestión Simplificada    
        </p>
    </div>
    <div class=" pull-right">
          <?php echo $this->Html->image( 'cabecera.png', array( 'id' => 'cabecera', 'class' => 'pull-right' ) ); ?>
    </div>
  </div>

  <div class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><li><?php echo $this->Html->link( 'Inicio', '/' ); ?></li></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestotux <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link( 'Gestotux', array( 'controller' => 'pages', 'action' => 'display', 'gestotux', 'plugin' => false, 'administracion' => false ) ); ?></li>
            <li><?php echo $this->Html->link( 'Modulos', array( 'controller' => 'pages', 'action' => 'display', 'modulos', 'plugin' => false, 'administracion' => false ) ); ?></li>
            <li><?php echo $this->Html->link( 'Ver pantallas', array( 'controller' => 'pages', 'action' => 'display', 'pantallas', 'plugin' => false, 'administracion' => false ) ); ?></li>
            <li><?php echo $this->Html->link( 'Versiones', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'general', 'plugin' => false, 'administracion' => false ) ); ?></li>
            <li class="divider"></li>
            <li><?php echo $this->Html->link( 'Descargar', array( 'controller' => 'pages', 'action' => 'display', 'descargar', 'plugin' => false, 'administracion' => false ) ); ?></li>
          </ul>
        </li>
        <li class="dropdown">
            <?php echo $this->Html->link( 'Versiones'.$this->Html->tag( 'i', '', array( 'class' => 'caret' ) ), array( 'controller' => 'pages', 'action' => 'versiones', 'general', 'administracion' => false ), array( 'class' => "dropdown-toggle", 'data-toggle' => "dropdown", 'escape' => false ) ); ?>
            <ul class="dropdown-menu" role="menu">
              <li><?php echo $this->Html->link( 'Autonoma', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'autonomo', 'plugin' => false, 'administracion' => false ) ); ?></li>
              <li><?php echo $this->Html->link( 'Múltiple', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'multiple', 'plugin' => false, 'administracion' => false ) ); ?></li>
              <li><?php echo $this->Html->link( 'Portatil', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'portatil', 'plugin' => false, 'administracion' => false ) ); ?></li>
              <li><?php echo $this->Html->link( 'Internet', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'internet', 'plugin' => false, 'administracion' => false ) ); ?></li>
            </ul>
        </li>

        <li><?php echo $this->Html->link( 'Servicios web'  , array( 'controller' => 'pages'   , 'action' => 'servicios', 'plugin' => false, 'administracion' => false  ) ); ?></li>
        <li><?php echo $this->Html->link( 'Clientes'       , array( 'controller' => 'pages'   , 'action' => 'clientes', 'plugin' => false, 'administracion' => false   ) ); ?></li>
        <li><?php echo $this->Html->link( 'Acceso Clientes', array( 'controller' => 'usuarios', 'action' => 'ingresar', 'plugin' => false, 'administracion' => false   ) ); ?></li>
        <li><?php echo $this->Html->link( 'Nosotros'       , array( 'controller' => 'pages'   , 'action' => 'nosotros', 'plugin' => false, 'administracion' => false   ) ); ?></li>
        <li><?php echo $this->Html->link( 'Contacto'       , array( 'controller' => 'contacto', 'action' => 'formulario', 'plugin' => false, 'administracion' => false ) ); ?></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this->Html->link( 'Ayuda', array( 'controller' => 'pregunta_frecuente', 'action' => 'index', 'plugin' => 'pregunta_frecuente', 'administracion' => false ) ); ?></li>
      </ul>
    </div>
  </div> <!-- Menu End -->
  
  <div class="row">

    <div class="col-lg-2">
        <div class="well text-center">
            <h4 class="text-center">Versiones</h4>
            <ul class="thumbnails text-center">
                <li class="thumbnail text-center" style="margin-left: -4px;">
                    <?php echo $this->Html->link(
                            $this->Html->image( 'autonomo.png', array( 'alt' => "Autonomo", 'style' => 'width: 100px;' ) ).'<br />'.
                            'Autonomo',
                             '/pages/versiones/autonomo',
                             array( 'escape' => false ) ); ?>
                </li>
                <li class="thumbnail text-center"  style="margin-left: -4px;">
                    <?php echo $this->Html->link(
                            $this->Html->image( 'multiple.png', array( 'alt' => "Multiple", 'style' => 'width: 100px;' ) ).'<br />'.
                            'Multiple',
                             '/pages/versiones/multiple',
                             array( 'escape' => false ) ); ?>
                </li>
                <li class="thumbnail text-center"  style="margin-left: -4px;">
                    <?php echo $this->Html->link(
                            $this->Html->image( 'portatil.png', array( 'alt' => "Portatil", 'style' => 'width: 100px;' ) ).'<br />'.
                            'Portatil',
                             '/pages/versiones/portatil',
                             array( 'escape' => false ) ); ?>
                </li>
                <li class="thumbnail text-center"  style="margin-left: -4px;">
                    <?php echo $this->Html->link(
                            $this->Html->image( 'internet.png', array( 'alt' => "Internet", 'style' => 'width: 100px;' ) ).'<br />'.
                            'Internet',
                             '/pages/versiones/internet',
                             array( 'escape' => false ) ); ?>
                </li>
            </ul>
       </div>
    </div>
    <div class="col-lg-10">
            <ul class="breadcrumb pull-right"><?php echo $this->Html->getCrumbs( ' / ', 'Inicio' ); ?></ul>
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
	<div><?php echo $this->element('sql_dump'); ?></div>
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
	<?php echo $this->Js->writeBuffer(); ?>
</div>
</body>
</html>