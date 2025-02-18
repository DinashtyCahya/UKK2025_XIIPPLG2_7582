<?php
    $id = $_GET['id'];
        if(isset($_POST['submit'])) {
        $kategori = $_POST['category']; 
       $query = mysqli_query($koneksi, "UPDATE categories set category='$categories' WHERE category=$id");

        if($query) {
             echo '<script>alert("Tambah data berhasil.");</script>';
        }else{
            echo '<script>alert("Tambah data gagal.");</script>';
               }
        }
    $query = mysqli_query($koneksi, "SELECT*FROM categories where category=$id");
    $data = mysqli_fetch_array($query);
?>  

<div class="container-fluid">
    <h1 class="mt-4">categories</h1>
        <a href="?page=categories" class="btn btn-danger">kembali</a>
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
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
</div>