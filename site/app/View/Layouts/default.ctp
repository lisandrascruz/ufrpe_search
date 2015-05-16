<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>



<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>	
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-1.11.2.js');
		echo $this->Html->script('javascript.js',array('inline' => false));	
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>

<body>
	<div id="header">
		<div class="menu-container">
			<div class="logo">
				<a href="http://localhost/ufrpe_search/site/"></a>
			</div>
			<div class="teste">
			<br><br>
			</div>			
			<div>
			<ul class="menu clearfix">
				<li>
					<a href="http://localhost/ufrpe_search/site/">Home</a>
				</li>
				<li><a href="http://localhost/ufrpe_search/site/cursos">Cursos</a>
		                <ul class="sub-menu clearfix">
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/administracao">Administração</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/agronomia">Agronomia	</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/ciencia_computacao">C. da Computação</a></li> 
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/ciencias_biologicas">C. Biológicas</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/ciencias_economicas">C. Economicas</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/ciencias_sociais">Ciências Sociais</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/gastronomia">Gastronomia</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/sistemas_informacao">Sist. de Informação</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/economia_domestica">Econ. Domestica</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/engenharia_agricola_ambiental">Eng. Agric. Ambiental</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/engenharia_pesca">Eng Pesca</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/engenharia_florestal">Eng. Florestal</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_ciencias_agricolas">Lic. em Ciencias Agricolas</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_computacao">Lic. em Computação</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_educacao_fisica">Lic. em Educ. Fisica</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_fisica">Licenciatura em Fisica</a></li>                   
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_historia">Licenciatura em História</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_letras">Licenciatura em Letras</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_matematica">Lic. em Matemática</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_pedagogia">Lic. em Pedagogia</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_quimica">Lic. em Quimica</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/licenciatura_ciencias_biologicas">Lic. em C. Biologicas</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/medicina_veterinaria">Medicina Veterinária</a></li>
		                      <li><a href="http://localhost/ufrpe_search/site/cursos/zootecnia">Zootecnia</a></li>
		                </ul>
		           </li>
		        <li><a href="http://localhost/ufrpe_search/site/horarios">Horários</a>
					<ul class="sub-menu clearfix">
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_administracao">Administração</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_agronomia">Agronomia	</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_ciencia_computacao">C. da Computação</a></li> 
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_ciencias_biologicas">C. Biológicas</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_ciencias_economicas">C. Economicas</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_ciencias_sociais">Ciências Sociais</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_gastronomia">Gastronomia</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_sistemas_informacao">Sist. de Informação</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_economia_domestica">Econ. Domestica</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_engenharia_agricola_ambiental">Eng. Agric. Ambiental</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_engenharia_pesca">Eng Pesca</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_engenharia_florestal">Eng. Florestal</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_ciencias_agricolas">Lic. em Ciencias Agricolas</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_computacao">Lic. em Computação</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_educacao_fisica">Lic. em Educ. Fisica</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_fisica">Licenciatura em Fisica</a></li>                   
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_historia">Licenciatura em História</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_letras">Licenciatura em Letras</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_matematica">Lic. em Matemática</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_pedagogia">Lic. em Pedagogia</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_quimica">Lic. em Quimica</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_licenciatura_ciencias_biologicas">Lic. em C. Biologicas</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_medicina_veterinaria">Medicina Veterinária</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/horario_zootecnia">Zootecnia</a></li>
							  <li><a href="http://localhost/ufrpe_search/site/horarios/outras_turmas">Outras Turmas</a></li>
						</ul>
				</li>
				<li>
					<a href="http://localhost/ufrpe_search/site/coordenacao">Coordenação</a>
				</li>
				<li>
					<a href="http://localhost/ufrpe_search/site/departamentos/">Departamentos</a>
				</li>
				<li>
					<a href="http://localhost/ufrpe_search/site/onibus">Ônibus</a>
				</li>
				<li>
					<a href="http://localhost/ufrpe_search/site/mapa">Mapa</a>
				</li>
				<li><a href="http://localhost/ufrpe_search/site/contato">Contato</a>
					<ul class="sub-menu clearfix">
							 <li><a href="http://localhost/ufrpe_search/site/contato/contato_departamentos">Contato Departamentos</a></li>
							 <li><a href="">Contato Coordenações</a></li>
					</ul>
				</li>
				
			</ul>
			</div>
		</div>
	</div>
	</div>	  

<div id="conteudo">	  
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->Js->writeBuffer();?>	
	<?php echo $this->fetch('content'); ?>
</div>
<?php echo $this->Js->writeBuffer();?>


<div id="footer">
		<div class="clearfix">
			<p>
				© UFRPE SEARCH.
			</p>
		</div>
</div>	
</body>
</html>

