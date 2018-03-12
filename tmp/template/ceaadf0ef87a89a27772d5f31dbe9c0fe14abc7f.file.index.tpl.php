<?php /* Smarty version Smarty-3.1.8, created on 2018-03-06 17:36:56
         compiled from "C:\xampp\htdocs\SanJuan\views\publicacion\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21377747395a98214a395818-46147188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceaadf0ef87a89a27772d5f31dbe9c0fe14abc7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanJuan\\views\\publicacion\\index.tpl',
      1 => 1520354215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21377747395a98214a395818-46147188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a98214a3bfa30_15076604',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'comentarios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a98214a3bfa30_15076604')) {function content_5a98214a3bfa30_15076604($_smarty_tpl) {?><div id="L">

<h1>SISTEMA DE COMENTARIOS TUNTORIALES <a href="">(SALIR)</a></h1>

<form name="form1" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
publicacion" />
  <input type="hidden" name="guardar" value="1"/>
  <label for="textarea"></label>
  <center>
      
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"> </textarea>
    </p>
    <p>
      <input type="submit" value="Comentar">
    </p>
  </center>
</form>
  
  
  <div id="container">
    	<ul id="comments">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <li class="cmmnt">
            	<div class="avatar">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/avatar/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" height="55" width="55">
                </div> 
                <div class="cmmnt-content">
                    <div class="header">
                    <a href="#" class="userlink"><?php echo $_smarty_tpl->tpl_vars['row']->value['id_usuario'];?>
</a> - <span class="pubdate"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</span>
                    </div>
                    <p>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['comentario'];?>

                    </p>
                    <span>
                    <a href="{}">
                    Responder
                    </a>
                    </span>
                </div>
            </li>        
            <?php } ?>
        </ul>
    </div>
       
<?php }} ?>