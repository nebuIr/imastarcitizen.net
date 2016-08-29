<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="#imastarcitizen - Alle offiziellen Star Citizen Sammelkarten">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Electrolize|Orbitron:400,500,700|Share+Tech+Mono" rel="stylesheet" type="text/css">
    <link href="../style/css/footer.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php

        if(isset($_GET["section"]))
            
        {
            $section = $_GET["section"];
        }
        else
        {
            $section = "";
        }

    ?>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/back_to_top.js"></script>
        <title>#imastarcitizen</title>
        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    padding: 0,
                    openEffect: "elastic"
                })
            });
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <link href="plugins/fancybox/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
        <script src="plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
</head>

<body>
    <main class="shadow">
        <header>
            <a href="index.php?section=home"><img id="header" height="205px" src="../images/header/header_bg.jpg" width="980px"></a>
            <a href="http://en.imastarcitizen.net" id="locale" title="English"><img src="../images/misc/en.png" width="30px"></a>
        </header>
        <nav>
            <?php include('menu.php'); ?>
        </nav>
        <section>
            <?php include('pages/sections/sites.php'); ?>
            <a href="#0" class="back_to_top">Top</a>
        </section>
    </main>
    <footer class="footer-distributed">
        <div class="footer-right">
            <p>Auf Sozialen Netzwerken teilen</p>
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
                <i class="fa fa-reddit-square" style="padding-top:7px"></i></a>
        </div>
        <div class="footer-left">
            <p class="footer-links"><a href="../index.php?section=card_archives">Kartenarchiv</a> - <a href="../index.php?section=downloads">Downloads</a> - <a href="http://robertspaceindustries.com">RSI Startseite</a> - <a href="http://instagram.com/robertsspaceind">RSI Instagram</a></p>
            <p>Diese Website wurde von <img src="../images/misc/pp_16.jpg"><b><a href="https://forums.robertsspaceindustries.com/profile/254923/nebulr"> nebulr</a></b> erstellt
                <br>
                <br>Bitte <a href="../index.php?section=feedback"><b>sende</b></a> mir dein
                <b>Feedback</b> oder <b>Fehler</b>, falls du welche findest</p>
            <br>
            <a href="http://referral.imastarcitizen.net"><font size="2">Klicke hier um ein Star Citizen zu werden!</font></a>
            <br>
            <br>
            <a href="http://en.imastarcitizen.net" title="English"><img src="../images/misc/en.png" width="30px"></a>
            <br>
        </div>
    </footer>
</body>

</html>