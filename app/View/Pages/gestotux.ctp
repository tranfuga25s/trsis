<?php
$this->pageTitle = 'Gestotux 0.5';
$this->Html->addCrumb( 'Gestotux 0.5' );
?>
<div class="row-fluid">
    <div class="span8">
        <h3>&iquest;Que es Gestotux?</h3>
        Gestotux es un programa de gesti&oacute;n desarrollado pensando en un simple emprendedor o una persona que administra un negocio peque&ntilde;o.<br />
        El programa le permitir&aacute; realizar todas las operaci&oacute;nes b&aacute;sicas para su negocio de una manera r&aacute;pida y c&oacute;moda.<br />
        Adem&aacute;s le permitir&aacute; realizar las modificaci&oacute;nes para que se ajuste a sus necesidades espec&iacute;ficas.
        <h3>Caracter&iacute;sticas</h3>
        Gestotux se compone de un programa base al cual se le agregan m&oacute;dulos que le agregan las funcionalidades que necesita seg&uacute;n sus necesidades. Adem&aacute;s:
        <ul>
            <li>Un solo programa básico para todos nuestros clientes permite que cada modificación que se solicite sobre alguna caracteristica del programa, pueda ser compartida automaticamente con las demas personas que utilizan el programa.</li>
            <li>Funciona tanto en Microsoft Windows&copy;, Mac OS&copy; y las distintas versiones de Linux; y se comporta de la misma manera sin importar en que sistema operativo se encuentre.</li>
            <li>Esta liberado bajo software libre, permitiendole total libertad sobre el c&oacute;digo fuente del programa.</li>
            <li>Posee un sistema de servicios integrados en la nube que le da acceso a sus datos desde cualquier lugar.</li>
            <li>Su estructura modular lo hace ideal para ajustarlo a las necesidades específicas que usted tenga.</li>
            <li>Multiples módulos disponibles sin necesidad de reinstalar el programa por cada cambio.</li>
        </ul>
    </div>
    <div class="span4 well pull-right">
        <?php echo $this->element( 'carrusel' ); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span4 well text-center">
        <h4>&iquest;Cuales son las partes del programa que puedo utilizar?</h4>
        <?php
            echo $this->Html->link(
                    $this->Html->image( 'componentes.png', array( 'border' => 0, 'alt' => "Ver partes disponibles", 'class' => 'btn btn-inverse' ) ),
                 array( 'controller' => 'pages', 'action' => 'modulos' ),
                 array( 'escape' => false ) );
       ?>
    </div>
    <div class="span4 well text-center">
        <h4>Zona de Descargas</h4>
        <br />
        <?php echo $this->Html->link(
                         $this->Html->image( 'descargar.png', array( 'border' => 0, 'alt' => "Ver partes disponibles", 'class' => 'btn btn-inverse' ) ),
                         array( 'controller' => 'pages', 'action' => 'descargar' ),
                          array( 'escape' => false ) ); ?>
    </div>
    <div class="span4 well text-center">
        <h4>Servicios disponibles</h4>
        <br />
        <?php
        echo $this->Html->link(
             $this->Html->image( 'nubes.png', array( 'border' => 0, 'alt' => "Servicios en la nube", 'class' => 'btn btn-inverse' ) ),
             array( 'controller' => 'pages', 'action' => 'view', 'servicios' ),
             array( 'escape' => false ) );
        ?>
    </div>
</div>