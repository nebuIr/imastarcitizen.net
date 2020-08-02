<?php
include __DIR__ . '/../src/classes/Locales.php';
use imastarcitizen\Locales;
$locales = new Locales();
$locale = $locales->getLocale();
?>
<html lang="<?= $locale['LOCALE_CODE'] ?>">

<head>
    <?php include_once __DIR__ . '/../src/templates/components/head.php' ?>
</head>

<body>
    <main class="shadow">
        <header>
            <a href="/"><img id="header" height="205px" src="/assets/img/header/header_bg.jpg" width="980px"></a>
            <?= $locale['HEADER_LOCALE'] ?>
        </header>
        <nav>
            <?php include __DIR__ . '/../src/templates/components/nav.php' ?>
        </nav>
        <section>
            <?php include __DIR__ . '/../src/routes.php' ?>
            <a href="#" class="back_to_top">Top</a>
        </section>
    </main>
    <footer class="footer-distributed">
        <?php include_once __DIR__ . '/../src/templates/components/footer.php' ?>
    </footer>
</body>

</html>
