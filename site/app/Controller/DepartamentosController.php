<?php
class DepartamentosController extends AppController {
	public $helpers = array ('Html','Form');
	public $name = 'Departamentos';

	public function index() {
		
	}
	public function administracao(){
		$nome = "Departamento de Administração - DADM";
		$sql = 'SELECT * FROM departamentos WHERE ID=1';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function agronomia(){
		$nome = "Departamento de Agronomia - DEPA";
		$sql = 'SELECT * FROM departamentos WHERE ID=2';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function biologia(){
		$nome = "Departamento de Biologia - DB";
		$sql = 'SELECT * FROM departamentos WHERE ID=3';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function ciencias_domesticas(){
		$nome = "Departamento de Ciências Domésticas - DCD";
		$sql = 'SELECT * FROM departamentos WHERE ID=4';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function ciencias_florestais(){
		$nome = "Departamento de Ciências Florestais - DCFL";
		$sql = 'SELECT * FROM departamentos WHERE ID=5';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function ciencias_sociais(){
		$nome = "Departamento de Ciências Sociais - DECISO";
		$sql = 'SELECT * FROM departamentos WHERE ID=6';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function ciencias_moleculares(){
		$nome = "Departamento de Ciências Moleculares - DCM";
		$sql = 'SELECT * FROM departamentos WHERE ID=7';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function economia(){
		$nome = "Departamento de Economia - DECON";
		$sql = 'SELECT * FROM departamentos WHERE ID=8';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function educacao(){
		$nome = "Departamento de Educação - DED";
		$sql = 'SELECT * FROM departamentos WHERE ID=9';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function educacao_fisica(){
		$nome = "Departamento de Educação Fisica - DEFIS";
		$sql = 'SELECT * FROM departamentos WHERE ID=10';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function engenharia_agricola(){
		$nome = "Departamento de Engenharia Agrícola - DEAGRI";
		$sql = 'SELECT * FROM departamentos WHERE ID=12';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function estatistica_e_informatica(){
		$nome = "Departamento de Estatística e Informática - DEINFO";
		$sql = 'SELECT * FROM departamentos WHERE ID=13';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function fisica(){
		$nome = "Departamento de Física - DF";
		$sql = 'SELECT * FROM departamentos WHERE ID=14';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function historia(){
		$nome = "Departamento de História - DEHIST";
		$sql = 'SELECT * FROM departamentos WHERE ID=15';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function letras_e_ciencias_humanas(){
		$nome = "Departamento de Letras e Ciências Humanas - DLCH";
		$sql = 'SELECT * FROM departamentos WHERE ID=16';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function matematica(){
		$nome = "Departamento de Matemática - DM";
		$sql = 'SELECT * FROM departamentos WHERE ID=17';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function medicina_veterinaria(){
		$nome = "Departamento de Medicina Veterinária - DMV";
		$sql = 'SELECT * FROM departamentos WHERE ID=18';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function morfologia_e_fisiologia_animal(){
		$nome = "Departamento de Morfologia e Fisiologia Animal - DMFA";
		$sql = 'SELECT * FROM departamentos WHERE ID=20';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function quimica(){
		$nome = "Departamento de Química - DQ";
		$sql = 'SELECT * FROM departamentos WHERE ID=22';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function tecnologia_rural(){
		$nome = "Departamento de Tecnologia Rural - DTR";
		$sql = 'SELECT * FROM departamentos WHERE ID=23';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function zootecnia(){
		$nome = "Departamento de Zootecnia - DZ";
		$sql = 'SELECT * FROM departamentos WHERE ID=24';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function dce(){
		$nome = "Diretório Central dos Estudantes - DCE";
		$sql = 'SELECT * FROM departamentos WHERE ID=25';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function biblioteca_central(){
		$nome = "Biblioteca Central - BC";
		$sql = 'SELECT * FROM departamentos WHERE ID=26';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function pro_reitoria_graduacao(){
		$nome = "PRÓ-REITORIA DE ENSINO DE GRADUAÇÃO – PREG";
		$sql = 'SELECT * FROM departamentos WHERE ID=27';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function pro_reitoria_gestao_estudantil(){
		$nome = "PRÓ-REITORIA DE GESTÃO ESTUDANTIL - PROGEST";
		$sql = 'SELECT * FROM departamentos WHERE ID=28';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function pro_reitoria_pesquisa_e_pos_graduacao(){
		$nome = "PRÓ-REITORIA DE PESQUISA E PÓS-GRADUAÇÃO - PRPPG";
		$sql = 'SELECT * FROM departamentos WHERE ID=29';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function dqv(){
		$nome = "Departamento de Qualidade Vida – DQV";
		$sql = 'SELECT * FROM departamentos WHERE ID=30';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function drca(){
		$nome = "Departamento de Registro e Controle Acadêmico – DRCA";
		$sql = 'SELECT * FROM departamentos WHERE ID=31';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}
	public function pesca_e_aquicultura(){
		$nome = "Departamento de Pesca e Aquicultura – DEPAq";
		$sql = 'SELECT * FROM departamentos WHERE ID=32';
		$data = $this->Departamento->query($sql);
		$this->set('departamentos', $data);
		$this->set('nome', $nome);
	}

	
}
	
?>