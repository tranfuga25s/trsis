<!-- Formulario de ingreso -->

<div class="row-flid">
    <div id="todo" class="span5 text-center">
        <?php echo $this->Form->create( 'Usuario', array( 'action' => 'administracion_ingresaradmin') ); ?>
        <fieldset>
            <legend>Ingreso a la administracion</legend>
            <?php
            echo $this->Form->input( 'username', array( 'label' => 'Nombre de usuario', 'class' => 'ui-widget-content ui-corner-all'  ) );
            echo $this->Form->input( 'password', array( 'label' => 'Codigo', 'class' => 'ui-widget-content ui-corner-all'   ) ); ?>
            <div class="form-actions">
                <?php echo $this->Form->submit( 'Ingresar', array( 'div' => false, 'class' => 'btn btn-success' ) ); ?>
            </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>

</div>