<div class="feedbacks">
	<h2>Reportes de errores</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_feedback', "#Reporte");?></th>
			<th><?php echo $this->Paginator->sort('cliente', "Plugin");?></th>
			<th><?php echo $this->Paginator->sort('fecha', "Fecha de la envío" );?></th>
			<th class="actions">Acciones</th>
	</tr>
	<?php
	foreach ($feedbacks as $feedback): ?>
	<tr>
		<td>#<?php echo h($feedback['Feedback']['id_feedback']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['cliente']); ?>&nbsp;</td>
		<td><?php echo date( 'd/m/Y H:i', strtotime( $feedback['Feedback']['fecha']) ); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( 'Ver', array( 'action' => 'view', $feedback['Feedback']['id_feedback'] ) ); ?>
			<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $feedback['Feedback']['id_feedback'] ) ); ?>
			<?php echo $this->Form->postLink( 'Eliminar', array( 'action' => 'delete', $feedback['Feedback']['id_feedback'] ), null, 'Esta seguro de eliminar este informe? ' ); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p><?php echo $this->Paginator->counter(array( 'format' => 'Pagina {:page} de {:pages}, mostrando {:current} de {:count}, iniciando en {:start} al {:end}' ) ); ?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->first( '<< Primero' );
		echo $this->Paginator->prev('< anterior', array(), null, array( 'class' => 'prev disabled' ) );
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next( 'Siguiente  >', array(), null, array( 'class' => 'next disabled' ) );
		echo $this->Paginator->last( 'Ultimo  >' );
	?>
	</div>
</div>

