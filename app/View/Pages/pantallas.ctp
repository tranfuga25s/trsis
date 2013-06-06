<?php
$this->set( 'title_for_layout', "Ver el programa" );
$this->Html->addCrumb( 'Gestotux' );
$this->Html->addCrumb( 'Ver el programa' );
?>
<style>
.thumbnails > .thumbnail {
    min-height: 200px;
}
</style>
<h3>Ver el programa</h3>
Aqu&iacute; podrá ver algunas de las pantallas que podr&aacute; utilizar en el programa:<br />
<ul class="thumbnails">
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/pantalla_inicial.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/pantalla_inicial.png',
                                array( 'escape' => false ) ); ?><br>
        <br />Pantalla Principal
    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                            $this->Html->image( 'galeria/image67.png',
                                    array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                    , '/img/galeria/image67.png',
                                    array( 'escape' => false ) ); ?>
            <br />Listado de clientes
    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image70.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image70.png',
                                array( 'escape' => false ) ); ?>
        <br />Resumen de cuenta corriente
    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image86.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image86.png',
                                array( 'escape' => false ) ); ?>
        <br />Visor de recibos
    </li>
    <li class="span3 thumbnail text-center">
                <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image62.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image62.png',
                                array( 'escape' => false ) ); ?>
        <br />Agregar recibo

    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image19.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image19.png',
                                array( 'escape' => false ) ); ?>
        <br />Agregar Factura
    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image15.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image62.png',
                                array( 'escape' => false ) ); ?>
        <br />Agregar presupuesto
    </li>
    <li class="span3 thumbnail text-center">
        <?php echo $this->Html->link(
                        $this->Html->image( 'galeria/image33.png',
                                array( 'border' => 0, 'width' => 200, 'alt' => 'Pantalla inicial' ) )
                                , '/img/galeria/image33.png',
                                array( 'escape' => false ) ); ?>
        <br />Datos de clientes
    </li>
</ul>