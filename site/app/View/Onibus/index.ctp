<p><h2>�nibus que passam pela UFRPE</h2><p>
<br>
<p><h4> Para ver seu percurso, clique sobre o nome do �nibus </h4></p>
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
