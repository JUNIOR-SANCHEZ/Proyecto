<?php /* Smarty version Smarty-3.1.8, created on 2018-02-17 07:48:19
         compiled from "C:\xampp\htdocs\SanJuan\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8254051915a84b049bdaac5-94923322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0babeb50d91d52e1c95484f29ca71c5cfe7bf41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\views\\login\\index.tpl',
      1 => 1518850078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8254051915a84b049bdaac5-94923322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a84b049c08477_92749335',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a84b049c08477_92749335')) {function content_5a84b049c08477_92749335($_smarty_tpl) {?>

<div class="contenedor-login">
    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/User-icon.png" alt="">
    <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" method="POST">
        <input type="hidden" name="enviar" value="1"/>
        <div class="form-inputs">
            <input type="text" id="usuario" class="login-inputs" name="txt_usuario" placeholder="Usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_usuario'];?>
<?php }?>">
        </div>
        <div class="form-inputs">
            <input type="password" id="clave" class="login-inputs" name="txt_pass" placeholder="Contraseña" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>) <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_pass'];?>
 <?php }?>">
        </div>

        <input class="btn-Ingresar" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro">¿Necesitas una cuenta?</a>
    </form>
</div><?php }} ?>