<?php /* Smarty version Smarty-3.1.8, created on 2018-03-24 19:53:10
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\blog\noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3949656135ab04edc174402-64866786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2c419824d267524fa1ec4a35c9b52fc64c569a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\blog\\noticia.tpl',
      1 => 1521917589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3949656135ab04edc174402-64866786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ab04edc255424_29456268',
  'variables' => 
  array (
    'noticia' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
    'noticiarecientes' => 0,
    'dt' => 0,
    'comentarios' => 0,
    'cmt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab04edc255424_29456268')) {function content_5ab04edc255424_29456268($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\SanjuanBautista\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\SanjuanBautista\\libs\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article>
        <div class="post-image">
                <div class="post-heading">
                        <h3>
                            <a href=""><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</a> 
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("admin_access")){?>
                                <abbr title="Eliminar Noticia" class="initialism"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/eliminarNoticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['noticia']->value['id']);?>
" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i></a></abbr>
                            <?php }?>
                        </h3>
                </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['noticia']->value['imagen'])){?> <img style="width: 800px;height: 400px;" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
" alt="" /><?php }?>
        </div>
        <p>
                 <?php echo $_smarty_tpl->tpl_vars['noticia']->value['cuerpo'];?>

        </p>
        <div class="bottom-article">
                <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['noticia']->value['fecha']);?>
</a></li>
                        
                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                </ul>
                <div class="pull-right fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/noticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['noticia']->value['id']);?>
" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        </div>
    </article>
            </div>
            <div class="col-lg-4">
                <aside class="right-sidebar">
                    <div class="widget">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                    </div>
                    <div class="widget">
                            <h5 class="widgetheading">Latest posts</h5>
                            <?php if (isset($_smarty_tpl->tpl_vars['noticiarecientes']->value)&&!empty($_smarty_tpl->tpl_vars['noticiarecientes']->value)){?>
                            <ul class="recent">
                                <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticiarecientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value){
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
                                    <li>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['dt']->value['imagen'])){?>
                                        <img style="width: 65px;height: 65px;" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" class="pull-left" alt="" />
                                    <?php }?>
                                    <h6><a href="#"> <?php echo $_smarty_tpl->tpl_vars['dt']->value['nombre'];?>
 </a></h6>
                                    <p>
                                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['dt']->value['cuerpo'],65," ...",true);?>

                                    </p>
                                    </li>
                                    
                                    <?php } ?>
                            </ul>
                            <?php }?>
                    </div>
                
                </aside>
            </div>
        </div>
    </div>
</section>
<!--    ======================================================================= 
                                   CAJA DE COMENTARIOS
        =====================================================================-->
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("nuevo_coment")){?>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">                
                    <form id="formComentario" accept-charset="UTF-8" method="POST">
                        <input type="hidden" value="1" name="guardar"/>
                        <input type="hidden" value="<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['noticia']->value['id']);?>
" name="noticiaId"/>
                        <textarea id="textareaComentario" class="form-control counted" name="message" placeholder="Digite uma mensage" rows="5" style="margin-bottom:10px;"></textarea>
                        <h6 class="pull-right" id="counter">320 characters remaining</h6>
                        <button id="addComentario" class="btn btn-info" type="submit">Comentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
                                               
                        
<?php }?>
<!--    ======================================================================= 
                               FIN DE CAJA DE COMENTARIOS
        =====================================================================-->                        
<div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="panel panel-info">
              <div class="panel-heading">COMENTARIOS</div>
              <div class="panel-body">
                  <ul id="comentarioTexto" class="media-list">
                        <?php  $_smarty_tpl->tpl_vars['cmt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->key => $_smarty_tpl->tpl_vars['cmt']->value){
$_smarty_tpl->tpl_vars['cmt']->_loop = true;
?>
                        <li class="media">
                          <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
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
                        <?php } ?>
                      </ul>  
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>