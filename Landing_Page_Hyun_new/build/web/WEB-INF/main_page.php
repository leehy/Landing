<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Oria - Landing Page</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        <link href="css/grayscale.min.css" rel="stylesheet">
        <link href="css/perso.css" rel="stylesheet">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">

        <!-- Mailchimp -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="color-button" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img id="logo-top" src="img/Oria.png"> 
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About Oria</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#video">Watch Video</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#news">Newsletter</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Oria</h1>
                            <p class="intro-text">The connected ring as a MIDI Controller
                                <br>New musical possibilities at your fingertips</p>
                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-md-6">
                    <img id="img-ring" src="img/white-ring.jpg">
                </div>
                <div class="col-md-6">
                    <div class="padding-top-20">
                        <h1>About Oria</h1>
                        <p>To bring you a brand new user experience, Oria has built a sophisticated system that enables you to compose your music 
                            with effects without using any features on your synthesizer. Everything is made so that using our connected ring and a MIDI software, you are freely able to add effects on your composition by moving your hand. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section id="video" class="content-section text-center">
            <div id="img-video">
                <div class="container height-full">
                    <div class="row text-center">
                        <div class="col-md-8 col-md-offset-2 padding-top-10">
                            <!--<a class="various fancybox.iframe" href="https://www.youtube.com/embed/z0uAjZObKLs?autoplay=1">
                                <img id="logo-play" src="img/play-button.png"> 
                                <h3>Play Video</h3> 
                            </a> -->
                            <a class="various fancybox.iframe" href=" https://www.youtube.com/embed/V_4Q2t1LNzY?autoplay=1">
                                <img id="logo-play" src="img/play-button.png"> 
                                <h3>Play Video</h3> 
                            </a> 
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <!-- Information Section -->
        <section id="info" class="content-section text-center">
            <h1> Our Kickstarter campaign is coming soon, follow us and let's make this project a reality ! </h1>
        </section>

        <!-- Newsletter Section -->
        <section id="news" class="container news content-section text-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>Subscribe to our newsletter !</h1>
                    <section class="newsletter">
                        <div>
                            <!-- Begin MailChimp Signup Form -->
                            <!--<form action="//oria.us13.list-manage.com/subscribe/post?u=61f193b972babcece9289168f&amp;id=57b3ea8e2d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <input class="newsletter-email required email" id="mce-EMAIL"  type="email" value="" name="EMAIL" placeholder="Your Email">
                                <button type="submit" name="subscribe" id="button-newsletter mc-embedded-subscribe" class="bt button" value="Subscribe" >SUBSCRIBE</button> <!--onclick="subscribe_successful();-->
                            <!--    <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    
                            </form> -->

                            <form method="post" action="main_page.php" class="clearfix" style="max-width: 300px;">
                                <div class="col_full">
                                    <input type="text" id="Name" name="Name" placeholder="Name" class="form-control not-dark" />
                                </div>
                                <div class="col_full">
                                    <input type="email" id="Email" name="Email" placeholder="Email address" class="form-control not-dark" />
                                </div>
                                <form action="test-captcha.php" method="POST">

                                    <div class="col_full nobottommargin">
                                        <button type="submit" name="valider" class="t400 capitalize button button-border button-light button-circle nomargin" value="submit">Keep me in touch !</button>
                                    </div>
                                </form>

                                <?php
                                if (isset($_POST['valider'])) {
                                    //On récupère les valeurs entrées par l'utilisateur :
                                    $Name = $_POST['Name'];
                                    $Email = $_POST['Email'];
                                    //On construit la date d'aujourd'hui
                                    //strictement comme sql la construit
                                    $today = date("y-m-d");
                                    //On se connecte
                                    $base = mysqli_connect('localhost', 'root', '', 'Oria');
                                    //On prépare la commande sql d'insertion
                                    $sql = 'INSERT INTO users01 VALUES("' . $Name . '","' . $Email . '","' . $today . '")';

                                    /* on lance la commande (mysql_query) et au cas où, 
                                      on rédige un petit message d'erreur si la requête ne passe pas (or die)
                                      (Message qui intègrera les causes d'erreur sql) */
                                    mysqli_query($base, $sql);

                                    // on ferme la connexion
                                    mysqli_close($base);
                                }
                                ?>
                                </section>
                        </div>
                        <div class="col-md-2"></div>
                </div>
        </section>

        <!-- Mailchimp Script -->
        <!-- <script type='text/javascript' src="js/mailchimp.js"></script> -->
        <!--<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        -->
        <script type='text/javascript' src='js/mailchimp.js'></script>
        <!-- Begin MailChimp Signup Form -->
        <script type='text/javascript'>
            (function ($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);</script>

        <!-- Script jQuery -->
        <!-- Grab Google CDN's jQuery, fall back to local if offline -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- FancyBox -->
        <script src="js/fancybox/jquery.fancybox.js"></script>
        <script src="js/fancybox/jquery.fancybox-buttons.js"></script>
        <script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
        <script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- FancyBox Modal Window -->
        <script type="text/javascript">
            $(document).ready(function () {
                $(".various").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '70%',
                    height: '70%',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'elastic',
                    closeEffect: 'none'
                });
            });
        </script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
        <script type="text/javascript" src="js/grayscale.min.js"></script> 
        <script type="text/javascript" src="js/grayscale.js"></script> 

        <!-- Personal Theme Javascript -->
        <script type="text/javascript" src="js/perso.js"></script>

        <!-- Subscribe Script -->
        <script type="text/javascript">
            $("#template-contactform").validate({
            submitHandler: function (form) {
            $('.form-process').fadeIn();
                    $(form).ajaxSubmit({
            target: '#contact-form-result',
                    success: function () {
                    $('.form-process').fadeOut();
                            $(form).find('.sm-form-control').val('');
                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                            SEMICOLON.widget.notifications($('#contact-form-result'));
                    }
            });
            });
        </script> 
    </body>

</html>
