

{if isset($noticia) && !empty($noticia)}
<article>
    <div id="fb-root"></div>
    {foreach item=dt from=$noticia}
    <div class="post-image">
            <div class="post-heading">
                    <h3><a href="#">{$dt.nombre}</a></h3>
            </div>
{if !empty($dt.imagen)}<center> <img src="http://localhost/sanjuanbautista/views/layout/default/img/blog/thumb/thumb_{$dt.imagen}" alt="http://localhost/INTSIPP/views/layout/default/img/blog/thumb/thumb_{$dt.imagen}" /></center>{/if}
    </div>
    <p>
             {$dt.cuerpo}
    </p>
    <div class="bottom-article">
            <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="#">{$dt.fecha|date_format}</a></li>
                    <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
            </ul>
            <a href="http://localhost/sanjuanbautista/blog/noticia/{Cifrado::encryption($dt.id)}" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
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