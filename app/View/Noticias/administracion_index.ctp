<div class="btn-group">
	<?php echo $this->Html->link( 'Nueva Noticia', array( 'action' => 'add' ), array( 'class' => 'btn btn-primary') ); ?>
</div>
<div class="row-fluid">
    <div class="span12">
    	<h2>Noticias</h2>
    	<table class="table table-bordered table-hover table-striped">
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
    		<td><?php echo $this->Time->nice( $noticia['Noticia']['fecha'] ); ?>&nbsp;</td>
    		<td class="actions">
    			<?php echo $this->Html->link( 'Ver', array('action' => 'view', $noticia['Noticia']['id_noticia'] ), array( 'class' => 'btn btn-small') ); ?>
    			<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $noticia['Noticia']['id_noticia']), array( 'class' => 'btn btn-small') ); ?>
    			<?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $noticia['Noticia']['id_noticia']), array( 'class' => 'btn btn-small') , __('Are you sure you want to delete # %s?', $noticia['Noticia']['id_noticia'])); ?>
    		</td>
    	</tr>
        <?php endforeach; ?>
    	</table>
    	<p><?php echo $this->Paginator->counter(array('format' => 'Pagina {:page} de {:pages}, mostrando {:current} de {:count}, desde {:start} hasta {:end}')); ?></p>

    	<div class="pagination">
    	    <ul>
    	        <li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
    	        <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
    	        <li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
    	    </ul>
    	</div>
	</div>
</div>