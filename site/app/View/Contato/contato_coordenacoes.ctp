<?php /*print_r ($coordenacoes);*/ ?>
<p><h1>Contatos das Coordenações</h1></p>
<br>
<p><h4> Fonte: Site da UFRPE </h4></p>
<p><h3> Telefones </h3></p>
<?php foreach($coordenacoes as $coordenacao){ ?>
	<?php if ($coordenacao['coordenacoes']['telefone'] == ""){ ?>
		<p><?php echo $coordenacao['coordenacoes']['nome_coordenacao']." --------------- Não informado/Não possui"; ?> </p>
	
	<?php } else{ ?> 
	<p><?php echo $coordenacao['coordenacoes']['nome_coordenacao']." --------------- ".$coordenacao['coordenacoes']['telefone']; ?> </p>
	
	<?php } ?>
	

<?php } ?>

<p><h3> Emails </h3></p>
<?php foreach($coordenacoes as $coordenacao){ ?>
	<?php if ($coordenacao['coordenacoes']['email'] == ""){ ?>
		<p><?php echo $coordenacao['coordenacoes']['nome_coordenacao']." --------------- Não informado/Não possui"; ?> </p>
	
	<?php } else{ ?> 
	<p><?php echo $coordenacao['coordenacoes']['nome_coordenacao']." --------------- ".$coordenacao['coordenacoes']['email']; ?> </p>
	
	<?php } ?>

<?php } ?>
