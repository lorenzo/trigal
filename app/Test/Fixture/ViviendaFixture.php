<?php
/**
 * ViviendaFixture
 *
 */
class ViviendaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'vivienda';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Código de la Vivienda'),
		'cedula_miembro' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Cédula del Miembro Jefe'),
		'calle_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Código de la Calle'),
		'casa_nombre' => array('type' => 'string', 'null' => false, 'default' => '\'\'', 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'Nombre del edificio o casa', 'charset' => 'utf8'),
		'casa_nro' => array('type' => 'string', 'null' => false, 'default' => '\'\'', 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'Número de la Casa o Edificio', 'charset' => 'utf8'),
		'edif_nombre' => array('type' => 'string', 'null' => false, 'default' => '\'\'', 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'Nombre del Edificio', 'charset' => 'utf8'),
		'edif_piso' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'Piso del Edificio'),
		'edif_nro_apto' => array('type' => 'string', 'null' => false, 'default' => '\'\'', 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => 'Numero del apto', 'charset' => 'utf8'),
		'telefono_hab' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => 'Telefono de la Habitacion'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'cedula_miembro' => 1,
			'calle_id' => 1,
			'casa_nombre' => 'Lorem ipsum dolor sit amet',
			'casa_nro' => 'Lorem ipsum dolor sit amet',
			'edif_nombre' => 'Lorem ipsum dolor sit amet',
			'edif_piso' => 1,
			'edif_nro_apto' => 'Lo',
			'telefono_hab' => 1
		),
	);

}
