<?php
$this->set( 'title_for_layout', "Versión Autónoma" );
$this->Html->addCrumb( "Versiones", array( 'controller' => 'pages', 'action' => 'display', 'servicios' ) );
$this->Html->addCrumb( "Autonoma" );
?>
<div class="row-fluid">
    <div class="span12">
        <h2>Versión Autonoma</h2>
    </div>
</div>

<div class="row-fluid">

    <div class="span5 well">
        <h4>Características</h4>
        <br />
        <ul>
            <li>Base de datos en un archivo en su computadora o un servidor de base de datos en un nodo.</li>
            <li>Administrable desde varios puestos de trabajo.</li>
            <li>Máximo control sobre todas las operaciones.</li>
            <li>Ideal para PyMES y pequeños emprendimientos.</li>
        </ul>
        <br />
    </div>

    <div class="span3 well text-center">
        <h4>Sin soporte</h4>
        $ 0.0
        <?php echo $this->Html->tag( 'span', 'Gratis!', array( 'class' => 'label label-success' ) ); ?>
    </div>

    <div class="span3 well text-center">
        <h4>Con soporte</h4>
        $ 50.00 <?php echo $this->Html->tag( 'span', 'por mes', array( 'class' => 'label' ) ); ?>
    </div>

    <div class="span6 well">
        <h4>Servicios disponibles</h4>
        <div class="btn-group">
            <?php
            echo $this->Html->link( 'Backup Online', array( 'controller' => 'pages', 'action' => 'display', 'servicios' ), array( 'class' => 'btn btn-primary' ) );
            echo $this->Html->link( 'Módulos a medida', array( 'controller' => 'pages', 'action' => 'display', 'servicios' ), array( 'class' => 'btn btn-info' ) );
            ?>
            <button class="btn disabled">Estadisticas detalladas</button>
        </div>
    </div>
</div>

<?php
$modulos = array(
    array( 'nombre' => 'Compras'                , 'imagen' => 'compras.png'     ),
    array( 'nombre' => 'Presupuestos'           , 'imagen' => 'presupuesto.png' ),
    array( 'nombre' => 'Facturas'               , 'imagen' => 'ventas.jpg'      ),
    array( 'nombre' => 'Recibos'                , 'imagen' => 'recibo.png'      ),
    array( 'nombre' => 'Cuentas Corrientes'     , 'imagen' => 'ctacte.png'      ),
    array( 'nombre' => 'Control de caja'        , 'imagen' => 'caja.png'        ),
    array( 'nombre' => 'Productos'              , 'imagen' => 'productos.png'   ),
    array( 'nombre' => 'Proveedores'            , 'imagen' => 'proveedores.jpg' ),
    array( 'nombre' => 'Servicio de suscripción', 'imagen' => 'servicios.png'   )
);
?>
<div class="row-fluid">
    <div class="span12 well">
        <h4>Módulos disponibles</h4>      
        <ul class="row-fluid thumbnails">
            <?php foreach( $modulos as $modulo ) : ?>
            <li class="span2">
                <div class="thumbnail">
                    <?php echo $this->Html->image( 'modulos/'.$modulo['imagen'], array( 'style' => 'width: 50px; height: 50px; margin-top: 9px;'  ) ); ?>
                    <div class="caption text-center"><?php echo $this->Html->link( $modulo['nombre'], array( 'controller' => 'pages', 'action' => 'display', 'modulos' ) ); ?></div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
