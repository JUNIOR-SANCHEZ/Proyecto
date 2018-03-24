<style>
    .contenedor-login {
  width: 500px;
  height: 350px;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 4px;
  margin: 0 auto;
  margin-top: 70px;
}

.contenedor-login img {
  width: 120px;
  height: 120px;
  margin-top: -60px;
  margin-bottom: 30px;
  border-radius: 50%;
  box-shadow: 0px 0px 40px 5px white;
}

.login-inputs {
  height: 45px;
  width: 300px;
  font-size: 18px;
  margin-bottom: 20px;
  background-color: white;
  padding-left: 30px;
}

.btn-Ingresar {
  padding: 15px 30px;
  color: white;
  border-radius: 4px;
  border: none;
  background-color: blue;
  border-bottom: 4px solid red;
  font-size: 20px;
  cursor: pointer;
}

@media screen and (max-width:800px) {
  .contenedor-login {
    width: 100%;
    height: 350px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 4px;
    margin: 0 auto;
    margin-top: 140px;
  }
}

</style>

<div class="contenedor-login">
    <img src="{$_layoutParams.ruta_img}User-icon.png" alt="">
    <form action="{$_layoutParams.root}usuarios/login" method="POST">
        <input type="hidden" name="enviar" value="1"/>
        <div class="form-inputs">
            <input type="text" id="usuario" class="login-inputs" name="txt_usuario" placeholder="Usuario" value="{if isset($datos)} {$datos.txt_usuario}{/if}">
        </div>
        <div class="form-inputs">
            <input type="password" id="clave" class="login-inputs" name="txt_pass" placeholder="Contraseña" value="{if isset($datos)}) {$datos.txt_pass} {/if}">
        </div>

        <input class="btn-Ingresar" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="{$_layoutParams.root}usuarios/registro">¿Necesitas una cuenta?</a>
    </form>
</div>