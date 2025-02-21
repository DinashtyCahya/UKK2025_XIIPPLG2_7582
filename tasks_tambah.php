<?php
if (isset($_POST['category_id'])) {

    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
   

    $query = mysqli_query($koneksi, "INSERT INTO tasks (category_id, task, priority) 
    values ('$category_id','$task', '$priority')");
    if ($query) {       
        echo '<script>alert("Tambah data berhasil")
        location.href="?page=tasks"
        </script>';
    } else {
        echo '<script>alert("Tambah data Gagal!")</script>';
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">To do List</h1>
    <ol class="breadcrumb mb-4">

    </ol>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>Task</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="task"></td>
            </tr>
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td>
                                <select name="category_id" class="form-control">
                                    <?php
                                        $category_id = mysqli_query($koneksi, "SELECT*FROM categories");
                                        while ($categories = mysqli_fetch_array($category_id)) {
                                    ?>
                                        <option value="<?php echo $categories['category']; ?>"><?php echo $categories['category']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </td>
            </tr>
            <tr>
                <td>Priority</td>
                <td>:</td>
                <td>
                    <select name="priority" class="form-control">
                        <option value="wajib">Wajib</option>
                        <option value="tidak wajib">Tidak Wajib</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    <button type="submit" class="btn btn-outline-danger">Reset</button>
                    <a href="?page=tasks" class="btn btn-outline-danger">kembali</a>
                </td>
            </tr>
        </table>
    </form>
</div>

