<br><br>
<div class="container">
    <form class="form-horizontal">
        <fieldset>
            <center><legend>DATOS DEL USUARIO</legend></center>
            <br>
        <div class="row">
            <div class="col-md-8">

                    <div class="form-group">
                        <label for="name" class="col-md-4">Nombres y Apellidos</label>
                        <div class="col-md-8">
                            <input type="text" id="name" class="form-control" placeholder="Cu&aacute;l es tu nombre" value="{$usuario.nombre}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user" class="col-md-4">Usuario</label>
                        <div class="col-md-8">
                            <input type="text" id="user" class="form-control" placeholder="Cu&aacute;l es tu usuario" value="{$usuario.usuario}"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" id="email" class="form-control" placeholder="Cu&aacute;l es tu email" value="{$usuario.email}"/>
                         </div>
                    </div>   
                    <div class="form-group">
                        <label for="phone" class="col-md-4">Telefono</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" class="form-control" placeholder="&iquest;Cu&aacute;l es tu telefono &quest;" value="{$usuario.phone}"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-md-4">Sexo</label>
                        <div class="col-md-8">
                            <select id="sex" class="form-control">
                                <option selected>Seleccionar</option>
                                <option {if $usuario.sexo == "hombre"} selected {/if}>Masculino</option>
                                <option {if $usuario.sexo == "mujer"} selected {/if}>Femenino</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="col-md-4">Estado Civil</label>
                        <div class="col-md-8">
                            <select id="estado" class="form-control">
                                <option>Seleccionar</option>
                                <option {if $usuario.estadoCivil == "soltero"} selected {/if}>Soltero</option>
                                <option {if $usuario.estadoCivil == "casado"} selected {/if} >Cassado</option>
                                <option {if $usuario.estadoCivil == "divorsiado"} selected {/if}>Divorsiado</option>
                                <option >otros</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion" class="col-md-4">Ocupaci&oacute;n</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" class="form-control" placeholder="En que trabajas" value="{$usuario.ocupacion}"/>
                         </div>
                    </div>

            </div>
            <div class="col-md-4">
                <img class="text-center" src="{$_layoutParams.root}public/img/user/{$usuario.imagen}" alt="nose encuentra la imagen"/>
                <div class="form-group">
                    <label class="btn btn-primary btn-lg" for="my-file-selector">
                        <input id="my-file-selector" name="imagen" type="file" style="display:none;">
                         IMAGEN
                    </label>
                </div>    
            </div>
        </div>
         <div class="row">
             <div class="col-md-4 col-md-offset-8">
                 <a href="" class="btn btn-orange pull-right">Guardar Cambios</a>
             </div>
         </div>
         </fieldset>
     </form>
</div>