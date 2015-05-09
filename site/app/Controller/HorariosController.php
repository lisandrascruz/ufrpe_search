<?php
class HorariosController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Horarios';

	public function index() {
			

	}
	public function horario_administracao(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "AD1" or turma="AD3"';
		$nome = "Administração";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
		
	}
	public function horario_agronomia(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SA1" or turma="SA2" or turma="SA3" or turma="SA4"';
		$nome = "Agronomia";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_engenharia_pesca(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SP1" or turma="SP2" or turma="SP3"';
		$nome = "Bacharelado em Engenharia de Pesca";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	
	public function horario_ciencia_computacao(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "BC2" or turma="BC3" or turma="BC4"';
		$nome = "Bacharelado em Ciências da Computação";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_ciencias_biologicas(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SB1" or turma="SB3"';
		$nome = "Bacharelado em Ciências Biológicas";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_ciencias_economicas(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "ER1"';
		$nome = "Bacharelado em Ciências Econômicas";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_ciencias_sociais(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SR1" or turma="SR2" or turma="SR3"';
		$nome = "Bacharelado em Ciências Sociais";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_gastronomia(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "GS1" or turma="GS3"';
		$nome = "Bacharelado em Gastronomia";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_sistemas_informacao(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SI1" or turma="SI2" or turma="GE3"';
		$nome = "Bacharelado em Sistemas de informação";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_economia_domestica(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SD1" or turma="SD3"';
		$nome = "Bacharelado em Economia Domésticas";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_engenharia_agricola_ambiental(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "EA1" or turma="EA2" or turma="EA3" or turma="EA4"';
		$nome = "Bacharelado em Engenharia Agrícola e Ambiental";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_engenharia_florestal(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SF1" or turma="SF3"';
		$nome = "Engenharia Florestal";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_ciencias_agricolas(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LA1"';
		$nome = "Licenciatura em Ciências Agrícolas";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_computacao(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LC1"';
		$nome = "Licenciatura em Computação";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_educacao_fisica(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LE1"';
		$nome = "Licenciatura em Educação Física";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_fisica(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LF1"';
		$nome = "Licenciatura em Educação Física";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_historia(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "HT1" or turma = "HT2"';
		$nome = "Licenciatura em História";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_letras(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LT1"';
		$nome = "Licenciatura em Letras";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_matematica(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LM1" or turma = "LM2" or turma = "LM3"';
		$nome = "Licenciatura em Matemática";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_pedagogia(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LP1" or turma = "LP3"';
		$nome = "Licenciatura em Pedagogia";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_quimica(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LQ1" or turma = "LQ2" or turma = "LQ3" or turma = "LQ4"';
		$nome = "Licenciatura em Química";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_licenciatura_ciencias_biologicas(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "LB1" or turma = "LB3"';
		$nome = "Licenciatura em Ciências Biológicas";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_medicina_veterinaria(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SV1" or turma = "SV2" or turma = "SV3" or turma = "SV4" or turma = "SV5" or turma = "SV6" or turma = "SV7" or turma = "SV8"';
		$nome = "Bacharelado em Medicina Veterinária";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	public function horario_zootecnia(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "SZ1" or turma = "SZ3"';
		$nome = "Bacharelado em Zootecnia";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
	
	public function outras_turmas(){
		$sql = 'SELECT * FROM cadeiras WHERE turma = "TU1" or turma = "TU2" or turma = "TU3" or turma = "GE3"';
		$nome = "Turma Única (junção de vários cursos em uma só turma)";
		$data = $this->Horario->query($sql);
		$this->set('horario', $data);
		$this->set('nome', $nome);
	}
}
	
?>