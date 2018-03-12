<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 00:18:09
         compiled from "C:\xampp\htdocs\SanJuan\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21257354555aa5b3bb9be4f9-62612129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00adef6f337c627387b8bf2285a2601a7695a578' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1520810289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21257354555aa5b3bb9be4f9-62612129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5b3bba9cce3_08004995',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5b3bba9cce3_08004995')) {function content_5aa5b3bba9cce3_08004995($_smarty_tpl) {?><style>
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


<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro" id="frmRegistro" class="form-register" enctype="multipart/form-data">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="txt_nombre" id="nombre" placeholder="Nombre" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_nombre'])){?> value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_nombre'];?>
" <?php }?>>
        <input class="input-100" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_usuario'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_usuario'];?>
" <?php }?>>
        <input class="input-100" type="text" name="txt_correo" id="correo" placeholder="Correo" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_correo'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_correo'];?>
" <?php }?>>
        <input class="input-100" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_pass'])){?> value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_pass'];?>
"<?php }?>>
        <input class="input-100" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_passConfirmar'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_passConfirmar'];?>
" <?php }?>>
        <input class="input-100" type="file" name="imagen" id="pass1" placeholder="Confirmar Contraseña" />
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login"> INGRESAR</a></p>
    </div>

</form>
    <br><?php }} ?>