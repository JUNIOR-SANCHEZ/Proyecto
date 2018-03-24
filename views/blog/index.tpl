

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
{if isset($noticia) && !empty($noticia)}
    <article>
        {foreach item=dt from=$noticia}
        <div class="post-image">
                <div class="post-heading">
                    <h3>
                        <a href="{$_layoutParams.root}blog/noticia/{Cifrado::encryption($dt.id)}">{$dt.nombre}</a> 
                        {if $_acl->permiso("admin_access")}
                        <abbr title="Eliminar Noticia" class="initialism"><a href="{$_layoutParams.root}blog/eliminarNoticia/{Cifrado::encryption($dt.id)}" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i></a></abbr>
                        {/if}
                    </h3>
                </div>
                        {if !empty($dt.imagen)} <img style="width: 800px;height: 300px;" src="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$dt.imagen}" alt=""/>{/if}
        </div>
        <p>
                 {$dt.cuerpo|truncate:325:" ...":true}
        </p>
        <div class="bottom-article">
                <ul class="meta-post">
                        <li><i class="icon-calendar"></i><a href="#">{$dt.fecha|date_format}</a></li>
                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                </ul>
                <a href="{$_layoutParams.root}blog/noticia/{Cifrado::encryption($dt.id)}" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
        </div>
        {/foreach}
    </article>
{if isset($paginacion)} 
<center>  {$paginacion} </center>
{/if}
{else}
    <div class="">
        <center><h3>NO HAY NOTICIAS QUE MOSTRAR</h3></center>
    </div>

{/if}
</div>
<!--    ======================================================================= 
                                 FIN DE NOTICIAS 
        =====================================================================-->                        
                                    
                                    <br><br>
                                    

<!--    ======================================================================= 
                                   CONMIENSO DEL FORMULARIO 
        =====================================================================-->                        
{if $_acl->permiso("admin_access")}
<div class="row">
    <div class="col-lg-12">
        <form action="{$_layoutParams.root}blog" method="POST" enctype="multipart/form-data" class="form-horizontal text-left" >
            <input type="hidden" name="guardar" value="1"/>
            <fieldset>
                <legend class="text-center header">PUBLICAR</legend>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-11">
                        <input id="fname" name="name" type="text" placeholder="Tema" value="{$blog.name|default:""}" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-11">
                        <textarea class="form-control" id="cuerpo" name="cuerpo"  placeholder="INGRESE EL CUERPO DE LA PUBLICACION" rows="7">{$blog.cuerpo|default:""}</textarea>
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

 {/if}
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
                                {if isset($noticia) && !empty($noticia)}
                                <ul class="recent">
                                    {foreach item=dt from=$noticia}
                                        <li>
                                        {if !empty($dt.imagen)}
                                            <img style="width: 65px;height: 65px;" src="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$dt.imagen}" class="pull-left" alt="" />
                                        {/if}
                                        <h6><a href="#"> {$dt.nombre} </a></h6>
                                        <p>
                                                {$dt.cuerpo|truncate:65:" ...":true}
                                        </p>
                                        </li>

                                        {/foreach}
                                </ul>
                                {/if}
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
