<?php /* Smarty version Smarty-3.1.8, created on 2018-03-11 22:15:29
         compiled from "C:\xampp\htdocs\SanJuan\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6714642765aa59c71cecda2-42109574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7edb8c0284b93d4b3fca3cedc6a70dd89783eee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1520801087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6714642765aa59c71cecda2-42109574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'us' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa59c71deccf0_75229204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa59c71deccf0_75229204')) {function content_5aa59c71deccf0_75229204($_smarty_tpl) {?><h2>Usuarios</h2>

<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['us'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['us']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['us']->key => $_smarty_tpl->tpl_vars['us']->value){
$_smarty_tpl->tpl_vars['us']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['usuario'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['role'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
">
                   Permisos
                </a>
            </td>
        </tr>
            
        <?php } ?>
    </table>
<?php }?><?php }} ?>