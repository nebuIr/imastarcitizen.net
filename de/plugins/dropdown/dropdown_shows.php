<!DOCTYPE html>
<html>

<head>
    <meta content="IE=edge,chrome=1" http-equiv=X-UA-Compatible>
    <link href=../plugins/dropdown/dropdown.css rel=stylesheet type=text/css>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel=stylesheet type=text/css>
    <script src=modernizr.custom.79639.js type=text/javascript></script>
    <noscript>
        <link href=../plugins/dropdown/noJS.css rel=stylesheet type=text/css>
    </noscript>
    <link href=https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css rel=stylesheet>
    <title></title>
</head>

<body>
    <div class=wrapper-down>
        <div class=wrapper-dropdown id=dd tabindex=1>
            Shows
            <ul class=dropdown>
                <li>
                    <a href="index.php?section=all"><i class="fa fa-folder-open"></i>Alle</a>
                </li>
                <li>
                    <a href="index.php?section=ships"><i class="fa fa-space-shuttle"></i>Schiffe</a>
                </li>
                <li>
                    <a href="index.php?section=companies"><i class="fa fa-cog"></i> Hersteller</a>
                </li>
                <li>
                    <a href="index.php?section=systems"><i class="fa fa-globe"></i> Systeme</a>
                </li>
                <li>
                    <a href="index.php?section=developer_team"><i class="fa fa-users"></i> Entwickler Team</a>
                </li>
                <li>
                    <a href="index.php?section=events"><i class="fa fa-music"></i> Events</a>
                </li>
                <li>
                    <a href="index.php?section=miscellaneous"><i class="fa fa-tag"></i> Verschiedenes</a>
                </li>
            </ul>
        </div>
    </div>
    <script type=text/javascript>
        function DropDown(a) {
            this.dd = a;
            this.initEvents()
        }
        DropDown.prototype = {
            initEvents: function () {
                var a = this;
                a.dd.on("click", function (b) {
                    $(this).toggleClass("active");
                    b.stopPropagation()
                })
            }
        };
        $(function () {
            var a = new DropDown($("#dd"));
            $(document).click(function () {
                $(".wrapper-dropdown").removeClass("active")
            })
        });
    </script>
    <br>
    <br>
</body>

</html>