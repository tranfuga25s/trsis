<?php
$this->set( 'title_for_layout', "Nosotros" );
?>
<h3>Informaci&oacute;n de Gestotux</h3>
<div class="row-fluid">
    <div id="span12">
		<h4>Licencia</h4>
		El programa Gestotux está desarrollado bajo licencia <?php echo $this->Html->link( 'GPLv3', 'http://www.viti.es/gnu/licenses/gpl.html' ); ?> .<br /><br />
    </div>
    <div id="span12">
		<h4>Equipo de desarrollo</h4>
		Está desarrollado por <?php echo $this->Html->link( h( 'Esteban Javier Zeller' ), 'https://plus.google.com/u/0/117702217859512266372' ); ?> con la ayuda de sus colaboradores según van apareciendo las oportunidades de negocio.<br /><br />
    </div>
    <div id="span12">
		<h4>Tecnologías</h4>
		La tecnología principal del programa está basada en las librerías <?php echo $this->Html->link( h('Qt'), 'http://qt-project.org/' ); ?> y para sus base de datos utiliza los motores <?php echo $this->Html->link( h( 'SQLite' ), 'http://www.sqlite.org/' ); ?> y <?php echo $this->Html->link( h( 'MySQL'), 'http://www.mysql.com/' ); ?>.<br />
		Para la generación de los reportes y comprobantes se utiliza el módulo incluido de <?php echo $this->Html->link( h( 'OpenRPT' ), '#' ); ?>.<br /><br />
    </div>
    <div class="span12 well thumbnails">
        <?php
            echo $this->Html->image( 'https://code.google.com/p/gestotux/logo?cct=1363131001', array( 'class' => 'thumbnail span1', 'style' => 'height: 71px;' ) );
            echo $this->Html->image( 'http://qt-project.org/images/qt13a/Qt-logo.png', array( 'class' => 'thumbnail span1' )  );
            echo $this->Html->image( 'sqlite370_banner.gif', array( 'class' => 'thumbnail span2' )  );
            echo $this->Html->image( 'http://www.mysql.com/common/logos/logo-mysql-110x57.png', array( 'class' => 'thumbnail span2', 'style' => 'height: 71px;' )  );
        ?>
    </div>
</div>