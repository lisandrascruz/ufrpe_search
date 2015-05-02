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
	<title>
		UFRPE SEARCH
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script('jquery-1.11.2.js');
		echo $this->Html->script('javascript.js',array('inline' => false));
		
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>

	<div id="img">
	<?php echo $this->Html->image("ufrpe_search.jpg", array('width' => 300, 'height'=>100));?>
	</div>
	<div id=menu_topo>
		<nav>
		  <ul class="menu">
		        <li><a href="">Home</a></li>
		        <li><a href="#">Sobre</a></li>
		            <li><a href="http://localhost/ufrpe_search/site/cursos">Cursos</a>
		                <ul>
		                      <li><a href="#">Administração</a></li>
		                      <li><a href="#">Agronomia	</a></li>
		                      <li><a href="#">C. da Computação</a></li> 
		                      <li><a href="#">C. Biológicas</a></li>
		                      <li><a href="#">C. Economicas</a></li>
		                      <li><a href="#">Ciências Sociais</a></li>
		                      <li><a href="#">Gastronomia</a></li>
		                      <li><a href="#">Sist. de Informação</a></li>
		                      <li><a href="#">Econ. Domestica</a></li>
		                      <li><a href="#">Eng. Agric. Ambiental</a></li>
		                      <li><a href="#">Eng Pesca</a></li>
		                      <li><a href="#">Eng. Florestal</a></li>
		                      <li><a href="#">Lic. em Ciencias Sociais</a></li>
		                      <li><a href="#">Lic. em Computação</a></li>
		                      <li><a href="#">Lic. em Educação Fisica</a></li>
		                      <li><a href="#">Licenciatura em Fisica</a></li>                   
		                      <li><a href="#">Licenciatura em História</a></li>
		                      <li><a href="#">Licenciatura em Letras</a></li>
		                      <li><a href="#">Lic. em Matemática</a></li>
		                      <li><a href="#">Lic. em Pedagogia</a></li>
		                      <li><a href="#">Lic. em Quimica</a></li>
		                      <li><a href="#">Lic. em C. Biologicas</a></li>
		                      <li><a href="#">Medicina Veterinária</a></li>
		                      <li><a href="#">Zootecnia</a></li>
		                </ul>
		            </li>
		        <li><a href="http://localhost/ufrpe_search/site/onibus">Onibus</a></li>
		        <li><a href="#">Contato</a></li>  
		</ul>
		</nav>
		
	</div>
	
	
	
	  

<div id="conteudo">
	  
	  <?php echo $this->Session->flash(); ?>
	<?php echo $this->Js->writeBuffer();?>	
		<?php echo $this->fetch('content'); ?>
</div>
<?php echo $this->Js->writeBuffer();?>
</body>
</html>
