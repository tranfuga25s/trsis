<?php

class ServiciosController extends AppController {

    public function beforeFilter() {
    	$this->Auth->allow('*');
    }

	public function isAuthorized() {
		if( $this->Auth->loggedIn() ) {
			return true;
		} else {
			return false;
		}
	}
	
	public function alta() {
		$servicio = $tipo = null;
		if( isset( $this->request->params['named']['servicio'] ) )
		{
			$servicio = $this->request->params['named']['servicio'];
		} else {
			throw new NotFoundException( 'No se puede dar de alta -nada-' );
		}
		if( $servicio == "backup" ) {
			// Veo cual de los 2
			if( !isset( $this->request->params['named']['clase'] ) ) {
				throw new NotFoundException( 'No se sabe que tipo de servicio de backup dar de alta' );
			} else {
				$tipo = $this->request->params['named']['clase'];
			}
			if( $tipo == "basico" ) {
				$this->redirect( array( 'action' => 'altaBackupBasico' ) );	
			} else if( $tipo == "extra" ) {
				$this->redirect( array( 'action' => 'altaBackupExtra' ) );
			} else {
				throw new NotFoundException( "No se sabe que tipo de servicio de backup realizar" );
			}
		} else if( $servicio == "estadisticas" ) {
			throw new NotFoundException( "No implementado todavía" );
		} else {
			throw new NotFoundException( "No se sabe que servicio dar de alta" );
		}
	}

	public function altaBackupBasico()
	{
		// Veo si está loggeado
		if( !$this->Auth->loggedIn() ) {
			$this->redirect( array( 'controller' => 'usuarios', 'action' => 'ingresar' ) );
		} else {
			$id_usuario = $this->Auth->user( 'id_usuario' );
		}
		// Identificador del servicio
		$id_servicio_backup = 1;
		$this->loadModel( "ServicioBackup" );
		$this->ServicioBackup->id = $id_servicio_backup;
		$id_servicio = $this->ServicioBackup->field( 'id_servicio' );
		// Veo si no está dado de alta ya
		$this->loadModel( 'ServicioBackupUsuario');
		if( $this->ServicioBackupUsuario->verificarRelacionUsuario( $id_usuario, $id_servicio ) ) {
			$this->Session->setFlash( 'Usted ya se encuentra dado de alta al servicio' );
			$this->redirect( array( 'controller' => 'servicio_backup', 'action' => 'inicio', $id_usuario ) );
		}
		// Agrego el cliente al servicio
		if( ! $this->ServicioBackupUsuario->asociar( $id_usuario, $id_servicio ) ) {
			$this->setFlash( 'Existió un error al intentar asociar el cliente al servicio' );
			$this->redirect( '/' );
		}
		// Lo llevo a la pagina del backup
		$this->redirect( array( 'controller' => 'servicio_backup', 'action' => 'inicio', $id_usuario ) );
	}
	
	public function altaBackupExtra()
	{
		// Veo si está loggeado
		if( !$this->Auth->loggedIn() ) {
			$this->redirect( array( 'controller' => 'usuarios', 'action' => 'ingresar' ) );
		} else {
			$id_usuario = $this->Auth->user( 'id_usuario' );
		}
		// Identificador del servicio
		$id_servicio_backup = 2;
		$this->loadModel( "ServicioBackup" );
		$this->ServicioBackup->id = $id_servicio;
		$id_servicio = $this->ServicioBackup->field( 'id_servicio' );
		// Veo si no está dado de alta ya
		$this->loadModel( 'Servicio');
		if( $this->ServicioBackupUsuario->verificarRelacionUsuario( $id_usuario, $id_servicio ) ) {
			$this->setFlash( 'Usted ya se encuentra dado de alta al servicio.' );
			$this->redirect( array( 'controller' => 'servicio_backup', 'action' => 'inicio', $id_usuario ) );
		}
		// Agrego el cliente al servicio
		if( ! $this->ServicioBackupUsuario->asociar( $id_usuario, $id_servicio ) ) {
			$this->setFlash( 'Existió un error al intentar asociar el cliente al servicio' );
			$this->redirect( '/' );
		}
		// Lo llevo a la pagina del backup
		$this->redirect( array( 'controller' => 'servicio_backup', 'action' => 'inicio', $id_usuario ) );
	}
	
}

?>