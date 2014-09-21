<!DOCTYPE html>
<html>
    <head>
        <title>Prueba</title>
    </head>
    <body>
        <h1>Prueba</h1>
        <?php $_tpl->block('content')?> <?php $_tpl->endblock()?>
        <footer>
        <?php $_tpl->block('footer')?> <?php $_tpl->endblock()?>
        <?php echo 'Ejecutado en '.round((microtime(1)-START_TIME),4).' seg. usando '.number_format(memory_get_usage() / 1048576, 2).' MB de memoria';?></div>
        </footer>
    </body>
</html>