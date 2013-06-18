<?php $this->set( 'title_for_layout', "Servicios de backup" );
$this->Html->addCrumb( 'Servicios', array( 'controller' => 'pages', 'action' => 'display', 'servicios' ) );
$this->Html->addCrumb( 'Backup' );
echo $this->Html->css( 'precios' );
?>
<h1> Sistema de backup On-Line</h1>
<div class="row-fluid">
    <div class="span12 well">
        <h3>Características del servicio b&aacute;sico</h3>
        <ul>
            <li><b>Almacenamiento disponible:</b> 1 Gigabytes.</li>
            <li><b>Cantidad de programas distintos:</b> 1</li>
            <li><b>Cantidad de backups historicos:</b> Hasta llenar capacidad almacenamiento o 100 historicos.</li>
            <li><b>Restauracion rapida:</b> Solo base de datos, no preferencias.</li>
        </ul>

        <div class="row-fluid pricing-table">
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">1 Mes</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$ 25</b></li>
                    <li class="plan-feature">Descuento: 0%</li>
                    <li class="plan-feature">Precio Final: <b>$25</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'basico',
                                                             'oferta' => 'normal' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">3 Meses</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$75</b></li>
                    <li class="plan-feature">Descuento:  5%</li>
                    <li class="plan-feature">Precio Final: <b>$ 71,25</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'basico',
                                                             'oferta' => '5' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">6 Meses</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$150</b></li>
                    <li class="plan-feature">Descuento:  10%</li>
                    <li class="plan-feature">Precio Final: <b>$ 135,25</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'basico',
                                                             'oferta' => '10' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">1 Año</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$250</b></li>
                    <li class="plan-feature">Descuento:  15%</li>
                    <li class="plan-feature">Precio Final: <b>$ 212,50</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'basico',
                                                             'oferta' => '15' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="span12 well">
        <h3>Características del servicio extra</h3>
        <ul>
            <li><b>Almacenamiento disponible:</b> 4 Gigabytes.</li>
            <li><b>Cantidad de programas distintos:</b> ilimitados</li>
            <li><b>Cantidad de backups historicos:</b> Hasta llenar capacidad almacenamiento.</li>
            <li><b>Restauracion rapida:</b> Base de datos y preferencias.</li>
        </ul>
        <div class="row-fluid pricing-table">
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">1 Mes</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$ 50</b></li>
                    <li class="plan-feature">Descuento: 0%</li>
                    <li class="plan-feature">Precio Final: <b>$50</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'extra',
                                                             'oferta' => 'normal' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">3 Meses</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$150</b></li>
                    <li class="plan-feature">Descuento:  5%</li>
                    <li class="plan-feature">Precio Final: <b>$ 143,50</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'extra',
                                                             'oferta' => '5' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">6 Meses</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$300</b></li>
                    <li class="plan-feature">Descuento:  10%</li>
                    <li class="plan-feature">Precio Final: <b>$ 270,00</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'extra',
                                                             'oferta' => '10' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
            &nbsp;
            <div class="span2 plan plan-mouseover">
                <div class="plan-name">1 Año</div>
                <ul>
                    <li class="plan-feature">Normal: <b>$600</b></li>
                    <li class="plan-feature">Descuento:  15%</li>
                    <li class="plan-feature">Precio Final: <b>$ 510,00</b></li>
                    <li class="plan-feature">
                        <?php echo $this->Html->link( "Contratar!",
                                                      array( 'controller' => 'servicios',
                                                             'action' => 'alta',
                                                             'servicio' => 'backup',
                                                             'clase' => 'extra',
                                                             'oferta' => '15' ),
                                                      array( 'class' => "btn btn-success btn-plan-select" )
                                                    ); ?>
                    </li>
                </ul>
            </div>
    </div>
</div>
