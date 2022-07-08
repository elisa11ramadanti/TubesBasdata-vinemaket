<?php 

require 'functions.php';

    $getTransactionChecked = query("SELECT transaction.*,film.title,film.description,film.price,film.image FROM transaction LEFT JOIN film on transaction.id_film = film.id where checked = '1'");
?>

<style>
    body{
        padding: 0;
        margin: 0;
    }
    .title{
        margin-top: 10px;
    }
    .card{
        padding: 20px 10px;
        width: 400px;
        border: 2px dashed black;
        display: inline-block;
    }
    td{
        border-bottom: 1px solid #aaa;
        padding: 20px;
    }
</style>

<?php foreach ($getTransactionChecked as $value): ?>
    <?php  
        $query = "DELETE FROM `transaction` where id = '$value[id]'";
        mysqli_query($conn, $query);
    ?>
    <div class="card">
        <img src="<?= $value['image'] ?>" width="100">
        <h4>Order Confirmation</h4>
        <hr>
        <p style="font-size:16px">Pembelian Atas Nama: <?= $_GET['name'] ?></p>
        <p style="font-size:16px">No. Handphone:  <?= $_GET['phone'] ?></p>
        <hr>
        <table>
            <tr>
                <td>Title</td>
                <td><div class="title">: <?= $value['title'] ?></div></td>
            </tr>
            <tr>
                <td>Cinema</td>
                <td>: Cinepolis Malang</td>
            </tr>
            <tr>
                <td>City</td>
                <td>: Malang</td>
            </tr>
            <tr>
                <td>Studio</td>
                <td>: 1</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>: <?= date('d - m - Y') ?></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>: 20:00</td>
            </tr>
            <tr>
                <td>Ticket Price</td>
                <td>: <?= rupiah($value['quantity']*$value['price']) ?></td>
            </tr>
            <tr>
                <td>Adm Fee</td>
                <td>: Rp <?= rupiah($value['quantity']*1000) ?> (Rp 1000/Ticket)</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>: <?= rupiah($value['quantity']*1000+$value['quantity']*$value['price']) ?></td>
            </tr>
            <tr>
        </table>

    </div>
<?php endforeach ?>