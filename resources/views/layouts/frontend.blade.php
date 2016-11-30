<!DOCTYPE html>
<html>
<head>
    <title>Straw Dog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    @yield('keywords')

    @yield('description')

    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
            font-family: -apple-system, "Helvetica Neue", Arial, "PingFang SC", "lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
        }

        .wrap {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -100px;/*margin-bottom的负值等于footer高度*/
        }

        .push,footer {
            height: 100px;
            clear:both;
        }

        footer {
            text-align: center;
            line-height:100px;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        a:focus {
            color: black;
            text-decoration: none;
        }

        li.active > span {
            border-color: black;
            background-color: black;
        }

        .article-border {
            border-bottom: 1px dashed gray;
            margin: 10px 0px 10px 0px;
        }

        .article-summary {
            font-size: 16px;
            color: #2f2f2f;
            font-weight: normal;
            letter-spacing: 1px;
            line-height: 1.7;
        }

        .article {
        }

        .article-text {
            margin: 20px 0px 20px 0px;
            font-size: 16px;
            color: #2f2f2f;
            font-weight: normal;
            letter-spacing: 1px;
            line-height: 1.7;
        }
        </style>

        @yield('css')
</head>
<body>
    <div class="wrap">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="{!! route('welcome') !!}">Straw Dog</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{!! route('welcome') !!}">首页</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        @yield('main')

        <div class="push"><!-- push footer to the bottom of the viewport --></div>
    </div>

    <footer class="container">
        <span>
            &copy; Chris Ye. Since Sep 12th, 2015. Online <span id="time"></span> days.
        </span>
        <div style="display:none">
            <script type="text/javascript">
                var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cspan id='cnzz_stat_icon_1256925856'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256925856%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
            </script>
        </div>
    </footer>

    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        var start = 1441987200;
        var timenow = Date.parse(new Date())/1000;
        var day = (timenow - start)/(24*3600);
        $('#time').html(parseInt(day));
    </script>
    @yield('scripts')
</body>
</html>