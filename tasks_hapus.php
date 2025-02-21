<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tasks WHERE category_id=$id");
if($query) {
    echo '<script>alert("Hapus Data Berhasil"); location.href="?page=tasks"</script>';
}else{
    echo '<script>alert("Hapus Data Gagal")</script>';
}
