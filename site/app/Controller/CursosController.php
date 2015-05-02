<?php
class CursosController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Cursos';

	public function index() {
		
	}
	public function agronomia(){
		$sql = 'SELECT * FROM cursos WHERE ID=2';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function engenharia_pesca(){
		$sql = 'SELECT * FROM cursos WHERE ID=11';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function administracao(){
		$sql = 'SELECT * FROM cursos WHERE ID=1';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	
	public function ciencia_computacao(){
		$sql = 'SELECT * FROM cursos WHERE ID=3';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function ciencias_biologicas(){
		$sql = 'SELECT * FROM cursos WHERE ID=4';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function ciencias_economicas(){
		$sql = 'SELECT * FROM cursos WHERE ID=5';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function ciencias_sociais(){
		$sql = 'SELECT * FROM cursos WHERE ID=6';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function gastronomia(){
		$sql = 'SELECT * FROM cursos WHERE ID=7';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function sistemas_informacao(){
		$sql = 'SELECT * FROM cursos WHERE ID=8';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function economia_domestica(){
		$sql = 'SELECT * FROM cursos WHERE ID=9';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function engenharia_agricola_ambiental(){
		$sql = 'SELECT * FROM cursos WHERE ID=10';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function engenharia_florestal(){
		$sql = 'SELECT * FROM cursos WHERE ID=12';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_ciencias_agricolas(){
		$sql = 'SELECT * FROM cursos WHERE ID=13';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_computacao(){
		$sql = 'SELECT * FROM cursos WHERE ID=14';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_educacao_fisica(){
		$sql = 'SELECT * FROM cursos WHERE ID=15';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_fisica(){
		$sql = 'SELECT * FROM cursos WHERE ID=16';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_historia(){
		$sql = 'SELECT * FROM cursos WHERE ID=17';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_letras(){
		$sql = 'SELECT * FROM cursos WHERE ID=18';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_matematica(){
		$sql = 'SELECT * FROM cursos WHERE ID=19';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_pedagogia(){
		$sql = 'SELECT * FROM cursos WHERE ID=20';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_quimica(){
		$sql = 'SELECT * FROM cursos WHERE ID=21';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function licenciatura_ciencias_biologicas(){
		$sql = 'SELECT * FROM cursos WHERE ID=22';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function medicina_veterinaria(){
		$sql = 'SELECT * FROM cursos WHERE ID=23';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	public function zootecnia(){
		$sql = 'SELECT * FROM cursos WHERE ID=24';
		$data = $this->Curso->query($sql);
		$this->set('cursos', $data);
	}
	
}
	
?>