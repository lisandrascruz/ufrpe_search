<?php foreach ($coordenacao as $coordenacao) { ?>
	<p><h1> <?php echo $coordenacao['coordenacoes']['nome_coordenacao']; ?></h1></p>
	<br>
	<?php if($coordenacao['coordenacoes']['email'] =="") { ?>
		<p>Email: Email não informado </p>
	<?php
	} else { ?>
		<p> EMAIL: <?php echo $coordenacao['coordenacoes']['email']; ?></p>
	
	<?php
	}
	?>
	<?php
	}
	?>	
	<br>