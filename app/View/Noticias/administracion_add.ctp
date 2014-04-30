<?php
echo $this->Html->script( 'ckeditor/ckeditor', array( 'inline' => false ) );
$this->set( 'title_for_layout', "Editar una noticia" );
$this->Html->addCrumb( 'Noticias', array( 'controller' => 'noticias', 'action' => 'index' ) );
$this->Html->addCrumb( 'Agregar' );
?>
<div class="btn-group">
<?php echo $this->Html->link( 'Lista de Noticias', array( 'action' => 'index'), array( 'class' => 'btn btn-info' ) ); ?>
</div>

echo $this->Html->link( 'Lista  de Noticias', array( 'action' => 'index' ), array( 'class' => 'btn btn-primary' ) ); ?>
<div class="noticias">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
		<legend>Agregar noticia</legend>
	<?php
		echo $this->Form->input('titulo', array( 'type' => 'text', 'class' => 'input-xxlarge', 'placeholder' => 'Titulo de la noticia' ) );
		echo $this->Form->input('contenido', array( 'class' => 'ckeditor' ) );
		echo $this->Form->input('publicada', array( 'class' => 'checkbox' ) );
		echo $this->Form->input('fecha', array( 'dateFormat' => 'DMY'));
	?>
	</fieldset>
<?php echo $this->Form->end( 'Enviar' );?>
</div>