<?php
class CoordenacaoController extends AppController {
	public $helpers = array (
			'Html',
			'Form' 
	);
	public $name = 'Coordenacao';
	public function index() {
	}
	public function administracao() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=2';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function agronomia() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=1';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function ciencia_computacao() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=4';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function ciencias_biologicas() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=3';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function ciencias_economicas() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=6';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function ciencias_sociais() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=5';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function gastronomia() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=12';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function sistemas_informacao() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=8';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function economia_domestica() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=7';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function engenharia_agricola_ambiental() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=9';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function engenharia_pesca() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=11';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function engenharia_florestal() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=10';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_ciencias_agricolas() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=15';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_computacao() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=16';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_educacao_fisica() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=13';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_fisica() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=17';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_historia() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=18';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_letras() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=19';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_matematica() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=20';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_pedagogia() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=21';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_quimica() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=22';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function licenciatura_ciencias_biologicas() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=14';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function medicina_veterinaria() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=23';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
	public function zootecnia() {
		$sql = 'SELECT * FROM coordenacoes WHERE ID=24';
		$data = $this->Coordenacao->query ( $sql );
		$this->set ( 'coordenacao', $data );
	}
}

?>