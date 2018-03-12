

<div class="contenedor-login">
    <img src="<?php BASE_URL?>public/img/User-icon.png" alt="">
    <form action="<?php echo BASE_URL?>login" method="POST">
        <input type="hidden" name="enviar" value="1"/>
        <div class="form-inputs">
            <input type="text" id="usuario" class="login-inputs" name="txt_usuario" placeholder="Usuario" value="<?php if (isset($this->datos)) echo $this->datos['txt_usuario'];?>">
        </div>
        <div class="form-inputs">
            <input type="password" id="clave" class="login-inputs" name="txt_pass" placeholder="Contraseña" value="<?php if (isset($this->datos)) echo $this->datos['txt_pass'];?>">
        </div>

        <input class="btn-Ingresar" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="<?php echo BASE_URL;?>registro">¿Necesitas una cuenta?</a>
    </form>
</div>