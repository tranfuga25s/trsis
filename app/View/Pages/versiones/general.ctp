<?php
$this->set( 'title_for_layout', "Versiones disponibles" );
$this->Html->addCrumb( 'Versiones' );
?>
<div class="row-fluid">
    <h1>Versiones disponibles</h1>

    <div class="span5 well">
        <h3>Autonomo</h3>
        Esta versión del programa está preparada para ejecutarse en una sola maquina sin compartir su base de datos con ninguna otra.
        Se utiliza un sistema de base de datos que le permite colocar todos sus datos en uns solo archivo y así mantener la simplicidad de su sistema.
        Además, permite trasladar fácilmente su programa hacia su nueva computadora y/o restaurar sus datos de manera muy comoda con solo copiar ese archivo o utilizando una copia de seguridad.
        <br />
        <br />
        <div class="btn-group">
        <?php
            echo $this->Html->link( 'Probar', array( 'controller' => 'pages', 'action' => 'descargar' ), array( 'class' => 'btn btn-default' ) );
            echo $this->Html->link( 'Ver mas', array( 'controller' => 'pages', 'action' => 'display', 'versiones', 'autonomo' ), array( 'class' => 'btn btn-success' ) );
            echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary' ) );
        ?>
        </div>
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
        <div class="btn-group">
            <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
        </div>
    </div>

    <div class="span5 well">
        <h3>Portatil</h3>
        Esta versión del programa se presenta en un práctico paquete que le permite conectarlo a cualquier maquina que posea una conexión USB y luego utilizar el programa en esa computadora como si fuera la propia suya, ya que contendrá todos los datos necesarios para no tener que estar copiando archivos de una maquina a otra.
        <br />
        <br />
        <div class="btn-group">
            <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
        </div>
    </div>


    <div class="span5 well">
        <h3>Internet</h3>
        Esta versión del programa es ideal para aquellas personas que viajan mucho, ya que le permite acceder desde cualquier punto donde se encuentre conectado a internet a su base de datos.
        <br />
        <br />
        <div class="btn-group">
            <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
        </div>
    </div>

    <div class="span10 well">
        <h3>Personalización</h3>
        Incluya toda la personalización necesaria para su negocio, inluyendo:<br />
        <ul>
            <li>Logotipo e icono para el programa.</li>
            <li>Formularios con cabecera personalizada.</li>
            <li>Ampliaciones de reportes y listados del sistema.</li>
        </ul>
        <br />
        <div class="btn-group">
            <?php echo $this->Html->link( 'Solicitar Presupuesto', array( 'controller' => 'contacto','action' => 'formulario' ), array( 'class' => 'btn btn-primary pull-right' )  ); ?>
        </div>      
    </div>
</div>