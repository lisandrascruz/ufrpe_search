﻿<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<p><h2>Ônibus que passam pela UFRPE</h2><p>
<br>
<p><h4> Para ver seu percurso, clique sobre o nome do ônibus </h4></p>
<br>




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
    }
    ?>
 <script>
	$(".header").click(function () {

    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        
    });

});
</script>

</div>
