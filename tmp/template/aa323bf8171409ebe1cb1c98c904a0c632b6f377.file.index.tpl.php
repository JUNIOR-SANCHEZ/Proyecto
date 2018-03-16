<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 03:10:31
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8081456465aa5e1971533b0-70814637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa323bf8171409ebe1cb1c98c904a0c632b6f377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\acl\\index.tpl',
      1 => 1520820568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8081456465aa5e1971533b0-70814637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5e1971ee692_53889929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5e1971ee692_53889929')) {function content_5aa5e1971ee692_53889929($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>