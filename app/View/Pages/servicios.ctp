<script>
	$( function() {
		$("#acordeon").accordion({active:false});
		$("#acordion").accordion({active:false});
		$( "a", ".ui-widget-content" ).button();
	});
</script>
<h1>Versiónes disponibles</h1>
<div id="acordion">
	<h3><a href="#">Autonomo</a></h3>
	<div>
		Esta versión del programa está preparada para ejecutarse en una sola maquina sin compartir su base de datos con ninguna otra.
		Se utiliza un sistema de base de datos que le permite colocar todos sus datos en uns solo archivo y así mantener la simplicidad de su sistema.
		Además, permite trasladar fácilmente su programa hacia su nueva computadora y/o restaurar sus datos de manera muy comoda con solo copiar ese archivo o utilizando una copia de seguridad.
		<br /><br />
		<?php echo $this->Html->link( 'Solicitar Presupuesto', '/contacto/formulario' ); ?>
	</div>
    <h3><a href="#">Múltiple</a></h3>
	<div>
		Esta versión del programa está preparada para ejecutarse en varias maquinas simultaneamente compartiendo la base de datos en una de ellas.<br /> Utiliza una de las dos siguientes opciones:
		<ul><li>Base de datos compartida por red.</li><li>Servidor de base de datos compartida</li></ul>.<br /> Esta ultima opción es ideal para gran cantidad de programas corriendo simultaneamente, mientras que la primera es ideal si posee 1 o 2 maquinas interconectadas en red.
		<br /><br />
		<?php echo $this->Html->link( 'Solicitar Presupuesto', '/contacto/formulario' ); ?>
	</div>
	<h3><a href="#">Portatil</a></h3>
	<div>
		Esta versión del programa se presenta en un práctico paquete que le permite conectarlo a cualquier maquina que posea una conexión USB y luego utilizar el programa en esa computadora como si fuera la propia suya, ya que contendrá todos los datos necesarios para no tener que estar copiando archivos de una maquina a otra.
		<br /><br />
		<?php echo $this->Html->link( 'Solicitar Presupuesto', '/contacto/formulario' ); ?>
	</div>
	<h3><a href="#">Internet</a></h3>
	<div>
		Esta versión del programa es ideal para aquellas personas que viajan mucho, ya que le permite acceder desde cualquier punto donde se encuentre conectado a internet a su base de datos.
		<br /><br />
		<?php echo $this->Html->link( 'Solicitar Presupuesto', '/contacto/formulario' ); ?>
	</div>
</div>
<br />
<h1>Servicios Web Disponibles</h1>
<div id="acordeon">
	<h3><a href="#">Sistema de Backup</a></h3>
    <div>
    	Este servicio le permite mantener una copia de seguridad de todos sus datos incluyendo la configuración del programa en nuestros servidores en internet. <br />
   		De esta forma si usted sufre la perdida de datos o ruptura de su maquina, podrá recuperar su base de datos y su configuración rápidamente. <br />
   		Simplemente deberá ingresar en nuestros servidores y se le brindarán todos los pasos y el soporte necesarios para recuperar su programa hasta el estado del último backup que haya realizado.
   		<br /><br /><?php echo $this->Html->link( 'Empezar a usar', array( 'controller' => 'clientes', 'action' => 'usar', 'backup' ) ); ?>
  	</div>
    <h3><a href="#">Sistema de Estadisticas detalladas</a></h3>
    <div>
   		Este servicio le permitira obtener un gran conjunto de estadisticas detalladas sacadas de sus ultimos datos enviados a travez de un sistema web intuitivo.<br />
   		Le permitirá ademas bajar todos los reportes a su computadora y obtener datos entre cualquier fecha incluyendo graficos y listados. <br />
   		<br /><br /><?php //echo $this->Html->link( 'Empezar a usar', array( 'controller' => 'clientes', 'action' => 'usar', 'estadisticas' ) ); ?><small>Proximamente!</small>
	</div>
	<h3><a href="#">M&oacute;dulos a medida</a></h3>
	<div>
		Construya un modulo del programa que se adapte a las necesidades específicas de su negocio!<br />
		Con nuestro aseoramiento y luego de una consulta con usted podremos definir cual es la mejor estategia para integrar sus necesidades espec&iacute;ficas de su negocio para que se integre con nuestro sistema, sin importar que tipo de versi&oacute;n elija.
		<br /><br />
		<?php echo $this->Html->link( 'Solicitar Presupuesto', '/contacto/formulario' ); ?>
	</div>
</div>