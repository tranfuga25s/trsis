<?php
echo $this->Html->script( 'ckeditor/ckeditor', array( 'inline' => false ) ); 
?>
<div class="noticias">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
		<legend><?php echo __('Edit Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id_noticia');
		echo $this->Form->input('titulo');
		echo $this->Form->input('contenido', array( 'class' => 'ckeditor' ) );
		echo $this->Form->input('publicada');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<h3>Acciones</h3>
<ul>
	<li><?php echo $this->Form->postLink( 'Eliminar', array( 'action' => 'delete', $this->Form->value('Noticia.id_noticia')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id_noticia'))); ?></li>
	<li><?php echo $this->Html->link( 'Lista de Noticias', array( 'action' => 'index' ) );?></li>
</ul>