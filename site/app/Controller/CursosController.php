<?php
class CursosController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Cursos';

	public function index() {
		
	}
	public function administracao(){
		$sql = 'SELECT * FROM cursos LIMIT 2';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
}
	
?>