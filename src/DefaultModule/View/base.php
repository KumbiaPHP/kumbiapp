<!DOCTYPE html>
<html lang="es">
 <head>
  <meta http-equiv='Content-type' content='text/html; charset=UTF-8' />
  <title>KumbiaPHP Framework</title>
  <link href="<?php echo $_tpl->pp()?>kumbia.css" rel="stylesheet"/>
</head>
<body>
<header class="row">
    <div class="col-8">
    <h2><img src="<?php echo $_tpl->pp()?>logo.png" alt="KumbiaPHP" />
    V2 alpha </h2>
    </div>
    <div class="col-4">
        Entorno:  DEV
    </div>
</header>
<div class="container">
<?php $_tpl->block('content')?> <?php $_tpl->endblock()?>
        
</div>
<footer>
    <?php $_tpl->block('footer')?> <?php $_tpl->endblock()?>
    <?php echo 'Generated in '.round((microtime(1)-START_TIME),4).' s using '.number_format(memory_get_usage() / 1048576, 2).' MB ';?>
</footer>

</body>
</html>