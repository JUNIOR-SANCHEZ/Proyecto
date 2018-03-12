<nav class="menu-nav">
    <?php if (isset($menu) && sizeof($menu) > 0) : ?>
        <ul>
            <!--aria-hidden="true"-->
            <?php foreach ($menu as $item): ?>
                <?php
                $_item_style = "";
                if (View::getViewId() && $item["id"] == View::getViewId()) {
                    $_item_style = "active";
                }
                ?>
                <li><a href="<?=$item["enlace"]?>"><span class="<?=$_item_style?>" ></span><?=$item["titulo"]?></a></li>
                <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</nav>