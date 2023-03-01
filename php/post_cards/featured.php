<?php
/** @var array<Page> $content */
/** @var Category $category */
/** @var Page $page */
?>
    <div class="card h-100 border-1">
        <?php if($page->coverImage()) { ?>
            <div class="d-block w-auto overflow-hidden" style="max-width: 100%; height: 398px;">
                <!--<div class="spinner-border position-relative top-100 start-50" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>-->
                <img src="<?= $page->coverImage() ?>" class="object-fit-cover " alt="<?= $page->title() ?>"
                     onclick="location.href = '<?= $page->permalink() ?>';"  style="width: auto; max-width: 100%; height: 398px;">
            </div>


            <div class="position-absolute" style="left:24px;top:24px;">
                <a href="<?= $page->categoryPermalink() ?>"
                   title="<?= $L->g('go-to-category') ?> <?= $page->category() ?>"
                   class="badge bg-danger text-light ms-2 mt-2 text-decoration-none">
                    <?= $page->category() ?>
                </a>
            </div>

            </div>
        <?php } else { ?>


        <?php } ?>

        <div class="card-body">
            <p class="card-title fw-bold">
                <a class="text-primary text-decoration-none" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
            </p>
            <p class="card-text text-secondary">
                <small><?php echo $page->date(); ?> - <?php echo $page->user('nickname'); ?></small>
            </p>
        </div>
    </div>