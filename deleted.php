<?php

include_once("config.php");

//get id from url to delete that user 
$id = $_GET['id'];

//Delete user row from table based on given id 

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");

// after deleted redirect to Home , so that latest user list will be displayed
if (!$result) {
    echo "
    <script>
    alert('data gagal di hapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
<script>
alert('data berhasil di hapus');
document.location.href = 'index.php';
</script>
";
    exit;
}