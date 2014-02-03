<?php
$this->set( 'title_for_layout', "Servicios disponibles" );
$this->Html->addCrumb( 'Servicios' );
?>
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