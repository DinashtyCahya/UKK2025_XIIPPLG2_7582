<?php

$id = $_GET['id'];

    if(isset($_POST['category'])) {
        $category= $_POST['category'];
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];

        $query = mysqli_query($koneksi, "UPDATE categories set category='$category', id='$id', user_id='$user_id' WHERE id_categories=$id");

        if($query) {
        echo '<script>alert("Tambah Data Berhasil")</script>';
        }else{
        echo '<script>alert("Tambah Data Gagal")</script>';
        }
    }

    $query = mysqli_query($koneksi, "SELECT*FROM categories WHERE user_id=$id ");
    $data = mysqli_fetch_array($query)

?>

<div class="container-fluid">
    <h1 class="mt-4">categories</h1>
            <form method="post">
                <table class="table table-bordered">
                    <tr>
                        <td width="200">id</td>
                        <td width="1">:</td>
                        <td><input class="form-control" type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Categories</td>
                        <td>:</td>
                        <td>
                            <textarea name="category" rows="5" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" step="0" name="user_id"></td>
                    </tr>
                </table>
                <div class="row mb-3">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-outline-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            <a href="?page=categories" class="btn btn-outline-danger">Kembali</a>
                        </div>
                    </div>  
            </form>
</div>