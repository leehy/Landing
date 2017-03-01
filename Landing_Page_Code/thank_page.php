<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="Refresh" content="3;URL=http://www.oria.io/index.php"> 
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

        <!-- Theme JS to execute when needed -->
        <script type="text/javascript" src="perso.js"></script>
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <?php include_once("analyticstracking.php") ?>
        <!-- Unique Page -->
        <section class="thank_page_slider">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Oria</h1>
                            <p class="intro-text">Thank you for your support !
                                <br> Your email adress has been added to our newsletter </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Google Analytics -->
        <script type="text/javascript" >

            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-92674436-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>