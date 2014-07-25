<!doctype php>
<php class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Personal Portfolio of Duane K. Anderson</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
    </head>
    <body class="bio">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="bg-bleed-wrap">
            <header class="main" role="navigation">
                <div class="container">
                    <a class="branding" href="#"><img class="logo" src="img/logo2.png" alt="DKanderson Designs"></a>
                    <div class="mob-trigger"></div>
                    <nav class="main">
                        <ul class="clearfix">
                            <li class="home"><a href="index.php">home</a></li>
                            <li class="bio"><a href="bio.php">bio</a></li>
                            <li class="work"><a href="work.php">work</a></li>
                            <li class="blog"><a href="blog.php">blog</a></li>
                            <li class="contact"><a href="contract.php">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <?php if($body_class == 'home'){ ?>
            <div id="welcome">
                <div class="container">
                    <h1>Designing and coding for an ever expanding web of wonders.</h1>
                    <p>...and loving every second</p>
                </div>
            </div>
            <?php } ?>
        </div>