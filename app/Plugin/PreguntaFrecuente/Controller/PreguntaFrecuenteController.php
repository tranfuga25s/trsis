<?php
/********************************************************************
 * Clase predeterminada para el uso de las preguntas frecuentes
 * @author Esteban Zeller
 * @version 1
 * @package PreguntaFrecuente
 ********************************************************************/
 App::uses('PreguntaFrecuenteAppController', 'PreguntaFrecuente.Controller');

class PreguntaFrecuenteController extends PreguntaFrecuenteAppController {

	public $components = array( 'RequestHandler', 'Cookie', 'Auth' );

    public $uses = array( 'PreguntaFrecuente.Pregunta',
                          'PreguntaFrecuente.Categoria' );

    public function beforeFilter() {
        $this->Auth->allow( array( 'index', 'view', 'mascomentado', 'masleido', 'masutil', 'util', 'buscar' ) );
        parent::beforeFilter();
        $this->Cookie->name = 'PreguntaFrecuente';
        $this->Cookie->time = 3600;  // or '1 hour'
        $this->Cookie->path = '/';
        $this->Cookie->secure = false;  // i.e. only sent if using secure HTTPS
        $this->Cookie->key = 'qSI232qs*&sXOw!adre@34SAv!@*(XSL#$%)asGb$@11~_+!@#HKis~#^';
        $this->Cookie->httpOnly = false;

    }

	/**
	 * Muestra la pagina de inicio
	 * @return void
	 */
	public function index() {
	    $categorias = $this->Pregunta->Categoria->find( 'list', array( 'conditions' => array( 'parent_id != ' => null ) ) );
        $this->set( 'categorias', $categorias );
	}

    public function view( $id_pregunta = null ) {
        $this->Pregunta->id = $id_pregunta;
        if( !$this->Pregunta->exists() ) {
            throw new NotFoundException( "La pregunta solicitada no existe" );
        }

        $this->set( 'pregunta', $this->Pregunta->read() );
        $this->Pregunta->agregarLectura();
        $this->set( 'dio_util', false );
        $this->set( 'preguntas_similares', $this->Pregunta->getSimilares( $this->viewVars['pregunta']['Pregunta']['categoria_id'] ) );
    }

	/**
	 * Devuelve un array con todos los elementos más comentados
	 * @return array Preguntas más comentadas
	 */
	public function mascomentado() {
		$this->autoRender = false;
		//return $this->Pregunta->masComentado();
		return array();
	}

	/***
	 * Devuelve un array con todos los elementos más leidos
	 * @return array Preguntas más leidas
	 */
	public function masleido() {
		$this->autoRender = false;
		return $this->Pregunta->masLeido();
	}

	/***
	 * Devuelve un arrray con todos los elementos más utiles
	 * @return array Preguntas mas marcadas como util
	 */
	public function masutil() {
		$this->autoRender = false;
		return $this->Pregunta->masUtil();
	}

    public function util( $id_pregunta = null ) {
        $this->Pregunta->id = $id_pregunta;
        if( !$this->Pregunta->exists() ) {
            throw new NotFoundException( 'La pregunta no existe!' );
        }
        //debug( $this->Cookie->check( 'PreguntaFrecuente' ) );
        if( $this->Cookie->check( 'PreguntaFrecuente' ) ) {
            $preguntas = $this->Cookie->read( 'PreguntaFrecuente' );
            if( !array_key_exists( $id_pregunta, array_flip( $preguntas ) ) ) {
                $preguntas[] = intval( $id_pregunta );
                $this->Cookie->write( 'PreguntaFrecuente', $preguntas );
                $this->Pregunta->agregarUtil();
            }
        } else {
            $this->Pregunta->agregarUtil();
            $this->Cookie->write( array(
                'PreguntaFrecuente' => array( intval( $id_pregunta ) )
            ));
        }

        return $this->redirect( array( 'action' => 'view', $id_pregunta ) );
    }

    /*!
     *
     */
    public function buscar() {
        if( $this->request->is('post') ) {
            $texto = $this->request->data['texto'];
            $this->set( 'preguntas', $this->Pregunta->buscar( $texto ) );
        } else {
            throw new NotFoundException( 'Método no implementado: '.$this->request->method() );
        }
    }

    /*!
     *
     */
    public function administracion_index() {
        $this->set( 'preguntas', $this->paginate() );
    }

    public function administracion_add() {
        if( $this->request->is( 'post' ) ) {
            $this->Pregunta->create();
            if( $this->Pregunta->save( $this->request->data ) ) {
                $this->Session->setFlash( 'La pregunta fue guardada correctamente' );
                $this->redirect( array( 'action' => 'index' ) );
            } else {
                $this->Session->setFlash( 'La pregunta no se pudo guardar' );
            }
        }
        $categorias = $this->Pregunta->Categoria->generateTreeList();
        $this->set( compact( 'categorias' ) );
    }

    public function administracion_edit( $id_pregunta = null ) {
        if( $this->request->is( 'post' ) ) {
            if( $this->Pregunta->save( $this->request->data ) ) {
                $this->Session->setFlash( 'La pregunta fue guardada correctamente' );
                return $this->redirect( array( 'action' => 'index' ) );
            } else {
                $this->Session->setFlash( 'La pregunta no se pudo guardar' );
            }
        } else {
            $this->Pregunta->id = $id_pregunta;
            if( !$this->Pregunta->exists() ) {
                throw new NotFoundException( "La pregunta no existe!" );
            }
            $this->request->data = $this->Pregunta->read( null, $id_pregunta );
        }
        $categorias = $this->Pregunta->Categoria->generateTreeList();
        $this->set( compact( 'categorias' ) );

    }
}
