<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <div id="fh5co-aside" style="background-image: url(/images/image_1.jpg)">
        <div class="overlay"></div>
        <nav role="navigation">
            <ul>
                <li><a href="/"><i class="icon-home"></i></a></li>
            </ul>
        </nav>
        <div class="featured">
            <span>BLOG</span>
            <h2>Franary</h2>
        </div>
    </div>
    <div id="fh5co-main-content">
        <div class="fh5co-post">
            @if(!empty($hot))
                @foreach($hot as $val)
                    <div class="fh5co-entry padding">
                        <img  src="/images/project-{{@rand(0,10)}}.jpg" alt="图片未加载" >
                        <div>
                            <span class="fh5co-post-date">{{$val->posts->created_at}}</span>
                            <h2><a href="/posts/{{$val->posts->id}}">{{$val->posts->title}}</a></h2>
                            <p>{{$val->posts->subhard}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
            @foreach($posts as $val)
            <div class="fh5co-entry padding">
                <img  src="/images/project-{{@rand(0,10)}}.jpg" alt="图片未加载" >
                <div>
                    <span class="fh5co-post-date">{{$val->created_at}}</span>
                    <h2><a href="/posts/{{$val->id}}">{{$val->title}}</a></h2>
                    <p>{{$val->subhard}}</p>
                </div>
            </div>
            @endforeach
            <div class=" col-lg-12">
                @include('layouts.default', ['paginator' => $posts])
            </div>
            <footer>
                <div>
                    <p>&copy; 2017 BLOG BY FRNARY</p>
                </div>
            </footer>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="/js/main.js"></script>

</body>
</html>