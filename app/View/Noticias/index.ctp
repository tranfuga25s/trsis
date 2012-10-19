<script>
	$( function() {
		$("a","#acciones").button();
	});
</script>
<div id="acciones">
	<?php echo $this->Html->link( 'Nueva Noticia', array( 'action' => 'add' ) ); ?>
</div>
<br />
<br />	
<div>
	<h2>Noticias</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('publicada');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th class="actions">Acciones</th>
	</tr>
	<?php
	$i = 0;
	foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo h($noticia['Noticia']['titulo']); ?>&nbsp;</td>
		<td><?php if( $noticia['Noticia']['publicada'] ) {
					echo "Si";
				} else {
					echo "No";
				} ?></td>
		<td><?php echo h($noticia['Noticia']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( 'Ver', array('action' => 'view', $noticia['Noticia']['id_noticia'])); ?>
			<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $noticia['Noticia']['id_noticia'])); ?>
			<?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $noticia['Noticia']['id_noticia']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id_noticia'])); ?>
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
</div>