<?php 
$this->set( 'title_for_layout', "Datos de usuario #".$usuario['Usuario']['id_usuario'] ); 
$this->Html->addCrumb( 'Administracion', array( 'action' => 'cpanel' ) );
$this->Html->addCrumb( 'Usuarios', array( 'action' => 'view' ) );
$this->Html->addCrumb( 'Ver' );
?>
<div class="btn-group">
<?php echo $this->Html->link( 'Editar Usuario', array( 'action' => 'edit', $usuario['Usuario']['id_usuario'] ), array( 'class' => 'btn btn-primary' ) );
      echo $this->Form->postLink( 'Eliminar Usuario', array('action' => 'delete', $usuario['Usuario']['id_usuario']), array( 'class' => 'btn btn-danger' ), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id_usuario']));
      echo $this->Html->link( 'Lista de Usuarios', array('action' => 'index'), array( 'class' => 'btn btn-info' ));
      echo $this->Html->link( 'Nuevo Usuario', array('action' => 'add'), array( 'class' => 'btn btn-inversed' )); ?>
</div>
<br />
<h2> Datos del Usuario #<?php echo $usuario['Usuario']['id_usuario']; ?></h2>
<dl>
	<dt>Email</dt>
	<dd>
		<?php echo $this->Html->link( h($usuario['Usuario']['email']), 'mailto:'.$usuario['Usuario']['email'] ); ?>
		&nbsp;
	</dd>
        <dt>Cliente</dt>
        <dd>
            <?php echo $this->Html->link( $usuario['Cliente']['razon_social'], array( 'controller' => 'clientes', 'action' => 'view', $usuario['Cliente']['id'] ) ); ?>
            &nbsp;
        </dd>
        <dt>Ultimo ingreso</dt>
        <dd><?php echo $this->Time->i18nFormat( $usuario['Usuario']['ultimo_acceso'] ); ?></dd>
        <dt>Ultimo Backup</dt>
        <dd><?php echo $this->Time->i18nFormat( $usuario['Usuario']['ultimo_backup'] ); ?></dd>
</dl>