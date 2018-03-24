<?php /* Smarty version Smarty-3.1.8, created on 2018-03-24 01:32:38
         compiled from "C:\xampp\htdocs\SanjuanBautista\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20097033005aa5e0a6abb064-13963811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f7d1188d895ab4a2e529b56f0c150e45aca889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1521851557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20097033005aa5e0a6abb064-13963811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5e0a6b73344_36908771',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuarios' => 0,
    'us' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5e0a6b73344_36908771')) {function content_5aa5e0a6b73344_36908771($_smarty_tpl) {?><div class="row">
    <div class="col-md-4">
        <h2>Usuarios</h2>
    </div>
    <div class=" col-md-8">
        <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios" method="POST" class="form-horizontal">
            <div class="form-group">
                <div class=" col-md-6 pull-right">
                <input class="form-control" type="text" name="share" id="share" placeholder="Share"/>
                </div>
                
                
            </div>
            <div class="form-group">
                <div class="col-md-6 pull-right">
                    <input class=" btn btn-info" type="submit" value="Share"/>
                </div>
            </div>
        </form>
    </div>
</div>


<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
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
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/eliminarUsuario/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['us']->value['id']);?>
" >Eliminar</a>
            </td>
        </tr>
            
        <?php } ?>
    </table>
<?php }?><?php }} ?>