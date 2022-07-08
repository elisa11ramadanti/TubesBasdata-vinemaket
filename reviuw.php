<!DOCTYPE html>
<html>

<head>
    <style>
        .container h1 {
            text-align: left;
            color: black;
            margin-bottom: 10px;
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;

        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Vinemaket-Reviuw</title>

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
    <div class="top-header-area" id="sticker">
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
                                <li><a href="reviuw.php">Review Movie</a></li>
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

                <div class="col-sm-12 bg-dark py-2 my-4">
                    <h4 class="text-white"></h4>
                </div>
            </div>
            <h1>Masukkan Review Movie Anda:</h1>

            <form method="post" action="hasilRev.php">
                <table>
                    <tr>
                        <td>User</td>
                        <td>:</td>
                        <td> <select name='nama'>
                                <?php
                                include 'koneksi.php';
                                $dat = mysqli_query($mysqli, "SELECT username FROM register");
                                while ($pili = mysqli_fetch_array($dat)) {
                                    echo "<option value='" . $pili['id'] . "'>" . $pili['username'] . "</option>";
                                }
                                ?>

                            </select></td>
                    </tr>
                    <tr>
                        <td>Judul Film</td>
                        <td>:</td>
                        <td> <select name='title'>
                                <?php
                                include 'koneksi.php';
                                $data = mysqli_query($mysqli, "SELECT * FROM film");
                                while ($pilih = mysqli_fetch_array($data)) {
                                    echo "<option value='" . $pilih['id'] . "'>" . $pilih['title'] . "</option>";
                                }
                                ?>

                            </select></td>
                    </tr>
                    <tr>
                        <td>Penilaian</td>
                        <td>:</td>
                        <td><textarea name="reviuw" placeholder="Masukkan Penilaian" cols="40" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Add Review" name="proses"></td>
                    </tr>
                </table>
            </form>


            <div class="row">

                <div class="col-sm-12 bg-dark py-2 my-4">
                    <h4 class="text-white"> Review </h4>
                </div>
            </div>
           
                <?php
                include 'koneksi.php';
                $rating = mysqli_query($mysqli, "SELECT count(id) as banyak FROM reviuw")->fetch_array();
                ?>
                <div class="count-box" style="margin: 2%">
                    <h1> Jumlah Review : <?php echo $rating['banyak']; ?> </h1>

                </div>

                <table border="2" style="width:100%; text-align:center">
                    <tr>

                        <td>Judul Film</td>
                        <td>Penilaian</td>

                    </tr>
                    <?php
                    include 'koneksi.php';
                    $nilai = mysqli_query($mysqli, "SELECT * FROM reviuw inner join film on(reviuw.id_film = film.id)");
                    while ($resut = mysqli_fetch_array($nilai)) {
                        echo "<tr>";

                        echo "<td>" . $resut['title'] . "</td>";
                        echo "<td>" . $resut['reviuw_film'] . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </table>

            </div>

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