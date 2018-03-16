<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 05:15:53
         compiled from "C:\xampp\htdocs\SanjuanBautista\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934889035aa5c8d3397399-66651770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5023a669e0ca0513cdbf1ad03aa0e746e4ef2ee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1520828147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934889035aa5c8d3397399-66651770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5c8d34484b1_73420307',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5c8d34484b1_73420307')) {function content_5aa5c8d34484b1_73420307($_smarty_tpl) {?><style>
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
usuarios/registro" id="frmRegistro" class="form-register" enctype="multipart/form-data">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="txt_nombre" id="nombre" placeholder="Nombre"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['txt_nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" value=" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['txt_usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="text" name="txt_correo" id="correo" placeholder="Correo"  value=" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['txt_correo'])===null||$tmp==='' ? '' : $tmp);?>
" >
        <input class="input-100" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['txt_pass'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input class="input-100" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña"  value=" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['txt_passConfirmar'])===null||$tmp==='' ? '' : $tmp);?>
" >
        <input class="input-100" type="file" name="imagen" id="pass1" placeholder="Confirmar Contraseña" />
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login"> INGRESAR</a></p>
    </div>

</form>
    <br><?php }} ?>