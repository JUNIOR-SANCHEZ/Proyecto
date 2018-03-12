<style>
    .form-register {
  width: 95%;
  max-width: 500px;
  margin: auto;
  margin-top: 20px;
  background-color: cornflowerblue;
  border-radius: 7px;
}

.form-titulo {
  background-color: darkblue;
  color: white;
  padding: 20px;
  text-align: center;
  font-weight: 100;
  font-size: 30px;
  border-top-left-radius: 7px;
  border-top-right-radius: 7px;
  border-bottom: 5px solid crimson;
  justify-content: space-between;
}

input {
  margin-bottom: 15px;
  padding: 15px;
  font-size: 16px;
  border-radius: 3px;
  border: 1px solid darkgray;
}

.registra-inputs {
  padding: 10px 30px;
  display: flex;
  flex-wrap: wrap;
}

.input-100 {
  width: 100%;
}

.btn-enviar {
  background-color: crimson;
  color: white;
  margin: auto;
  padding: 10px 40px;
  cursor: pointer;
}

.form-link {
  width: 100%;
  margin: 7px;
  font-size: 14px;
  text-align: center;
}

@media screen and (max-width:800px) {
  .form-register {
    margin-top: 70px;
  }
}

    
</style>


<form method="POST" action="{$_layoutParams.root}registro" id="frmRegistro" class="form-register" enctype="multipart/form-data">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="txt_nombre" id="nombre" placeholder="Nombre" {if isset($datos.txt_nombre)} value="{$datos.txt_nombre}" {/if}>
        <input class="input-100" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" {if isset($datos.txt_usuario)} value=" {$datos.txt_usuario}" {/if}>
        <input class="input-100" type="text" name="txt_correo" id="correo" placeholder="Correo" {if isset($datos.txt_correo)} value=" {$datos.txt_correo}" {/if}>
        <input class="input-100" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" {if isset($datos.txt_pass)} value="{$datos.txt_pass}"{/if}>
        <input class="input-100" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña" {if isset($datos.txt_passConfirmar)} value=" {$datos.txt_passConfirmar}" {/if}>
        <input class="input-100" type="file" name="imagen" id="pass1" placeholder="Confirmar Contraseña" />
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="{$_layoutParams.root}usuarios/login"> INGRESAR</a></p>
    </div>

</form>
    <br>