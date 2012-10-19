<?php
$this->set( 'title_for_layout', "Nosotros" ); 
?>
<script>
	$( function() { $("#acordion").accordion(); });
</script>
<div id="acordion">
	<h3><a href="#">Informaci&oacute;n de Gestotux</a></h3>
	<div>
		<h4>Licencia</h4>
		El programa Gestotux está desarrollado bajo licencia <?php echo $this->Html->link( 'GPLv3', 'http://www.viti.es/gnu/licenses/gpl.html' ); ?> .<br /><br />
		<h4>Equipo de desarrollo</h4>
		Está desarrollado por <?php echo $this->Html->link( h( 'Esteban Javier Zeller' ), 'https://plus.google.com/u/0/117702217859512266372' ); ?> con la ayuda de sus colaboradores según van apareciendo las oportunidades de negocio.<br /><br />
		<h4>Tecnologías</h4>
		La tecnología principal del programa está basada en las librerías <?php echo $this->Html->link( h('Qt de Nokia'), 'http://qt.nokia.com/' ); ?> y para sus base de datos utiliza los motores <?php echo $this->Html->link( h( 'SQLite' ), 'http://www.sqlite.org/' ); ?> y <?php echo $this->Html->link( h( 'MySQL'), 'http://www.mysql.com/' ); ?>.<br />
		Para la generación de los reportes y comprobantes se utiliza el módulo incluido de <?php echo $this->Html->link( h( 'OpenRPT' ), '#' ); ?>.<br /><br />
	</div>
	<!--<h3><a href="#">Información de TRSis</a></h3>
	<div>
		
	</div>-->
</div>