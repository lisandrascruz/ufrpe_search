<?php
class ContatoController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Contato';
	public $uses = array("Departamento", "Coordenacao");

	public function index() {		
	}	
	
	public function contato_departamentos(){
		$sql = 'SELECT * FROM departamentos';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		
	}
	
	public function contato_coordenacoes (){
		$sql = "SELECT * FROM coordenacoes";
		$data = $this->Coordenacao->query($sql);
		$this->set('coordenacoes', $data);
	} 
}

?>