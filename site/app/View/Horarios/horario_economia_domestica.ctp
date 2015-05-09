
<p><h1><?php echo "Horários e Disciplinas do curso de ".$nome ; ?></h1></p>
<?php 
$periodo = 0;
foreach ($horario as $horadisciplina){
	if ((int)$horadisciplina['cadeiras']['periodo']>$periodo){
		$periodo = (int)$horadisciplina['cadeiras']['periodo'];
	}
}
?>	
<br>
<?php for ($i = 1 ; $i <= $periodo; $i++) { ?>
	<p><h2> <?php echo "Disciplinas do ".$i."º período"; ?> </h2></p> <br>
	<table border="1px" width = "1300px">
	    <tr>
	        <th>Código</th>
	        <th>Nome</th>
	        <th>Turma</th>
	        <th>Horario 1</th>
	        <th>Horario 2</th>
	        <th>Horario 3</th>
	        <th>Horario 4</th>
	        <th>Período</th>
	        <th>Tipo</th>
	        <th>Local</th>
	        <th>Departamento</th>
	        <th>Vagas</th>
	    </tr>
	 
	<?php foreach ($horario as $horadisciplina){ ?> 
		<?php if ($horadisciplina['cadeiras']['periodo'] == strval($i)) { ?>
			<tr>
				 <th> <?php echo $horadisciplina['cadeiras']['codigo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['nome'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['turma'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_1'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_2'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_3'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_4'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['periodo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['tipo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['local'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['departamento'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['vagas'] ; ?> </th>
			</tr>	 
		<?php } ?>
	<?php } ?>
	</table>
	<br><br>
<?php } ?>


<p><h2>Outras Disciplinas</h2></p> <br>
<table border="1px" width = "1300px">
	    <tr>
	        <th>Código</th>
	        <th>Nome</th>
	        <th>Turma</th>
	        <th>Horario 1</th>
	        <th>Horario 2</th>
	        <th>Horario 3</th>
	        <th>Horario 4</th>
	        <th>Período</th>
	        <th>Tipo</th>
	        <th>Local</th>
	        <th>Departamento</th>
	        <th>Vagas</th>
	    </tr>
	 
	<?php foreach ($horario as $horadisciplina){ ?> 
		<?php if ($horadisciplina['cadeiras']['periodo'] == "OPT" || $horadisciplina['cadeiras']['periodo'] == "-" || $horadisciplina['cadeiras']['periodo'] == "ELE" || $horadisciplina['cadeiras']['periodo'] == "OP") { ?>
			<tr>
				 <th> <?php echo $horadisciplina['cadeiras']['codigo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['nome'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['turma'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_1'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_2'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_3'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['horario_4'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['periodo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['tipo'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['local'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['departamento'] ; ?> </th>
				 <th> <?php echo $horadisciplina['cadeiras']['vagas'] ; ?> </th>
			</tr>	 
		<?php } ?>
	<?php } ?>
</table>
<br><br>

