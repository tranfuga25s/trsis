<script>
	$( function() {
		$("a","#acciones").button();
	});
</script>
<div id="acciones">
	<?php echo $this->Html->link( 'Lista  de Noticias', array( 'action' => 'index' ) ); ?>
</div>
<div class="noticias">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
		<legend><?php echo __('Add Noticia'); ?></legend>
	<?php
		echo $this->Form->input('titulo', array( 'rows' => 1 ) );
		echo $this->Form->input('contenido');
		echo $this->Form->input('publicada');
		echo $this->Form->input('fecha', array( 'dateFormat' => 'DMY'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>