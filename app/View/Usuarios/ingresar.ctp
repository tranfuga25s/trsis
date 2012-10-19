<?php
$this->set( 'title_for_layout', "Ingreso de clientes" );
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

	$(function() {
		$("#todo" ).accordion( { active: false, autoHeight: false, navigation: true } );
		$("a", "#ingreso" ).button();
		$("a", "#nuevo" ).button();
		$("input", ".submit" ).button()
		
		
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
		$( "#formRecordarDatos" ).dialog( "open" );
	}
	
	function registrarme() {
		var aValid = true;
		$("#bayuda").empty();
		$("#UsuarioNombre").removeClass("ui-state-error");
		$("#UsuarioNombre").removeClass("ui-state-error");
		$("#UsuarioEmail").removeClass("ui-state-error");
		aValid = aValid && checkLength( $("#UsuarioNombre"), "Nombre", 3, 80, $("#bayuda") );
		aValid = aValid && checkLength( $("#UsuarioEmail"), "email", 6, 80, $("#bayuda") );
		// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
		aValid = aValid && checkRegexp(  $("#UsuarioEmail"), /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com", $("#bayuda") );

		if ( aValid ) {
			$("#UsuarioRegistrarForm").submit();
		}
	}

</script>
<div id="todo">
	<h3><a href="#">Soy un cliente nuevo</a></h2>
	<div class="centrada" id="nuevo">
		<div id="bayuda"></div>
		<?php 
		echo $this->Form->create( 'Usuario', array( 'action' => 'registrar' ) );
		echo $this->Form->input( 'nombre'  , array( 'label' => 'Nombre y apellido', 'class' => 'ui-widget-content ui-corner-all' ) );
		echo $this->Form->input( 'email'   , array( 'label' => 'Email'            , 'class' => 'ui-widget-content ui-corner-all' ) );
		echo $this->Form->input( 'telefono', array( 'label' => 'Teléfono'         , 'class' => 'ui-widget-content ui-corner-all' ) );
		echo $this->Form->end();
		echo $this->Html->tag( 'a', 'Registrarme', array( 'onclick' => 'registrarme()', 'class' => 'input' ) );
		?>
	</div>
	<h3><a href="#">Ya soy cliente</a></h2>
	<div class="centrada" id="ingreso">
		<?php 
		echo $this->Form->create( 'Usuario', array( 'action' => 'ingresar') );
		echo $this->Form->input( 'username', array( 'label' => 'Numero de cliente', 'class' => 'ui-widget-content ui-corner-all'  ) );
		echo $this->Form->input( 'password', array( 'label' => 'Codigo', 'class' => 'ui-widget-content ui-corner-all'   ) );
		echo "<table><tbody><tr><td>";
		echo $this->Form->end( 'Ingresar', array( 'div' => false ) );
		echo "</td><td>";
		echo $this->Html->tag( 'a', 'Limpiar', array( 'onclick' => "limpiarIngreso()" ) );
		echo "</td><td>";
		echo $this->Html->tag( 'a', '¡Olvide mis datos!', array( 'onclick' => "olvideDatos();" ) );
		echo "</td></tr></tbody></table>";
		?>
		<br />
	</div>
</div>
<div id="formRecordarDatos" title="Recuperar datos de acceso">
	<?php echo $this->Form->create( 'Usuario', array( 'action' => 'recordarContra', 'id' => 'formRecordarDatos' ) ); ?>
	<div id="ayudas"></div>
	<?php echo $this->Form->input( 'email', array( 'label' => "Email", 'class' => "text ui-widget-content ui-corner-all", 'id' => "email" ) );
		  echo $this->Form->end(); ?>
</div>