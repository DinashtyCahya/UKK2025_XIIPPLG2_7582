<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM categories WHERE category='$id'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>