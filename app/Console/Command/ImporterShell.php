<?php

class ImporterShell extends Shell {

	public function main() {
		$Persona = ClassRegistry::init('Persona');
		$Persona->Behaviors->attach('Utils.CsvImport', array('delimiter' => ','));
		$Persona->importCSV(APP . 'Config' . DS . 'censo.csv');
		$this->out('Todo pepito papaaa!');
	}
}