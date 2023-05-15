<?php use Models\Admin\AdminOptionsModel; $AdminOptionsModel = new AdminOptionsModel(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL ?>/public/assets/img/favicon.png">
    <link href="<?= SITE_URL ?>/public/styles/style.css" rel="stylesheet">
    <script defer src="<?= SITE_URL ?>/public/script.js"></script>
    <title><?= $AdminOptionsModel->getOption('Site title'); ?></title>
</head>
<body>
    <header>
        <div class="site-header wrapper row">
            <a class="site-header__logo" href="<?= SITE_URL ?>">
                <img src="<?= SITE_URL ?>/public/assets/img/logo-white.png">
            </a>
            <nav class="">
                <ul class="row">
                    <li><a href="<?= SITE_URL ?>/">Accueil</a></li>
                    <li><a href="<?= SITE_URL ?>/shop">Boutique</a></li>
                    <li><a href="<?= SITE_URL ?>/blog">Blog</a></li>
                </ul>
            </nav>
            <div class="site-header__account">
                <?php if ( !isset($_SESSION['user']) ) : ?>
                    <a class="btn btn_primary" href="<?= SITE_URL ?>/admin">Log in</a>
                <?php else : ?>
                    <a class="profil" href="<?= SITE_URL ?>/admin/dashboard"><?= $_SESSION['user']['login'][0]; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!--Main content-->
    <main id="main">
        <?php require_once($datas['view']); ?>
    </main>

    <!--Info message system-->
    <?php require_once('Views/parts/message.php'); ?>

    <footer>
        <div class="site-footer wrapper">
            <p>© Alexis Hadjian - 2023</p>
        </div>
    </footer>
</body>
</html>



