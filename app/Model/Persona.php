<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 */
class Persona extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_completo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'elector' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $actsAs = array('Utils.Lookupable' => array('types' => array('Profesion')));

	public $belongsTo = array(
		'Profesion' => array(
			'className' => 'Profesion',
			'order' => array('Profesion.nombre' => 'asc')
		),
	);

	public $hasOne = array(
		'Vivienda' => array(
			'className' => 'Vivienda'
		),
		'Calle' => array(
			'className' => 'Calle',
			'foreignKey' => false,
			'conditions' => array('Vivienda.calle_id = Calle.id')
		)
	);

	public $order = array('Persona.nombre_completo' => 'asc');


	public $opcionesElector = array(
		'I' => 1,
		'S' => 2,
		'N' => 3,
		'M' => 4,
		'X' => 6,
		'' => 5
	);

	public function beforeImport($data) {

		if (!empty($data['Persona']['fecha_nacimiento'])) {
			$data['Persona']['fecha_nacimiento'] = date('Y-m-d', $this->_parseTimeStirng($data['Persona']['fecha_nacimiento']));
		} else {
			unset($data['Persona']['fecha_nacimiento']);
		}

		if (!empty($data['Persona']['elector'])) {
			$opcion = strtoupper($data['Persona']['elector'][0]);
			if (!isset($this->opcionesElector[$opcion])) {
				$this->opcionesElector[$opcion] = count($this->opcionesElector) + 1;
			}
			$data['Persona']['elector'] = $this->opcionesElector[$opcion];
		} else {
			$data['Persona']['elector'] = 5;
		}

		if (empty($data['Persona']['sexo'])) {
			$data['Persona']['sexo'] = 'M';
		}

		if (empty($data['Persona']['nombre_completo'])) {
			$data['Persona']['nombre_completo'] = '- DESCONOCIDO -';
		}

		if (!empty($data['Persona']['cedula'])) {
			$data['Persona']['cedula'] = str_replace(array('.', ','), '', $data['Persona']['cedula']);
		} else {
			unset($data['Persona']['cedula']);
		}

		if (!empty($data['Persona']['profesion'])) {
			$this->lookup('Profesion', trim($data['Persona']['profesion']));
			if (!empty($this->data['Persona']['profesion_id'])) {
				$data['Persona']['profesion_id'] = $this->data['Persona']['profesion_id'];
			}
		}

		if (!empty($data['Persona']['calle'])) {
			$this->Vivienda->lookup('Calle', trim($data['Persona']['calle']));
			if (!empty($this->Vivienda->data['Vivienda']['calle_id'])) {
				$data['Vivienda']['calle_id'] = $this->Vivienda->data['Vivienda']['calle_id'];
			}
		}

		$this->data = array();
		return $data;
	}

	public function _parseTimeStirng($dateorig) {
		$dateRE = '/^(\d\d?)[\/\-\.](\d\d?)[\/\-\.](\d\d(\d\d)?)$/';
		$tryStrToTime = TRUE;

		if (preg_match($dateRE, $dateorig, $m)) {
			if (strlen($m[3])==2) {
				$m[3] += 15 <= (int)$m[3] ? 1900 : 2000;
			}
			$date_ts = @mktime(0, 0, 0, $m[2], $m[1], $m[3]);
			if ($date_ts !==FALSE) {
				$tryStrToTime = FALSE;
			}
		}

		if ($tryStrToTime) {
			$date_ts = strtotime($dateorig);
		}

		return $date_ts;
	}

}
