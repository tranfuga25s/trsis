<script> $( function() { $("a","#acciones").button(); }); </script>
<div id="acciones">
	<?php echo $this->Html->link( 'Listado de errores', array( 'action' => 'index' ) ); ?>
</div>
<br />
<div class="feedbacks">
<h2>Reporte de error #<?php echo $feedback['Feedback']['id_feedback']; ?></h2>
	<dl>
		<dt>Plugin cliente:</dt>
		<dd>
			<?php echo h($feedback['Feedback']['cliente']); ?>
			&nbsp;
		</dd>
		<dt>Fecha de env&iacute;o:</dt>
		<dd>
			<?php echo date( 'd/m/Y H:i', strtotime( $feedback['Feedback']['fecha']) ); ?>
			&nbsp;
		</dd>
		<dt>Contenido:</dt>
		<?php echo str_replace( '\n', '<br />', $feedback['Feedback']['contenido'] ); ?>
			&nbsp;
	</dl>
</div>