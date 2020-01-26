<?php include __DIR__ . '/locale/locale.php' ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="#imastarcitizen - All official Star Citizen trading cards">
    <link href="/style/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Electrolize|Orbitron:400,500,700|Share+Tech+Mono" rel="stylesheet" type="text/css">
    <link href="/style/css/footer.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68526906-1"></script>
    <script src="/style/js/gtag.js"></script>

    <?php

        $params = explode('/', $_SERVER['REQUEST_URI']);

        if (array_key_exists(1, $params)) {
            $section = $params[1];
        } else {
            $section = '';
        }

    ?>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="/style/js/back_to_top.js"></script>
        <title>#imastarcitizen</title>
        <script>
            $(document).ready(function () {
                $('.fancybox').fancybox({
                    padding: 0,
                    openEffect: "elastic"
                })
            });
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <link href="/plugins/fancybox/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
        <script src="/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
</head>

<body>
    <main class="shadow">
        <header>
            <a href="/"><img id="header" height="205px" src="/images/header/header_bg.jpg" width="980px"></a>
            <?= $lang['HEADER_LOCALE'] ?>
        </header>
        <nav>
            <?php include __DIR__ . '/menu.php' ?>
        </nav>
        <section>
            <?php include __DIR__ . '/pages/sections/sites.php' ?>
            <a href="#" class="back_to_top">Top</a>
        </section>
    </main>
    <footer class="footer-distributed">
        <div class="footer-right">
            <p><?= $lang['FOOTER_SOCIAL'] ?></p>
            <br>
            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//imastarcitizen.net','newwindow','width=650, height=600');return false">
                <i class="fa fa-facebook" style="padding-top:7px"></i></a>
            <a href="#" onclick="window.open('https://twitter.com/home?status=%23ImAStarCitizen%0Ahttp%3A//imastarcitizen.net','newwindow','width=440, height=255');return false">
                <i class="fa fa-twitter" style="padding-top:7px"></i></a>
            <a href="#" onclick="window.open('https://plus.google.com/share?url=http%3A//imastarcitizen.net','newwindow','width=500, height=500');return false">
                <i class="fa fa-google-plus" style="padding-top:7px"></i></a>
            <a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=http%3A//imastarcitizen.net&title=%23ImAStarCitizen&summary=&source=','newwindow','width=650, height=600');return false">
                <i class="fa fa-linkedin" style="padding-top:7px"></i></a>
            <a href="//www.reddit.com/submit" onclick="window.location='//www.reddit.com/submit?url='+encodeURIComponent(window.location);return false">
                <i class="fa fa-reddit-square" style="padding-top:7px"></i></a> <br>
            <?= $lang['FOOTER_LOCALE'] ?>
        </div>
        <div class="footer-left">
            <p class="footer-links"><a href="/card_archives/"><?= $lang['FOOTER_CARD_ARCHIVES'] ?></a> - <a href="/downloads/"><?= $lang['FOOTER_DOWNLOADS'] ?></a> - <a href="http://robertspaceindustries.com"><?= $lang['FOOTER_RSI_HOMEPAGE'] ?></a> - <a href="http://instagram.com/robertsspaceind"><?= $lang['FOOTER_RSI_INSTAGRAM'] ?></a></p>
            <p><?= $lang['FOOTER_BY'] ?>
                <br>
                <br><?= $lang['FOOTER_FEEDBACK'] ?></p>
            <br>
            <a href="https://screferral.space/share/STAR-X3J2-5FGQ" target="_blank"><span style="font-size: small; "><?= $lang['FOOTER_REFERRAL'] ?></span></a>
            <br>
            <br>
            <a class="github-button" href="https://github.com/xnebulr" data-count-href="/xnebulr/followers" aria-label="Follow @xnebulr on GitHub">Follow @xnebulr</a> &nbsp;
            <a href="https://twitter.com/xnebulr" class="twitter-follow-button" data-show-count="false">Follow @xnebulr</a> <script>!function(d,s,id){let js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <br>
        </div>
    </footer>
</body>

</html>
