<?php
$this->set( 'title_for_layout', "Ingreso de clientes" );
$this->Html->addCrumb( 'Ingreso de clientes' );
?>
<script>
	function limpiarIngreso() {
		$("#UsuarioNumCliente").val("");
		$("#UsuarioCodigo").val("");
	}

	function olvideDatos() {
		$( "#formRecordarDatos" ).modal();
	}

</script>
<div class="row-flid">
    <div id="todo" class="span5 text-center">
        <?php echo $this->Form->create( 'Usuario', array( 'action' => 'ingresar') ); ?>
        <fieldset>
            <legend>Ya soy cliente</legend>
            <?php
    		echo $this->Form->input( 'username', array( 'label' => 'Numero de cliente', 'class' => 'ui-widget-content ui-corner-all'  ) );
    		echo $this->Form->input( 'password', array( 'label' => 'Codigo', 'class' => 'ui-widget-content ui-corner-all'   ) ); ?>
    		<div class="form-actions">
                <?php
                echo $this->Form->submit( 'Ingresar', array( 'div' => false, 'class' => 'btn btn-success' ) );
                echo "  ";
                echo $this->Html->tag( 'a', 'Limpiar', array( 'onclick' => "limpiarIngreso()", 'class' => 'btn btn-primary' ) );
                echo "  ";
                echo $this->Html->tag( 'a', '¡Olvide mis datos!', array( 'onclick' => "olvideDatos();", 'class' => 'btn' ) );
                ?>
    		</div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>

    <div class="span5 well">
        <br />
        Si desea ingresar al sistema pero no posee una cuenta, pongase en contacto con nostros y se la proveeremos.
        <br />
        <br />
        <br />
        Si usted ya es un cliente pero no conoce su clave de acceso: <br />
        <?php echo $this->Html->link( 'solicitela aquí', '#', array( 'class' => 'btn btn-success', 'onclick' => "olvideDatos();" ) ); ?>
        <br />
    </div>
</div>


<div class="modal hide fade" id="formRecordarDatos">
    <?php echo $this->Form->create( 'Usuario', array( 'action' => 'recordarContra', 'id' => 'formRecordarDatos' ) ); ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Recuperar Datos de acceso</h3>
    </div>
    <div class="modal-body">
        Por favor, ingrese la dirección de email con la cual se encuentra registrado en el sistema para recuperar los datos de acceso:
        <?php echo $this->Form->input( 'email', array( 'label' => "Email", 'class' => "text ui-widget-content ui-corner-all", 'id' => "email" ) ); ?>
    </div>
    <div class="modal-footer">
    <?php
        echo $this->Form->submit( 'Recuperar datos', array( 'class' => 'btn btn-success' ) );
        echo $this->Form->button( 'Cancelar', array( 'class' => 'btn' ) );
    ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>