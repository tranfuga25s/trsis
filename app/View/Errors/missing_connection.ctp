<?php
$this->set( 'title_for_layout', "No disponible" );
$this->Html->addCrumb( 'No disponible' );
?>
<div class="row-fluid">
    <div class="span12">
        <h3>Oh! :(</h3>
        <p>Lamentablemente nuestra base de datos de cliente no est&aacute; disponible en estos momentos.</p>
        <p>Por favor intente m&aacute;s tarde.</p>
        <br />
        <?php echo $this->Html->link( 'Volver al inicio', '/', array( 'class' => 'btn btn-primary' ) ); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <h5>Informaci&oacute;n t&eacute;cnica</h5>
        <div style="display: none;">
            <p class="error">
                <strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
                <?php echo __d('cake_dev', '%s requires a database connection', $class); ?>
            </p>
            <?php echo $this->element('exception_stack_trace'); ?>
        </div>
    </div>
</div>
