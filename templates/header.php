<!doctype html>
<php class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Personal Portfolio of Duane K. Anderson</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="img/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="touch-icon.png">
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
    </head>
    <body class="<?php echo $body_class; ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="bg-bleed-wrap <?php if($body_class == 'blog'){ echo 'blog-header'; } ?>">
            <header class="main" role="navigation">
                <div class="container">
                    <a class="branding" href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 90 612 612"><path class="blob" stroke-miterlimit="10" d="M306.078 105.438c-160.142 0-290.428 130.286-290.428 290.4 c0 160.1 130.2 290.3 290.3 290.428c160.085 0.2 290.427-130.286 290.427-290.428 c0.155-159.933-130.003-290.428-290.399-290.294L306.078 105.438z"/><path class="ring" d="M306.078 702c-168.729 0-306-137.271-306-306c0-168.731 137.275-306 306-306c168.734 0 305.8 137.3 305.8 306 c0.156 168.828-137.166 305.866-305.972 306H306.078z M306.078 105.438c-160.142 0-290.428 130.286-290.428 290.4 c0 160.1 130.2 290.3 290.3 290.428c160.085 0.2 290.427-130.286 290.427-290.428 c0.155-159.933-130.003-290.428-290.399-290.294L306.078 105.438z"/><path class="dee" d="M392.651 478.706c-4.553 13.965-11.532 25.888-20.944 35.751c-9.412 9.867-21.478 17.457-36.21 22.7 c-14.729 5.279-32.556 7.973-53.507 7.973c-20.039 0-37.047-2.659-51-7.973c-13.965-5.311-25.501-12.91-34.608-22.773 c-9.107-9.86-15.937-21.776-20.49-35.752c-4.553-13.952-7.135-29.746-7.733-47.355c0.598-17.604 3.18-33.547 7.733-47.82 c4.553-14.264 11.383-26.482 20.49-36.661c9.11-10.169 20.643-18.058 34.608-23.68c13.953-5.619 30.961-8.425 51-8.425 c13.667 0 25.9 1.6 36.1 4.781c10.465 3.1 20.2 6.9 29 11.153l-2.205-127.502h55.479c0 17.4 0 34.9 0 52.9 c0 18.1 0 35.2 0 51.913c0 16.8 0 32.4 0 47.356c0 14.6 0 27.4 0 38.713c0 11.2 0 20.2 0 26.9 c0 6.5 0 10.3 0 10.589c-0.576 17.42-3.152 33.301-7.824 47.157H392.651z M343.474 385.1 c-3.046-10.474-7.362-18.971-12.975-25.502c-5.628-6.528-12.387-11.225-20.272-14.118c-7.893-2.878-16.544-4.167-25.959-3.868 c-9.409-0.299-18.064 0.912-25.957 3.734c-7.892 2.738-14.647 7.366-20.266 13.894c-5.622 6.531-9.938 15.108-12.975 25.7 c-3.04 10.63-4.554 23.533-4.554 38.707v15.938c0 15.3 1.6 28 4.7 38.252c3.034 10.3 7.5 18.4 13.1 24.6 c5.619 6.2 12.5 10.3 20.2 12.772c7.892 2.5 16.5 3.4 25.9 3.18c9.409 0.3 18.064-0.832 25.959-3.414 c7.886-2.578 14.645-6.907 20.269-12.98c5.616-6.067 9.933-14.196 12.976-24.362c3.036-10.169 4.553-22.838 4.553-38.024v-15.938 c-0.093-15.232-1.682-28.002-4.796-38.585h0.149V385.127z"/></svg>
                    </a>
                    <a href="" id="mob-trigger">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </a>
                    <nav class="main">
                        <ul class="clearfix">
                            <li class="home"><a href="index.php">home</a></li>
                            <li class="bio"><a href="bio.php">bio</a></li>
                            <li class="work"><a href="work.php">work</a></li>
                            <li class="blog"><a href="blog.php">blog</a></li>
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