<?php
class OnibusController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Onibus';

	public function index() {
		$this->set('onibus',$this->Onibus->find('all'));
		

	}
}
	
?>