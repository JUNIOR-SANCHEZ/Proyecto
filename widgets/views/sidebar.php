<div class="panel panel-warning">

    <div class="panel-body">
        MENU    
    </div>

    <ul class="nav nav-stacked">
        <?php foreach ($menu as $m): ?>
            <?php if (isset($id)): ?>
                <?php $_style = 'active'; ?>
            <?php else: ?>
                <?php $_style = ''; ?>
            <?php endif; ?>

            <li class="<?php echo $_style; ?>">
                <a  href="<?php echo $m['enlace']; ?>"><i class="<?php echo $m['imagen']; ?>"> </i> <?php echo $m['titulo']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>