<?php 
$this->set( 'title_for_layout', "Historial de backups" );
?>
<script>
$( function() {
	$("a", "#historicos" ).button();
});
</script>
<div id="historicos">
	<h2>Historicos de backups realizados</h2>
	<br />
	<div class="acciones">
		<?php echo $this->Html->link( 'Volver', array( 'controller' => 'ServicioBackup', 'action' => 'inicio', $id_usuario, $id_servicio_backup ) ); ?>
	</div>
	<br />
	<?php
	if( count( $historial ) <= 0 ) {
		echo "Usted todavía no realizó ningún backup";
	} else {
		$numero = 1; 
	?>
	<p><b>Cantidad de items actualmente:</b> <?php echo count( $historial ); ?></p>
	<table cellpadding="0" cellspacing="0" border="1">
		<tbody>
			<th style="text-align: center; background-color: #00AFF0; border: 1px solid black;">Numero</th>
			<th style="background-color: #00AFF0; border: 1px solid black;">Fecha y hora</th>
			<th style="text-align: center; background-color: #00AFF0; border: 1px solid black;">Tama&ntilde;o</th>
			<th style="text-align: center; background-color: #00AFF0; border: 1px solid black;">Acciones</th>
			<?php foreach( $historial as $b ) : ?>
			<tr>
				<td style="text-align: center; border: 1px solid black;">#<?php echo $numero; ?></td>
				<td style="border: 1px solid black;"><?php echo $b['Backup']['fecha']; ?></td>
				<td style="text-align: right; border: 1px solid black;"><?php echo $this->Number->toReadableSize( $b['Backup']['tamano'] ); ?></td>
				<td style="text-align: right; border: 1px solid black;">
					<?php echo $this->Html->link( 'Descargar', array( 'action' => 'descargar', $b['Backup']['id_backup'], $id_servicio_backup, $id_usuario ) ); ?>
					<?php echo $this->Html->link( 'Eliminar', array( 'action' => 'delete', $b['Backup']['id_backup'], $id_servicio_backup, $id_usuario ) ); ?>
				</td>
			</tr>
			<?php $numero+=1; endforeach; ?>
		</tbody>
	</table>
	<?php } ?>
</div>