<?php

require '../functions.php';

$genreFilm = ["", "Now Playing", "Coming Soon", "Movies", "Kids", "Anime", "Fantasy", "Action", "Romance"];

$film10 = query("SELECT * FROM film order by description desc limit 10");
$filmAll = query("SELECT * FROM film order by genre asc");

if ($_GET) {
    $film10 = query("SELECT * FROM film where genre = $_GET[genre] order by description desc limit 10");
    $filmAll = query("SELECT * FROM film where genre = $_GET[genre] order by genre asc");
}

if (!$filmAll) {
    $filmAll = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border-style: solid;
            border-color: #808080;
            font-family: 'Arial black';
            text-align: center;
        }

    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Vinemaket-</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="../assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.php">
                                <h3 class="text-white">
                                    Vinemaket
                                    <p class="text-white">Movie Cinema Ticket</p>
                                </h3>
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li><a href="index.php?genre=1">Now Playing</a></li>
                                <li><a href="index.php?genre=2">Coming Soon</a></li>
                                <li><a href="../reviuw.php">Review Movie</a></li>
                                <li><a href="../news.php">News</a></li>
                                <li><a href="../logout.php">Logout</a></li>

                                <li>
                                    <div class="header-icons">
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        <a href="../cart.php">Keranjang</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For Movie:</h3>
                            <form action="search.php" method="get">
                                <input type="text" placeholder="Keywords" name="title">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- logo carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/ketujuh.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/kedelapan.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/kelima.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/ketiga.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/kesembilan.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/keten.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/keenam.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/kedua.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/kesatu.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/empat.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end logo carousel -->


    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

      
            <div class="row">
                <?php $genre = 0 ?>
                <div class="col-sm-12 bg-dark py-2 my-4">
                    <h4 class="text-white"><?= $filmAll ? $genreFilm[$filmAll[0]['genre']] : "Genre Kosong" ?></h4>
                </div>
                <?php foreach ($filmAll as $key => $value) : ?>
                    <?php
                    if ($genre == 0) :
                        $genre = $value['genre'];
                    endif;
                    ?>

                    <?php if ($genre != $value['genre']) : ?>
                        <div class="col-sm-12 bg-dark py-2 my-4">
                            <h4 class="text-white"><?= $genreFilm[$value['genre']] ?></h4>
                        </div>
                        <?php $genre = 0 ?>
                    <?php endif; ?>

                    <div class="col-sm-2">
                        <div class="single-latest-news text-center">
                            <a href="../detail.php?id=<?= $value['id'] ?>">
                                <img src="<?= $value['image'] ?>" alt="">
                            </a>
                            <div class="news-text-box p-1 text-dark">
                                <p><a href="#" class="text-dark"><?= $value['title'] ?></a></p>
                                <p><a href="#" class="text-dark">Rp <?= $value['price'] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- end latest news -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; <?= date("Y") ?>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="../assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="../assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="../assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="../assets/js/main.js"></script>

</body>

</html>