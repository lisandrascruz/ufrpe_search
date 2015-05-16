<title>UFRPE Search - Ônibus</title>

<div id="adbox">
	<div class="clearfix">
		<p><h1>Ônibus que passam pela UFRPE</h1><p>
		<p><h4> Para ver seu percurso, clique sobre o nome do ônibus </h4></p>
	</div>
</div>

<div class="container">
		<?php foreach ($onibus as $bus) { ?>
			<div class="header"><span><?php echo $bus['Onibus']['numero'] ," - " , $bus['Onibus']['nome'] ; ?></span>

			</div>
			<div class="content">
				<ul>
					<li> <?php echo $bus['Onibus']['percurso']; ?> </li>
					
				</ul>
			</div>
		<?php
		}?>
		<script>
		$(".header").click(function () {
		$header = $(this);//getting the next element    
		$content = $header.next();//open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
		$content.slideToggle(500, function () {/*execute this after slideToggle is done*/});
		});
		</script>
</div>

<div id="contents">
</div>

