<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga',jumlah = '$jumlah' where id = $id");
    if (!$result) {
        echo "
        <script>
        alert('data gagal di update');
        document.location.href = 'index.php';
        </script>
        ";
        exit;
    } else {
        echo "
        <script>
        alert('data berhasil di update');
        document.location.href = 'index.php';
        </script>
        ";
        exit;
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produk where id = $id");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_produk = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br><br>

    <form name="update_user" method="post" action="update.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama_produk" value=<?= $nama_produk; ?>></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?= $keterangan; ?>></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value=<?= $harga; ?>></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?= $jumlah; ?>></td>
            </tr>
            <tr>

                <td><input type="hidden" name="id" value=<?= $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</body>

</html>