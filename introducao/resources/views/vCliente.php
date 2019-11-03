<html>
    <head>
        <title>Teste Laravel</title>
    </head>
    <body>
        <form  method="post" action="<?php echo asset("teste")?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>" />
            <input type="text" name="valor" />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
