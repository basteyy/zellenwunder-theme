<!doctype html>
<html lang="<?= HTML::lang() ?>>" data-bs-theme="auto">
<head>
    <?php include(THEME_DIR_PHP . 'layout/head.php'); ?>
</head>
<body>
    <?php execPluginsByHook('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP . 'layout/navbar.php'); ?>

    <main class="container-xxl m-auto row my-md-5" aria-label="main content">
        <section class="col-12 col-md-6 col-lg-8">
            <?php
            if ($WHERE_AM_I == 'page') {

            } elseif ($WHERE_AM_I == 'home') {
                include(THEME_DIR_PHP . 'home.php');

            } else {
                include(THEME_DIR_PHP . 'error.php');
            }
            ?>
        </section>
        <section class="col-12 col-md-6 col-lg-4" aria-label="sidebar">
            <?php include(THEME_DIR_PHP . 'layout/sidebar.php'); ?>
        </section>
    </main>

    <?php execPluginsByHook('siteBodyEnd'); ?>

</body>
<?= HTML::js('js/bootstrap.bundle.min.js') ?>
</html>

