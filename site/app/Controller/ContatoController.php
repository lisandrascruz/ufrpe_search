<?php
class ContatoController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Contato';
	public $uses = array("Departamento");

	public function index() {		
	}	
	
	public function contato_departamentos(){
		$sql = 'SELECT * FROM departamentos';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		
}
}

?>