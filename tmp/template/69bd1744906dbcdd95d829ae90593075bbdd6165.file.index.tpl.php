<?php /* Smarty version Smarty-3.1.8, created on 2018-03-24 15:45:09
         compiled from "C:\xampp\htdocs\SanjuanBautista\views\blog\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12146989695aac7174170b53-33008913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69bd1744906dbcdd95d829ae90593075bbdd6165' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SanjuanBautista\\views\\blog\\index.tpl',
      1 => 1521902706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12146989695aac7174170b53-33008913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aac71742cd419_34933496',
  'variables' => 
  array (
    'noticia' => 0,
    '_layoutParams' => 0,
    'dt' => 0,
    '_acl' => 0,
    'paginacion' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac71742cd419_34933496')) {function content_5aac71742cd419_34933496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\SanjuanBautista\\libs\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\SanjuanBautista\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
?>

<!--    ======================================================================= 
                            COMIENZO DEL CONTENEDOR 
        =====================================================================-->                        

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
<!--    ======================================================================= 
                                   CONMIENSO DE NOTICIAS
        =====================================================================-->                        
<div id="lista_registros">
<?php if (isset($_smarty_tpl->tpl_vars['noticia']->value)&&!empty($_smarty_tpl->tpl_vars['noticia']->value)){?>
    <article>
        <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value){
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
        <div class="post-image">
                <div class="post-heading">
                    <h3>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/noticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['dt']->value['id']);?>
"><?php echo $_smarty_tpl->tpl_vars['dt']->value['nombre'];?>
</a> 
                        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("admin_access")){?>
                        <abbr title="Eliminar Noticia" class="initialism"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/eliminarNoticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['dt']->value['id']);?>
" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i></a></abbr>
                        <?php }?>
                    </h3>
                </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['dt']->value['imagen'])){?> <img style="width: 800px;height: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/noticia/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['dt']->value['imagen'];?>
" alt=""/><?php }?>
        </div>
        <p>
                 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['dt']->value['cuerpo'],325," ...",true);?>

        </p>
        <div class="bottom-article">
                <ul class="meta-post">
                        <li><i class="icon-calendar"></i><a href="#"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dt']->value['fecha']);?>
</a></li>
                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                </ul>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog/noticia/<?php echo Cifrado::encryption($_smarty_tpl->tpl_vars['dt']->value['id']);?>
" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
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

<?php }?>
</div>
<!--    ======================================================================= 
                                 FIN DE NOTICIAS 
        =====================================================================-->                        
                                    
                                    <br><br>
                                    

<!--    ======================================================================= 
                                   CONMIENSO DEL FORMULARIO 
        =====================================================================-->                        
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("admin_access")){?>
<div class="row">
    <div class="col-lg-12">
        <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
blog" method="POST" enctype="multipart/form-data" class="form-horizontal text-left" >
            <input type="hidden" name="guardar" value="1"/>
            <fieldset>
                <legend class="text-center header">PUBLICAR</legend>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-11">
                        <input id="fname" name="name" type="text" placeholder="Tema" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['blog']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-11">
                        <textarea class="form-control" id="cuerpo" name="cuerpo"  placeholder="INGRESE EL CUERPO DE LA PUBLICACION" rows="7"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['blog']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-1">
                        <label class="btn btn-primary btn-lg" for="my-file-selector">
                            <input id="my-file-selector" name="imagen" type="file" style="display:none;">
                             IMAGEN
                        </label>
                        <input type="submit" class="btn btn-primary btn-lg" value="GUARDAR"/>
                        
                    </div>
                    
                        
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!--    ======================================================================= 
                                    FIN DELFORMULARIO
        =====================================================================-->                        

 <?php }?>
            </div>
            <div class="col-lg-4">
                    <aside class="right-sidebar">
                         <div class="widget">
                             <h5 class="widgetheading">Buscar Noticia</h5>
                            <form class="form-search">
                                <input id="buscarnoticia" class="form-control" type="text" placeholder="Search..">
                            </form>
                        </div>
                        <div class="widget">
                                <h5 class="widgetheading">Latest posts</h5>
                                <?php if (isset($_smarty_tpl->tpl_vars['noticia']->value)&&!empty($_smarty_tpl->tpl_vars['noticia']->value)){?>
                                <ul class="recent">
                                    <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
    
    <div class="row">
        <div class="col-lg-12">
            
        </div>        
    </div>
</section>
<!--    ======================================================================= 
                                    FIN DEL CONTENEDOR
        =====================================================================-->                        
<?php }} ?>