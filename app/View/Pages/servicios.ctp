<?php
$this->set( 'title_for_layout', "Servicios disponibles" );
$this->Html->addCrumb( 'Servicios' );
?>
<div class="row-fluid">
    <h1>Versiones disponibles</h1>

    <div class="span5 well">
        <h3>Autonomo</h3>
        Esta versión del programa está preparada para ejecutarse en una sola maquina sin compartir su base de datos con ninguna otra.
        Se utiliza un sistema de base de datos que le permite colocar todos sus datos en uns solo archivo y así mantener la simplicidad de su sistema.
        Además, permite trasladar fácilmente su programa hacia su nueva computadora y/o restaurar sus datos de manera muy comoda con solo copiar ese archivo o utilizando una copia de seguridad.
        <br />
        <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' ) ); ?>
    </div>


    <div class="span5 well">
        <h3>Múltiple</h3>
        Esta versión del programa está preparada para ejecutarse en varias maquinas simultaneamente compartiendo la base de datos en una de ellas.<br /> Utiliza una de las dos siguientes opciones:
        <ul>
            <li>Base de datos compartida por red.</li>
            <li>Servidor de base de datos compartida</li>
        </ul>
        Esta ultima opción es ideal para gran cantidad de programas corriendo simultaneamente, mientras que la primera es ideal si posee 1 o 2 maquinas interconectadas en red.
        <br />
        <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
    </div>

    <div class="span5 well">
        <h3>Portatil</h3>
        Esta versión del programa se presenta en un práctico paquete que le permite conectarlo a cualquier maquina que posea una conexión USB y luego utilizar el programa en esa computadora como si fuera la propia suya, ya que contendrá todos los datos necesarios para no tener que estar copiando archivos de una maquina a otra.
        <br /><br />
        <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
    </div>


    <div class="span5 well">
        <h3>Internet</h3>
        Esta versión del programa es ideal para aquellas personas que viajan mucho, ya que le permite acceder desde cualquier punto donde se encuentre conectado a internet a su base de datos.
        <br /><br />
        <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
    </div>
</div>
<div class="row-fluid">
    <h1>Servicios Web Disponibles</h1>

    <div class="span5 well">
        <h3>Sistema de Backup</h3>
    	Este servicio le permite mantener una copia de seguridad de todos sus datos incluyendo la configuración del programa en nuestros servidores en internet. <br />
    	De esta forma si usted sufre la perdida de datos o ruptura de su maquina, podrá recuperar su base de datos y su configuración rápidamente. <br />
    	Simplemente deberá ingresar en nuestros servidores y se le brindarán todos los pasos y el soporte necesarios para recuperar su programa hasta el estado del último backup que haya realizado.
    	<br /><br /><?php echo $this->Html->link( 'Empezar a usar', array( 'controller' => 'clientes', 'action' => 'usar', 'backup' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
    </div>

    <div class="span5 well">
        <h3>M&oacute;dulos a medida</h3>
        Construya un modulo del programa que se adapte a las necesidades específicas de su negocio!<br />
        Con nuestro aseoramiento y luego de una consulta con usted podremos definir cual es la mejor estategia para integrar sus necesidades espec&iacute;ficas de su negocio para que se integre con nuestro sistema, sin importar que tipo de versi&oacute;n elija.
        <br /><br />
        <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' ) ); ?>
    </div>


    <div class="span10">
        <h3><a href="#">Sistema de Estadisticas detalladas</a></h3>
    	Este servicio le permitira obtener un gran conjunto de estadisticas detalladas sacadas de sus ultimos datos enviados a travez de un sistema web intuitivo.<br />
    	Le permitirá ademas bajar todos los reportes a su computadora y obtener datos entre cualquier fecha incluyendo graficos y listados. <br />
    	<br /><?php echo $this->Html->link( 'Proximamente!', '#', array( 'class' => 'btn disabled pull-right' )  ); ?>

    </div>

</div>