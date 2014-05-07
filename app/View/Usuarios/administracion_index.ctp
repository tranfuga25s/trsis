<?php 
$this->set( 'title_for_layout', "Listado de usuarios" ); 
$this->Html->addCrumb( 'Administracion', array( 'actions' => 'cpanel' ) );
$this->Html->addCrumb( 'Usuarios' );
?>
<div class="btn-group">
<?php echo $this->Html->link( 'Nuevo Usuario', array('action' => 'add'), array( 'class' => 'btn btn-primary' ) );
      echo $this->Html->link( 'Lista de Clientes', array( 'controller' => 'clientes', 'action' => 'index' ), array( 'class' => 'btn btn-info' ) ); ?>
</div>
<br />
<h2>Lista de Usuarios</h2>
<table class="table table-bordered table-striped">
<tr>
		<th><?php echo $this->Paginator->sort('email', 'Razon Social' );?></th>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Razon Social' );?></th>
		<th><?php echo $this->Paginator->sort('cliente_id');?></th>
		<th class="actions">Acciones</th>
</tr>
<?php
foreach ($usuarios as $usuario): ?>
<tr>
	<td><?php echo $this->Html->link( h($usuario['Usuario']['email']), 'mailto:' . $usuario['Usuario']['email'] ); ?>&nbsp;</td>
	<td><?php echo h($usuario['Usuario']['razonsocial']); ?>&nbsp;</td>
	<td><?php echo $this->Html->link( '#'.$usuario['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $usuario['Cliente']['id'])); ?></td>
	<td class="actions">
		<?php echo $this->Html->link( 'Ver', array('action' => 'view', $usuario['Usuario']['id_usuario'])); ?>
		<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $usuario['Usuario']['id_usuario'])); ?>
		<?php echo $this->Html->link( 'Camb Contra', array( 'action' => 'cambiarContra', $usuario['Usuario']['id_usuario'] ) ); ?>
		<?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $usuario['Usuario']['id_usuario']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id_usuario'])); ?>
	</td>
</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?>	</p>

<div class="paging">
<?php
	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>