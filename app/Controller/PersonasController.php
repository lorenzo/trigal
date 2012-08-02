<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 */
class PersonasController extends AppController {

	public function implementedEvents() {
		return parent::implementedEvents() + array(
			'Crud.beforeFind' => '_beforeFind'
		);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Crud->mapAction('cuaderno_electoral', 'index');
		$this->Crud->mapAction('cuaderno_asistencia', 'index');
	}

	public function index() {
		$this->Paginator->settings += array('contain' => array('Vivienda', 'Calle'));
		$this->Crud->executeAction();
	}

	public function cuaderno_electoral() {
		$this->Paginator->settings = array(
			'maxLimit' => 100000,
			'limit' => 100000,
			'order' => array('Calle.nombre', 'Persona.nombre', 'Persona.cedula'),
			'conditions' => array('Persona.elector NOT' => array(2, 4, 5, 6))
		);
		$this->index();
	}

	public function cuaderno_asistencia() {
		$this->Paginator->settings = array(
			'maxLimit' => 100000,
			'limit' => 100000,
			'order' => array('Calle.nombre', 'Persona.nombre', 'Persona.cedula'),
			'conditions' => array('Persona.elector NOT' => array(2, 4, 5, 6))
		);
		$this->index();
	}

	public function _beforeFind($event) {
		$event->subject()->query['contain'] = array(
			'Profesion',
			'Vivienda' => array('Calle')
		);
	}

}
