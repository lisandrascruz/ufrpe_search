<?php echo $this->fetch('script'); ?>
<script type="text/javascript"><?php echo $this->fetch('content'); ?></script>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>