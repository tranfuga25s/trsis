<div class="noticias">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
		<legend><?php echo __('Edit Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id_noticia');
		echo $this->Form->input('titulo');
		echo $this->Form->input('contenido');
		echo $this->Form->input('publicada');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<h3>Acciones</h3>
<ul>
	<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id_noticia')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id_noticia'))); ?></li>
	<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index'));?></li>
</ul>