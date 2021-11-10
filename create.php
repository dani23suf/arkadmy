<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
</head>

<body>
    <a href="index.php"> Go To Home</a><br><br>

    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td><input type="text" name="ket"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="add"></td>
            </tr>
        </table>

    </form>
    <?php

    if (isset($_POST['submit'])) {
        $nama_produk = $_POST['nama_produk'];
        $ket = $_POST['ket'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama_produk','$ket','$harga','$jumlah')");
        // show massage when user added
        if (!$result) {

            echo "
            <script>
            alert('data gagal di buat');
            document.location.href = 'index.php';
            </script>
            ";
        } else {

            echo "
            <script>
            alert('data berhasil di buat');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }


    ?>

</body>

</html>