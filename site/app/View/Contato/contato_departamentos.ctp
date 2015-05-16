<p><h1>Contatos dos Departamentos</h1></p>
<br>
<p><h4> Fonte: Site da UFRPE </h4></p>
<p><h3> Telefones </h3></p>
<?php foreach($departamentos as $departamento){ ?>
	<?php if ($departamento['departamentos']['telefone'] == ""){ ?>
		<p><?php echo $departamento['departamentos']['nome']." --------------- Não informado/Não possui"; ?> </p>
	
	<?php } else{ ?> 
	<p><?php echo $departamento['departamentos']['nome']." --------------- ".$departamento['departamentos']['telefone']; ?> </p>
	
	<?php } ?>
	

<?php } ?>

<p><h3> Emails </h3></p>
<?php foreach($departamentos as $departamento){ ?>
	<?php if ($departamento['departamentos']['email'] == ""){ ?>
		<p><?php echo $departamento['departamentos']['nome']." --------------- Não informado/Não possui"; ?> </p>
	
	<?php } else{ ?> 
	<p><?php echo $departamento['departamentos']['nome']." --------------- ".$departamento['departamentos']['email']; ?> </p>
	
	<?php } ?>

<?php } ?>