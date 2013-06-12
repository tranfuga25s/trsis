<?php
$this->set( 'title_for_layout', $noticia['Noticia']['titulo'] );
$this->Html->addCrumb( 'Noticias' );
$this->Html->addCrumb( $noticia['Noticia']['titulo'] );
?>
<h2><?php echo h($noticia['Noticia']['titulo']); ?></h2>
<small>Publicado el <?php echo date( 'd/m/y H:i', strtotime( $noticia['Noticia']['fecha'] ) ); ?></small><br /><br />
<?php echo $noticia['Noticia']['contenido']; ?>
<br />
<br />
<?php echo $this->Html->link( 'Volver al inicio', '/', array( 'class' => 'btn btn-primary' ) ); ?>