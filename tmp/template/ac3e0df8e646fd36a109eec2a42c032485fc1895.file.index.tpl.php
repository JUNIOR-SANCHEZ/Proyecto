<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 05:27:52
         compiled from "C:\xampp\htdocs\SanjuanBautista\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9145867245aa5c8cdb82c81-12114521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac3e0df8e646fd36a109eec2a42c032485fc1895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1520828866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9145867245aa5c8cdb82c81-12114521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5c8cdc22945_53711568',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5c8cdc22945_53711568')) {function content_5aa5c8cdc22945_53711568($_smarty_tpl) {?><style>
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
    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/User-icon.png" alt="">
    <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" method="POST">
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
usuarios/registro">¿Necesitas una cuenta?</a>
    </form>
</div><?php }} ?>