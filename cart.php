<?php 

require 'functions.php';

if($_GET):
    if(isset($_GET['id']) && !isset($_GET['checked']) && !isset($_GET['delete']) && !isset($_GET['change'])):
        $getTransaction = query("SELECT * FROM transaction where id_film = '$_GET[id]' ");
        if($getTransaction){
            $quantityTransaction = $getTransaction[0]['quantity']+1;
            $query = "UPDATE `transaction` SET `quantity`='$quantityTransaction' where id_film = '$_GET[id]'";
        }else{
            $query = "INSERT INTO `transaction`(`id_film`, `quantity`, `checked`) VALUES ('$_GET[id]','1','1')";
        }
        mysqli_query($conn, $query);
    elseif(isset($_GET['id']) && isset($_GET['checked'])):
        $checked = str_replace('1000', '', $_GET['checked']);
        $query = "UPDATE `transaction` SET `checked`='$checked' where id_film = '$_GET[id]'";
        mysqli_query($conn, $query);
    elseif(isset($_GET['id']) && isset($_GET['delete'])):
        $query = "DELETE FROM `transaction` where id_film = '$_GET[id]'";
        mysqli_query($conn, $query);
    elseif(isset($_GET['id']) && isset($_GET['change'])):
        $query = "UPDATE `transaction` SET `quantity`='$_GET[quantity]' where id_film = '$_GET[id]'";
        mysqli_query($conn, $query);
    endif;
    header('Location: cart.php');
else:
    $getTransaction = query("SELECT transaction.*,film.title,film.description,film.price FROM transaction LEFT JOIN film on transaction.id_film = film.id");
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
                                Vinemarket
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
                                <li><a href="../reviuw.php">Reviuw Movie</a></li>
                                <li><a href="admin/logout.php">Logout</a></li>

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
        <div class="container mt-3">
            <h3>Keranjang</h3>
            <div class="row">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th>Nama Film</th>
                            <th>Jumlah Tiket</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($getTransaction) == 0): ?>
                            <tr>
                                <td colspan="5" align="center">Keranjang anda kosong</td>
                            </tr>
                        <?php endif ?>
                        <?php 
                            $total = 0;
                            foreach ($getTransaction as $key => $value): 
                                $total += $value['checked'] == '1' ? $value['price']*$value['quantity'] : 0;
                        ?>
                            <tr>
                                <td>
                                    <form action="cart.php" method="get">
                                        <input type="hidden" name="id" value="<?= $value['id_film'] ?> ">
                                        <input type="hidden" name="checked" value="1000<?= $value['checked'] == '1' ? '0' : '1' ?>">
                                        <input type="checkbox" onclick="document.getElementById('checked_<?= $value['id_film'] ?>').click()" <?= $value['checked'] == '1' ? 'checked' : '' ?>>
                                        <button class="d-none" type="submit" id="checked_<?= $value['id_film'] ?>"></button>
                                    </form>
                                </td>
                                <td><?= $value['title'] ?></td>
                                <td>
                                    <form action="cart.php" method="get" class="d-flex">
                                        <input type="hidden" name="id" value="<?= $value['id_film'] ?> ">
                                        <input type="number" min="1" name="quantity" class="form-control mr-2 form-control-sm w-25" value="<?= $value['quantity'] ?>">
                                        <input type="hidden" name="change" value="1">
                                        <button class="btn btn-info btn-sm" style="height: 27px;" type="submit">
                                            Ubah Jumlah
                                        </button>
                                    </form>
                                </td>
                                <td>Rp <?= $value['price'] ?></td>
                                <td class="d-flex justify-content-between">
                                    <p>Rp <?= $value['price']*$value['quantity'] ?></p>
                                    <form action="cart.php" method="get">
                                        <input type="hidden" name="id" value="<?= $value['id_film'] ?> ">
                                        <input type="hidden" name="delete" value="1">
                                        <button class="btn btn-danger" type="submit">
                                            Hapus
                                        </button>
                                    </form>   
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-right" colspan="4" align="right">Total : </th>
                            <th>Rp <?= $total ?></th>
                        </tr>
                        <tr>
                            <td colspan="4" align="right">
                            <td>
                                <button <?= $total == 0 ? "disabled" : "" ?> type="button" class="btn btn-dark text-white" data-target="#modalCheckout" data-toggle="modal">Checkout</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalCheckout">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="bill.php" method="get">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">No. Handphone</label>
                            <input type="number" class="form-control w-100" name="phone" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary text-white">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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