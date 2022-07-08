<?php 

require 'functions.php';

$genreFilm = ["","Now Playing","Coming Soon","Movies","Kids","Anime","Fantasy","Action","Romance"];

if($_GET):
    $filmSearch = query("SELECT * FROM film where id = '$_GET[id]' ");
    $filmSearch = $filmSearch ? $filmSearch[0] : "";

    $anotherFilm = query("SELECT * FROM film where genre = $filmSearch[genre] and id != $_GET[id]");

else:
    header('Location: ');
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Vinemaket-</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">

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
    <div class="top-header-area bg-dark" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="admin/index.php">
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
                                <li><a href="admin/index.php?genre=1">Now Playing</a></li>
                                <li><a href="admin/index.php?genre=2">Coming Soon</a></li>
                                <li><a href="../reviuw.php">Review Movie</a></li>
                                <li><a href="../news.php">News</a></li>
                                <li><a href="../logout.php">Logout</a></li>
                                <li>
                                    <div class="header-icons">
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        <a href="cart.php">Keranjang</a>
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

    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="single-latest-news text-center bg-transparent shadow-none">
                        <a href="detail.php?id=<?= $filmSearch['id'] ?>">
                            <img src="<?= $filmSearch['image'] ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 mt-5">
                    <h3><span class="orange-text">Movie</span> <?= $filmSearch['title'] ?></h3>
                    <a href="cart.php?id=<?= $filmSearch['id'] ?>" class="btn btn-danger text-white p-3 px-5 my-5" style="border-radius:30px">Tambah Ke keranjang</a><br>
                    Genre : <?= $genreFilm[$filmSearch['genre']] ?>
                   
                 </hr><hr>Cinema:
                    <?php
                     include 'koneksi.php';
                     $data = mysqli_query($mysqli, "SELECT * FROM cinema inner join film on(cinema.id_film = film.id)");
                     while ($pilih = mysqli_fetch_array($data)) {
                         echo "<option value='" . $pilih['id_film'] . "'>" . $pilih['nama_cinema'] . "</option>";
                     }
                    ?>
                   </hr><hr>
                    Description : <?= $filmSearch['description'] ?>
                  

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 mb-4">
                    <h5>Similar to Movie "<?= $filmSearch['title'] ?>"</h5>
                </div>
                <?php foreach ($anotherFilm as $key => $value): ?>
                    <div class="col-sm-2">
                        <div class="single-latest-news text-center">
                            <a href="detail.php?id=<?= $value['id'] ?>">
                                <img src="<?= $value['image'] ?>" alt="">
                            </a>
                            <div class="news-text-box p-1 text-dark">
                                <p><a href="single-news.html" class="text-dark"><?= $value['title'] ?></a></p>
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
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>
</html>