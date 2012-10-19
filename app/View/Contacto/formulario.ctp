<?php
$this->set( 'title_for_layout', "Contactese con nosotros" );
?>
<h2>Dirección de contacto</h2>
<div>
	Contactenos con nosotros a los siguientes telefonos:<br /><br />
	(+54) 342 154293436 <br />
	En Argentina<br />
</div>
<h2>Contacto directo</h2>
<div>
	Utilice el siguiente formulario para enviarnos su consulta:
	<?php
		echo $this->Form->create( 'contacto', array( 'url' => '/contacto/enviar' ) );
		echo $this->Form->input( 'nombre', array( 'label' => "Su nombre" ) );
		echo $this->Form->input( 'email', array( 'label' => "Su e-mail" ) );
		echo $this->Form->input( 'texto', array( 'label' => "Texto del mensaje:", 'type' => 'textarea' ) );
		echo $this->Form->end( 'Enviar' );
	?>	
</div>
