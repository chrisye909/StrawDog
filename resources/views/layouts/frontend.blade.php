<!DOCTYPE html>
<html>
<head>
    <title>Straw Dog</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            font-size: 10px;
            height: 100%;
        }

        body {
            height: 100%;
            font-weight: 300;
            letter-spacing: 0.05rem;
        }

        #wrap {
            min-width: 120rem;
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -5rem;;/*margin-bottom的负值等于footer高度*/
        }

        .push,#footer {
            height: 5rem;
            clear:both;
        }

        #footer {
            text-align: center;
            font-size: 1.6rem;
        }

        #navigation {
            height: 18rem;
            padding: 4rem 3rem 4rem 3rem;
            border-bottom:1px dashed #adadae;
        }

        #navigation > a {
            font-weight: 400;
            font-size: 3.2rem;
            color: #4B4B4B;
        }

        #navigation > p {
            margin-top: 1rem;
            font-size: 1.8rem;
            font-style: italic;
            color: #ADADAE;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        a:focus {
            color: black;
            text-decoration: none;
        }

        .feed-list {
        width: 120rem;
        padding-top: 10rem;
        height: 100%;
        }

        .feed-item {
            width: 70rem;
            margin: 0 25rem 15rem 25rem;
        }

        .feed-title {
            font-size: 3rem;
            text-align: center;
        }

        .feed-title > a {
            color: black;
        }

        .feed-title > a:hover {
            color: #137ADE;
        }

        .feed-ext {
            font-size: 1.8rem;
            color: #ADADAE;
            text-align: center;
        }

        .feed-text {
            text-align: left;
            font-size: 1.6rem;
            line-height: 2.5rem;
            margin: 2rem 0 0 0;
        }

        .feed-more {
            float: right;
            font-size: 1.6rem;
            color: #ADADAE;
        }

        .feed-more:hover {
            font-weight: 400;
            color: #137ADE;
        }
        </style>
</head>
<body>
    <div id="wrap">
        <nav id="navigation" class="container-fluid">
            <a href="{{url('/')}}">Straw Dog</a>
            <p>keep it simple,keep it stupid</p>
        </nav>

        @yield('main')

        <div class="push"><!-- push footer to the bottom of the viewport --></div>
    </div>

    <footer id="footer" class="container-fluid">
        <span>
            &copy; Chris Ye. Since Sep 12th,2015. Online 310 days.
        </span>
    </footer>

    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>