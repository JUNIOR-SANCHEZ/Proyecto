<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><span>I</span>NTSIPP</a>
        </div>
        <?php if(isset($menu) && sizeof($menu) > 0 ) : ?>
        <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
                <?php foreach ($menu as $item):?>
                <?php 
                    $_item_style = "";
                    if(View::getViewId() && $item["id"] == View::getViewId()){
                        $_item_style = "active";
                    }
                ?>
                <li><a class="<?=$_item_style?>" href="<?=$item["enlace"]?>"><?=$item["titulo"]?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>
