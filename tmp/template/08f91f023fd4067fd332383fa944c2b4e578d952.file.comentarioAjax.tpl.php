<?php /* Smarty version Smarty-3.1.8, created on 2018-03-24 19:53:55
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\blog\vistaAjax\comentarioAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9110582945ab68de00a1fc6-19144019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08f91f023fd4067fd332383fa944c2b4e578d952' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\blog\\vistaAjax\\comentarioAjax.tpl',
      1 => 1521917622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9110582945ab68de00a1fc6-19144019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab68de00f2844_22716808',
  'variables' => 
  array (
    'comentarios' => 0,
    'root' => 0,
    'cmt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab68de00f2844_22716808')) {function content_5ab68de00f2844_22716808($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['root'] = new Smarty_variable("http://localhost/SanjuanBautista/", null, 0);?>

<?php  $_smarty_tpl->tpl_vars['cmt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->key => $_smarty_tpl->tpl_vars['cmt']->value){
$_smarty_tpl->tpl_vars['cmt']->_loop = true;
?>
<li class="media">
  <div class="media-left">
    <a href="#">
        <img class="media-object img-circle" width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/user/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['cmt']->value['imagen'];?>
" alt="...">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading">
          <?php echo $_smarty_tpl->tpl_vars['cmt']->value['nick'];?>
 
          <?php if (Session::get("id")==$_smarty_tpl->tpl_vars['cmt']->value['usuario']){?> 
              <a class="eliminarComentario pull-right" attr-noticiaId="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['cmt']->value['noticia']);?>
" attr-comentarioId="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['cmt']->value['id']);?>
">
                  <i class="glyphicon glyphicon-trash"></i>
              </a> 
          <?php }?>
      </h4>
    <?php echo $_smarty_tpl->tpl_vars['cmt']->value['comentario'];?>
 
  </div>
</li>
<?php } ?><?php }} ?>