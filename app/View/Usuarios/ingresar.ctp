<?php
$this->set( 'title_for_layout', "Ingreso de clientes" );
$this->Html->addCrumb( 'Ingreso de clientes' );
?>
<script>
		var email = $( "#email" );
		allFields = $( [] ).add( email );

		function updateTips( t, oa ) {
			  oa.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				oa.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}

		function checkLength( o, n, min, max, oa ) {
			if ( o.val().length > max || o.val().length < min ) {
				o.addClass( "ui-state-error" );
				updateTips( "El largo de " + n + " debe ser entre " +
					min + " y " + max + " caracteres.", oa );
				return false;
			} else {
				return true;
			}
		}

		function checkRegexp( o, regexp, n, oa ) {
			if ( !( regexp.test( o.val() ) ) ) {
				o.addClass( "ui-state-error" );
				updateTips( n, oa );
				return false;
			} else {
				return true;
			}
		}

	$( "#formRecordarDatos" ).dialog({
			autoOpen: false,
			width: 350,
			modal: true,
			buttons: {
				"Recuperar datos": function() {
					var bValid = true;
					allFields.removeClass( "ui-state-error" );

					bValid = bValid && checkLength( $("#email"), "email", 6, 80, $("#ayudas") );

					// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
					bValid = bValid && checkRegexp(  $("#email"), /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com", $("#ayudas") );

					if ( bValid ) {
						$("form","#formRecordarDatos").submit();
						$( this ).dialog( "close" );
					}
				},
				"Cancelar": function() {
					$( this ).dialog( "close" );
				}
			}
		});
	});


	function limpiarIngreso() {
		$("#UsuarioNumCliente").val("");
		$("#UsuarioCodigo").val("");
	}

	function olvideDatos() {
		$( "#RecordarDatos" ).modal();
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
        Si desea ingresar al sistema pero no posee una cuenta, pongase en contacto no nostros y se la proveeremos.
        <br />
        <br />
        <br />
        Si usted ya es un cliente pero no conoce su clave de acceso, solicitela aqui.
        <br />
        <br />
    </div>
</div>


<div class="modal hide fade" id="RecordarDatos">
  <?php echo $this->Form->create( 'Usuario', array( 'action' => 'recordarContra', 'id' => 'formRecordarDatos' ) ); ?>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Recuperar datos de acceso al sistema</h3>
  </div>
  <div class="modal-body">
    <p>Para recuperar los datos de acceso por favor ingrese su cuenta de correo habilitada:</p>
    <?php echo $this->Form->input( 'email', array( 'label' => "Email", 'class' => "text ui-widget-content ui-corner-all", 'id' => "email" ) ); ?>
  </div>
  <div class="modal-footer">
    <?php echo $this->Form->button( 'Cerrar', "#", array( 'class' => "btn" ) ); ?>
    <?php echo $this->Form->submit( array( 'label' => 'Recuperar', 'class' => "btn btn-primary" ) ); ?>
  </div>
  <?php echo $this->Form->end(); ?>
</div>