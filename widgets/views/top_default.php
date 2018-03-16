<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        
        <?php if(isset($menu) && sizeof($menu) > 0 ) : ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php foreach ($menu as $item):?>
                <?php 
                    $_item_style = "";
                    if(View::getViewId() && $item["id"] == View::getViewId()){
                        $_item_style = "active";
                    }
                ?>
                <li class="<?=$_item_style?>"><a href="<?=$item["enlace"]?>"><?=$item["titulo"]?> <span class="sr-only">(current)</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div> 
</nav>