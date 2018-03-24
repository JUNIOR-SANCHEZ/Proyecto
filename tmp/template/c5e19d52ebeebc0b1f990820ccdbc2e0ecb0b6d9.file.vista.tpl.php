<?php /* Smarty version Smarty-3.1.8, created on 2018-03-20 04:24:22
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\blog\vistaAjax\vista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106865225ab075ec60eba2-95571697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e19d52ebeebc0b1f990820ccdbc2e0ecb0b6d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\blog\\vistaAjax\\vista.tpl',
      1 => 1521516109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106865225ab075ec60eba2-95571697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab075ec649e46_69526014',
  'variables' => 
  array (
    'noticia' => 0,
    'dt' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab075ec649e46_69526014')) {function content_5ab075ec649e46_69526014($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\SanjuanBautista\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['noticia']->value)&&!empty($_smarty_tpl->tpl_vars['noticia']->value)){?>
<article>
    <div id="fb-root"></div>
    <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value){
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
    <div class="post-image">
            <div class="post-heading">
                    <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['dt']->value['nombre'];?>
</a></h3>
            </div>
<?php if (!empty($_smarty_tpl->tpl_vars['dt']->value['imagen'])){?><center> <img src="http://localhost/sanjuanbautista/views/layout/default/img/blog/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" alt="http://localhost/INTSIPP/views/layout/default/img/blog/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" /></center><?php }?>
    </div>
    <p>
             <?php echo $_smarty_tpl->tpl_vars['dt']->value['cuerpo'];?>

    </p>
    <div class="bottom-article">
            <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="#"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dt']->value['fecha']);?>
</a></li>
                    <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
            </ul>
            <a href="http://localhost/sanjuanbautista/blog/noticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['dt']->value['id']);?>
" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
    </div>
    <?php } ?>
</article>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?>
    <center>  <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 </center>
<?php }?>
<?php }else{ ?>
    <div class="">
        <center><h3>NO HAY NOTICIAS QUE MOSTRAR</h3></center>
    </div>
<?php }?><?php }} ?>