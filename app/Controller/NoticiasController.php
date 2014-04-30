<?php

App::uses('AppController', 'Controller');

/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 */
class NoticiasController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow(array('view', 'listado'));
    }

    /**
     * Devuelve las noticias para la portada
     */
    public function listado() {
        return $this->Noticia->find('all', array('conditions' => array('publicada' => true), 'fields' => array('titulo', 'contenido', 'fecha', 'id_noticia'), 'recursive' => -1, 'limit' => 5, 'order' => array('fecha' => 'desc')));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Noticia->recursive = 0;
        $this->set('noticias', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Noticia->id = $id;
        if (!$this->Noticia->exists()) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        $this->set('noticia', $this->Noticia->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Noticia->create();
            if ($this->Noticia->save($this->request->data)) {
                $this->Session->setFlash(__('The noticia has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Noticia->id = $id;
        if (!$this->Noticia->exists()) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Noticia->save($this->request->data)) {
                $this->Session->setFlash(__('The noticia has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Noticia->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Noticia->id = $id;
        if (!$this->Noticia->exists()) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        if ($this->Noticia->delete()) {
            $this->Session->setFlash(__('Noticia deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Noticia was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
