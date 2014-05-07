<?php 
$this->set( 'title_for_layout', "Editar datos de usuario" ); 
$this->Html->addCrumb( 'Administracion', array( 'action' => 'cpanel' ) );
$this->Html->addCrumb( 'Usuarios', array( 'action' => 'index') );
$this->Html->addCrumb( 'Editar' );
?>
<div class="btn-group">
	<?php echo $this->Form->postLink( 'Eliminar Usuario', array( 'action' => 'delete', $this->Form->value( 'Usuario.id_usuario' ) ), array( 'class' => 'btn btn-danger'), __( 'Are you sure you want to delete # %s?', $this->Form->value( 'Usuario.id_usuario' ) ) ); ?>&nbsp;
	<?php echo $this->Html->link( 'Lista de Usuarios', array( 'action' => 'index' ), array( 'class' => 'btn btn-info') );?>&nbsp;
	<?php echo $this->Html->link( 'Lista de Clientes', array( 'controller' => 'clientes', 'action' => 'index' ), array( 'class' => 'btn btn-primary') ); ?>
</div>
<br />
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><h2>Editar un usuario</h2></legend>
	<?php
		echo $this->Form->input( 'id_usuario'    );
		echo $this->Form->input( 'email'         );
                echo $this->Form->input( 'cliente_id'    );
		echo $this->Form->end( 'Guardar cambios', array( 'class' => 'btn btn-primary' ) );
        ?>
</fieldset>
