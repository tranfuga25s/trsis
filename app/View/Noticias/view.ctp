<h2><?php echo h($noticia['Noticia']['titulo']); ?></h2>
<small>Publicado el <?php echo date( 'd/m/y H:i', strtotime( $noticia['Noticia']['fecha'] ) ); ?></small><br /><br />
<?php echo $noticia['Noticia']['contenido']; ?>
<br />
<br />
<?php echo $this->Html->link( 'Volver al inicio', '/' ); ?>