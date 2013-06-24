<?php
$this->set( 'title_for_layout', "Contactese con nosotros" );
$this->Html->addCrumb( 'Contacto' );
?>
<div class="row-fluid">
    <div class="span12 well">
        <?php echo $this->Form->create( 'contacto', array( 'url' => '/contacto/enviar' ) ); ?>
        <fieldset>
            <legend>Contacto Directo</legend>
            Utilice el siguiente formulario para enviarnos su consulta:<br />


        	<?php

        		echo $this->Form->input( 'nombre', array( 'label' => "Su nombre" ) );
        		echo $this->Form->input( 'email', array( 'label' => "Su e-mail" ) );
        		echo $this->Form->input( 'texto', array( 'label' => "Texto del mensaje:", 'type' => 'textarea' ) );
                echo $this->Recaptcha->display(); ?>
        </fieldset>
        <div class="form-actions">
            <?php echo $this->Form->end( array( 'label' => 'Enviar', 'class' => 'btn btn-primary' ) ); ?>
        </div>

    </div>
</div>