<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 04:54:03
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\test\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13678535255aa5f9db63db96-92300722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a44de7a3a44d24433d9983b71c15d0b116dec704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\test\\index.tpl',
      1 => 1520825879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13678535255aa5f9db63db96-92300722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5f9dc5b4682_30796885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5f9dc5b4682_30796885')) {function content_5aa5f9dc5b4682_30796885($_smarty_tpl) {?><div class="container">
<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>
    <div class="container">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CIUDAD</th>
                    <th>EDAD</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['ciudad'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['edad'];?>
 </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
<?php }else{ ?>
    <h3>NO HAY REGISTROS</h3>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?> <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 <?php }?>

</div>
    <?php }} ?>