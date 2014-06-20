<?php
$this->set( 'title_for_layout', "Nuestros clientes" );
$this->Html->addCrumb( 'Clientes' );
?>
<h2 class="text-center">Algunos de Nuestros clientes</h2>
<ul class="thumbnails">
    <li class="text-center">
        <?php echo $this->Html->image( 'clientes/logohicomp.png', array( 'border' => 0, 'alt' => 'HiComp Computación', 'height' => 150, 'class' => 'thumbnail' ) ); ?><br />
        <?php echo $this->Html->link( 'HiComp Computación', 'http://www.hicomp.com.ar/', array( 'alt' => 'Visitar página del cliente', 'class' => 'btn btn-lg btn-info'  ) ); ?>
    </li>
    <li class="text-center">
        <?php echo $this->Html->image( 'clientes/logoBS.png', array( 'border' => 0, 'alt' => 'BSComputación', 'style' => 'height: 200px;', 'class' => 'thumbnail' ) ); ?><br />
        <?php echo $this->Html->link( 'BSComputación',  'http://www.bscomputacion.com/', array( 'alt' => 'Visitar página del cliente', 'class' => 'btn btn-lg btn-info' ) ); ?>
    </li>
    <li class="text-center">
        <?php echo $this->Html->image( 'clientes/logoJhauPora.png', array( 'border' => 0, 'alt' => 'Jhau-Porá', 'style' => 'height: 200px;', 'class' => 'thumbnail' ) ); ?><br />
        <?php echo $this->Html->link( 'Dietetica Jhau-Porá',  '#', array( 'alt' => 'Jhau-pora', 'class' => 'btn btn-lg btn-info' ) ); ?>
    </li>
</ul>