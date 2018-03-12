

<form method="post" action="<?php echo BASE_URL;?>post/nuevo">
    <input type="hidden" name="guardar" value="1"/>
    <p>Titulo:</p>
    <input type="text" name="titulo" placeholder=""/>
    <p>Cuerpo:</p>
    <input type="text" name="cuerpo" placeholder=""/>
    <br><br>
    <input type="submit" value="Guardar"/>
</form>