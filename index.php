<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slide Versione Html</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
<main role="main">
    <?php
    $spine = 10;

    $bollo1 = "img/falesia.png";
    $bollo2 = $bollo1;
    $bollo3 = $bollo1;
    $bollo4 = $bollo1;
    $bollo5 = $bollo1;
    $bollo6 = $bollo1;
    $bollo7 = $bollo1;
    $bollo8 = $bollo1;
    $bollo9 = $bollo1;
    $bollo10 = $bollo1;

    $birra1 = "Falesia - Bock - 7%";
    $birra2 = $birra1;
    $birra3 = $birra1;
    $birra4 = $birra1;
    $birra5 = $birra1;
    $birra6 = $birra1;
    $birra7 = $birra1;
    $birra8 = $birra1;
    $birra9 = $birra1;
    $birra10 = $birra1;

    $scheda1 = "Birra ambrata dai sentori di caramello, note di pane e mielate. Tendenzialmente dolce ma non stucchevole";
    $scheda2 = $scheda1;
    $scheda3 = $scheda1;
    $scheda4 = $scheda1;
    $scheda5 = $scheda1;
    $scheda6 = $scheda1;
    $scheda7 = $scheda1;
    $scheda8 = $scheda1;
    $scheda9 = $scheda1;
    $scheda10 = $scheda1;

    $caltezza = ($spine/2);
    $altezza = ceil($caltezza)+1;
    $peraltezza = 100/$altezza;
    $round = round($peraltezza, 2);
    ?>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
            <li data-target="#myCarousel" data-slide-to="5" class=""></li>
            <li data-target="#myCarousel" data-slide-to="6" class=""></li>
            <li data-target="#myCarousel" data-slide-to="7" class=""></li>
            <li data-target="#myCarousel" data-slide-to="8" class=""></li>
            <li data-target="#myCarousel" data-slide-to="9" class=""></li>
            <li data-target="#myCarousel" data-slide-to="10" class=""></li>
        </ol>
        <div class="carousel-inner">

            <?php
            $numschede = 1;
            while ($numschede <= $spine) { ;?>

                <?php if ($numschede == 1){;?>
            <div class="carousel-item active"><!-- Slide numero <?php echo $numschede;?> -->
                <?php }else{;?>
                    <div class="carousel-item"><!-- Slide numero <?php echo $numschede;?> -->
                <?php };?>
                <img class="first-slide" src="img/sfondotap.jpg" alt="First slide">

                <div class="container">
                    <div class="carousel-caption text-left taplist">
                        <div class="row col-12" style="height:<?php echo $round;?>%">
                            <h2 class="col-12 text-center text-uppercase border">TAP LIST</h2>
                        </div>
                        <?php
                        for ($numspine = 1; $numspine <= $spine; $numspine++) { ;?>
                            <?php
                            if ($numspine % 2 != 0) {;?>
                                <div class="taplist row" style="height:<?php echo $round;?>% ">
                            <?php };?>
                            <div class="col-6 border fittap">

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo $bollo1 ;?>" alt="<?php echo $birra1 ;?>" class="img-fluid" />
                                    </div>
                                    <div class="col-10">
                                        <?php echo $birra1 ;?>
                                    </div>
                                </div>

                            </div>
                            <?php
                            if (($numspine % 2 == 0) or ($numspine == $spine)) {;?>
                                </div><!-- crea le row ogni 2 spine <?php echo $numspine ;?> -->
                            <?php };?>
                        <?php } ;?>
                    </div><!-- carousel-caption text-left taplist -->
                </div><!-- container -->
            </div> <!-- Carousel-item active -->

            <!-- Inizio seconda slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="megabollo col-4">
                            <img src="" class="" alt="" title="" />
                        </div>
                        <div class="descrizione col-8">
                            <h3 class="nomebirra" > NOME BIRRA </h3>
                            <p class="descrizionebirra">Descrizione della birra piuttosto lunga e rompi palle, uffa che noia, voglio bere!</p>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- carousel-item -->
            <!-- Fine seconda slide -->
    <?php $numschede++; };?> <!-- Fine ciclo principale -->

            <!--
                        <div class="carousel-item">
                            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                            <div class="container">
                                <div class="row">
                                    <div class="megabollo col-6">
                                        <img src="<?php echo $bollo1 ?>" alt="<?php echo $birra1 ?>" title="<?php echo $birra1 ?>" />
                                    </div>
                                    <div class="col-6">
                                        <h2><?php echo $birra1 ?></h2>
                                        <p><?php echo $scheda1 ?></p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
            -->
            <!--
            <div class="carousel-item ">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h2>One more for good measure.</h2>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
            -->
        </div> <!-- carousel inner -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- Fine Slideshow -->

</main>

<script src="js/jquery-3.2.1.min.js"></script>
<!-- JS for Slider -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- JS for squeezing text in your taplist
<script src="js/jquery.fittext.js"></script>
<script type="text/javascript">
    $(".fittap").fitText(1.1, { minFontSize: '7vh', maxFontSize: '20vh' });
</script>
 End of squeezing JS -->
</body>

</html>