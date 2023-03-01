<div class="card border-1">

    <div class="card-header">
        <h2 class="fs-4">
            <?= $L->g('last-posts') ?>
        </h2>

        <p class="fs-6">
            <?= $L->g('last-posts-info') ?>
        </p>
    </div>

    <div class="card-body">
        <ul class="list-group list-group-flush">
            <?php
            $listOfKeys = $pages->getList(1, 10);
            if ($listOfKeys) :
                foreach ($listOfKeys as $key) :
                    $lPage = new Page($key);
                    ?>
                    <li class="list-group-item list-group-item list-group-item-action">
                        <a class="text-secondary-emphasis text-decoration-none small d-block" href="<?php echo $lPage->permalink() ?>">
                            <?php echo $lPage->title() ?>
                        </a>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>



</div>