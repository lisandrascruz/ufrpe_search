<p><h1><?php echo ($nome); ?></h1></p>

<?php /*print_r ($departamentos);*/ ?>
<?php foreach($departamentos as $departamento) { ?>
	<?php if($departamento['departamentos']['descricao'] == ""){ ?>
		<p><font  color= "#FF0000">Descrição ainda não informada pelo Departamento. Aguardando retorno das informações solicitadas.</font> </p>
	<?php } else { ?>
		<p> <?php echo $departamento['departamentos']['descricao']; ?> </p>
	<?php } ?>
	<br>
	<?php if($departamento['departamentos']['telefone'] == ""){ ?>
		<p>Telefone: Não informado </p>
	<?php } else { ?>
		<p> Telefone: <?php echo $departamento['departamentos']['telefone']; ?> </p>
	<?php } ?>
	<br>
	<?php if($departamento['departamentos']['email'] == ""){ ?>
		<p>Email: Não informado </p>
	<?php } else { ?>
		<p> Email: <?php echo $departamento['departamentos']['email']; ?> </p>
	<?php } ?>
	<br>
	<?php if($departamento['departamentos']['diretor'] == ""){ ?>
		<p>Diretor: Não informado </p>
	<?php } else { ?>
		<p> Diretor(a): <?php echo $departamento['departamentos']['diretor']; ?> </p>
	<?php } ?>

<?php } ?>
<br><br>
<p>Fonte: Site UFRPE </p>