<?php
$this->set( 'title_for_layout', "Reporte de error" );
$this->Html->addCrumb( 'Reportes', array( 'action' => 'index' ) );
$this->Html->addCrumb( '#'.$feedback['Feedback']['id_feedback'] );
?>
<div class="btn-group">
<?php
echo $this->Html->link( 'Listado de errores', array( 'action' => 'index' ), array( 'class' => 'btn btn-primary' ) );
echo $this->Form->postLink( 'Eliminar', array( 'action' => 'delete', $feedback['Feedback']['id_feedback'] ), array( 'class' => 'btn btn-warning' ) , 'Esta seguro de eliminar este informe? ' );
?>
</div>
<div class="row-fluid">
    <div class="span12">
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
</div>