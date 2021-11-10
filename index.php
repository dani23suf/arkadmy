<?php

include_once("config.php");

// fetch all users  data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");


?>
<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="create.php">Tambah Produk</a><br><br>
    <table width="80%" border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

        <?php while ($user_data = mysqli_fetch_array($result)) : ?>
        <tr>
            <td> <?= $user_data['nama_produk'] ?></td>
            <td> <?= $user_data['keterangan'] ?> </td>
            <td> <?= $user_data['harga'] ?> </td>
            <td> <?= $user_data['jumlah'] ?> </td>
            <td><a href='update.php?id=<?= $user_data['id'] ?>'>Edit</a> | <a
                    href='deleted.php?id=<?= $user_data['id'] ?>' onclick="return confirm('Yakin Hapus?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>


    </table>

</body>

</html>