<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $site->title() ?>
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?= css('assets/css/index.css') ?>
    <?= css('assets/css/header.css') ?>
    <?= css('assets/css/footer.css') ?>
    <?= css('assets/css/home.css') ?>

</head>

<header class="header">
    <div class="logo-container logo-content-padding">
    <?php if($image = $page->image('PoisonFrogLogoLockup.png')): ?>
    <img class="logo" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    </div>
    <div class="header-text">
        <h2 class="header-location-text">Auckland, New zealand</h2>
        <h2 class="header-email">hello@poisonfrog.com</h2>
    </div>
</header>