<?php
$this->set( 'title_for_layout', "Nuestros clientes" );
$this->Html->addCrumb( 'Clientes' );
?>
<h2 class="text-center">Algunos de Nuestros clientes</h2>
<div class="row">
    <div class="col-lg-3 text-center">
        <?php echo $this->Html->image( 'logohicomp.png', array( 'border' => 0, 
                                                                'alt' => 'HiComp Computación', 
                                                                'height' => 150, 
                                                                'class' => 'img-thumbnail' ) ); ?><br />
        <?php echo $this->Html->link(   'HiComp Computación', 
                                        'http://www.hicomp.com.ar/', 
                                        array( 'alt' => 'Visitar página del cliente', 
                                               'class' => 'btn btn-info'  ) ); ?>
    </div>
    
    <div class="col-lg-3 text-center">
        <?php echo $this->Html->image( 'logoBS.png', array( 'border' => 0, 
                                                            'alt' => 'BSComputación', 
                                                            'height' => 150, 
                                                            'class' => 'img-thumbnail' ) ); ?><br />
        <?php echo $this->Html->link(   'BSComputación', 
                                        'http://www.bscomputacion.com/', 
                                        array( 'alt' => 'Visitar página del cliente', 
                                               'class' => 'btn btn-info'  ) ); ?>        
    </div>
</div>