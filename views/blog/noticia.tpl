
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article>
        <div class="post-image">
                <div class="post-heading">
                        <h3>
                            <a href="">{$noticia.nombre}</a> 
                            {if $_acl->permiso("admin_access")}
                                <abbr title="Eliminar Noticia" class="initialism"><a href="{$_layoutParams.root}blog/eliminarNoticia/{Cifrado::encryption($noticia.id)}" class="btn btn-blue btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i></a></abbr>
                            {/if}
                        </h3>
                </div>
                        {if !empty($noticia.imagen)} <img style="width: 800px;height: 400px;" src="{$_layoutParams.root}public/img/noticia/thumb/thumb_{$noticia.imagen}" alt="" />{/if}
        </div>
        <p>
                 {$noticia.cuerpo}
        </p>
        <div class="bottom-article">
                <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="">{$noticia.fecha|date_format}</a></li>
                        
                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                </ul>
                <div class="pull-right fb-like" data-href="{$_layoutParams.root}blog/noticia/{Cifrado::encryption($noticia.id)}" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
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
                            {if isset($noticiarecientes) && !empty($noticiarecientes)}
                            <ul class="recent">
                                {foreach item=dt from=$noticiarecientes}
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
    </div>
</section>
<!--    ======================================================================= 
                                   CAJA DE COMENTARIOS
        =====================================================================-->
{if $_acl->permiso("nuevo_coment")}
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">                
                    <form id="formComentario" accept-charset="UTF-8" method="POST">
                        <input type="hidden" value="1" name="guardar"/>
                        <input type="hidden" value="{Cifrado::encryption($noticia.id)}" name="noticiaId"/>
                        <textarea id="textareaComentario" class="form-control counted" name="message" placeholder="Digite uma mensage" rows="5" style="margin-bottom:10px;"></textarea>
                        <h6 class="pull-right" id="counter">320 characters remaining</h6>
                        <button id="addComentario" class="btn btn-info" type="submit">Comentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
                                               
                        
{/if}
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
                        {foreach item=cmt from=$comentarios}
                        <li class="media">
                          <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" width="60" height="60" src="{$_layoutParams.root}public/img/user/thumb/thumb_{$cmt.imagen}" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                              <h4 class="media-heading">
                                  {$cmt.nick} 
                                  {if Session::get("id") == $cmt.usuario} 
                                      <a class="eliminarComentario pull-right" attr-noticiaId="{Cifrado::encryption($cmt.noticia)}" attr-comentarioId="{Cifrado::encryption($cmt.id)}">
                                          <i class="glyphicon glyphicon-trash"></i>
                                      </a> 
                                  {/if}
                              </h4>
                            {$cmt.comentario} 
                          </div>
                        </li>
                        {/foreach}
                      </ul>  
                </div>
            </div>
        </div>
    </div>
</div>