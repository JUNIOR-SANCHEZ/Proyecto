<div id="L">

<h1>SISTEMA DE COMENTARIOS TUNTORIALES <a href="">(SALIR)</a></h1>

<form name="form1" method="post"  action="{$_layoutParams.root}publicacion" />
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
            {foreach item=row from=$comentarios}
            <li class="cmmnt">
            	<div class="avatar">
                <img src="{$_layoutParams.root}public/img/avatar/thumb/thumb_{$row.imagen}" height="55" width="55">
                </div> 
                <div class="cmmnt-content">
                    <div class="header">
                    <a href="#" class="userlink">{$row.id_usuario}</a> - <span class="pubdate">{$row.fecha}</span>
                    </div>
                    <p>
                    {$row.comentario}
                    </p>
                    <span>
                    <a href="{}">
                    Responder
                    </a>
                    </span>
                </div>
            </li>        
            {/foreach}
        </ul>
    </div>
       
