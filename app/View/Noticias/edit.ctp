<?php
echo $this->Html->script( 'ckeditor/ckeditor', array( 'inline' => false ) );
$this->set( 'title_for_layout', "Editar una noticia" );
$this->Html->addCrumb( 'Noticias', array( 'controller' => 'noticias', 'action' => 'index' ) );
$this->Html->addCrumb( 'Editar' );
?>
<div class="btn-group">
<?php echo $this->Form->postLink( 'Eliminar', array( 'action' => 'delete', $this->Form->value( 'Noticia.id_noticia' ) ), array( 'class' => 'btn btn-warning' ), __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id_noticia')));
      echo $this->Html->link( 'Lista de Noticias', array('action' => 'index'), array( 'class' => 'btn btn-info'));?>
</div>
<div class="noticias">
    <?php echo $this->Form->create('Noticia'); ?>
	<fieldset>
		<legend>Editar Noticia</legend>
    	<?php
    		echo $this->Form->input( 'id_noticia' );
    		echo $this->Form->input( 'titulo', array( 'type' => 'text' ) );
    		echo $this->Form->input( 'contenido', array( 'class' => 'ckeditor' ) );
    		echo $this->Form->input( 'publicada' );
    		echo $this->Form->input( 'fecha', array( 'dateFormat' => 'DMY') );
    	?>
	</fieldset>
	<div class="form-actions">
	    <?php echo $this->Form->submit( 'Guardar' );?>
	</div>
    <?php echo $this->Form->end(); ?>
</div>