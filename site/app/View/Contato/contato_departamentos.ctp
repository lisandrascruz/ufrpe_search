<p><h1>Contatos dos Departamentos</h1></p>
<br>
<p><h3> Telefones </h3></p>
<?php foreach($departamentos as $departamento){ ?>
	<p><?php echo $departamento['departamentos']['nome']." --------------- ".$departamento['departamentos']['telefone']; ?> </p>
	

<?php } ?>

<p><h3> Emails </h3></p>
<?php foreach($departamentos as $departamento){ ?>
	<p><?php echo $departamento['departamentos']['nome']." --------------- ".$departamento['departamentos']['email']; ?> </p>
	

<?php } ?>