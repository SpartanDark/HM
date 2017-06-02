<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HM | Expertos en Maquinaria &amp; Equipos</title>

    <link href="img/favicon.ico" rel="icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/slit-slider.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Stylesheet Propio -->
    <link rel="stylesheet" href="css/propio.css">

    <!-- Modernizer Script para exploradores antiguos -->
    <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="body">
    <?php
        include "content/navbar.php";
    ?>
    <main class="site-content">
        <div id="home-slider">
            <?php
                include "content/slider.php";
            ?>
        </div>
        <section id="about">
            <?php
                include "content/about.php";
            ?>
        </section>
        <section id="service">
            <?php
                include "content/portfolio.php";
            ?>
        </section>
        <div id="google-map">
            <div id="map-canvas" class="wow animated fadeInUp"></div>
        </div>
    </main>

    <div id="modales">
        <?php
            include "content/modales.php";
        ?>
    </div>

    <footer id="footer">
        <?php
            include "content/footer.php";
        ?>
    </footer>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABFr9aYwSKDCuiwFRp4umHTiwmunFXZjE&callback=initMap" async defer></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/propio.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100412284-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>
