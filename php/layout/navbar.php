<nav class="navbar navbar-expand-lg bg-body-tertiary">


    <div class="container-xxl">
        <a class="navbar-brand" href="<?= HTML::siteUrl() ?>">
            <?php
            echo $site->title(); ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll">
                <?php foreach ($categories->db as $key=>$fields):
                    if($fields['list']):  ?>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?php echo DOMAIN_CATEGORIES.$key; ?>">
                                <?php echo $fields['name']; ?>
                            </a>
                        </li>
                    <?php
                    endif;
                endforeach; ?>
            </ul>

            <ul class="navbar-nav ms-auto me-0">
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark  dropdown-menu-lg-end">
                        <?php
                        foreach ($staticContent as $staticPage): ?>
                            <a
                                    class="dropdown-item" href="<?php
                            echo $staticPage->permalink() ?>"><?php
                                echo $staticPage->title() ?></a>
                        <?php
                        endforeach ?>
                    </ul>
                </li>
            </ul>

            <?php
            if (isPluginActive('pluginSearch')): ?>
                <div class="d-none d-md-block vr ms-2 me-3"></div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            <?php
            endif; ?>
        </div>
    </div>
</nav>