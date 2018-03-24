<?php /* Smarty version Smarty-3.1.8, created on 2018-03-23 20:56:39
         compiled from "C:\xampp\htdocs\SanjuanBautista\modules\usuarios\views\registro\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17745296845ab45c76a937c1-28941008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e02abefbd764473dffaec8dd0c705b2520b6a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\modules\\usuarios\\views\\registro\\perfil.tpl',
      1 => 1521834999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17745296845ab45c76a937c1-28941008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab45c76ac0aa1_54819167',
  'variables' => 
  array (
    'usuario' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab45c76ac0aa1_54819167')) {function content_5ab45c76ac0aa1_54819167($_smarty_tpl) {?><br><br>
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
                            <input type="text" id="name" class="form-control" placeholder="Cu&aacute;l es tu nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user" class="col-md-4">Usuario</label>
                        <div class="col-md-8">
                            <input type="text" id="user" class="form-control" placeholder="Cu&aacute;l es tu usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" id="email" class="form-control" placeholder="Cu&aacute;l es tu email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"/>
                         </div>
                    </div>   
                    <div class="form-group">
                        <label for="phone" class="col-md-4">Telefono</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" class="form-control" placeholder="&iquest;Cu&aacute;l es tu telefono &quest;" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['phone'];?>
"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-md-4">Sexo</label>
                        <div class="col-md-8">
                            <select id="sex" class="form-control">
                                <option selected>Seleccionar</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="hombre"){?> selected <?php }?>>Masculino</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="mujer"){?> selected <?php }?>>Femenino</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="col-md-4">Estado Civil</label>
                        <div class="col-md-8">
                            <select id="estado" class="form-control">
                                <option>Seleccionar</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="soltero"){?> selected <?php }?>>Soltero</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="casado"){?> selected <?php }?> >Cassado</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estadoCivil']=="divorsiado"){?> selected <?php }?>>Divorsiado</option>
                                <option >otros</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion" class="col-md-4">Ocupaci&oacute;n</label>
                        <div class="col-md-8">
                            <input type="text" id="phone" class="form-control" placeholder="En que trabajas" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['ocupacion'];?>
"/>
                         </div>
                    </div>

            </div>
            <div class="col-md-4">
                <img class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/user/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen'];?>
" alt="nose encuentra la imagen"/>
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
</div><?php }} ?>