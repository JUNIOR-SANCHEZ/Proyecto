<?php /* Smarty version Smarty-3.1.8, created on 2018-03-06 17:04:38
         compiled from "C:\xampp\htdocs\SanJuan\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17462368875a84c3c268e9d4-69415333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '024301418b2fd9edee0ecf0171e0bf7b0a208849' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\views\\registro\\index.tpl',
      1 => 1520351687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17462368875a84c3c268e9d4-69415333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a84c3c2880875_05969176',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a84c3c2880875_05969176')) {function content_5a84c3c2880875_05969176($_smarty_tpl) {?>


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
login"> INGRESAR</a></p>
    </div>

</form>
<?php }} ?>