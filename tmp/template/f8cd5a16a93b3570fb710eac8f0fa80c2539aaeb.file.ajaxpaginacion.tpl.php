<?php /* Smarty version Smarty-3.1.8, created on 2018-03-12 05:01:05
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\test\ajaxpaginacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19501076495aa5fb36d290b1-41278124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cd5a16a93b3570fb710eac8f0fa80c2539aaeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\test\\ajaxpaginacion.tpl',
      1 => 1520827264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19501076495aa5fb36d290b1-41278124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa5fb36dcbaa0_26719717',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa5fb36dcbaa0_26719717')) {function content_5aa5fb36dcbaa0_26719717($_smarty_tpl) {?>
<div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn btn-dark"><i class="glyphicon glyphicon-share"></i></button>
        
    </form>
</div>
<div id="lista_registros">
<div class="container">
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
</div>    <?php }} ?>